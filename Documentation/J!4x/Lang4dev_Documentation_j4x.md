
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

When **Detect details** button is pressed sub projects are created which matches the languages definition files used inside the project. Then the project folder is examined for the source types and one or more 
sub projects are created.

The sub projects are normally not shown. Only maintanence has a button for experinced users if need arises

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

This button **must** be used after the input is finished. It creates the necessary child sub projects which are used in functions "Project texts" and "translate"

"Detect Details" can be pressed also later when the component has changed.

Examples:

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

# Translate

## Rules for translation files

The reading and write back of the *.ini translation file will be nearly consistent.  

The following rules are used when handling *.ini files

- Keep comments
- Keep main translation file "en-GB" file line items order for other languages
- Not translated lines will be commented at start of line

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

## Section subproject - Base

![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/translate/translate.01.header.01.png?raw=true)

(1) Select project

Exchange immediately the main project and reload the page

(2) Select sub project

Exchange immediately the sub project and reload the page. It can be used to display all or just one sub project to reduce the amount of files shown

(3) Source lang ID

Fill out this input to change the source language ID type and use the button "Select source lang Id" see (5)

(4) Target lang ID

Fill out this input to change the target language ID type and use the button "Select tartget lang Id" see (5)

Fill out this input to create a new set of language file which do not exist on the "server" / PC

(5) Select source lang Id

Fill out input control "Source lang ID" see (3), and use this button to change the source language ID type. use button "New lang ID files" (7) to create these files

(6) Select target lang Id

Fill out input control "Target lang ID" see (4), and use this button to change the target language ID type

(7) New lang ID files
Fill out input control "Target lang ID" see (4), and use this button to create a set of new labguge files

(8) Save edited file(s)

Each or all files at once may be seleted to be updated (see below): Use this button to save the selected files. Attention: This function will overwrite the originals

## Displayed files

![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/translate/translate.02.en_de.01.png?raw=true)

(1) Sub project: type backend

In the gray header the project name with sub project type is displayed.

Each subproject contains the main and translated files

(2) Source language file(s)
The source language file shows the existing translation IDs in a background of blue

- This file can not be changed.

It can be scrolled to compare orignal and translation on the same window

(3) Target language file(s)
The target language file shows the translation IDs as empty or already translated items.

- The order of translation items folow the lines in the main 'en-GB' file.
- Empty translations are prpended by a comment marker ";" in front.

The texts between "" can be changed and saved. Other parts of the line can be changed too.
For example the user can add comments behind or insert comment lines.

The comment marker ";" in front of not translated lines should be removed to active the translation. The configuration can be set to omit this automatic marker on emptytranslations

(4) Check for save of language edit file
Each of the translation files can be marked seperately to be safed with the button "" see (8)above)

(5) Check all language edit file fields
Sets the marker for all translation files to be safed with the button "" see (8)above)
# Configuration

## Tab general

![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/config/config.general.png?raw=true)

(1) Comment prepared IDs  (??? ToDo: uper case in Translation for all IDS)

In the project texts the translation lines may be prepended with a ";" comment character. Lines there are prepared to be copied into *.ini files.

With ';' in front the lines may be have new Translation IDs which are not translated yet but prepared inside the *.ini file

(??? ToDo move to project texts text ???)

## Tab project texts

![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/config/config.projectTexts.png?raw=true)

(1) Search translation IDs

On "No" restrict the search to not search for translation IDs  like "COM_LANG4DEV_... " in project Texts view

(2) Search translation strings

On "YES" do additional search for "AD HOC" Texts, plain text written between the '' inside Text::_('...') instead of a translation ID.

## Tab translation

![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/config/config.translation.png?raw=true)

Define the language settings with which the project is started. This may be overwritten in the actual view by the user.

(1) Main language ID

Source language ID for the *.ini files

(2) Transation language ID

Target language ID for the *.ini files

(3) Show all translations

? not used ?

(4) Edit and save "Main" language file : ToDo: change the string in *.ini

Future feature
ToDo: hide value

## Tab debug

![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/config/config.debug.png?raw=true)

(1) Debug Backend
Activates debug functionality. This does write calling parameters and logs some of the used files / classes in a log file.

Attention: On Yes to Debug a log file per day will be created in folder '...//joomla root/administrator/log' and notices may appear on top of a form. Please delete log files regularly"

> not invented here but may appear in the future

(2) Debug Site

Enables debug messages in site form.

Attention: Using debug on the frontend will create a lot of text in the log files and may get stuck when a lot of users are active. It is best used on the local test web server.

> not invented here but may appear in the future

(3) Develop

Activates developer functions. Additional 'info' will appear in HTML pages. For example a task list for open tasks may appear.

More functions buttons may appear in the maintenance view. The additional function may not work  or destroy parts so use with care
# Install language manager 

for developers com_lang4dev


# Maintenance

This page supports special function which are not needed on the normal translation ID handling

## Button sub projects

![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/maintenance/Maintenance.subprojects.png?raw=true)

Enables the display (check) of the sub projects inside the "standard" projects
# Sub projects

Enables the display (check) of the sub projects inside the "standard" projects  
This view is intended for Joomla! experienced developers only.

The sub projects are created from the project view when **Detect details** 
button is pressed in project view. Then the project folder is examined 
for the source types and one or more sub projects are created.

The program distingues between sub project types to 
match the different *.ini language files (types) with 
translation IDs for this type. 
This leads to reduced search as only files connected
to the type of '*.ini' file are included in the search

In general a project has one sub project type.

* modules
* plugins
* templates (Not tested yet)

Components have three sub project types

* backend
* backend-sys
* site

## Sub project list

![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/subProjects/Subprojects.png?raw=true)

(1) Title

See ID

(2) ID

The ID is created by the component name and the sub type of the component.

(3) On J path

Defines with a 1 that the project keeps the language files in old Joomla! 2.5 fashion.  

* Languages files are besides joomla files and not in languages folder inside the project
* In the development folder (like in installation) the language files are addressed differently in the manifest XML file

(4) Root path subproject

The root path of the project may be different ot the place of the manifest file
For example a component may contain a site and a administration folder.
The path will be either root path on server or PC or the ??? administartor path ???

## Edit sub project

### Section subproject - Base

![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/subProjects/Subproject.01.png?raw=true)


(1) ID 

The subproject ID is the component name

(2) Sub type

See above: The sub  type may be selected more explicit by name 

(3) Root path subproject

This is the base path to the sub project type ???

(4) Notes

The user may add notes to this subproject for later reference

## Section subproject - Details

![controlpanelRSgallery2](https://github.com/ThomasFinnern/J_LangMan4ExtDevProject/blob/main/Documentation/J!4x/subProjects/Subproject.02.png?raw=true)

(1) Prefix

This defines the characters the language translation IDs start with 
**COM_LANGDEV**_TITLE="..."

(2) XML file aname

Defines the path an name of the manifest file

(3) Lang on joomla path
See above (3) On J path. This can not be changed as it is detected when **Detect details** button is pressed in project view

(4) Install file name

The script file used on install does contain language translation IDs. It is searched when **Detect details** button is pressed in project view

(5) Parent project (ID) ??? Todo rename 

The parent project id is the link to the parent prject which may contain several sub projects

(6) Twin ID

Reserved for a future feature which uses separate source and destination sub projects




[ ] ToDo: How to get help -> github issues 










