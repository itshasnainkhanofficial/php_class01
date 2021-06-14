<?php
require_once "config.php";

// // By MySqli OOP

// $sql = "INSERT INTO employees (name, salary) VALUES ('a', 500090)";

// if ($conn->query($sql) === TRUE) {
//   $last_id = $conn->insert_id;
//   echo "New record created successfully by OOP. Last inserted ID is: " . $last_id;
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();















// // By MySqli procedural
// $sql = "INSERT INTO employees (name, salary) VALUES ('a', 5090)";

// if (mysqli_query($conn, $sql)) {
//   $last_id = mysqli_insert_id($conn);
//   echo "New record created successfully by procedural. Last inserted ID is: " . $last_id;
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// mysqli_close($conn);









// try {

//     $sql = "INSERT INTO employees (name, salary) VALUES ('a', 700)";
//     // use exec() because no results are returned   
//     $conn->exec($sql);
//     $last_id = $conn->lastInsertId();
//     echo "New record created successfully by pdo. Last inserted ID is: " . $last_id;
//   } catch(PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
//   }
  
//   $conn = null;











?>