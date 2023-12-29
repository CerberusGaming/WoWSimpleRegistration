<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 11/26/2018 - 8:36 PM
 */
?>
<div class="content_box1" style="line-height: 1.5;">
    <p><?php echo get_config("discord_embed"); ?></p>
    <p><?php elang('email'); ?> : <?php $email = get_config("smtp_mail"); echo "<a href='mailto:$email'>$email</a>"; ?></p>
</div>
