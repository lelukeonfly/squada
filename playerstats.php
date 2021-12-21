<?php
session_start();

//Responsive navbar
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    require_once "imports/menubar.php";
} else {
    require_once "imports/navbar.php";
}

//Funktionen
require_once "imports/funktionen.inc.php";

#$playerstats = array();

#foreach(get_player($_GET['playerid']) as $playerinfo){
#    $playerstats[] = $playerinfo;
#}
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playerstats</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css" />

<body>
    <div class="container">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?=getPlayerImage(get_player($_GET['playerid'])['name']);?>"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?=get_player($_GET['playerid'])['name'];?></h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Position: <?=get_player($_GET['playerid'])['position'];?></li>
                            <li class="list-group-item">Home team: <?=get_player($_GET['playerid'])['mannschaft'];?></li>
                            <li class="list-group-item">Team: </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>