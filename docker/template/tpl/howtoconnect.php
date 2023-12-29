<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 11/26/2018 - 8:36 PM
 */
?>
<div class="content_box1" style="line-height: 1.5;">
    <?php
    ksort($_ENV);
    foreach ($_ENV as $var => $text) {
        if (substr($var, 0, 6) === "HOWTO_") {
            echo "<p>$text</p>";
        };
    }
    ?>
</div>
