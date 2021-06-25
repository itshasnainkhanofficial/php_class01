<?php
require_once "../class15th_crud/0-config.php";

// // The prepare() / mysqli_prepare() function is used to prepare an SQL statement for execution
// // mysqli_prepare(connection, query) // by procedural
// // $mysqli -> prepare(query) // by oop
// // prepare and bind
$stmt = $conn->prepare("INSERT INTO employees (name, salary) VALUES (?, ?)");
$stmt->bind_param("si", $name, $salary);

// set parameters and execute
$name = "Yasir";
$salary = 5000;
$stmt->execute();

$name = "Ahsan";
$salary = 6000;
$stmt->execute();

$name = "Bilal";
$salary = 7000;
$stmt->execute();

$last_id = $conn->insert_id;
echo "New records created successfully using prepare and mysqli " . $last_id;

$stmt->close();
$conn->close();














// try {
//     // prepare sql and bind parameters
//     $stmt = $conn->prepare("INSERT INTO employees (name, salary) VALUES (:name, :salary)");
//     $stmt->bindParam(':name', $name);
//     $stmt->bindParam(':salary', $salary);
  
//     // insert a row
//     $name = "Kashif";
//     $salary = 11111;
//     $stmt->execute();
  
//     // insert another row
//     $name = "Nehal";
//     $salary = 123456;
//     $stmt->execute();
  
//     // insert another row
//     $name = "Ahsan";
//     $salary = 654123;
//     $stmt->execute();

//     $last_id = $conn->lastInsertId();
//     echo "</br> New records created successfully by pdo. Last inserted ID is: " . $last_id;
//   } catch(PDOException $e) {
//     echo "Error: " . $e->getMessage();
//   }
//   $conn = null;


?>