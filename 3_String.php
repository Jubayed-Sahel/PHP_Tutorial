<?php
//                  ***                           string functions                            ***
$lang = "Hypertext Preprocessor";               

//  1. strlen()  ---  to find string length (it will count the space as well)
echo "<br><br>";
$length = strlen($lang);
echo $length;


// 2. str_word_count()   --- to find the total number of words
echo "<br><br>";
$length1 = str_word_count($lang);
echo $length1;

//  3. strrev()   ---  String Reverse
echo "<br><br>";
$length3 = strrev($lang);
echo $length3;


//  4.strpos()   --- search for a particular word and return its position
$language = "Hypertext Preprocessor Preprocessor";
echo "<br><br>";
$len = strpos($language,"Preprocessor");        // -> p er position (10) return korbe
echo $len;

?>