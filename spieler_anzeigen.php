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
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
    <!-- CSS-->
    <link rel="stylesheet" href="css/styles.css"/>
    <!-- <script src="scripts/datatable.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.bootstrap5.min.css">

</head> 

<body>
    <!-- Page content-->
    <div class="container">
        <div id="table_spieler_anzeigen">
            <?php
                require_once 'imports/table_spieler.php';
            ?>
        </div>
    </div>

</body>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS-->
    <script src="js/scripts/datatable.js"></script>

</html>