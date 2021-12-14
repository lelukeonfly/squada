<table>
    <?php
        foreach(get_players() as $player){
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