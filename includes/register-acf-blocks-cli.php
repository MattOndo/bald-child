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

function enqueue_acf_block_assets() {
    wp_register_script('highlightjs', get_stylesheet_directory_uri() . '/includes/blocks/code/highlight/highlight.min.js', array(), false, false);
    wp_register_script('code-block', get_stylesheet_directory_uri() . '/includes/blocks/code/block.js', array('highlightjs'), false, false);
}
add_action( 'enqueue_block_editor_assets', 'enqueue_acf_block_assets');