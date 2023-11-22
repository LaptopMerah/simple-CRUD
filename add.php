<html>

<head>
    <title>Add Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
	integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class=" bg-dark text-white ">
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2>Add Data</h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="index.php" class="btn btn-outline-warning ">Home</a>
            </div>
        </div>
        <form action="addAction.php" method="post" name="add" class="w-50">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" placeholder="Your Name" class="form-control m-2" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="age" class="age">Usia</label>
                <input type="number" name="age" id="age" class="form-control m-2" placeholder="Your Age" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control m-2" id="email" name="email" placeholder="name@gmail.com">
            </div>
            <input type="submit" name="submit" class="btn btn-outline-primary" value="Submit Data">
        </form>
    </div>
</body>

</html>