
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
