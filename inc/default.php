<?php
//Theme title
add_theme_support('title-tag');

//Thumbnail Image Area
add_theme_support( 'post-thumbnails', array('page', 'post'));
add_image_size( 'post-thumbnails', 970, 350, true);

//Excerpt to 40 words

function bobcat_excerpt_more($more){
    global $post;
    return '<br> <br> <a class="read_more" href="'.get_permalink($post->ID) . '">' . 'Read More' . '</a>';
}

add_filter('excerpt_more', 'bobcat_excerpt_more');

function bobcat_excerpt_length($length){
    return 50;
}

add_filter('excerpt_length', 'bobcat_excerpt_length', 999);