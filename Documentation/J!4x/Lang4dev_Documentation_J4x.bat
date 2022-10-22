@ECHO OFF
REM CLS
ECHO --- Lang4dev_Documentation_j4x.bat ---------------------------
ECHO.

REM does use the python plugin markdown-pp to collect 
REM all *.md files and create RSGallery2.Documentation.md
REM file. 
REM In Atom use the plugin markdown to PDF to create the matching *.PDF

markdown-pp Lang4dev_Documentation_j4x.mdpp -o Lang4dev_Documentation_j4x.md -e latexrender

ECHO Done
ECHO.