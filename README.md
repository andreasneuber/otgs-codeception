# codeception-debug-log
### Modules:  
#### CheckDebugLog  
Checks if debug.log of WordPress has been created between tests. If yes, it copies the file to *codeception/_output*  

#### WPCliDb:  
Uses wp-cli commands to reset, import, replace URLs and handle transients for database dumps after those are imported to a WordPress test site.  
Also, exports a db dump in case tests fail.

### Example usage in codeception.yml:
```
CheckDebugLog:   
    WPpath: ''
WPCliDb:   
    dump: codeception/_data/dump.sql
    cleandump: codeception/_data/cleandb.sql
    dump1: codeception/_data/germandefault.sql
    dump2: codeception/_data/german-default-no-english.sql
```

Those dumps can be loaded at the beginning of a test as:  

```
start_with_a_clean_site() //loads "cleandump"
start_with_dump1() //loads "dump1"
start_with_dump2() //loads "dump2"
```
