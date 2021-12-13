<?php
    //Responsive navbar
    require "imports/navbar.php";

    //Funktionen
    require "imports/funktionen.inc.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Squada - LOGIN</title>
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS-->
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>

    <body>
        <div class="login-form">
            <form action="login.php" method="post">
                <h2 class="text-center">LOG IN</h2>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Loginname" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Passwort" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>

            </form>
            <p class="text-center"><a href="#">Create an Account</a></p>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Custom JS-->
        <script src="js/scripts.js"></script>

    </body>

</html>