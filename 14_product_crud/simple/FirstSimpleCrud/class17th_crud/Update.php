<?php
require_once "../class15th_crud/0-config.php";


// // MySQLi Object-oriented
// $sql = "UPDATE employees SET name='Ali' WHERE id=6";

// if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . $conn->error;
// }

// $conn->close();


// // MySQLi Procedural

// $sql = "UPDATE employees SET name='Bilal' WHERE id=6";

// if (mysqli_query($conn, $sql)) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . mysqli_error($conn);
// }

// mysqli_close($conn);




// try {

//     $sql = "UPDATE employees SET name='Kamran' WHERE id=6";
  
//     // execute the query
//     $conn->exec($sql);
//     echo " records UPDATED successfully";

//   } catch(PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
//   }
  
//   $conn = null;