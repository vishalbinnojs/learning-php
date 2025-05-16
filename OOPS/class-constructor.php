<?php
// echo "<h1> Constructor in PHP</h1>";

// class ConstructorDemo{
//     function setName(){
//         echo "Suraj";
//     }
//     function __construct(){    // No need to call manually like setName() and it automatically called before setName() 
//                                // i.e it has highest priority
//         echo "__construct called automatically.";
//     }
// }

// $obj = new ConstructorDemo();
// echo "<br>";
// $obj->setName();
 ?>
<hr>
<?php
echo "<h1> Constructor in PHP</h1>";

class ConstructorDemo{
   public $name;
   function __construct(){   // we can create only one constructor of one class.
       $this->name = "Vishwas";
    }
    function setName(){
        echo $this->name;
    }
} 
    
$obj = new ConstructorDemo();

$obj->setName();
?>