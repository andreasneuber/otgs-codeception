# OnTheGoSystems Codeception Modules
## CheckDebugLog  
This module has two options:
- If `debug` is enabled, it sets a flag to check for errors or notices on page load.
- If `debugLog` is enabled, it checks if `debug.log` of WordPress installation has been altered between tests. If yes, it copies the file to the output folder of Codeception.  
### Example usage in codeception.yml:
```
CheckDebugLog:
    debug: true
    debugLog: true
    WPpath: ''
```
## WPCliDb:  
Uses wp-cli commands to reset, import, replace URLs and handle transients for database dumps after those are imported to a WordPress test site.  
Also, exports a db dump in case tests fail.
### Example usage in codeception.yml:
```
WPCliDb:   
    dump: codeception/_data/dump.sql
    cleandump: codeception/_data/cleandb.sql
    dump1: codeception/_data/germandefault.sql
    dump2: codeception/_data/german-default-no-english.sql
    oldUrl: 'http://old.dev'
    newUrl: 'http://new.dev'
```
Those dumps can be loaded at the beginning of a test as:  
```
start_with_a_clean_site() //loads "cleandump"
start_with_dump1() //loads "dump1"
start_with_dump2() //loads "dump2"
```
## WPLoad:
Loads WP functions via inclusion of file wp-load.php.
After adding this module all what is needed is this call:
```
$I->load_WP();
```
### Example usage in codeception.yml:
```
WPLoad:
    path: 'wp-load.php'
```