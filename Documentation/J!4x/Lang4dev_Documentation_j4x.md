
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


.....


## use cases 

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


# Translate


# Configuration


# Install language manager 

for developers com_lang4dev


# Maintenance


# Sub projects




[ ] ToDo: How to get help -> github issues 










