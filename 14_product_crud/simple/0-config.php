<?php







// // Mysqli Object Oriented
// // /* Database credentials. Assuming you are running MySQL
// // server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'simple_crud_db');
 
/* Attempt to connect to MySQL database */
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
















// //Mysqli procedural

// // /* Database credentials. Assuming you are running MySQL
// // server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'simple_crud_db');
 
// /* Attempt to connect to MySQL database */
// $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// // Check connection
// if(!$conn){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }








// //PDO (PHP Data Objects)
// // to read more about PDO 

// // /* Database credentials. Assuming you are running MySQL
// // server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'simple_crud_db');
 
// /* Attempt to connect to MySQL database */
// try{
//     $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
//     // Set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // Basically, we here are setting the PDO error mode attribute (controls error reporting)
//     // to raise a PDOException that tells you what went wrong when it goes wrong.
// } catch(PDOException $e){
//     die("ERROR: Could not connect. " . $e->getMessage());
// }
?>