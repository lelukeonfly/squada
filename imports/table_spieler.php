<table class="table">
    <?php
        $x = true;
        foreach(get_players() as $player){
        if($x){
            ?>
            <thead>
                <?php
                    foreach(get_column_names('spieler') as $colname){
                        foreach($colname as $row){
                        ?>
                        <th scope="col"><?=$row?></th>
                        <?php
                        }
                        $x = false;
                    }
                ?>
            </thead>
            <?php
        }
    ?>
    <tr>
        <?php
            foreach($player as $playerdata){
        ?>
                <td>
                    <?=$playerdata?>
                </td>
        <?php
            }
        ?>
    </tr>
    <?php
        }
    ?>
</table>