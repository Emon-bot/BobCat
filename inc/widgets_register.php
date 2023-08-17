<?php
//sidebar register function

function bobcat_widgets_register(){

    register_sidebar(array(
        'name' =>__('Main Widget Area', 'Emon Ahmed'),
        'id' => 'sidebar-1',
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2',
    ));

    register_sidebar(array(
        'name' =>__('Footer Area', 'Emon Ahmed'),
        'id' => 'footer-1',
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2',
    ));

    register_sidebar(array(
        'name' =>__('Footer Area', 'Emon Ahmed'),
        'id' => 'footer-2',
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2',
    ));

    register_sidebar(array(
        'name' =>__('Footer Area', 'Emon Ahmed'),
        'id' => 'footer-3',
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2',
    ));


}

add_action('widgets_init', 'bobcat_widgets_register');