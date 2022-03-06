<?php
// on va déclarer les différents menus :
add_action('after_setup_theme', function(){
    register_nav_menu('header', __('Header navigation','monTheme'));
    register_nav_menu('footer', __('Footer navigation','monTheme'));
});


