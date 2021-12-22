<?php
session_start();


//Funktionen
require_once "imports/funktionen.inc.php";

//Responsive navbar
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    require_once "imports/menubar.php";
} else {
    require_once "imports/navbar.php";
}

//Authenticated Users only
if (is_logged_in() != true)
    header('Location: index.php');


?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Squada</title>

    <!-- Favicon-->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico?" />
    <!-- CSS-->
    <link rel="stylesheet" href="scss/index.css" />
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Page content-->
    <div class="container">
        <div class="text-center mt-5">
            
            <h3>Willkommen <?= $_SESSION['name'] ?></h3>
            <nav class="nav">
                <a class="nav-link active" href="#">Active</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled" href="#">Disabled</a>
            </nav>
        </div>
    </div>

    <?php var_dump(seeOfferedPlayers($_SESSION['user'])); ?>

    <!-- FOOTER -->
    <?php include "imports/footer.php" ?>

    <!-- Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/f072a47e74.js" crossorigin="anonymous"></script>
</body>

</html>