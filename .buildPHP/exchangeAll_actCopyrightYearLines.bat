@ECHO OFF
REM build_fix.bat
REM
CLS

REM Path for calling
set ExePath=C:\Program Files\php82\
REM ECHO ExePath: "%ExePath%"

if exist "%ExePath%php.exe" (
    REM path known (WT)
    ECHO ExePath: "%ExePath%"
) else (
    REM Direct call
    ECHO PHP in path variable
    set ExePath=
)

REM "C:\Program Files\php82\php.exe" --version
"%ExePath%php.exe" --version

ECHO ----------------------------------------------
ECHO.

pushd  ..\..\buildComponentPhp\src
REM dir /one /b *.tsk
ECHO Path: %cd% 

echo --- "%ExePath%php.exe" exchangeAll_actCopyrightYearLinesCmd.php -f ../../LangMan4DevProject/.buildPHP/exchangeAll_actCopyrightYearLines.tsk %1
"%ExePath%php.exe" exchangeAll_actCopyrightYearLinesCmd.php -f ../../LangMan4DevProject/.buildPHP/exchangeAll_actCopyrightYearLines.tsk %1
popd

goto :EOF

REM ------------------------------------------
REM Adds given argument to the already known command arguments
:AddNextArg
    Set NextArg=%*
    Set CmdArgs=%CmdArgs% %NextArg%
    ECHO  '%NextArg%'
GOTO :EOF
