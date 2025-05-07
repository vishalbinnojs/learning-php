<?php

// $_REQUEST is super global variable or method which works with 
// both method="get" & method="post";
// print_r($_GET); // method='get' in html
// print_r($_POST); //  method = 'post" in html

// print_r($_REQUEST['user_name']); for single value

// print_r($_REQUEST);  // for whole data in array

$_REQUEST['use_profession'] = "Web Development";  // forcefully adding data 

if($_REQUEST){

    foreach($_REQUEST as $key => $data){
        echo $key. " is " .$data;
        echo "<br>";
    }

}


    


?>