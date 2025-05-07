<?php
 // used to store multiple data types in single variable
 $arr = ["peter","england",1986];
//  echo $arr[0];
//  echo "<br>";
//  echo $arr[1];
//  echo "<br>";
//  echo $arr[2];
//  echo "<br>";
//  echo $arr[3];
//  echo "<br>";

for($i=0;$i<count($arr);$i++){
    echo $arr[$i];
    echo '<br>';
}

// Foreach loop
$users =['anil','payal','sam','bruce','peter'];

foreach($users as $x){
    // if($x=="bruce"){
    //     continue;
    // }
    echo "<h3>".$x."</h3>";

    // if($x=="bruce"){
    //     break;
    // }
}
 // 2nd way(synax)
foreach($users as $x):
    echo $x;
    echo "<br>";
endforeach;
echo "<hr>";
// Associative Array
 $userDetails =[
     "name"=>"anirudh",
     "age"=>30,
     "city"=>"delhi",
     "email"=>"abc@gmail.com"
 ];
//  echo $userDetails["name"];
//  echo $userDetails["age"];

foreach($userDetails as $key => $data){
    echo "$key is" ." $data.";
    echo "<br>";
}
echo "<hr>";

// Multidimensional Array
 $mulArr = [
     [1,"January"],
     [2,"february"],
     [3,"march"],
     [4,"April"]
 ]; 
 // echo "<pre>";
//  print_r($mulArr); // to print an array
// echo "<pre>";
 foreach($mulArr as $info){
 foreach($info as $data){
     echo $data;
    }
     echo "<br>";
 }


 // displaying multidimensional array data in table
 echo "<table border=1>";
 foreach($mulArr as $info){
     echo "<tr>";
     foreach($info as $data){
        echo "<td>".$data."</td>";
        
    }
    echo "</tr>";
    }
    echo "</table>";

    echo "<hr>";

    // Mulidimensional Associative Array
     $person = [
         ["name"=>"Kuldeep","age"=>29,"city"=>"gurugram"],
         ["name"=>"Vishal","age"=>29,"city"=>"palampur"],
         ["name"=>"Atul","age"=>29,"city"=>"delhi"],
     ];

     foreach($person as $humans){
         foreach($humans as $key => $value ){
             echo "$key is $value <br>";
         }
         echo "<br>";
     }
     // data in a table
echo "<table border=2>";
foreach($person as $humans){
   
    echo "<tr>";
    foreach($humans as $key => $bio){
        echo "<td>";
        echo "$bio";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo " <hr>";

// Add and Remove Element in Array

$element = ["Abhilash","karan","Bhuvneshwar","Kuljeet"];
array_push($element,"Shikha","Rohan","Vivek"); // multiple elements can be pushed
echo "<pre>";
print_r ($element);
echo "</pre>";

// array_pop($element); // remove from end
// array_pop($element);

// array_splice($element,0,4); // remove multiple from start
//  array_splice($element,-2); // remove multiple from end



echo "<pre>";
print_r ($element);
echo "</pre>";


?>