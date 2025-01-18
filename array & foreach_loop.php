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



?>