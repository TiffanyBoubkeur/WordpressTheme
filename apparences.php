<?php
add_action('customize_register', function (WP_Customize_Manager $manager) {
    // pour créer la section que l'on retrouve dans le tableau de changement d'image
    $manager->add_section('monTheme_apparence', [
        'title' => __('Theme apparence')     //nom dans le menus de personnalisation
    ]);

    // déclare ce que l'on veut ajouter grâce à la section : 
    $manager->add_setting('logo',[
        'sanitize_callback' => 'esc_url_raw'
    ]);

    //pour permettre d'uploader une image :
    $manager->add_control(new WP_Customize_Image_Control($manager, 'logo', [
        'label' => __('logo', 'monTheme'),  // les deux underscore pour function de traduction
        'section' => 'monTheme_apparence'
    ]));

});


//FORMULAIRE
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    $content = str_replace('<br />', '', $content);
    $content = str_replace ('<p>', '', $content);
    $content = str_replace ('</p>', '',$content);
    return $content;
});
