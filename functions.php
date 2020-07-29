<?php 

// Add main style and comments support
function cenandoenjapon_wordpress_files() {
    // Font Noticia Text
    wp_enqueue_style('font-noticia-text', "https://fonts.googleapis.com/css2?family=Noticia+Text:ital,wght@0,400;0,700;1,400;1,700&display=swap", array(), '1.0', 'all');
    // CSS
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('cenandoenjapon-stylesheet', get_template_directory_uri() . "/style.css", array('font-noticia-text', 'cenandoenjapon-fontawesome'), $version, 'all');
    // FontAwesome
    wp_enqueue_style('cenandoenjapon-fontawesome', "https://kit.fontawesome.com/85b8e23c67.js", array(), '5.14.0', 'all');

    if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
};

add_action('wp_enqueue_scripts', 'cenandoenjapon_wordpress_files');

// Add footer scripts
function cenandoenjapon_register_scripts() {
    // Jquery
    wp_enqueue_script('cenandoenjapon-jquery', "https://code.jquery.com/jquery-3.5.1.slim.min.js", array(), '3.5.1', true);
    // Custom JS
    wp_enqueue_script('cenandoenjapon-javascript', get_template_directory_uri() . "/assets/js/index.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'cenandoenjapon_register_scripts');

// Add custom logo support in the customize menu
function cenandoenjapon_custom_logo_setup() {
    $defaults = array(
    'height'      => 215,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }

add_action( 'after_setup_theme', 'cenandoenjapon_custom_logo_setup' );

function cenandoenjapon_features() {
    // Add webpage title;
    add_theme_support('title-tag');

    // Add thumbnails support;
    add_theme_support( 'post-thumbnails' );

    // Add custom colors
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'strong magenta', 'themeLangDomain' ),
            'slug' => 'strong-magenta',
            'color' => '#a156b4',
        ),
        array(
            'name' => __( 'light grayish magenta', 'themeLangDomain' ),
            'slug' => 'light-grayish-magenta',
            'color' => '#d0a5db',
        ),
        array(
            'name' => __( 'very light gray', 'themeLangDomain' ),
            'slug' => 'very-light-gray',
            'color' => '#eee',
        ),
        array(
            'name' => __( 'very dark gray', 'themeLangDomain' ),
            'slug' => 'very-dark-gray',
            'color' => '#444',
        ),
    ) );
}

add_action('after_setup_theme', 'cenandoenjapon_features');

// Add menus functionality
function cenandoenjapon_menus() {
    $locations = array(
        'primary' => 'Desktop Primary Header Menu'
    );

    register_nav_menus($locations);
}

add_action('init', 'cenandoenjapon_menus')

?>