<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="bg-dark d-flex flex-column align-items-center justify-content-center text-white" style="height: 100vh;">
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// Check for empty fields
	if (empty($name) || empty($age) || empty($email)) {
		if (empty($name)) {
			echo "<font style='color: red; font-size: 24px;'>Name field is empty.</font><br/>";
		}
		
		if (empty($age)) {
			echo "<font style='color: red; font-size: 24px;'>Age field is empty.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font style='color: red; font-size: 24px;'>Email field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo '<br/><a class="btn btn-warning" href="javascript:self.history.back();">Go Back</a>';
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");
		
		// Display success message
		echo "<p style='color: white; font-size: 24px;'>Data added successfully!</p>";
		echo "<a href='index.php' class='btn btn-warning'>View Result</a>";
	}
}
?>
</body>
</html>