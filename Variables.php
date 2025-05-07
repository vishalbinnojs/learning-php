<?php
// variables are used to store data 
// and later it can be used on multiple location
$num = 10;
$age = 29;
echo $num;
echo "<br>";
echo $age;
echo "<br>";


echo $age ." ". $num; // creating space 

$a_1 = "Naman";
$_90 = "Ojha";
echo "<br>";
$num1 = $num2 = 50;
echo $num1." ".$num2;

echo"<hr>";

// Local and Global Variables
echo "<h3> Local and Global Variables</h3>";
function my_Function(){
    $localVariable = 10; //can be accessed only inside the function
    echo $localVariable;
}
// echo $localVariable; //can't access outside
my_Function();

 $global_Variable = " Hello: global";
function test(){
    
   global $global_Variable; // to use it inside the function make it global
   echo $global_Variable;
}
test();
echo "<br>";

const globalVariable = "Hello from constant variable which is automatically a global variable. And it cannot be re-declared."; 

function test1(){
    
    
   echo globalVariable;
}
test1();
echo "<br>";

// local and global variable combined
$name = "anil";
function getName(){
    global $name;
    $name = "peter"; // global varible's value changed to peter.
    echo "local var: $name";
}
getName();
echo "<br>";
echo $name;
echo "<hr>";



//variables inside nested function
$person = "shubham";
function myName(){
  $person = "adil";
  echo $person;
  
  function myName2(){
    //   $person = "rizwan";
    global $person;  
      echo $person;  // it will echo with shubham not with adil
  }
}
myName();
echo "<br>";
myName2();
echo "<br>";
echo $person;

?>