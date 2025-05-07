<?php
// syntax and parameters
// setcookie(name,value,path,domain,secure,httponly);

setcookie("fruit","apple",time()+(86400));
setcookie("fast-food","Burger",time()+(86400));

if(isset($_COOKIE['fruit'])){
    echo "current cookie is ".$_COOKIE['fruit'];
}else{
    echo "no cookie set";
}


echo "<hr>";


if(isset($_COOKIE['fast-food'])){
    echo "next cookie is ".$_COOKIE["fast-food"];
}else{
    echo "no cookie found.";
}
echo "<hr>";
print_r($_COOKIE); // prints all the cookies
?> 