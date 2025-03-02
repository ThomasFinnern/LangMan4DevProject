<?php
/**
GET - Retrieve all articles from the "Uncategorized" Category

https://manual.joomla.org/docs/general-concepts/webservices/

*/




// book dev extensions 4 j5: carlos camara

if ( ! extension_loaded('curl')) {

    exit (-987);
}

print '=== Started ============================' . "\n";

// $curl  = curl_init();

//    $url = '(<span lang="en" dir="ltr" class="mw-content-ltr">http://127.0.0.1/joomla5</span>)/api/index.php/v1/lang4dev';
//    $url = 'http://127.0.0.1/joomla5x/api/index.php/v1/lang4dev';
//$url = 'http://127.0.0.1/joomla5x/lang4dev/1';
//$url = 'http://127.0.0.1/joomla5x/api/index.php/v1/content/articles';

// test write to j5x
$url_root = 'http://127.0.0.1/joomla5x/api/index.php/v1'; // 404 Not Found: The requested URL was not found on this server
// $url = 'https://127.0.0.1/joomla5x/api/index.php/v1'; // Failed to connect to 127.0.0.1 port 443 after 2021 ms: Couldn't connect to server
echo ('URL root:   ' . $url_root . "\n");

// Before passing the HTTP METHOD to CURL
$curl = curl_init($url_root);


$token = "c2hhMjU2Ojc3OTo3MDIxODdiNTE0N2NjMDY0ZjVlNGY3OTk5NmNiOWZhZTcxYWRkNWVmOWJjZDA0YjYxZTVjNWEwMmEwZTVkZmY5";
          
//    curl_setopt($curl, CURLOPT_HEADER, false);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($curl, CURLOPT_POST, true);
//    curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);

$categoryId = 2; // Joomla's default "Uncategorized" Category


// HTTP request headers
$headers = [
    'Accept: application/vnd.api+json',
    'Content-Type: application/json',
    sprintf('X-Joomla-Token: %s', trim($token)),
];

// Add component options
//$url_option =  sprintf('%s/content/articles?filter[category]=%d',$url_root,$categoryId);
$url_option =  sprintf('%s/content/articles',$url_root);
// Not ok$url_option =  sprintf('%s/content',$url_root);
echo ('URL option: ' . $url_option . "\n");

echo '=== Send ==================================' . "\n";

curl_setopt_array($curl, [
//		CURLOPT_URL            => sprintf('%s/content/articles?filter[category]=%d',$url_root,$categoryId),
		CURLOPT_URL            => $url_option,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING       => 'utf-8',
		CURLOPT_MAXREDIRS      => 10,
		CURLOPT_TIMEOUT        => 30,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_2TLS,
		CURLOPT_CUSTOMREQUEST  => 'GET',
		CURLOPT_HTTPHEADER     => $headers,
	]
);

$response = curl_exec($curl);

echo '=== response ==============================' . "\n";

if (!empty($response)) {
    $data =  json_decode ($response);

    echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "\n";

    // The response body is now a stream, so you need to do
    // echo $response->body;

} else {
    echo '!!! error on curl_exec !!!' . "\n";
    echo 'Curl error: ' . curl_error($curl) . "\n";
}

echo '=== close curl ============================' . "\n";

curl_close($curl);

echo '=== done ==================================' . "\n";



//$json_response = curl_exec($curl);
//$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//curl_close($curl);
//
//print ('--- status ----------------------' . "\n");
//print_r($status . "\n");
//print ('>>> result ----------------------' . "\n");
//print_r($json_response . "\n");
//print ('<<< done ----------------------' . "\n");

//echo ('--- status ----------------------' . "\n");
//echo($status);
//echo ('--- result ----------------------' . "\n");
//echo(json_decode($json_response));
//echo ('--- done ----------------------' . "\n");


// https://stackoverflow.com/questions/46578460/how-to-call-an-api-via-php-and-get-a-json-file-from-it


//// --- GET REQUEST -----------------------------------
//
//    $url = 'http://example.com/api/products';
//    $ch = curl_init($url);
//    curl_setopt($ch, CURLOPT_HTTPGET, true);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    $response_json = curl_exec($ch);
//    curl_close($ch);
//    $response=json_decode($response_json, true);



//--- POST REQUEST ---------------------------------------

//    $postdata = array(
//        'name' => 'Arfan'
//    );
//
//    // $url = "https://example.com/api/user/create";
//    // http://127.0.0.1/joomla5x/api/index.php/v1/lang4dev
//    $url = '(<span lang="en" dir="ltr" class="mw-content-ltr">http://127.0.0.1/joomla5</span>)/api/index.php/v1/lang4dev';
//    $url = 'http://127.0.0.1/joomla5x/api/index.php/v1/lang4dev';
//
//    $curl = curl_init($url);
//    curl_setopt($curl, CURLOPT_HEADER, false);
//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($curl, CURLOPT_POST, true);
//    curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
//
//    $json_response = curl_exec($curl);
//    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//    curl_close($curl);
//
//// You can also use file_get_content to get API data.
//
//	$json = file_get_contents("$url")
//

//$ch = curl_init();
//curl_setopt($ch, CURLOPT_POST, false);
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$api_response_json = curl_exec($ch);
//curl_close($ch);
////convert json to PHP array for further process
//$api_response_arr = json_decode($api_response_json);
//
//if($api_response_arr['respond'] == true ){
//    //code for success here
//}else{
//    // code for false here
//}
//



