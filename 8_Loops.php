<?php

// for , while , do while --> Same as other languages

// foreach loop
$fruits = array("apple","orange","banana");
foreach ($fruits as $values) {
    echo $values."<br>";
}

//Assosiative array
echo "<br><br>";
$mydata = array("name"=>"sahel","dept"=>"cse");                 //---> SYNTAX: variable_name= array("key" => "value");
foreach ($mydata as $x => $values) {
    echo "$x = $values";
    echo "<br>";
}
echo "<br><br>";

//   ********  we can use ( break ) & ( continue ) statement for a better use of loops
//  break -> comes out of the loop 
// continue -> just skip that particular step

for($i=0;$i<=10;$i++){
    if($i==7){
        continue;                 // 0,1,2,3,4,5,6,  8,9,10
    }
    echo $i."<br>";
}




?>