<?php
//Theme title
add_theme_support('title-tag');

//Theme CSS and jQuery File calling
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
    wp_enqueue_style('bobcat_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
}
add_action('wp_enqueue_scripts', 'bobcat_add_google_fonts');

//Theme Function

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

//Menu Register
register_nav_menu('main_menu', __('Main Menu', 'bobcat') );



// Walker Menu Properties (Not Working)
function bobcat_nav_description( $item_output, $item, $depth, $args){
    if( !empty ($item->description)){
      $item_output = str_replace($args-> link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
    }
    return $item_output;
  }
  add_filter('walker_nav_menu_start_el', 'bobcat_nav_description', 10, 4);


