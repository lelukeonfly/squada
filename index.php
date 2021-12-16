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
    require "imports/funktionen.inc.php";
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
    <link rel="icon" type="image/x-icon" href="img/favicon.ico?"  />
    <!-- CSS-->
    <link rel="stylesheet" href="scss/index.css" />
</head>

<body>
    <!-- Page Image-->
    <header class="header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="animated fadeIn">Squada</h1>
                    <p class="lead animated fadeIn"> Welcome to Squada!
                        Squada is an auction platform where football players who have not yet been assigned to a team
                        are
                        auctioned by the members of the Fanta Calcio group.</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="text-center mt-5">
            <h1 class="display-4">Welcome</h1>

            <h1 class="display-4">News</h1>

        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>