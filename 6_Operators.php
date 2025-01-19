<?php

//                                   ***       Arithmetic Operator           ***                           

$x = 2;
$y = 5;
echo $x+$y."<br>";
echo $x-$y."<br>";
echo $x*$y."<br>";
echo $x/$y."<br>";
echo $x%$y."<br>";
echo $x**$y."<br>";       //  --> 2^5 (Exponential)
echo "<br><br>";









//                                ***            Assingment Operator          ***

$num=2;
$num+=20;
echo $num."<br>";
$num-=20;
echo $num."<br>";
$num*=20;
echo $num."<br>";
$num/=20;
echo $num."<br>";
$num%=20;
echo $num."<br>";
echo "<br><br>";










//                                 ***              Comparison Operator              ***

//       1. == && ( != OR <> )         (check just the Value)   
$n1=10;
$n2=10;
var_dump($n1==$n2);
echo "<br>";

//       2.  <>   -- NOT EQUAL TO --   (check the Value & Also the Datatype)   
$n1=10;
$n2="10";
var_dump($n1<>$n2);
echo "<br>";


//       3. === &&  !==       (check  the Value & Also the Datatype)   
$n1=10;
$n2="10";
//var_dump($n1===$n2);
var_dump($n1!==$n2);
echo "<br>";

//       4. $x>$y
//       5. $x<=$y













/*                            ****            PHP Spaceship Operator <=>               ****

-> if $x=$y then return 0.
-> if $x>$y then return 1.
-> if $x<$y then return -1.

*/
echo "<br><Br>";
$no1=2;
$no2=1;
echo ($no1 <=> $no2);
echo "<br>";
echo "<br>";


//                       ***            Incerement Operator (POST & PRE Increment)         ***










/*                       ****                  Logical Opeators             ****

-> AND ( && )
-> OR ( || )
-> NOT ( ! )              --> echo !$x;  --> change 0 to 1 and 1 to 0.
-> XOR ( xor )            --> IF one of the condition true then return 1.

*/












//                             ***                     ARRAY Operators                    ***

$colors1 = array("blue"=>"2" , "green"=>"5");
$colors2 = array("black"=>"2" , "yellow"=>"5");

//  1. Union operator ( + ) -- Combine Both Array
echo "<br>";
print_r($colors1+$colors2);

//  2. Equal operator ( == ) -- check if the array (Both Key & Value) is equal or not & they have to maintain the same order also.
echo "<br>";
var_dump($colors1==$colors2);

//  3.  InEquality operator ( == ) -- check if the array (Both Key & Value) is equal or not & they have to maintain the same order also.
echo "<br>";
var_dump($colors1!=$colors2);
echo "<br>";
echo "<br>";











//                        *****                     Conditional assignment                     ****

/*          1. Ternary Operator ( ?: )
->   syntax :    expression?true:false                                   */
$q=0;
echo $q?"Its_TRUE":"Its_false";
echo "<br>";
$greet = "HELLO";
echo $greet=="HEY"?"Milse":"Milenai";





?>