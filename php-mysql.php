<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "college";

// MySQLi (MySQL Improved) is a PHP extension that allows you to access and interact with MySQL databases. Here's a breakdown of what it is and why it's important:

$conn = new mysqli($host,$username,$password,$database);  // MySQLi class/object (representing a connection to the MySQL server)
if($conn->connect_error){                //  It checks if the $conn object has a connect_error property, which would be set if the connection to the database failed.
    die ("connection error" .$conn->connect_error);
}

echo "connection successful";
echo "<br>";
$result = $conn->query("show tables")->fetch_all();  // 
print_r($result);

?>