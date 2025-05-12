<?php
echo "<h1>Dropdown list using MYSQL with php</h1>"
include_once("./config.php");

$getStudent = $conn->prepare("SELECT id,name FROM students");
$getStudent->execute();
$studentData = $getStudent->fetchAll(PDO::FETCH_ASSOC);

echo "<select>";
echo "<option>Select Name</option>";
foreach($studentData as $student){
  echo "<option value=".$student['id'].">".$student['name']."</option>";
  
}
echo "</select>";


?>