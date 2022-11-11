
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

**This component supports translation ID handling for joomla extension developers**
It doesn't handle the translation itself (deepl, googl, ...) though

## Use cases

1) **Developer translation IDs**
This component will match language translation IDs like COM_LANG4DEV_... defined in *.ini file against code occurences

   * Matches translation IDs defined in *.ini file against code occurences
   * Provides lines with missing Translation Ids for copy into *.ini
   * Supports AD HOC Translation IDs written insisde Text::_('...') but ID is not found in *.ini

   The results are ID lists [matching, missing, surplus] and lines with mising IDS which can be copied nto the *.ini file direct

   See more in [Project texts](#Project-texts)

2) **Translation support**

   Create different language file sets like "de-DE" from original "en-GB" *.ini files. They contain the same translation IDs but the translations string is empty

3) **Component user translations** (intention)  
    The user of any component should be able to do the translation himself. He can add his own country language files. These are presented in a top bottom compare view where the items lines are prepeared and aligned in main file order.  
    The user will see a prepared textarea with translation IDs and empty translation strings. He can save these changed files.
  
## Limitations

  *This component allows to replace language files of foreign components but will not exchange lang items in the code of foreign components


# Control Panel

![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/controlPanel/ControlPanel.01.png?raw=true)

(1) Projects  
First a project has to be defined. It contains some basic information which are used by 'project texts' and 'translate' functions

It uses several sub projects to handle a component (back end, backend sys, site)  
Modules and plugins only have one sub project

(2) Project texts  
Matches translation IDs defined in *.ini file against code occurences
Displays lists:  

* Matching: IDs used in code and defined in *.ini
* Not found: IDs used in code and NOT defined in *.ini
* Superfluous: IDs defined in *.ini but not used in code
* AD HOC: Text written insisde Text::_('...') but no ID is found in *.ini

These lists are written for each sub project

(3) Translate  

Create different language file sets like "de-DE" from original "en-GB" *.ini files. They contain the same translation IDs but the translations string is empty

(4) Maintenance  

Several buttons to handle special situations

* Sub projects: These are childs of projects but not visible. Here their data may be checked
* ...

(5) Select project  

Preselect main project and sub project for use in 'Project Texts' and 'Translate'. The selection may be chaged within the task view again

(6) Source 'lang id'  
[  ] ToDo: Remove this ....  
Preset source lang ID and target lang ID for use in 'Project Texts' and 'Translate'. The selection may be chaged within the task view again
? see config ?
# Projects

A project contains basic information like a link to the project folder and to the project manifest *.xml file. The information are used by the 'project texts' and 'translate' functions. The project links to sub projects to handle several component types

Projects are defined by the minimum needed informations

## Internal sub projects table

Types of sub projects
* backend
* backend sys
* site,
* modules
* plugins

Modules and plugins only link to one sub project, components projects keep internmal three sub projects.

## Project list

![Project list](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/projects/Projects.01.png?raw=true)

## Edit Project definitions

![Project list](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/projects/EditProject.01.png?raw=true)

(1) Project name

Choose your name

(2) Project root path

The root of a project may be within a joomla server instance or local on a PC.  
A project path on joomla starts on the root of the joomla instance for example with administrator/components/com_...

(3) Project twin
For further development when source lang and destination lang project are on different folders. Here the second destination project has to be referenced

(4) Notes
Notes for lacal use. No further function

(5) **Detect details**

This button **must** be used after the input is finished. It creates the necessary child projects which are used in functions "Project texts" and "translate"

"Detect Details" can be pressed also later when the component has changed 

Examples
* after new added site in component
* after move of language file folder

It is necceasary that the project root path is defined before

Save Button is not needed when detect details was used directly before

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


# Translate

## Section subproject - Base
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/translate/translate.01.header.01.png?raw=true)

(1) Select project  

Exchange immediately the main project and reload the page

(2) 

Exchange immediately the main project and sub project

(3) X



(4) X



(5) X



(6) X



(7) X



(8) X




## Section subproject - Base
![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/translate/translate.02.en_de.01.png?raw=true)


(1) X



(2) X



(3) X



(4) X



(5) X



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










