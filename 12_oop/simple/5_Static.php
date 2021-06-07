<?php
// // simple working

// class PersonClass {
//     public $name ;
//     function show()
//     {
//         return $this-> name;
//     }
// }

// // now initiate object

// $p = new PersonClass();
// $p -> name = "Yasir";
// echo $p-> show();


// using static

// class PersonClass {
//     public static $name ;
//     public static function show()
//     {
//         return self::$name;
//     }
// }

// // No need to initiate object

// // $p = new PersonClass();
// PersonClass::$name = "Yasir";
// echo PersonClass::show();




// // // simple inheritance
// class PersonClass {
//     public $name = "Kamran";
//     function show()
//     {
//         return $this-> name;
//     }
// }

// class Employee extends PersonClass {
//     public $age ;
//     public function ShowEmp()
//     {
//        echo $this -> show();
//     }
// }

// // now initiate object
// $p1 = new PersonClass();
// $emp = new Employee();
// $emp-> ShowEmp();







// // using static
// class PersonClass {
//     public static $name = "Kashan";
//     public static function show()
//     {
//         return self::$name;
//     }
// }

// class Employee extends PersonClass {
//     public $age ;
//     public static function ShowEmp()
//     {
//         echo parent::show();
//     }
// }




// no need to initiate object
// $p1 = new PersonClass();

// PersonClass::$name = "Ahsan";
// Employee::ShowEmp();






// class A {
      
//     public function test($var = "Hello World") {
//         $this->var = $var;
//         return $this->var;
//     }
// }
  
// class B {
//     public static function test($var) {
//         $var = "This is static";
//         return $var;
//     }
// }

// // Creating Object of class A
// $obj = new A();
  
// echo $obj->test('This is non-static');

// echo B::test('This is non-static');

?>