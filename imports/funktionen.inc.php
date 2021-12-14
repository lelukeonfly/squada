<?php
function get_db_connection() {
    $dbhost = 'localhost';
    $dbname = 'squada';
    $dbuser = 'squada';
    $dbpass = 'squada';
    $dbport = '3306';

    return new PDO("mysql: host=$dbhost", "dbname=$dbname","port:$dbport", $dbuser, $dbpass);
}

function log_in($username, $pwd) {

    if (isset($username) && isset($pwd)) {
        
    $db = get_db_connection();

    $query = "SELECT m.Loginname, m.Passwort FROM mannschaft m WHERE m.Loginname = '$username' AND m.Passwort = '$pwd'";
    $statement = $db->query($query);

    $num = $statement->rowCount(); 
    $eintrag = $statement->fetch();
    if($eintrag != null) {

        if ($num== 1) {
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