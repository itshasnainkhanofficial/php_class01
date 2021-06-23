<?php

require_once "../class15th_crud/0-config.php";

// // by msqli oop
// $sql = "SELECT * FROM employees";
// $result = $conn->query($sql);
// // echo print_r($result);
// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["name"]. "-" . $row["salary"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();



// // // by mysqli procedural


// $sql = "SELECT * FROM employees";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["id"]. " - Name: " . $row["name"]. "-" . $row["salary"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

// mysqli_close($conn);




// by PDO
$result = $conn-> query("SELECT * FROM employees");

// print_r($result);

// echo "</br>";
// echo "<pre>";
// print_r($result->fetch());
// echo "</pre>";

// echo "<pre>";
// print_r($result->fetch(PDO::FETCH_ASSOC));
// echo "</pre>";

// by default fetch() have PDO::FETCH_BOTH means we can access by index or key
// $myresult1 = $result->fetch();
// echo "<pre>";
// print_r($myresult1[1]);
// echo "</pre>";

// $myresult1 = $result->fetch();
// echo "<pre>";
// print_r($myresult1["name"]);
// echo "</pre>";



// $myresult1 = $result->fetch(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($myresult1[0]); // will throw error because we can't access using index
// echo "</pre>";

// $myresult1 = $result->fetch(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($myresult1["name"]);
// echo "</pre>";


// echo "<table>";
// while($row = $result->fetch(PDO::FETCH_ASSOC)) { 	
//     echo "<tr>";
//     echo "<td>".$row['id']."</td>";
//     echo "<td>".$row['name']."</td>";
//     echo "<td>".$row['salary']."</td>";
//     echo "</tr>";
// }
// echo "</table>";

?>