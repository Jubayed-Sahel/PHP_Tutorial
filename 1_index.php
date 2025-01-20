<?php

//To Create a new line we use Break Tag
echo "Hello World! <br>";

// PHP is not case sensitive
ECHo "Hello World Again! ";  

//Vairables
$myname = "sahel";
echo "<br>" . $myname;                       //***************        ( . ) to concatinate 


/* Variable Scope 
    local 
    global 
    static


    //Local --> Cannot be called out of Function So throw error
    $num1 = 30;
        function testing(){
        $num2=10;
        echo $num2;
        }
    testing();
    echo $num2;



    //Global Scope --> Can be called from anywhere in the code
    $num1 = 30;
    function testing(){
        $num2=10;
        echo $num2;
    }
    testing();
    echo $num1;



    //Static Scope ---> doesnot end the life of the variable.
    $num1 = 30;
    function testing(){
        static $num2=10;        //------ now after the function ends We can reuse the num2 variable as its static
        echo $num2. "<br>" ;
        $num2--;
    }
    testing();
    testing();
    testing();
    testing();
    
*/


                                    /*                    Data Types                */

//string 
echo "<br>";
echo "<br>";

$st1="PHP";
$st2='HTML';                    // can use both types to declare strings 
echo $st1."<br>";
echo $st2."<br>";
// Returns data type and total index number of the string
echo var_dump($st2);          


// interger 
$numb1 = -1;
echo "<br> <br>".$numb1;


//float 
$numb2 = -1.223;
echo "<br> <br>".$numb2;


//boolean
$TF = true;
echo "<br> <br>".$TF;        // output:  1 means true.


//null                                  ---> variable that doesnot have any value inside it
$fruits = "apple";
$fruits = null;
echo "<br> <br> ". $fruits;         
echo "<br> ";
var_dump($fruits);           //datatype will also be null
echo "<br> <br> ";


//objects : Instance of Class
class Car{
    public $name;
    public $colors;

    public function setname($name){             //By Default its also public
        $this-> name=$name;                     //*****************       In C: this.name      BUT     In PHP: this->name
    }
    public function getname(){
        return $this->name;
    }
}

$BMW = new Car();    //-----> Object named BMW is Created
$BMW->setname("BMW CAR");
echo $BMW->getname();

$toyota = new Car();   //-----> Object named toyota is Created



?>