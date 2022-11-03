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

