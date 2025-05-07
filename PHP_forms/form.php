 <?php
//  print_r($_POST);
 
 if(isset($_POST['user'])){
  echo "User name is ".$_POST['user'];
  echo "<br>";
  echo "User email is ".$_POST['email'];
  echo "<br>";
  echo "User password is ".$_POST['password'];
  echo "<br>";
  echo "User is skilled in ". implode(",",$_POST['skills']); // implode function convert array to string.
  echo "<br>";
  echo "User gender is ".$_POST['gender'];
  echo "<br>";
  echo "User city is ".$_POST['city'];
  echo "<br>";
  echo "User says ".$_POST['bio'];
  
  
 }
   ?>