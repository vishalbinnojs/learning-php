<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies with request</title>
</head>
<body>
    <h1>Cookie with html form</h1>
    <form action="" method="post">
        <input type="text" name="user" placeholder="enter user name">
        <br>
        <br>
        <button name="btn" value="set">Set Cookies</button>
        <br>
        <br>
        <button name="btn" value="display">Display Cookies</button>
        <br>
        <br>
        <button name="btn" value="delete">Delete Cookies</button>
        <br>
        <br>
    </form>
</body>
</html>


<?php
if(isset($_POST['btn'])){    // checks if post request has come or not

    if($_POST['btn']=="set"){ 
     $val = $_POST[ 'user'];
    //  echo $val;
    setcookie("user",$val);
    echo "cookie is set";
    }

    if($_POST['btn']=="display"){
        if(isset($_COOKIE['user'])){
            echo $_COOKIE['user'];
        }
    }

    if($_POST['btn']=="delete"){
        if(isset($_COOKIE['user'])){
            setcookie("user",null,-1);
        }
    }

}

?>