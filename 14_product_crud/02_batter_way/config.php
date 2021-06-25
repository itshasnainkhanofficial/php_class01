<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'simpledb');
 
/* Attempt to connect to MySQL database */
try{
    $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION , PDO::FETCH_ASSOC);
    echo "Connection working fine </br>";
    // Basically, we here are setting the PDO error mode attribute (controls error reporting)
    // to raise a PDOException that tells you what went wrong when it goes wrong.
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}










// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'simpledb');
 
// /* Attempt to connect to MySQL database */
// $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }

// else{
//       echo "connection working fine </br>";
// }