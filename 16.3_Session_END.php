<?php

// Assume that we want to logout from facebook now so we need to delete the session data now.


session_start();
session_unset();
session_destroy();
echo "variables Destroyed";


/* 
    after running 16.1 and 16.2 if we run 16.3 then again if we run 16.2 we will get an error.
    As now we have to start the session of 16.1 again to save then information again.
    after running 16.3, the value of session variable gets reset.
*/ 

?>