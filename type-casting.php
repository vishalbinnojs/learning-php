<?php
// type casting in php
// converting one data type into another is called type casting or casting.

$a = 60;
// var_dump($a);
$a = (string) $a;
//  $a = (boolean) $a;
// echo $a;
var_dump($a);
echo "<br>";

$b = "3000";
$b = (int) $b;
// echo $b;
var_dump($b);
echo "<br>";

$c = 1;
$c = (float) $c;
// echo $c;
var_dump($c);
echo "<br>";

$d = "hello";
// $d = "";
$d = (bool) $d;
echo $d;
var_dump($d);
echo "<br>";

// $e = 10;
$e = "10";
$e = (array) $e;
// echo $e;
var_dump($e);
echo "<br>";

$f = 20;
// $f = "20";
$f = (object) $f;
var_dump($f);

$g = ["akash"];
$g = (string) $g; //not possible
// var_dump($g);



?>