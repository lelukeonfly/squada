<?php
function get_db_connection() {
    $dbhost = 'localhost';
    $dbname = 'squada';
    $dbuser = 'squada';
    $dbpass = 'squada';
    $dbprot = '3306';

    return new PDO("mysql: host=$dbhost", "dbname=$dbname","port:$dbport", $dbuser, $dbpass);
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