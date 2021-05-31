<?php

// What is class and instance

require_once './Person.php';
require_once './Student.php';

//$p = new Person('Ali', 28, null);
//echo $p->name.'<br>';
//echo $p->age.'<br>';
//echo $p->getSalary().'<br>';
//$p->setSalary(100);
//echo $p->getSalary().'<br>';

$s = new Student("Ali", '28', 1234);
echo $s->name.'<br>';
