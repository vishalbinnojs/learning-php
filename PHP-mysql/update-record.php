<?php
echo "<h1>Updating student data in MYSQL(database) with php.</h1>";
include_once('./config.php');
// echo "updated.  "

if(isset($_GET['id'])){
    $id = $_GET['id'];
  $getStudent = $conn->prepare("SELECT * FROM students where id = $id");
  $getStudent->execute();
  $student = $getStudent->fetchAll(PDO::FETCH_ASSOC);
//   print_r($student);
$name = $student[0]['name'];
$course = $student[0]['course'];
$batch = $student[0]['batch'];
$city= $student[0]['city'];
$year = $student[0]['year'];
}
?>
<form action="" method="post">
    <input type="text" name="name" value="<?php echo $name ?>">
    <br><br>
    <input type="text" name="course" value="<?php echo $course ?>">
    <br><br>
    <input type="text" name="batch" value="<?php echo $batch ?>">
    <br><br>
    <input type="text" name="city" value="<?php echo $city ?>">
    <br><br>
    <input type="text" name="year" value="<?php echo $year ?>">
    <br><br>
    <button name="update" value="<?php echo $id; ?>">Update Student Data</button>
</form>
<?php
if(isset($_POST['update'])){
  $id = $_POST['update'];
  $name = $_POST['name'];
  $course = $_POST['course'];
  $batch = $_POST['batch'];
  $city = $_POST['city'];
  $year = $_POST['year'];
  $updateStudent = $conn->prepare("UPDATE students set
  name='$name', 
  course='$course',
  batch ='$batch', 
  city ='$city', 
  year = '$year'
  where id = '$id'
  ");
  if($updateStudent->execute()){
    header('location:delete-record.php');
  }else{
    echo "update failed!";
  }

}
?>