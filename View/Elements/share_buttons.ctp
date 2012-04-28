<?php
    $available_buttons = array(
        'facebook', 'fblike', 'twitter', 'googleplus', 'linkedin', 'email', 'plusone',
        'sharethis', 'pinterest', 'delicious', 'digg', 'myspace', 'tumblr', 'slashdot',
        'google',
    );
    $display_text = array(
        'facebook'  => 'Facebook',
        'fblike'    => 'Facebook Like',
        'twitter'   => 'Twitter',
        'googleplus'=> 'Google +',
        'linkedin'  => 'LinkedIn',
        'email'     => 'Email',
        'plusone'   => 'Google +1',
        'sharethis' => 'Share This',
        'pinterest' => 'Pinterest',
        'delicious' => 'Delicious',
        'digg'      => 'Digg',
        'myspace'   => 'MySpace',
        'tumblr'    => 'Tumblr',
        'slashdot'  => 'Slashdot',
        'google'    => 'Google',
    );
    // display_buttons is passed as argument
    $valid_display_buttons = array_intersect($display_buttons, $available_buttons);
?>
<div class="share-this-buttons">
    <?php 
    foreach ($valid_display_buttons as $button):
        ?><span class="st_<?php echo $button ?>" displayText="<?php echo $display_text[$button]?>"></span><?php
    endforeach;
    ?>
</div>
