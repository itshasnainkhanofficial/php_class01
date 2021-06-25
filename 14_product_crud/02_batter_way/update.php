<?php
require_once './config.php';


$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

$statement = $conn->prepare('SELECT * FROM employees WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$employee = $statement->fetch(PDO::FETCH_ASSOC);


$name = $employee['name'];
$salary = $employee['salary'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $salary = $_POST['salary'];


    if (!$name) {
        $errors[] = 'employee name is required';
    }

    if (!$salary) {
        $errors[] = 'employee salary is required';
    }

    if (empty($errors)) {
        $statement = $conn->prepare("UPDATE employees SET name = :name, salary = :salary WHERE id = :id");
        $statement->bindValue(':name', $name);
        $statement->bindValue(':salary', $salary);
        $statement->bindValue(':id', $id);
        $statement->execute();
        header('Location: index.php');
    }
}

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

        <p>
            <a href="index.php" class="btn btn-default">Back to Employees</a>
        </p>
        <h1>Update Employee: <b><?php echo $employee['name'] ?></b></h1>

        <?php if (!empty($errors)) : ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error) : ?>
                    <div><?php echo $error ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form method="post">


            <div class="form-group">
                <label>name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
            </div>

            <div class="form-group">
                <label>salary</label>
                <input type="number" step=".01" name="salary" class="form-control" value="<?php echo $salary ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>

</html>