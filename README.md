# codeception-debug-log
Module for CodeCeption.   
Checks if the debug.log created from WordPress is created and makes the test fail if so.   
The module also copies the created debug.log to "codecepion/_output/wpdebug.log"  

To start using it, you need to list it as module under acceptance.suite.yml "CheckDebugLog"  
and also add the path to WordPress in codeception.yml  
CheckDebugLog:  
    WPpath: ''  
