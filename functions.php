<?php

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

/**
 * Disable certain Gutenberg blocks
 * 
 */
function bald_child_disable_blocks( $allowed_blocks ) {
	$blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

	unset( $blocks[ 'core/code' ] );

	return array_keys( $blocks );
}
add_filter( 'allowed_block_types_all', 'bald_child_disable_blocks' );
 