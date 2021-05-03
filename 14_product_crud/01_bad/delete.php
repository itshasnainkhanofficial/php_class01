<?php
// ----------- TODO delete image direcory -------------

// $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $id = $_POST['id'] ?? null;
// if (!$id) {
//     header('Location: index.php');
//     exit;
// }

// $statement = $pdo->prepare('DELETE FROM products WHERE id = :id');
// $statement->bindValue(':id', $id);
// $statement->execute();

$conn = new mysqli("localhost", "root", "", "products_crud");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
$id = $_POST['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

$sql = "SELECT * FROM products where id = $id";
$result = mysqli_query($conn, $sql);
// var_dump($result) ;
// Fetch all
$product = mysqli_fetch_row($result);

// var_dump($product[3]) ;


$imagePath = $product[3];
// var_dump($imagePath) ;

if(file_exists($imagePath)){

    //delete the image
    unlink($imagePath);
}

$sql = "DELETE FROM products WHERE id=$id";
$deleteResult = mysqli_query($conn, $sql);
if ($deleteResult) {
    // header('Location: index.php');
} else {
    echo "some error occured";
}

// close connection
mysqli_close($conn);
