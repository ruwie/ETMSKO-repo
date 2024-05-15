<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETMSKO | User dashboard</title>

    <!-- JQUERY file -->
    <script src="includes/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap file -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.js">

    <!-- CSS file -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- Header  -->
    <div class="row" id="header">
        <div class="col-md-12" >
            <div class="col-md-4" style="display: inline-block;">
                <h3 class="text-white">Task Mangement System</h3>
                </div>
                <div class="col-md-6" style="display: inline-block;text-align: right;">
                    <b>Email: </b> Test@gmail.com
                    <span style="margin-left: 25px;"><b>Name: </b>Test users </span>
                </div>            
        </div>
    </div>
    <!-- Header ends here -->

    <div class="row">
        <div class="col-md-2" id="left-sidebar">
            <table class="table">
                <tr>
                    <td style="text-align: center;">
                        <a href="user_dashboard.php" type="button" id="logout_link">Dashboard</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="manage_task.php" type="button" style="text-decoration: none;" id="link">Update task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="apply_leave.php" type="button" style="text-decoration: none;" id="link">Apply leave</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="veie_leave.php" type="button" style="text-decoration: none;" id="link">Leave status</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="logout.php" type="button" id="logout_link">Logout</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-10" id="right-sidebar">

        </div>

    </div>
</body>
</html>
