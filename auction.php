<?php
session_start();

//Funktionen
require_once "imports/funktionen.inc.php";

$players = get_players();
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Squada - Players</title>
    <link rel="stylesheet" href="scss/style.css" />

</head>

<body>
    <!-- Page content-->
    <div class="container">
        <div class="text-center mt-5">
            <h1 class="display-4">Show Players</h1>
            <div class="container">
                <div class="row">
                    <?php foreach ($players as $key => $player) { ?>
                    <div class="col-sm">
                        <?php $img = getPlayerImage($player['name']) ?>
                        <img src="<?= $img ?>" alt="<?= $player['name'] ?>" />
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS-->
    <script src="js/scripts.js"></script>
</body>

</html>