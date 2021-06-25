<?php

require_once './config.php';

$errors = [];
$name = '';
$salary = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $name = validate($_POST['name']);
    $salary = validate($_POST['salary']);


    if (!$name) {
        $errors[] = 'name is required';
    }

    if (!$salary) {
        $errors[] = 'salary is required';
    }

    if (empty($errors)) {
        $statement = $conn->prepare("INSERT INTO employees (name, salary )
                VALUES (:name, :salary )");
        $statement->bindValue(':name', $name);
        $statement->bindValue(':salary', $salary);
        $statement->execute();
        header('Location: index.php');
    }
}




// // By mysqli

// $errors = [];
// $name = '';
// $salary = '';
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

// 	function validate($data){
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
// 	}

//     $name = validate($_POST['name']);
//     $salary = validate($_POST['salary']);

// 	if (!$name) {
//         $errors[] = 'name is required';
//     }

//     if (!$salary) {
//         $errors[] = 'salary is required';
//     }
//     if (empty($errors)) {
//        $sql = "INSERT INTO employees (name, salary) 
//                VALUES('$name','$salary')";

//        $result = mysqli_query($conn, $sql);
//        if ($result) {
//          header('Location: index.php');
//        }
//        else{
//            echo "some error occured during inserting data";
//        }

//        // Free result set
//         mysqli_free_result($result);

// 	}

// }


// // close connection
// mysqli_close($conn);


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Employees CRUD</title>
</head>

<body>

    <div class="container">
        <h1>Add new Employee</h1>

        <?php if (!empty($errors)) : ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error) : ?>
                    <div><?php echo $error ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form method="post">

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
            </div>
            <div class="form-group">
                <label>salary</label>
                <input type="text" name="salary" class="form-control" value="<?php echo $salary ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>