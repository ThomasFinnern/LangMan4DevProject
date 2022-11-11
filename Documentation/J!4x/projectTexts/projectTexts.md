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

List of not translated plain text inside Text::_('...') occurences. Each line prepears the translation ID extracted from the plain. Also a comment tells about the file occurence with name and line and position.

The list lines can be copied into the *.ini file without changes. The comment behind may be removed but it is working also with it.

Example Text::_('gallery title') would result in something like 
```
COM_LANG4DEV_GALLERY_TITLE="gallery title" ; `gallery_display.php [L254C44]
```
L: line, C: column

The number in the red circle tells the number of occurences

(6) Missing translation IDs




The number in the red circle tells the number of occurences

(7) Surplus translations




The number in the red circle tells the number of occurences

(8) Matching translations IDs





The number in the red circle tells the number of occurences

## Project texts type backend sys
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/projectTexts/ProjectTexts.backend-sys.01.png?raw=true)

(9) Sub project: type backend-sys







   1) Developer may use Translation IDs like COM_LANG4DEV_... in the TEXT::_('...') definition and place them where these are expected.  
    This component will collect all and provide prepared lines to include in the lang files
   2) Write plain text in the TEXT::_('...') definition.  
    This component will collect all and provide prepared lines to include in the lang files. the lang IDS have to be adjusted though

### Rules for translation files

- Keep Comments
- Keep en-en file content order for other languages
- Not translated lines will be commented at start of line *

Base files:

- May be kept sorted

Database Project

- old source

⇒ Paths E. may be extra) component paths

=D auto load

• • •

Base files:

• • •

• • •

? renamed items => can't be be handled

### Database

... to be continued

### Base files

Collected files for extended but fast search. These may origin in older version or manual added files

==> Additional files to search

- Copy of previous versions
- Manual user files
- Scan 4 core translations

  - one file per long
  - update button

? Import: keep separate or

collect as is

a) 4 delta

- file layout in folders

or side by side


