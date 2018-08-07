<?php
function my_theme_enqueue_styles() {
 
    $parent_style = 'divi-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


// Additional php code goes here
add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' );
function my_enqueue_assets() {
wp_enqueue_script('divicustom', get_stylesheet_directory_uri() . '/js/divicustom.js', array(), '', true);
}
add_action( 'after_setup_theme', 'b3_shop_register_menu' );
function b3_shop_register_menu() {
register_nav_menu( 'divishop', __( 'Shop Menu') );
}

?>
