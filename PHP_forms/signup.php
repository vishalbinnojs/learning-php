<?php
// print_r($_POST);
if($_POST){

    echo "username is ".$_POST['user_name'];
    echo "<br>";
    echo "userpassword is ".$_POST['user_password'];
    echo "<br>";
    echo "useremail".$_POST['user_email'];
}
?>