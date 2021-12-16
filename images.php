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

    $src = getTeamImage($_GET['team']);

    var_dump($src);
?>


<img src="$src" />
