<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
 * Connect styles
 */
function theme_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/**
 * Set up Avada language
 */
function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

/**
 * Output the footer social icons.
 *
 * @return void
 */
function render_footer_social_icons() {
	// Render the social icons.
	get_template_part( 'templates/footer-social-icons' );
}
add_action( 'avada_footer_copyright_content', 'render_footer_social_icons', 9 );

/**
 * Remove Admin bar
 */
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
  		show_admin_bar(false);
	}
}
add_action('after_setup_theme', 'remove_admin_bar');