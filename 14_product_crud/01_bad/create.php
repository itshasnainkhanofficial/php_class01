<?php

require_once "functions.php";

// $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $errors = [];

// $title = '';
// $description = '';
// $price = '';
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $title = $_POST['title'];
//     $description = $_POST['description'];
//     $price = $_POST['price'];

//     $image = $_FILES['image'] ?? null;
//     $imagePath = '';

//     if (!is_dir('images')) {
//         mkdir('images');
//     }

//     if ($image && $image['tmp_name']) {
//         $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
//         mkdir(dirname($imagePath));
//         move_uploaded_file($image['tmp_name'], $imagePath);
//     }

//     if (!$title) {
//         $errors[] = 'Product title is required';
//     }

//     if (!$price) {
//         $errors[] = 'Product price is required';
//     }

//     if (empty($errors)) {
//         $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
//                 VALUES (:title, :image, :description, :price, :date)");
//         $statement->bindValue(':title', $title);
//         $statement->bindValue(':image', $imagePath);
//         $statement->bindValue(':description', $description);
//         $statement->bindValue(':price', $price);
//         $statement->bindValue(':date', date('Y-m-d H:i:s'));

//         $statement->execute();
//         header('Location: index.php');
//     }

// }
$conn = new mysqli("localhost","root","","products_crud");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} 
$errors = [];

$title = '';
$description = '';
$price = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $title = validate($_POST['title']);
    $description = validate($_POST['description']);
    $price = validate($_POST['price']);

    $image = $_FILES['image'] ?? null;
    $imagePath = '';

    if (!is_dir('images')) {
        mkdir('images');
    }

    if ($image && $image['tmp_name']) {
        $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'], $imagePath);
    }
	if (!$title) {
        $errors[] = 'Product title is required';
    }

    if (!$price) {
        $errors[] = 'Product price is required';
    }
    if (empty($errors)) {
        $date = date('Y-m-d H:i:s');
       $sql = "INSERT INTO products (title, image, description, price, create_date) 
               VALUES('$title','$imagePath','$description', '$price','$date')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
         header('Location: index.php');
       }
       else{
           echo "some";
       }

       // Free result set
        mysqli_free_result($result);

	}

}


// close connection
mysqli_close($conn);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="app.css" rel="stylesheet"/>
    <title>Products CRUD</title>
</head>
<body>
<h1>Create new Product</h1>

<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
            <div><?php echo $error ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Product Image</label><br>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label>Product title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
    </div>
    <div class="form-group">
        <label>Product description</label>
        <textarea class="form-control" name="description"><?php echo $description ?></textarea>
    </div>
    <div class="form-group">
        <label>Product price</label>
        <input type="number" step=".01" name="price" class="form-control" value="<?php echo $price ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>