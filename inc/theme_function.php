<?php

function bobcat_customizar_register($wp_customize){
//Header Area Function
    $wp_customize->add_section('bobcat_header-area', array(
    'title' =>__('Header Area', 'bobcat'),
    'description' => 'Change Logo Here'
)); 

$wp_customize->add_setting('bobcat_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png', 
));

$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'bobcat_logo', array(
    'label' => 'Logo Upload',
    'setting' => 'bobcat_logo',
    'section' => 'bobcat_header-area',
) ));

//Menu Position Option
$wp_customize->add_section('bobcat_menu_option', array(
    'title' => __('Menu Position Option', 'bobcat'),
    'description' => 'Change Logo Position'
));   

$wp_customize->add_setting('bobcat_menu_position', array(
    'default' => 'right_menu',
));

$wp_customize->add_control('bobcat_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'bobcat_menu_position',
    'section' => 'bobcat_menu_option',
    'type' => 'radio',
    'choices' => array(
        'left_menu' => 'Left Menu',
        'right_menu' => 'Right Menu',
        'center_menu' => 'Center Menu',
    ),

));

//Footer Option
$wp_customize->add_section('bobcat_footer_option', array(
    'title' => __('Footer Option', 'bobcat'),
    'description' => 'Footer'
));   

$wp_customize->add_setting('bobcat_copyright_section', array(
    'default' => '&copy; copyright 2023 | Bobcat',
));

$wp_customize->add_control('bobcat_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'Update Your Copyright Text',
    'setting' => 'bobcat_copyright_section',
    'section' => 'bobcat_footer_option',


));

}

add_action('customize_register', 'bobcat_customizar_register');