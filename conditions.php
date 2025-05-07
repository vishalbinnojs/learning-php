<?php
//1. If else statement- when one out of two conditions need to be executed.
$age = 20;

if($age>=18){
    echo "Candidate is eligible for vote.";
} 
else {
    echo "Candidate is underage to vote.";
}
echo "<hr>";


//2. else if statement : used when multiple conditions are there.
$marks = 44;

if($marks>=90 ){
    echo "You have grade = A+";
}elseif($marks>=80 && $marks<90 ){
    echo "You have grade = A";
}elseif($marks>=70 && $marks<80){
    echo "You have grade = B";
}elseif($marks>=60 && $marks<70){
    echo "You have grade = C";

}elseif($marks>=45 && $marks<60){
    echo "You are a average student.";
}

else{
    echo "You have to re-appear in the examination.";
}
echo "<hr>";
// 3. switch statement: It is also used for multiple conditions(better over else if)
$favouriteColor = "red";

switch($favouriteColor){
    case "red":
        echo "My favourite color is $favouriteColor. ";
        break;
        case "blue":
            echo "My favourite color is $favouriteColor.";
            break;
            case "green":
                echo "My favourite color is $favouriteColor.";
                break;
                case "gray":
                    echo "My favourite color is $favouriteColor.";
                    break;
                    default :
                    echo "No color match.";
                    break;

}
echo "<hr>";

?>