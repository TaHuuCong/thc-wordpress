<?php

// Define constants.
define( "THEME_URL", get_template_directory_uri() );
define( "IMAGES", THEME_URL . "/images" );
define( "SCRIPTS", THEME_URL . "/js" );
define( "FRAMEWORK", get_stylesheet_directory() . "/framework" );

// Load the framework.
require_once( FRAMEWORK . "/init.php" );

// Set the content width based on the theme's design and stylesheet.
if( ! isset( $content_width ) ) {
    $content_width = 800;
}

// Set up theme default and register various supported features.
if ( ! function_exists( 'alpha_setup' ) ) {  // nếu chưa tồn tại hàm này thì tạo hàm này
    function alpha_setup() {
    }
    add_action( 'after_setup_theme', 'alpha_setup' );
}

// Nhúng file style.css
function import_style() {
    wp_enqueue_style( 'main-style', THEME_URL . '/style.css', 'all' );
}
add_action( 'wp_enqueue_scripts', 'import_style' );