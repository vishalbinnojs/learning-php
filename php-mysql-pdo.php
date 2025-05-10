 <?php
$host = "localhost";
$username = "root"; // mysql default username
$password=null;    //  mysql default password


try{
    $conn= new PDO("mysql:host=$host; dbname=college",$username,$password);  // PDO: php data object
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connected successfully!";

}catch(PDOException $err){
    echo "Connection failed $err->getMessage()";
}
echo "<br>";
$result = $conn->query("show tables");
while($row= $result->fetch(PDO::FETCH_NUM)){
    print_r($row);
}




?>