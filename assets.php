<?php
// pour insérer les styles et JS au theme
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_template_directory_uri() . '/main.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');

    //mettre GSAP!!!!
    wp_register_script('js', get_template_directory_uri() . '/assets/script.js', array(), false, true);
    wp_register_script('tem_gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.7.1/dist/gsap.min.js', [], '3.7.1', true);
    wp_register_script('tem_trigger-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js', []);
    wp_enqueue_script('js');
    wp_enqueue_script('tem_gsap');
    wp_enqueue_script('tem_trigger-scroll');
});


/**
 * USEFUL LINKS
 * 
 * GET_TEMPLATE_DIRECTORY : https://developer.wordpress.org/reference/functions/get_template_directory_uri/
 */