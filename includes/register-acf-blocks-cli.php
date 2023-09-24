<?php
function create_acf_block_cli_register_blocks() {
    // ACF Block Registration
    $blocks = array(
        'code'
    );
    foreach ($blocks as $block) {
        register_block_type( get_stylesheet_directory() . '/includes/blocks/' . $block );
    }
}
add_action( 'init', 'create_acf_block_cli_register_blocks' );