<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <h1 style="text-align:center; color:Orange;">LEARNING PHP</h1>
<?php
//*******PHP Comments***************** */
//comments are text not used to explain the code.
// This is a single-line comment.

# This is also a single-line comment.

/* This is a
multi-line comment */






// PHP echo/print

// print("Hello World!<br>"); // print allow only single parameter
// print "Hello World!<br>"; // print allow only single parameter

// //single parameter - can't use multiple parameter with parantheses.
// echo("Hello PHP!<br>"); // only single parameter with parantheses
// echo "Hello PHP!";

// //multiple parameters - allowed only in echo
// echo "This ", "string ", "was " , "made ", "with multiple parameters.<br>";
// echo "Vishal",96,"UNA";


// // adding html
echo "<h2>PHP is Fun!</h2>";  

// // airthmatic operations 
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
 ?>


 


 <!-- we can write multiple php blocks -->
 <?php
// $txt1 = 'Welcome Home!';
// $txt2 = 'Welcome PHP Tutorial!';

// echo $txt1 . $txt2;   // concatination with dot
// //creating space
// echo $txt1 .' '. $txt2 ."<br>";
echo "Total is = $c" . " ($a +$b)";
echo "<br>";
echo 'Total is ='. $c . '('. $a . '+' . $b .')';

// ?>

<?php
// use of Echo
// echo is a language construct(like keyword)
// echo 10+10;
// echo "<br>";
// echo "Hello World!";
// echo "<br>";


// Echo " echo is case insensitive";
// echo "<br>";
// ecHo 20+20;
// echo "<br>";
// echo("php as a function");

?>

</body>
</html>