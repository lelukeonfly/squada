<?php
require_once 'imports/funktionen.inc.php';

#echo "spieler id -> ".$_GET['playerid'];
#$player = get_player($_GET['playerid']);
#var_dump($player);
foreach(get_player($_GET['playerid']) as $playerinfo){
    echo $playerinfo;
    echo "<br />";
}
?>