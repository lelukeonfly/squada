<?php
function get_db_connection() {
    $dbhost = 'localhost';
    $dbname = 'squada';
    $dbuser = 'squada';
    $dbpass = 'squada';

    return new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
}

function get_players(){
    $db_connection = get_db_connection();
    $query = "SELECT * FROM spieler";
    return $db_connection->query($query);
}

function log_in($username, $pwd) {

    

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