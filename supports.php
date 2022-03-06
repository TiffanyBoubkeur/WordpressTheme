<?php
// vérifie si une const est définie
defined('ABSPATH') or die('');

//fonction qui va définir ce que l'on supporte
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('html5');
    add_theme_support('post-thumbnails');
});

// pour autoriser des formats d'images 
add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});



