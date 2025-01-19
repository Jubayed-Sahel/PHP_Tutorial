<?php

//Declare Arrays 
$colors=array("blue" , "green" , "yellow" );
echo $colors[0];
echo "<br>";


// Function to print the whole array without using for loop.
echo "<br> <br>";
print_r($colors);


//indexed array
echo "<br> <br>";
$counting_length = count($colors);
echo "Length of the array is : ".$counting_length;

for($i=0 ; $i<$counting_length ;$i++){
    echo "<br>".$colors[$i];
}


//Decalare Associative Array 
echo "<br><br>";
$subject=array("Khanam"=>"MIC","Sahel"=>"ECE","Seema"=>"Civil");          //---> SYNTAX: variable_name= array("Subject" => "key");
echo $subject["Khanam"];
echo "<br>";
echo $subject["Sahel"];
echo "<br>";

    //for each loop
    foreach ($subject as $key => $value) {
        # code...
        echo "<br>";
        echo "key=".$key.",value=".$value;

    }




//multi-dimensional Array
$multi_Color=array(array("red",11),array('blue',10),array('green',5));
    /* Here,  red   = [0][0] , 11 = [0][1]
              blue  = [1][0] , 10 = [1][1]
              green = [2][0] , 5  = [2][1]
    */
echo "<br> <br> <br>";
echo $multi_Color[2][0];
echo "<br> <br>";
for($row=0;$row<3;$row++){
    for($col=0;$col<=1;$col++){
        echo $multi_Color[$row][$col];
        echo "<br>";
    }
    echo "<br>";
}



//Functions in Arrays
$my_fruits = array("apple","mango","pineapple",'banana');


//  1. sort()   ---- Sort in Ascending Order
echo "<br><br>";
sort($my_fruits); 
print_r($my_fruits);          // -- as its an array we are printing


//  2. rsort()   --- Sort array in Descending Order
echo "<br><br>";
rsort($my_fruits);
print_r($my_fruits);


//  3. asort()  --- Sort Associative array (Key) in Ascending Order
echo "<br><br>";
$subject1=array("Khanam"=>"MIC","Sahel"=>"ECE","Seema"=>"Civil");                          //---> SYNTAX: variable_name= array("VALUE" => "key");
asort($subject1);
print_r($subject1);


//   4. ksort()  --- Sort Associative array (Key) in Descending Order
echo "<br><br>";
$subject2=array("Khanam"=>"MIC","Sahel"=>"ECE","Seema"=>"Gravity");                          //---> SYNTAX: variable_name= array("VALUE" => "key");
ksort($subject2);
print_r($subject2);


//   5. arsort() --- Sort Associative array (VALUE) in Descending Order 
echo "<br><br>";
arsort($subject2);
print_r($subject2);


//   6. krsort() --- Sort Associative array (VALUE) in Ascending Order 
echo "<br><br>";
krsort($subject2);
print_r($subject2);


//   7. count()  --- to count the length of the array
echo "<br><br>";
count($colors);
print_r($colors);








//                                           ARRAY Operators

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













?>