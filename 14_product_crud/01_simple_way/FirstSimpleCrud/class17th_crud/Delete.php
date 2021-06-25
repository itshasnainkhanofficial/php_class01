<?php

require_once "../class15th_crud/0-config.php";


// // using mysqli Object Oriented
$sql = "DELETE FROM employees WHERE id=5";

if ($conn->query($sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();



// // using mysqli Procedural
// $sql = "DELETE FROM employees WHERE id=3";

// if (mysqli_query($conn, $sql)) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . mysqli_error($conn);
// }

// mysqli_close($conn);




// // using pdo
// try{
//     $sql = "DELETE FROM employees WHERE id = 2";  
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "Record(s) were deleted successfully.";
// } catch(PDOException $e){
//     die("ERROR: Could not able to execute $sql. " . $e->getMessage());
// }
 
// // Close connection
// unset($conn);