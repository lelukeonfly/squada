<table class="table">
    <?php 
    $dbhost = 'localhost';
    $dbname = 'squada';
    $dbuser = 'squada';
    $dbpass = 'squada';

    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $res = $db->query("SELECT * FROM spieler");
    $data = $res->fetchAll($res);
    var_dump($data);

?>
    <tr>
                <td>
                </td>
        <?php

        ?>
    </tr>
    <?php

    ?>
</table>