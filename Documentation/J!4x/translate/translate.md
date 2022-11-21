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
