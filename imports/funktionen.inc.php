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
    $query = "SELECT * FROM spieler";
    return $db_connection->query($query);
}

function get_column_names($tablename)
{
    $db_connection = get_db_connection();
    $query = "SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='squada' 
    AND `TABLE_NAME`='$tablename';";
    return $db_connection->query($query);
}

function log_in($username, $pwd) {
        
    $db = get_db_connection();

    $query = "SELECT m.Loginname, m.Passwort, m.id FROM mannschaft m WHERE m.Loginname = '$username' AND m.Passwort = '$pwd'";
    $statement = $db->query($query);

    $num = $statement->rowCount(); 
    $eintrag = $statement->fetch();
    var_dump($eintrag);
    if($eintrag != null) {

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
    

function is_loged_in() {
    $sol = false;
    if (isset($_SESSION['user'])) {
        if (!empty($_SESSION['user'])) {
            $sol = true;
        }
    }
    return $sol;
}

function get_username_by_id($id){
    
}
?>