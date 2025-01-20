<?PHP

if(isset($_SESSION['username'])){            //  --->means if session variable(usename) has values, then run the condition.
    session_start();
    echo "Welcome" .$_SESSION['username'];
    echo "<br>";
    echo "Your Password is ".$_SESSION['password'];
}
else {
    echo "Please Login again to Continue";
}


// ----> First run the code of 16.1 so that the session data gets saved then run 16.2.

?>