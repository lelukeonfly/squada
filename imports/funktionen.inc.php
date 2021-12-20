<?php
function get_db_connection() {
    $dbhost = 'localhost';
    $dbname = 'squada';
    $dbuser = 'root';
    $dbpass = '';

    return new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
}

function get_players(){
    $db_connection = get_db_connection();
    $query = "SELECT spieler.id, spieler.name, spieler.position, spieler.mannschaft FROM spieler";
    return $db_connection->query($query, PDO::FETCH_ASSOC);
}

function get_player($id)
{
    $db_connection = get_db_connection();
    $query = "SELECT spieler.name, spieler.position, spieler.mannschaft FROM spieler WHERE spieler.id LIKE $id";
    $statement = $db_connection->query($query, PDO::FETCH_ASSOC);
    return $statement->fetch();
}

#function get_column_names($tablename)
#{
#    $db_connection = get_db_connection();
#    $query = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='squada' AND `TABLE_NAME`='$tablename';";
#    return $db_connection->query($query);
#}

//Loggt den Benutzer mit den Jeweiligen Username und dem Pwd ein
function log_in($username, $pwd) {
    
    

    //Aufbau der DB Connection
    $db = get_db_connection();

    //Absetzen der DB Query
    $query = "SELECT m.Loginname, m.Passwort, m.id FROM mannschaft m WHERE m.Loginname = '$username' AND m.Passwort = '$pwd'";
    $statement = $db->query($query);

    $num = $statement->rowCount(); 
    $eintrag = $statement->fetch();

    //Überprüfen, ob der eintrag *nicht* null ist
    if($eintrag != null) {
        //Wenn min. ein User errscheind wird in der Session die ID des eingeloggten Benutzers geschrieben
        if ($num == 1) {
            $_SESSION['user'] = $eintrag['id'];
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
    }

}

//Durch Playerinfos die Image URL bekommen und zurückgeben
function getPlayerImage($playername, $cardyear = 2021){

    //Die eingegebenen Werte in Caps umwandeln.
    $playername = strtoupper($playername);
    $arr = explode(" ", $playername, 2);
    $first = $arr[0];

    $url = "https://content.fantacalcio.it/web/campioncini/card$cardyear/$first.png";
    $image_type_check = @exif_imagetype($url);//Get image type + check if exists
    
    //Wenn kein Img gefunden wird, wird ein general img verwendet.
    $noimage = "https://content.fantacalcio.it/web/campioncini/card2021/NO-CAMPIONCINO.png";

    //Überprüfen ob das Image existiert
    if (strpos($http_response_header[0], "403") || strpos($http_response_header[0], "404") || strpos($http_response_header[0], "302") || strpos($http_response_header[0], "301") ) {
        return $noimage;
    }
    else {
        return $url;
    }


}

//Durch Teamnamen die Image URL bekommen und zurückgeben
function getTeamImage($team) {

    //Die eingegebenen Werte in Lowercase umwandeln
    $team = strtolower($team);
    $url = "https://content.fantacalcio.it/web/img/team/$team.png";

    //Überprüfen, ob bild existiert
    if (!file_exists($url)) {
        return $url;
    }
    else {
        return false;
    }

}
    
//Überprüfen on User eingeloggt ist
function is_loged_in() {
    $sol = false;

    //In session nachsehen ob eintrag existiert
    if (isset($_SESSION['user'])) {
        if (!empty($_SESSION['user'])) {
            $sol = true;
        }
    }
    return $sol;
}

//Dar
function setdarkmode($switch = false) {
    if ($switch == true) {
        $_SESSION['darkmode'] = true;
    }
    else {
        $_SESSION['darkmode'] = false;
    }
}

function get_username_by_id($id){
    
}

function bieten(){

}
?>