
# <center>Documentation component "Language for developers"</center>
## **<center>lang4dev 0.10.x for Joomla! 4x</center>**

## <center>Thomas Finnern</center>

<center>Version 2022.10.22</center><br>

This documentation is a work in progress and will be updated regularly. 
It is the collection of all markdown files from github
[Project documentation Repository](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/tree/main/Documentation/J!4x) 
lang4d repository RSGallery2_Project. 
There may be an updated version of this document. 
We may update it once in a while on new features. 

We are sorry for "some" ugly parts of the style. This results from the limitation of writing in fast "Markdown syntax".

**Lets get started**



# Introduction

**This component supports language translation handling for joomla extensions**
It doesn't handle the translation itself (deepl, googl, ...) though

## Use cases:

1) **Developer translation IDs**
This component will match languages IDs like COM_LANG4DEV_... defined in *.ini file against code occurences

   * Matches translation IDs defined in *.ini file against code occurences
   * Provides lines with missing Translation Ids for copy into *.ini
   * Supports AD HOC Translation IDs written insisde Text::_('...') but ID is not found in *.ini

   The results are ID lists [matching, missing, surplus] and lines with mising IDS which can be copied nto the *.ini file direct

   See more in [Project texts](#Project-texts)

2) **Translation support**

   From original "en-GB" *.ini files translation files like "de-DE" can be created. They contain the same translation IDs but the translations string is empty

3) **Component user translations** (intention)  
    The user of another component should be able to do the translation himself. He can add his own country language files. These are presented in a top bottom compare view where the items lines are prepeared and aligned in main file order. 
    The user will get aprepared textarea with translation IDs and empty translation strings. He can save these changed files 
  
## limitations
  * This component may allow to replace language files of foreign components but will not exchange lang items in the code of foreign components 



# Control Panel

![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/controlPanel/ControlPanel.01.png?raw=true)

(1) Projects
First a project has to be defined. It contains some basic information which are used by 'project texts' and 'translate' functions
It uses sub projects to handle a component (back end, backend sys, site)
Modules and plugins only have one sub project

(2) Project texts
Matches translation IDs defined in *.ini file against code occurences
Displays lists:
* Matching:  IDs used in code and defined in *.ini
* Not found:  IDs used in code and NOT defined in *.ini
* Superfluous: IDs defined in *.ini but not used in code
* AD HOC: Text written insisde Text::_('...') but no ID is found in *.ini

These lists are written for each sub project

(3) Translate

...

(4) Maintenance

...

(5) Select project

...

(6) Source 'lang id'


# Projects


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
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/projectTexts/ProjectTexts.backend.png?raw=true)

## Project texts type backend sys
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/projectTexts/ProjectTexts.backend-sys.png?raw=true)


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


# Translate

## Section subproject - Base
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/translate/translate.01.header.png?raw=true)


## Section subproject - Base
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/translate/translate.02.en_de.png?raw=true)
# Configuration



## Tab general
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/config/config.general.png?raw=true)

## Tab project texts
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/config/config.projectTexts.png?raw=true)

## Tab translation
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/config/config.translation.png?raw=true)

## Tab debug
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/config/config.debug.png?raw=true)
# Install language manager 

for developers com_lang4dev


# Maintenance

## Button sub projects
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/maintenance/Maintenance.subprojects.png?raw=true)
# Sub projects

## Section subproject - Base
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/subProjects/Subproject.01.png?raw=true)

## Section subproject - Details
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/subProjects/Subproject.02.png?raw=true)


[ ] ToDo: How to get help -> github issues 










