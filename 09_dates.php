<?php

// // Required parameter of date method
// d - The day of the month (from 01 to 31)
// j - The day of the month without leading zeros (1 to 31)
// D - A textual representation of a day (three letters)
// l (lowercase 'L') - A full textual representation of a day
// F - A full textual representation of a month (January through December)
// z - The day of the year (from 0 through 365)
// a - Lowercase am or pm
// t - The number of days in the given month
// N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
// S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
// w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
// W - The ISO-8601 week number of year (weeks starting on Monday)
// m - A numeric representation of a month (from 01 to 12)
// M - A short textual representation of a month (three letters)
// n - A numeric representation of a month, without leading zeros (1 to 12)
// L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
// o - The ISO-8601 year number
// Y - A four digit representation of a year
// y - A two digit representation of a year
// A - Uppercase AM or PM
// g - 12-hour format of an hour (1 to 12)
// G - 24-hour format of an hour (0 to 23)
// h - 12-hour format of an hour (01 to 12)
// H - 24-hour format of an hour (00 to 23)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds, with leading zeros (00 to 59)
// u - Microseconds (added in PHP 5.2.2)



// echo date("d"); // (from 01 to 09)
// echo date("j"); // (from 1 to 9)
// echo date("D"); // (short form of day - mon,tue..)
// echo date("l"); // (full form of day - monday,tuesday..)
// echo date("F"); // (full form of month - january,febrary..)
// echo date("z"); // (day from 365)
// echo date("t"); // (number of day in a given month)
// echo date("a"); // (am/pm)
// echo date("A"); // (AM/PM)



// Print current date 
// echo "Today is " . date("d-m-Y") . "<br>";
// Print current date and time
// echo date('d/m/Y H:i:s') . '<br>';

// // Print current timestamp
// echo time() . '<br>';
// echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>'; // yesterday
// echo date('Y-m-d H:i:s', time() + 60 * 60 * 24) . '<br>'; // tomorrow

// // Different format: https://www.php.net/manual/en/function.date.php
    // echo date('F j Y, H:i:s') . '<br>';

    // function date($name){
    //     if($name == "d"){
    //         echo "call me ali dana";
    //     }
    //     else if ($name == "m"){
    //         echo "month";
    //     }
    
    //     else{
    //         echo "thats good";
    //     }
    // }
    
    
    // date("ali");