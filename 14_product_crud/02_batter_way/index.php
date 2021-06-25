<?php

require_once './config.php';









// // using PDO
$statement = $conn->prepare('SELECT * FROM employees ORDER BY id DESC');
$statement->execute();
$employees = $statement->fetchAll(PDO::FETCH_ASSOC);
$statement = null;
$conn = null;











// // using MySQLi Object-Oriented
// $sql = "SELECT * FROM employees ORDER BY id DESC";
// $result = mysqli_query($conn, $sql);

// // Fetch all
// $employees = mysqli_fetch_all($result, MYSQLI_ASSOC);

// // Free result set
// // The mysqli_free_result() function is used to de-allocate memory
// // that was used to store the query results returned by mysqli_query().
// mysqli_free_result($result);

// // connection close
// mysqli_close($conn);









// // using Procedural php
// $sql = "SELECT * FROM employees ORDER BY id DESC";
// $result = mysqli_query($conn, $sql);

// // Fetch all
// $employees = mysqli_fetch_all($result, MYSQLI_ASSOC);

// // Free result set
// mysqli_free_result($result);

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

    <link href="app.css" rel="stylesheet"/>
    <title>Employee CRUD</title>
</head>
<body>
<div class="container">


<h1>Employee CRUD</h1>

<p>
    <a href="insert.php" type="button" class="btn btn-sm btn-success">Add Employee</a>
</p>
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Salary</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($employees as $i => $employee) :  ?>
           <tr>
            <th><?php echo $i + 1 ?></th>
            <td><?php echo $employee['name'] ?></td>
            <td><?php echo $employee['salary'] ?></td>
            <td>
                <a href="update.php?id=<?php echo $employee['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                <form method="post" action="delete.php" style="display: inline-block">
                    <input  type="hidden" name="id" value="<?php echo $employee['id'] ?>"/>
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach ?>


<!-- 
    <?php foreach ($employees as $i => $employee) { ?>
        <tr>
            <th><?php echo $i + 1 ?></th>
            <td><?php echo $employee['name'] ?></td>
            <td><?php echo $employee['salary'] ?></td>
            <td>
                <a href="update.php?id=<?php echo $employee['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                <form method="post" action="delete.php" style="display: inline-block">
                    <input  type="hidden" name="id" value="<?php echo $employee['id'] ?>"/>
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
            </td>
        </tr>
    <?php } ?> -->
    </tbody>
</table>

</div>

</body>
</html>