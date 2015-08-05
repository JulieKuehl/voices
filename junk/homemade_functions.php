<?php

/**
 * Proper way to enqueue scripts and styles
 */
function areavoices_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'areavoices_scripts' );

function areavoices_customize_register( $wp_customize ) {
   //Add all sections, settings, and controls here
}
add_action( 'customize_register', 'areavoices_customize_register' );