<?php
require_once './config.php';

// // by PDO
$id = $_POST['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

$statement = $conn->prepare('DELETE FROM employees WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
header('Location: index.php');






// // by Mysqli

// $id = $_POST['id'] ?? null;
// if (!$id) {
//     header('Location: index.php');
//     exit;
// }


// for checking id purpose
// $sql = "SELECT * FROM employees where id = $id";
// $result = mysqli_query($conn, $sql);
// // var_dump($result) ;
// // Fetch all
// $employee = mysqli_fetch_row($result);

// // var_dump($employee[3]) ;


// $sql = "DELETE FROM employees WHERE id=$id";
// $deleteResult = mysqli_query($conn, $sql);
// if ($deleteResult) {
//     header('Location: index.php');
// } else {
//     echo "some error occured";
// }

// // close connection
// mysqli_close($conn);
