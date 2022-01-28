<?php
  add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
  function my_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',
    array( $parent_style ), wp_get_theme()->get('Version')
  );
}

// create new menu for header and footer
function register_new_menus() {
  register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'blog-mall' ),
    'header' => esc_html__( 'Header Menu', 'blog-mall' ),
    'footer' => esc_html__( 'Footer Menu', 'blog-mall' )
  ) );
}

add_action( 'init', 'register_new_menus' );

// Hide WP version
remove_action("wp_head", "wp_generator");

// Give less informative warnings for connection errors
add_filter('login_errors',function($a) {return "Identification incorrect";});