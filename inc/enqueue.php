<?php

function local_css_js_file_calling(){
    wp_enqueue_style('local-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.0', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    //jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri(). 'js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri(). 'js/main.js', array(), '1.0.0', 'true');
    
}
add_action('wp_enqueue_scripts', 'local_css_js_file_calling');

//Google Fonts Enqueue
function bobcat_add_google_fonts(){
    wp_enqueue_style('bobcat_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&family=Roboto:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'bobcat_add_google_fonts');