<?php


// class MyPerson {

//     public $name ;
    
//     function yourname()
//     {
//         echo "Your name is " . $this-> name;
//     }
// }

// $p1 = new MyPerson();
// // The problem is : you have to initilize all the variables befor use a function
// $p1 -> name = "Nihal";

// $p1->yourname();





// Constructor function call automaticaly when we initiate an object
// In constructor function we can initilize properties

// class MyPerson2 {

//     public $name ;
    
//     function __construct($n){  

//         $this -> name = $n;
        
//     }


//     function yourname()
//     {
//         echo "Your name is " . $this-> name;
//     }
// }

// $p1 = new MyPerson2("Nihal");


// $p1->yourname();



// // for multiple values
// class MyPerson3 {

//     public $name  , $age;
    
//     function __construct($n , $a){  

//         $this -> name = $n;
//         $this -> age = $a;
        
        
//     }


//     function yourname()
//     {
//         echo "Your name is " . $this-> name . " Your age is " . $this -> age;
//     }
// }

// // $p1 = new MyPerson3("Nihal"); // it will throw error
// $p1 = new MyPerson3("Nihal" , 29);


// $p1->yourname();

// for Default value and the right place
// class MyPerson3 {

//     public $name  , $age;
    
//     function __construct($n = "Nihal" , $a = 29){  

//         $this -> name = $n;
//         $this -> age = $a;
        
        
//     }


//     function yourname()
//     {
//         echo "Your name is " . $this-> name . " Your age is " . $this -> age;
//     }
// }


// $p1 = new MyPerson3(); // this will set the default values
// $p1 = new MyPerson3("Bilal" , 25); // this will set this new value


// $p1->yourname();




?>