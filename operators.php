<?php


// 1. airthmatic operations 
$heading1 = "<h1 style='text-align:center; color:brown;'>Airthmetic Operators</h1>";
echo $heading1;
$a = 10;
$b = 5;
$c = $a + $b;

// echo $a +$b."<br>";
// echo $a * $b."<br>";
// echo $a - $b."<br>";
// echo $b / $a."<br>";
echo $a%$b;
echo "<br>";

echo $a**$b;
echo "<br>";

// 2. assignment operators

$heading2 = "<h1 style='text-align:center; color:brown;'>Assignment Operators</h1>";
echo $heading2;
$x = 20;
$y = 25;
$x += $y;
$x -= $y;
$x *= $y;
$x /= $y;

$x%=$y;
// $x**=$y;
echo $x;
echo "<br>";
echo "<hr>";
// 3. comparison operators

$heading3 = "<h1 style='text-align:center; color:brown;'>Comparison Operators</h1>";
echo $heading3;
$f = 5;
$g = "5";
 var_dump($f == $g);  // compare values of the variables
echo "<br>";
 var_dump($f === $g); //also check data type

//  ************ Not equal  ***********
echo var_dump($f!=$g); // false
echo var_dump($f<>$g); // false

 var_dump($f!==$g); // true

// echo var_dump($f<$g);
// echo var_dump($f<=$g);
// echo var_dump($f>$g);
// echo var_dump($f>=$g);

// *********** Spaceship  **************
// if f is small it returns -1 , 0 if both equal, 1 if f is greater
var_dump($f<=>$g);
echo "<br>";
echo "<hr>";
  // ********** 4.   Increment/Decrement  ************
  
$heading4 = "<h1 style='text-align:center; color:brown;'>Increment/Decrement Operators</h1>";
echo $heading4;
$num = 10;
echo $num++; // post increment(10)
echo "<br>";
echo $num;  echo "<br>";// 11

echo $num--; // post decrement(11)
echo "<br>";
echo $num; echo "<br>"; // 10

echo ++$num; // pre increment(11)
echo "<br>";
echo $num;  echo "<br>"; // 11

echo --$num; // pre decrement (10)
echo "<br>";

echo $num;  // (10)
echo "<hr>";

//    5. String and String Operators

$heading5 = "<h1 style='text-align:center; color:brown;'>String Operators</h1>";
echo $heading5;
// String has two operators: 
// 1. concatenate operator
// 2. concatenate equal to operator
$name = "vishal";
$age = 25;
echo "My name is  $name ";
echo "<br>";
echo 'My name is ' .$name; // this is dot(concatenate) operator used with string.
echo "<br>";
echo "My name is $name ". "and my age is $age.";
echo "<br>";
$str1 = "Hello How Are You?";
$str2 = " I am fine."; 

echo $str1. $str2;  echo "<br>";
  // concatenate equal to operator
  $str1.=$str2;
  echo $str1;
echo "<hr>";
  // 6. Logical Operators: when we have to combine two or more
  // than two expression then we use logical operators. 

  
$heading6 = "<h1 style='text-align:center; color:brown;'>Logical Operators</h1>
<h4>1.Logical And Operator</h4> 
<h4>2.Logical Or Operator</h4> 
<h4>3. Logical Not Operator</h4>
<h4>4.Logical Xor Operator</h4> ";
echo $heading6;
//1 Logical And Operator
$username = "user";
$password = 1234;

if($username == "user" && $password == 1234){
  echo "user loggedIn successfully.";
}else{
  echo "Invalid credentials!";
}
echo "<br>";
echo "<br>";
echo "<br>";
// Logical Or Operator
$admin = "Mukesh";
$employee = "Suresh";
if ($admin == "Mukesh" || $employee == "Suresh"){
  echo "Access Granted!";
}else{
  echo "Access Denied!";
}
echo "<br>";
echo "<br>";
echo "<br>";

// Logical Not

$card = "Marriage card";
if($card !== "Marriage card"){
echo "Can't attend the marriage.";
}else{
  echo "You can attend the marriage.";
}


?>