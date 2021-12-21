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
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playerstats</title>
</head>
<body>
    
</body>
</html>