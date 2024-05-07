<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETMSKO | User Registration login</title>

    <!-- JQUERY file -->
    <script src="includes/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap file -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.js">

    <!-- CSS file -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <div class="row">
        <div class="col-md-3" id="register-home-page">
            <center><h3 style="margin-bottom: 20px;">User registration</h3></center>
            <form action="post">
                <div class="form-group">
                    <input type="name" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile No." required>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="userRegistration" value="Register" class="btn btn-warning" required>
                    <a href="./index.php" class="btn btn-danger">Go back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>