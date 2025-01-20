<?php

//    Global Variables or Super Globals -----> can be accesed from anywhere even if its created in a function.




// GLOBALS 
$a = 10;
$b =20;
function numbers(){
    // echo $a;    --> not accesible (ERROR)
    $GLOBALS['result'] = $GLOBALS['a']+$GLOBALS['b'];    // ---> Now result is a global variable Declared
    echo $GLOBALS['result'];
}
numbers();
echo "<br>";
echo $result;
echo "<br><br>";





// $_SERVER   
echo $_SERVER['PHP_SELF'];       //-->--> Returns the current file path.
echo "<br><br>";
echo $_SERVER['SERVER_ADDR'];          //-->--> Returns IP Adress of the Local Host.
echo "<br><br>";
echo $_SERVER['SERVER_NAME'];          //-->--> Returns SERVER name.
echo "<br><br>";









?>