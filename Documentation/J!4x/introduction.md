
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
