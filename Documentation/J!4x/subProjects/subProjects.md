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


