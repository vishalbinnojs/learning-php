<?php
print_r($_FILES);
if($_FILES['fileUpload']){
$path = $_FILES['fileUpload']['name'];
// echo $path; // prints the file name
echo "<hr>";
$upload_path = "./uploads/".$path; // concate the folder name with the file name
echo $upload_path; // prints the path where file is going to upload.
echo "<hr>";

// this will move the uploaded file to the desired location
if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path)){
echo "file uploaded successfully.";
 
}else{
    die("upload failed");
}
}
else{
    die("file not found");
}


?>