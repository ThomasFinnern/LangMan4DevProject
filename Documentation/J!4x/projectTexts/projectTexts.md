# Project texts

* Matches translation IDs defined in *.ini file against code occurences
* Provides lines with missing Translation Ids for copy into *.ini
* Supports AD HOC Text written insisde Text::_('...') but no ID is found in *.ini

## Displayed lists:
* Matching:  IDs used in code and defined in *.ini
* Not found:  IDs used in code and NOT defined in *.ini
* Superfluous: IDs defined in *.ini but not used in code
* AD HOC Text: Written insisde Text::_('...') but no ID is found in *.ini

These lists are written separately for each sub project

## Matching translation IDs

Handles file separately for sub project type (backend / backend sys / standard (site, modul, plugin))


## AD HOC Texts


## Support of missing translations


## Project texts type backend
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/projectTexts/ProjectTexts.backend.01.png?raw=true)

(1) Select project


(2) Select sub project


(3) Sub project: type backend


(4) Files list and folder


(5) Developer Ad hoc texts 


(6) Missing translation IDs


(7) Surplus translations


(8) Matching translations IDs



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


