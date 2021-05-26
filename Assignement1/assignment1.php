<?php

##################################################################
// 1- Write a PHP script to : -

// a) transform a string all uppercase letters.
// b) transform a string all lowercase letters.
// c) make a string's first character uppercase.
// d) make a string's first character of all the words uppercase.




// Solutions
// //all uppercase letters
// print(strtoupper("the quick brown fox jumps over the lazy dog."))."\n";
// //all lowercase letters
// print(strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG"))."\n";
// // make a string's first character uppercase
// print(ucfirst("the quick brown fox jumps over the lazy dog."))."\n";
// // make a string's first character of all the words uppercase
// print(ucwords("the quick brown fox jumps over the lazy dog."))."\n";

##################################################################







##################################################################
// 2-Check whether a string contains a specific string
// Sample string : 'The quick brown fox jumps over the lazy dog.'
// Check whether the said string contains the string 'jumps'.
// $str1 = 'The quick brown fox jumps over the lazy dog.';




// Solution
// if (strpos($str1,'jumps') !== false)
//  {
//     echo 'The specific word is present.';
//  }
// else
//  {
//     echo 'The specific word is not present.';
//  }

##################################################################






##################################################################
// 3-Convert the a integer value of a PHP variable to string


// Solution
// $x =  20;            // $x is an integer
// $str1 = (string)$x; // $str1 is a string now
// // Check whether $x and $str1 are equal or not
// if ($x === $str1)
// {
//   echo "They are the same"."\n";
// }
// else
// {
// echo "They are not same"."\n";
// }

##################################################################






##################################################################
// 4-Extract the file name from the specified string
// 'www.example.com/public_html/index.php
// output: index.php


// Solution
// $path = 'www.example.com/public_html/index.php';

// // echo strrchr($path, "/");
// // echo substr("example." , 2, 1)
// // $file_name = substr("/index.php", 1);


// $file_name = substr(strrchr($path, "/"), 1);
// echo $file_name."\n"; // "index.php"

##################################################################






##################################################################
// 5-Write a PHP script to extract the user name from the following email ID
// Sample String : 'rayy@example.com'
// Expected Output : 'rayy'


// Solution
// $mailid  = 'xyz@example.com';

// // echo strrchr("karachi", "a") ."</br>" ;
// // echo strstr("karachi", "a" , false);
// // echo strstr("karachi", "a" , true);

// $user = strstr($mailid, '@', true);
// echo $user."\n";

##################################################################






##################################################################
// 6- Write a PHP script to get the last three characters of a string. Go to the editor
// Sample String : 'rayy@example.com'
// Expected Output : 'com'

// // Solution
// $str1 = 'xyz@example.com';
// echo substr($str1, -3)."\n";

##################################################################






##################################################################
// 7-Write a PHP script to remove a part of a string from the beginning.

// Sample string : 'rayy@example.com'

// Solution
// $sub_string = 'rayy@';
// $str = 'rayy@example.com';

// // echo substr("xyzafasdf" , 2 , 2);

// if (substr($str, 0, strlen($sub_string)) == $sub_string)
// {
//  $str = substr($str, strlen($sub_string));
// }
// echo $str."\n";

##################################################################






##################################################################
// 8-Write a PHP script to insert a string at the specified position in a given string.

// Original String : 'The brown fox'
// Insert 'quick' between 'The' and 'brown'.


// Solution

// $original_string = 'The brown fox';
// $string_to_insert ='quick';
// $insert_pos = 4;

// The str_replace() function replaces some characters with some other characters in a string.
// echo str_replace("a","" , "abd");


// The substr_replace() function replaces a part of a string with another string
// echo substr_replace("Hello","world",0 ); // // 0 will start replacing at the first character in the string
// echo substr_replace("Hello","world",1);  
// echo substr_replace("abcdef","wxyz",0 , 0); //  Specifies how many characters should be replaced



// $new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
// echo $new_string."\n";


##################################################################






##################################################################
// 9-
// Write a PHP script to remove all leading zeroes from a string.

// Original String : '000547023.24'

// Solution
// $x = '000547023.24';
// $str1 = ltrim($x, '0');
// echo $str1."\n";

##################################################################






##################################################################
// 10-Write a PHP script to replace multiple characters from the following string.

// Sample String : '\"\1+2/3*2:2-3/4*3'

// $my_str = '\"\1+2/3*2:2-3/4*3';



// Solution
// function splits a string into an array.
// print_r(str_split('\\/:*?"<>|+-'));

// echo str_replace("a","b" , "abd");
// echo str_replace("a","" , "abd");

// echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
##################################################################