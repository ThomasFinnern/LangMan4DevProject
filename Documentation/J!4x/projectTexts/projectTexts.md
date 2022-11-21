# Project texts

* Matches translation IDs defined in *.ini file against code occurences
* Provides lines with missing Translation Ids for copy into *.ini
* Supports AD HOC Text written insisde Text::_('...') but no ID is found in *.ini

## Displayed lists:
* Matching:    IDs used in code and defined in *.ini
* Not found:   IDs used in code and NOT defined in *.ini
* Superfluous: IDs defined in *.ini but not used in code
* AD HOC Text: Written insisde Text::_('...') but no ID is found in *.ini

These lists are written separately for each sub project

## Matching translation IDs

Handles file separately for sub project type (backend / backend sys / standard (site, modul, plugin))

## "AD HOC" Texts
Plain text written between the '' inside Text::_('...') instead of a translation ID. The developer may write this text in a hurry and convert it later into a translation ID and add it to the ini file.

* example Text::_('gallery title')

## Support of missing translations

The source code will be searched for all existing translation IDs (like  'COM_LANG4DEV_TITLE') and check them against translations in *.ini files. This results in lists like missing, surplus and matching translation IDs

## sub project types 
The program distingues between sub project types to 
match the different *.ini language files (types) with 
translation IDs for this type. 
This leads to reduced search as only files connected
to the type of Ü.ini file are included in the search

In general a project has one sub project type.
* modules
* plugins
* templates (Not tested yet)

Components have three sub project types
* backend
* backend-sys
* site

## Project texts type backend 
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/projectTexts/ProjectTexts.backend.01.png?raw=true)

(1) Select project

Exchange immediately the main project and reload the page

(2) Select sub project

Exchange immediately the sub project and reload the page. It can be used to display all or just one sub project to reduce the amount of files shown

(3) Sub project: type backend

In the gray header the project name with sub project type is displayed.

Each subproject contains the matching or missing translation IDS

(4) Files list and folder

Here the language folder and the language files are named

(5) Developer "Ad hoc" texts

List of not translated plain text inside Text::_('...') occurences. Each line prepares the a translation ID extracted from the plain text. Also a comment tells about occurence in the file  with name and line and position.

The list lines can be copied into the *.ini file without changes. The comment behind may be removed but it is working also with it.

Example Text::_('gallery title') would result in something like 
```
COM_LANG4DEV_GALLERY_TITLE="gallery title" ; `gallery_display.php [L254C44]
```
L: line, C: column

The number in the red circle tells the number of occurences

(6) Missing translation IDs

A list of translation IDs which are not found in the *.ini file. For each item a line in the form of the *.ini is provided to be copied there.

The number in the red circle tells the number of occurences
The 'toggle missing IDs' button below will show all items or hide them

(7) Surplus translations

A list of translation IDs which have a translation inside the *.ini files but is not referenced in the code. 

The number in the red circle tells the number of occurences
The 'toggle missing IDs' button below will show all items or hide them

(8) Matching translations IDs

A list of translation IDs which have a translation inside the *.ini files and is referenced in the code

The number in the red circle tells the number of occurences
The 'toggle missing IDs' button below will show all items or hide them

## Project texts type backend sys
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/projectTexts/ProjectTexts.backend-sys.01.png?raw=true)

(9) Sub project: type backend-sys

In the gray header the project name with sub project type is displayed.
This is just an example how the display continues for the next sub project. Everything else is the same as above

