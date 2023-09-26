<?php
function shopy_scripts(){
    wp_enqueue_style('shopy-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '5.3.2');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/all.min.css', array(), '6.4.2');
    wp_enqueue_style('font-awesome-v4', get_template_directory_uri() . '/assets/font-awesome/css/v4-shims.min.css', array(), '6.4.2');
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('shopy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '5.3.2',false);
    
    if(is_singular() && comments_open() && get_option('thread_comments')){
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'shopy_scripts');