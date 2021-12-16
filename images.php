<?php
   //Funktionen
   require "imports/funktionen.inc.php";


if (isset($_GET['team'])) {
    $src = getTeamImage($_GET['team']);
    echo "<img src=" . $src . " />";
}
else {
    echo "no";
}
?>
<html>
    <form action="images.php" method="get">
        <input type="text" placeholder="team" name="team">
        <input type="submit">
    </form>
</html>


