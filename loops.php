<?php
// for loop
$name = "Vishal Bhardwaj";
$table = 2;
for ($i=1; $i <=10 ; $i++) { 
    echo $name;
    
    echo $table * $i;
    echo "<br>";
}


echo "<hr>";
?>

<?php
// break and continue statement in loop 
for ($i=0; $i <10 ; $i++) { 
    echo "value of i is $i <br>";
    if($i==5){
        break;
    }
    
}
echo "<hr>";

for($i=0;$i<10;$i++){
    if($i==3 || $i==7){
        continue; // 3 and 7 are skipped.
    }
    echo $i;
    echo "<br>";
    
}
echo "<hr>";
$nested = "<h3>Nested for loop</h3>";
echo $nested;

for($i = 0; $i < 5; $i++) {
    $str = "";
    for($j = 0; $j <= $i; $j++) {
        $str .= "*";
    }
    echo $str . "<br>"; // Add newline after each row
}
echo "<hr>";



 // goto statement
 $x =10;
 echo "condition true <br>";

 if($x==10){
goto jump;
 }
 // when condition is true this line of code get skipped.
 $NAME = "vishal";
 echo $NAME ."<br>";


 jump:
 echo "statement jumped to line no. 67"; 
echo "<br>";

for($i=0;$i<10;$i++){
    echo "$i <br>";

    if($i==5){
        goto outsideLoop;
    }

}
outsideLoop:
echo "Jumped to outside after 5 counts.";

echo "<hr>";



// While loop

$value = 0;
while($value<=10){
    echo $value;
    echo "<br>";
    $value++;
}
echo "<hr>";
//do while
 
$val = 1;
do{
echo $val;
echo "<br>";
$val++;
}while($val<=10)

// Foreach loop
$users =['anil','payal','sam','bruce','peter']

foreach($users as $x){
    echo "<h3>$x</h3>";
}
?>