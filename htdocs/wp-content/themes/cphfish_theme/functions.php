<?php

add_action( 'wp_enqueue_scripts', 'cphfish_theme_adapt_base_theme_enqueue_styles' );

function cphfish_theme_adapt_base_theme_enqueue_styles() {
    wp_enqueue_style( 'adapt_base_theme-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'cphfish_theme-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'adapt_base_theme-style' )
    );
}
register_nav_menus( array(
	'primary' => esc_html__( 'Primary', 'adapt_base_theme' ),
	'usermenu' => esc_html__( 'usermenu', 'adapt_base_theme' ),

) );

function cphfish_theme_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'cphfish_theme_custom_excerpt_length', 999 );
