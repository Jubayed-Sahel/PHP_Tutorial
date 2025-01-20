<?php
//     Function

/*        Uncomment TO Run ...


Function greet(){
    echo "Hello World"."<br>";
}
greet();
greet();
greet();



function HBD($name,$age){
    echo "<BR><Br>";                 // as php is not case sensitive
    echo "Happy Birthday $name , You are $age years old this Year !!!!!";
    echo "<BR><Br>";
}
HBD("Sahel",22);




function sum(int $a,int $b){
    return $a+$b;
}
echo sum(1,"100");        //    ---> ANS: 101   , As php identified and type casted itself as 100 is a number as string so it type casted "100" into int 100.
echo "<br>";

*/








/*

 // declare (strict_types=1) MEANS This must be the first line of the total code to work
declare (strict_types=1);      
function summation(int $a, int $b){
    return $a+$b;
}
echo summation(1,"100");       // This time This gives an error as the data types are different.
echo "<br>";

*/











// Defining Return Type of the function
function divide(int $x ,float $y):int     //-->>>>>> This ( :int ) means the function will return integer value. 
{
    return $x/$y;
}
echo divide(5,5)."<br>";
echo divide(25,5.5)."<br>";           //--> Gives an integer output for the int return type
 


?>