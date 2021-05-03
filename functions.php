<?php

//CSS e JS

function portifolio_setup() {
    
    wp_enqueue_style('reset', get_theme_file_uri('css/reset.css'), NULL, "1.0");
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&family=Poppins:wght@100;200;400;600;700&display=swap');
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/f222942b25.js');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, "1.0"); //stylesheet_uri só funciona com o style.css
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, "1.0", true);
}

add_action('wp_enqueue_scripts', 'portifolio_setup');

?>