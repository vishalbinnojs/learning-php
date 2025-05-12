<?php
include_once("./config.php");

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
        echo "<td> $data</td>";
    }
    echo "<td>
    <form method='post'>
    <button name='delete' value=".$student['id'].">Delete</button>
    </form>
    </td>
    <td><button><a href='update-record.php?id=".$student['id']."'>Edit</a></button></td>
    </tr>";
}
echo "</table>";

if(isset($_POST['delete'])){
    $id  = $_POST['delete'];
    $getStudents = $conn->prepare("delete from students where id=$id");
    if($getStudents->execute()){
        echo "Record deleted.";
    }else{
        echo "Unable to delete record.";
    }
}

}



?>