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
 * Custom fields
 * 
 */
require_once( get_stylesheet_directory() . '/includes/register-acf-blocks-cli.php' );
require_once( get_stylesheet_directory() . '/includes/register-acf-field-groups.php' );