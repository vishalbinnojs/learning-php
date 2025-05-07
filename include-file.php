<?php
// echo "include one php file in another file.";

// include("./hello.php");

for($i=0;$i<10;$i++){
    // include("./hello.php"); // include multiple times with respect to condition
    // include_once("./hello.php"); // include same file only once
}

// require("./hello.php");

for($i=0;$i<10;$i++){
    // require("./hello.php"); // include multiple times with respect to condition
    // require_once("./hello.php"); // include same file only once
}




//  include and include_once:- give only warning if file name is incorrect or not found.
// require and require_once:- give warning and Fatal error if file name is incorrect or file not found.
// ***warning can be hide in production****
?>