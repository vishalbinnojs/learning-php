<?php

// This is a common file which connects database(MYSQL) with the server.
// To connect more files with server, we should import this to that particular file.
// e.g read.php file
$host = "localhost";
$username = "root";
$password=null;

$conn = new PDO("mysql:host=$host; dbname=college",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// echo "connected succefully";


// Data base is connected to the server.
?>