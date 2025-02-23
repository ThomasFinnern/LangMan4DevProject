<?php
/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

//// Basic connection settings
//// $databaseHost     = '<host_address>';
//$databaseHost     = 'localhost';
//// $databaseUsername = '<user_name>';
//$databaseUsername = 'root';
//// $databasePassword = '******';
//$databasePassword = '';
//// $databaseName     = 'rolodex';
//$databaseName     = 'joomla4x';
//
//// Connect to the database
//$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
//

// Include the database connection file
require_once ("configuration.php");

$cfg = new JConfig();
$mysqli = mysqli_connect($cfg->host, $cfg->user, $cfg->password, $cfg->db);



//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//
//$database = 'db';
//$user = 'user';
//$pass = 'pass';
//$host = 'localhost';
//$dir = dirname(__FILE__) . '/dump.sql';
//
//echo "<h3>Backing up database to `<code>{$dir}</code>`</h3>";
//
//exec("mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$dir} 2>&1", $output);
//
//var_dump($output);

// system('mysql --user=USER --password=PASSWORD DATABASE< FOLDER/.sql');


// Call the backup_tables for export the database
backup_tables('hostname','UserName','pass','databses_name');

function backup_tables($host,$user,$pass,$name,$tables = '*'){
    $link = mysqli_connect($host,$user,$pass);
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_select_db($link,$name);
    //get all of the tables
    if($tables == '*'){
        $tables = array();
        $result = mysqli_query($link,'SHOW TABLES');
        while($row = mysqli_fetch_row($result))
        {
            $tables[] = $row[0];
        }
    }else{
        $tables = is_array($tables) ? $tables : explode(',',$tables);
    }

    $return = '';
    foreach($tables as $table)
    {
        $result = mysqli_query($link,'SELECT * FROM '.$table);
        $num_fields = mysqli_num_fields($result);
        $row_query = mysqli_query($link,'SHOW CREATE TABLE '.$table);
        $row2 = mysqli_fetch_row($row_query);
        $return.= "\n\n".$row2[1].";\n\n";

        for ($i = 0; $i < $num_fields; $i++)
        {
            while($row = mysqli_fetch_row($result))
            {
                $return.= 'INSERT INTO '.$table.' VALUES(';
                for($j=0; $j < $num_fields; $j++)
                {
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = str_replace("\n", '\n', $row[$j]);
                    if (isset($row[$j])) {
                        $return.= '"'.$row[$j].'"' ;
                    } else {
                        $return.= '""';
                    }
                    if ($j < ($num_fields-1)) { $return.= ','; }
                }
                $return.= ");\n";
            }
        }

        $return.="\n\n\n";
    }

    //save file
    $handle = fopen('backup-'.date("d_m_Y__h_i_s_A").'-'.(md5(implode(',',$tables))).'.sql','w+');
    fwrite($handle,$return);
    fclose($handle);
}




