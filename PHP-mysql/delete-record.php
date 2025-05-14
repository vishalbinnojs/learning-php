<?php
include_once("./config.php");
// Handle deletion first (before any output)
if(isset($_POST['delete'])){
    $id  = $_POST['delete'];
   $getStudents = $conn->prepare("DELETE FROM students WHERE id = ?");
   
    if($getStudents->execute([$id])){    // PDO safely binds the variable $id(value) and replace ? while executing
        echo "Record deleted.";
        header("Refresh:0"); // Reload to reflect changes
    }else{
        echo "Unable to delete record.";
    }
  }


// Fetch student Data
$getStudents = $conn->prepare("SELECT * FROM students");
$getStudents->execute();
$studentData = $getStudents->fetchAll(PDO::FETCH_ASSOC);
// print_r($studentData);

if($studentData){
    echo "<table border=1>";
    echo "<tr>";
    foreach(array_keys($studentData[0]) as $heading){
 echo "<th>$heading</th>";   
}
echo "</tr>";

foreach($studentData as $student){
    echo "<tr>";
    foreach($student as $data){
        echo "<td style='word-wrap:break-word; background:rgb(197, 141, 141);'>" .$data."</td>";
    }
    echo "<td>
    <form method='post' onsubmit='return confirm(\"Are you sure?\")'    >
    <button name='delete' value=".$student['id'].">Delete</button>
    </form>
    </td>
    <td><a href='update-record.php?id=".$student['id']."'>Update</a></td>
    </tr>";
}
echo "</table>";
}



?>