<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Through php</title>
</head>
<body>
    <h1>Inserting Data in Database through php</h1>
    <form action="" method="post">
        <input type="text" name="name" placeholder="enter name">
        <br><br>
        <input type="text" name="course" placeholder="enter course">
        <br><br>
        <input type="text" name="batch" placeholder="enter batch">
        <br><br>
        <input type="text" name="city" placeholder="enter city">
        <br><br>
        <input type="text" name="year" placeholder="enter year">
        <br><br>
        <button>Add New Student</button>
    </form>
</body>
</html>


<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    include_once("./config.php");

    // The prepare() method sets up the SQL query with ? placeholders.
    $student = $conn->prepare("INSERT INTO `students`(`id`,`name`,`course`,`batch`,`city`,`year`) 
    VALUES (NULL, ?, ?, ?, ?, ?)");
    
    // The actual values are provided when execute() is called:
    $result = $student->execute([$name, $course, $batch, $city, $year]);
    // The values in the array ([$name, $course, $batch, $city, $year]) replace the ? placeholders in order.

    if($result){
        echo "Data inserted.";
    }else{
        echo "Insertion failed.";
    }
}
?>