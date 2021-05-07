<?php

// Function which prints "Hello I am Zura"
function hello()
{
    echo 'Hello I am Ali<br>';
}

hello();
hello();
hello();

// Function with argument
//function hello($name)
//{
//    echo "Hello I am $name";
//}

// Create sum of two functions
function sum($a, $b)
{
    return $a + $b;
}

echo sum(4,5);
echo sum(9,10);

// Create function to sum all numbers using ...$nums
//function sum(...$nums)
//{
//    $sum = 0;
//    foreach ($nums as $num) $sum += $num; // single line statement
//    return $sum;
//}
//echo sum(1, 2, 3, 4, 6); // provide any number of arguments