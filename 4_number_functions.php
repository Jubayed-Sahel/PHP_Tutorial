<?php

//    1.  is_int           --> integer or not
$number = 20;
echo is_int($number);                   // 1 means true , 0 means false
echo "<br>";
//var_dump(is_int($number))                // return data type  (uncomment and check)


//     2.  is_float           --> float or not
echo "<br>";
var_dump(is_float($number));


//     3. is_numeric         --> have all numbers or not
echo "<br>";
$num = "10rrr";
var_dump(is_numeric($num));


//      4. Type Casting
echo "<br><br>";
$x = 10.333;
echo $x."<br>";
echo var_dump($x);
echo "<br>";
$int_convert = (int)$x;        //    ---- TYPE CASTING
echo $int_convert."<br>";
echo var_dump($int_convert);
echo "<br><br><br>";


//                         ***                    Math Functions                    ***

//  1.  pi()     --- give the value of pi
echo pi()."<br>";

//  2.  min() , max()    --- find min or max value 
echo min(1,2,3,4,5)."<br>";
echo max(1,2,3,4,5)."<br>";

//  3. abs()    --- return absolute (positive) number
echo abs(-100)."<br>";

//  4. sqrt()   --- return the root
echo sqrt(64)."<br>";

//  5. round()  --- make a round figure and return
echo round(1.7)."<br>";

//  6. rand()  --- Generate random number
echo rand(20,200)."<br>";          //   only generate numbers from 20 to 200
?>