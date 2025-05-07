<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call php function</title>
</head>
<body>
    <form action="" method="post">
        <button name="btn" value="btn-1">Call function</button>
    </form>
</body>
</html>


<?php
// isset function check if request is coming or not
// print_r($_REQUEST['btn']);
if(isset($_REQUEST['btn'])){
btn_click_test();
}
function btn_click_test(){
    echo "function call on button click.";
}
?>