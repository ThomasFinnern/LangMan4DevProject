
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


