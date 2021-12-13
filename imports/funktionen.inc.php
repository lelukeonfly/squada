<?php
function get_db_connection()
{
    $dbhost = "localhost";
    $dbname = "squada";
    $dbuser = "squada";
    $dbpass = "squada";
    $dbprot = "3306";
    return new PDO("mysql: host=$dbhost", "dbname=$dbname","port:$dbport", $dbuser, $dbpass);
}

get_db_connection();

?>