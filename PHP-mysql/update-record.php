<?php
echo "<h1>Updating student data in MYSQL(database) with php.</h1>";
include_once('./config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getStudent = $conn->prepare("SELECT * FROM students WHERE id = :id");
    $getStudent->bindParam(':id', $id);   // bindParam(): Prevent SQL injection attack
    $getStudent->execute();
    $student = $getStudent->fetch(PDO::FETCH_ASSOC);

    if ($student) {
        $name = $student['name'];
        $course = $student['course'];
        $batch = $student['batch'];
        $city = $student['city'];
        $year = $student['year'];
    } else {
        echo "Student not found.";
        exit();
    }
} else {
    echo "Student ID not provided.";
    exit();
}
?>
<form action="" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>
    <label for="course">Course:</label><br>
    <input type="text" id="course" name="course" value="<?php echo htmlspecialchars($course); ?>"><br><br>
    <label for="batch">Batch:</label><br>
    <input type="text" id="batch" name="batch" value="<?php echo htmlspecialchars($batch); ?>"><br><br>
    <label for="city">City:</label><br>
    <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($city); ?>"><br><br>
    <label for="year">Year:</label><br>
    <input type="text" id="year" name="year" value="<?php echo htmlspecialchars($year); ?>"><br><br>
    <button type="submit" name="update" value="<?php echo $id; ?>">Update Student Data</button>
</form>
<?php
if (isset($_POST['update'])) {
    $id = $_POST['update'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    $updateStudent = $conn->prepare("UPDATE students SET
        name = :name,
        course = :course,
        batch = :batch,
        city = :city,
        year = :year
        WHERE id = :id
    ");

    $updateStudent->bindParam(':name', $name);
    $updateStudent->bindParam(':course', $course);
    $updateStudent->bindParam(':batch', $batch);
    $updateStudent->bindParam(':city', $city);
    $updateStudent->bindParam(':year', $year);
    $updateStudent->bindParam(':id', $id);

    if ($updateStudent->execute()) {
        header('location:delete-record.php');
        exit();
    } else {
        echo "Update failed!";
        // You might want to log the error for debugging purposes
        // error_log("Database update failed: " . print_r($updateStudent->errorInfo(), true));
    }
}
?>