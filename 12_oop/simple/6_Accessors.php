<?php
// problem

// class Student {
//     public $name;
//     function showName()
//     {
//         return $this -> name;
//     }
// }


// $std = new Student();

// $std -> name = "Kashan";

// echo $std -> showName();



class Student {
    private $name;
    function showName()
    {
        return $this -> name;
    }
}


$std = new Student();

$std -> name = "Kashan";

echo $std -> showName();


// class Student {

//     public $name;
//     private $age;

//     public function GetAge(){
//         return $this -> age;
//     }

//     public function SetAge($a){
//         $this -> age = $a;
//     }

// }


// $std = new Student();
// $std -> SetAge("Nehal");
// echo $std -> GetAge();






// class Student {
//     private $email;

//     public function GetEmail(){
//         return $this -> email;
//     }

//     public function SetEmail($e){
//         if(strpos($e,"@") > -1){
//             $this -> email = $e;
//         }
//         else{
//             echo "email not correct";
//         }
//     }

// }


// $std = new Student();
// $std -> SetEmail("Nehalgmail.com");
// echo $std -> GetEmail();


?>
