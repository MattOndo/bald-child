<?php

/**
 * Theme Setup
 * 
 * @since 1.0.0
 */
function bald_child_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
	load_theme_textdomain( 'bald-child', get_stylesheet_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'bald_child_setup', 10, 0 );

/**
 * Enqueue scripts and styles.
 * 
 * @since 1.0.0
 */
function bald_child_admin_style() {
  wp_register_style( 'bald-child-admin', get_stylesheet_directory_uri() . '/styles/admin.css', array( 'bald-parent-admin' ), null );
  wp_enqueue_style( 'bald-child-admin' );
}
add_action( 'admin_enqueue_scripts', 'bald_child_admin_style' );

/**
 * We use WordPress's init hook to make sure
 * our blocks are registered early in the loading
 * process.
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */
function tt3child_register_acf_blocks() {
	/**
	 * We register our block's with WordPress's handy
	 * register_block_type();
	 *
	 * @link https://developer.wordpress.org/reference/functions/register_block_type/
	 */
	register_block_type( __DIR__ . '/blocks/testimonial' );
}
// Here we call our register_acf_block() function on init.
add_action( 'init', 'tt3child_register_acf_blocks' );