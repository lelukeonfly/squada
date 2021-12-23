<?php
    session_start();

    //Funktionen
    require_once "imports/funktionen.inc.php";

    //Responsive navbar
    if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        require_once "imports/menubar.php";
    } 
    else {
        require_once "imports/navbar.php";
    }

 

   if(isset($_POST['loginname']) && isset($_POST['pwd'])){

        $result = log_in($_POST['loginname'], $_POST['pwd']);
        if ($result == true) {
            header('Location: dashboard.php');
        }
        else {
            $result == false;
        }
   }
    

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Squada - Login</title>

    <!-- Favicon-->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico?" />

    <!-- CSS-->
    <link rel="stylesheet" href="scss/login.css" />
</head>

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
        </div>
        <!-- Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/bootstrap/bootstrap.bundle.min.js"></script>

        <!-- Font Awsome -->
        <script src="https://kit.fontawesome.com/f072a47e74.js" crossorigin="anonymous"></script>

    </body>

</html>