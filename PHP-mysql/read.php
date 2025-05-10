<?php
echo "<h1> Reading Data from MYSQL Database</h1>";
// including/importing config.php file to read.php
include_once("./config.php");
// Reading students data from config.php
$getStudents = $conn->prepare("SELECT * FROM students");
$getStudents->execute();
$students = $getStudents->fetchAll(PDO::FETCH_ASSOC);
// PDO::FETCH_ASSOC will extract only associative array from database.
echo "<pre>";
print_r($students);
echo "</pre>";


if($students){
echo "<table border=1>";
echo "<tr>";
foreach(array_keys($students[0]) as $heading){  // array_keys() returns keys from array
echo "<th>".$heading."</th>";
}
echo "</tr>";
foreach($students as $student){
    echo "<tr>";
    foreach($student as  $data){ 
    echo "<td>".$data."</td>";
        
}
echo "</tr>";   
}
echo "</table>";
}

?>