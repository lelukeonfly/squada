<?php
    session_start();

    //Responsive navbar
    if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        require_once "imports/menubar.php";
    } 
    else {
        require_once "imports/navbar.php";
    }

    //Funktionen
    require_once "imports/funktionen.inc.php";

   if(isset($_POST['loginname']) && isset($_POST['pwd'])){

        $result = log_in($_POST['loginname'], $_POST['pwd']);
        if ($result == true) {
            header('Location: index.php');
        }
        else {
            $result == false;
        }
   }
    

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Squada - LOGIN</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png" />
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
                    <input type="text" class="form-control" placeholder="Loginname" name="loginname" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Passwort" name="pwd" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
                <?php 
                if (isset($result) && $result == false) { ?>
                <p>Login faild!</p>
                <?php }?>
            </form>
            <p class="text-center"><a href="#">Create an Account</a></p>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Custom JS-->
        <script src="js/scripts.js"></script>

    </body>

</html>