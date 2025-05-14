<form action="" method="post">
<input type="text" name="search" placeholder="search name">
<br><br>
<button>Search</button>

</form>
<?php
include_once('./config.php');
if(isset($_POST['search'])){
  $search = $_POST['search'];
    // $students = $conn->prepare("SELECT * FROM students where name='$search'");   // search with the name provided in database
    $students = $conn->prepare("SELECT * FROM students where name like'%$search%'");  // also with single characters e.g a,i,j
    $students->execute();
    $result = $students->fetchAll(PDO::FETCH_ASSOC);
    // print_r($result);  // prints data in array

    echo "<table border=1>";
    echo "<tr>";
// headings loop
foreach(array_keys($result[0]) as $heading){
    echo "<th> $heading </th>";
}
echo "</tr>";
// data loops
foreach($result as $student){
    echo "<tr>";
    foreach($student as $data){
        echo "<td>".$data."</td>";
    }
    echo "</tr>";
}
echo "</table>";
}
?>