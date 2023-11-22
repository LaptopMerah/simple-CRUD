<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (latest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class=" bg-dark text-white ">
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2>Homepage</h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="add.php" class="btn btn-outline-primary">Add New Data</a>
            </div>
        </div>
        <table class="table table-dark  table-striped table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
				while ($res = mysqli_fetch_assoc($result)) {
					echo '<tr>';
					echo '<td>'.$res['name'].'</td>';
					echo '<td>'.$res['age'].'</td>';
					echo '<td>'.$res['email'].'</td>';
                    echo '<td> <a class="btn btn-warning btn-sm" href="edit.php?id='.$res['id'].'">Edit</a>        <a class="btn btn-danger btn-sm" href="delete.php?id='.$res['id'].'" onClick="return confirm(\'Are you sure you want to delete?\')">Delete</a></td>';
				}
				?>
            </tbody>
        </table>
    </div>
</body>

</html>
