<?php
    //Responsive navbar
    require_once "imports/navbar.php";

    //Funktionen
    require_once "imports/funktionen.inc.php";
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
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS-->
    <link rel="stylesheet" href="css/styles.css"/>
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
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS-->
    <script src="js/scripts.js"></script>
</body>

</html>