<?php
// super global variables are predefined in php
// global variables are declared by the user.
$a = "Hello";   // global variable user defined
$number = 1237132090;   // global variable user defined
// const data = "Hello"; // it can't be shown by $GLOBALS(super global variable)
echo "<h4> Super Global Variables</h4>";
echo "<pre>";
print_r($GLOBALS); //use to print all the user defined variables
// print_r($_SERVER); //use to print all the user defined variables
// print_r($_GET); // to get GET requesst data
// print_r($_POST); // to get POST request data
// print_r($_REQUEST); // work with both get and post
// print_r($_FILES); // use to display uploaded file on the server   
// print_r($_COOKIE);  // to manage cookies
// print_r($_SESSION); // to check login status between two tabs
// print_r($_ENV); // informatioin about the environment you are using.
echo "<pre>";






 





?>