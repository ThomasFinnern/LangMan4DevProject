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
