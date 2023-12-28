<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 11/26/2018 - 8:36 PM
 */
?>

<p>
    <?php elang('read_before_register'); ?>
</p>
<ul>
    <?php
    ksort($_ENV);
    foreach ($_ENV as $var => $text) {
        if (substr($var, 0, 10) === "TPL_RULES_") {
            echo "<li>" . lang('rule') . " " . substr($var, 10) . ". " . $text . "</li>";
        };
    }
    ?>
</ul>