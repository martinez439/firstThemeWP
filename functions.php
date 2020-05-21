<?php 

function firstmart_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','firstmart_theme_support');

function firstmart_menus(){
    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer menu items'
    );
    register_nav_menus($locations);
}

add_action('init', 'firstmart_menus');



function firstmart_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('firstmart-style', get_template_directory_uri() . "/style.css", array('firstmart-bootstrap'), $version, 'all');
    wp_enqueue_style('firstmart-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", '4.4.1', 'all');
    wp_enqueue_style('firstmart-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'firstmart_register_styles');


function firstmart_register_scripts(){

    wp_enqueue_script('firstmart-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(),'3.4.1', true);
    wp_enqueue_script('firstmart-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('firstmart-bootstrapcdn', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(),'4.4.1', true);
    wp_enqueue_script('firstmart-main', get_template_directory() . "/assets/js/main.js", array(),'4.4.1', true);
}

add_action( 'wp_enqueue_scripts', 'firstmart_register_scripts');



function wpb_init_widgets($id){
    register_sidebar(array(
        'name' => 'Box1',
        'id' => 'box1',
        'before_widget' => '<div class="card">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
  

    register_sidebar(array(
        'name' => 'Box2',
        'id' => 'box2',
        'before_widget' => '<div class="card">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box3',
        'id' => 'box3',
        'before_widget' => '<div class="card">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'wpb_init_widgets');

// Customizer File
require get_template_directory(). '/inc/customizer.php';
?>