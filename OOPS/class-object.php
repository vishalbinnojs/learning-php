<?php
// In project development file name and class name should be same.
//  Here file name(class-object.php) and  class name(NathOperations) is different 
// just for understanding what is the topic we are going to discuss. 

// In class: variables = properties && functions = methods.
// creating a class with name MathOperations who has two objects namely: $math and $math1. We can create
// multiple object in this class.
class MathOperations{
   function sum($a,$b){
    return $a+$b;
   }  
   function mul($a,$b){
    return $a*$b;
   }
   function sub($a,$b){
    return $a-$b;
   }
   function div($a,$b){
    return $a/$b;
   }
}

//creating new object with name $math
$math = new MathOperations();
echo $math->sum(10,30);    //call to method. It is called method bez it is created inside the class component.
echo "<br> ";
echo $math->sum(20,30);
echo "<br> <br>";

//creating new object with name $math1
$math1 = new MathOperations();
echo $math1->sum(100,300);
echo "<br>";
echo $math1->sum(400,300);
echo "<br> <br>";

//creating new object with name $mul

$mul = new MathOperations();
echo $mul->mul(100,300);
echo "<br>";
echo $mul->mul(400,300);
echo "<br> <br>";

//creating new object with name $sub

$sub = new MathOperations();
echo $sub->sub(700,300);
echo "<br>";
echo $sub->sub(400,300);
echo "<br> <br>";

//creating new object with name $div

$div = new MathOperations();
echo $div->div(900,300);
echo "<br>";
echo $div->div(400,200);











?>