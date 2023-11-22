<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>
<html>
<head>	
	<title>Edit Data</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
	integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class=" bg-dark text-white ">
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2>Edit Data</h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="index.php" class="btn btn-outline-warning ">Home</a>
            </div>
        </div>
		<form name="edit" method="post" action="editAction.php" class="w-50">
			<div class="mb-3">
				<label for="name" class="form-label">Name</label>
                <input type="text" class="form-control  m-2 " id="name" name="name" value="<?php echo $name; ?>">
			</div>	
            <div class="mb-3">
				<label for="age" class="age">Age</label>
                <input type="number" name="age" id="age" class="form-control m-2 " value="<?php echo $age; ?>">
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control m-2" id="email" name="email" value="<?php echo $email; ?>">
			</div>
			<input type="hidden" name="id" value=<?php echo $id; ?>>
			<input type="submit" name="update" class="btn btn-outline-primary" value="Update">
		</table>
	</form>
</div>
</body>
</html>
