<?php
// function dummy(){
//     echo "<h1>User Details</h1>";
// }
function getUserDetails(){
    dummy();
    echo "Vishal <br>";
    echo "Web Developer <br>";
    echo 10*10 . "<br> <hr>";
}
getUserDetails();
getUserDetails();
getUserDetails();
getUserDetails();
getUserDetails();

function dummy(){ 
    echo "<h1>User Details</h1>";
}

// functions with parameters

function sum($a,$b){
    echo $a+$b;
    echo "<br>";
}
sum(10,20);
sum(20,30);

function player($name1,$color1,$name2,$color2){
    echo "<h2 style='color:$color1;'>$name1
    <span style ='color:$color2;'>$name2</span></h2>";
}
player("Crisitiano","rgb(0, 102, 0)","Ronaldo","rgb(255, 0, 0)");
player("Lionel","rgb(245, 172, 54)","Messi","rgb(101, 161, 214)");


// function with return statement  

function userName(){
    return "vishal";
}
echo "<h2>The current user is ".userName().".</h2>";

// nested function
function test(){
    echo "test function called <br>";
    
    function apple(){
        echo "apple function called";
    }
}
test(); //main function must be called first
apple();
echo "<hr>";

// Variable Function
echo "<h2 style='text-align:center;'>Variable Function</h2>";
 function variable(){
     echo "Variable function";
 }
 $var = "variable"; //assigning variable function to $var
 $var();
 echo "<br>";

 function main($callback){
     $callback();
 };
 main($var); // passing variable function as callback function to main function
echo "<hr>";

// 10 basic and important functions in php
  $str = "vishal bhardwaj";
  echo "1.The length is = " .strlen($str); // to check the length of the string
   echo "<br>";
  var_dump($str); // to check the data type of the variable

  echo date("d "); // current date
  echo date("l "); // current day
  echo date("m "); // current month in number
  echo date("M ");  // current month in alphabets
 echo date("d.m.y ");
 echo date("D.M.Y");
 echo "<br>";

//  echo phpinfo();

 echo "<br>";

 $char = "ajdsoi";
 echo is_string($char); // return true
 echo is_int($char); // return nothing

 echo rand(); //to generate random numbers

 echo "before";
// die();  // stops the further execution
// exit();
 echo "after";

 echo "<br>";
 
 $str1 = "code step by step";
 echo substr($str1,10);
 echo "<br>";
 echo substr($str1,-5);

 
?>