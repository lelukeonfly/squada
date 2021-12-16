<table class="table">
    <?php
        $x = true;
        foreach(get_players() as $player){
        if($x){
            ?>
            <thead>
                <?php
                    foreach($player as $column_header => $data){
                        ?>
                        <th><?=$column_header;?></th>
                        <?php
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