<?php

/* 

syntax of constants => define(name,value,case_insensitive)         
-> by default, case insensitive is "false"
-> name of constant variable starts with underscore or letters
-> nowdays in php, declaration of case-insensitive is no longer supported
-> constant is a global scope variable
*/


define("My_Name","Sahel");                // --> case insensitive is false
echo My_Name."<br>";

/*  
define("My_Name2","Sahel",true);          // --> case insensitive is true
echo my_nAme2."<br>";
*/

define("colors",["blue","red","green"]);      // constant arrays 
echo colors[2]."<br>";

// define("colors",["blue","red","green","orange"]);      // throw error as colors is a constant so it cant be re  defined





?>