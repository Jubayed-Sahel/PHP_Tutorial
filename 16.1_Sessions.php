<?php
/*         Sessions are used for log in. as an example in facebook we log in once and save the password 
            so that the next time we dont hae to log in again.
*/


//sessions()
session_start();
$_SESSION['username']="Sahel";           //  ---> These are called Session Variables. => Syntax: $_SRSSION['Variable_name']="Value"; 
$_SESSION['password']="1234";
echo "Session Data is Saved";


// ----> First run the code of 16.1 so that the session data gets saved then run 16.2.

?>