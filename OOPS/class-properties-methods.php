<?php
echo "<h1>Properties and Methods in class.</h1>";

// public,protected, private : access modifiers

class Properties{
    public $publicProperty = "I am Vishal.";

    // using public property in a method
    function getName(){
        echo $this->publicProperty;
    }
    //updating a publicProperty
    function updateName(){
       echo $this->publicProperty="I am Vishal Bhardwaj.";
    }
    // function updateName($name){          // change dynamically
    //    echo $this->publicProperty=$name;
    // }
    
    // this is public method
    public function publicMethod(){
        return "I am public method.";
    }

}

$firstObject = new Properties();
echo $firstObject-> publicProperty; // no need of $ as prefix while accessing.
echo "<br>";
echo $firstObject->getName();         
echo "<br>";
echo $firstObject->updateName();
echo "<br>";
// echo $firstObject->updateName("Hello");  // change dynamically
// echo "<br>";
echo $firstObject-> publicMethod();
echo "<br> public property got changed.";
echo $firstObject->publicProperty;


echo "<hr>";
?>




<?php
echo "<h2>Access Modifiers in PHP.</h2>";
// access modifiers in Classes
// Understanding public, private, and protected in PHP Classes
// These are access modifiers that control the visibility and accessibility of class properties and methods. Here's the difference:

// Public
// Accessible from: Anywhere

// Scope: Inside the class, outside the class, and in child classes

// Example:
// class MyClass {
//     public $publicProperty = 'I am public';
    
//     public function publicMethod() {
//         return 'Public method';
//     }
// }

// $obj = new MyClass();
// echo $obj->publicProperty;     // Accessible
// echo $obj->publicMethod();     // Accessible
// Protected
// Accessible from: Within the class itself and by inheriting classes

// Scope: Not accessible from outside the class hierarchy

// ***********+++++++++++++++++++++++++++***************************+++++++++++++++++++++++

// Example:


// class MyClass {
    //     protected $protectedProperty = 'I am protected';
    
    //     protected function protectedMethod() {
        //         return 'Protected method';
        //     }
        // }
        
        // class ChildClass extends MyClass {
            //     public function accessProtected() {
                //         echo $this->protectedProperty;  // Accessible
                //         echo $this->protectedMethod();  // Accessible
                //     }
                // }
                
                // $obj = new MyClass();
                // // $obj->protectedProperty;    // Error - Not accessible
                // // $obj->protectedMethod();    // Error - Not accessible
                // Private
                // Accessible from: Only within the class that defines it
                
                // Scope: Not accessible by child classes or from outside
                
 // ***********+++++++++++++++++++++++++++***************************+++++++++++++++++++++++
 
// Example:

// class MyClass {
//     private $privateProperty = 'I am private';
    
//     private function privateMethod() {
//         return 'Private method';
//     }
    
//     public function accessPrivate() {
//         echo $this->privateProperty;  // Accessible
//         echo $this->privateMethod();  // Accessible
//     }
// }

// class ChildClass extends MyClass {
//     public function tryAccess() {
//         // $this->privateProperty;  // Error - Not accessible
//         // $this->privateMethod();  // Error - Not accessible
//     }
// }

// $obj = new MyClass();
// // $obj->privateProperty;      // Error - Not accessible
// // $obj->privateMethod();      // Error - Not accessible
// $obj->accessPrivate();         // Works (accessed through public method)
// Best Practices
// Use private by default to enforce encapsulation

// Use protected when you need to allow inheritance but not public access

// Use public only for the class's API (methods/properties that need external access)




?>