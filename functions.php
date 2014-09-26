<?php

// Load the Theme CSS
function theme_styles() {

	wp_enqueue_style('main', get_template_directory_uri() . '/style.css' );

}

function theme_js() {

	wp_register_script('parallax-plugin', get_template_directory_uri() . '/js/parallax-plugin.js', array('jquery'), '', true );
	wp_enqueue_script('parallax-plugin');
	wp_register_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
	wp_enqueue_script('main');
	wp_register_script('jqueryUI', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '', true );
	wp_enqueue_script('jqueryUI');
}
add_action( 'wp_enqueue_scripts', 'theme_js');


add_action( 'wp_enqueue_scripts', 'theme_styles');

// Enable custom menus
add_theme_support('menus');

?>