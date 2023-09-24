<?php
/**
 * Block Name: code
 * Description: Display a code snippet
 */

// $data is what we're going to expose to our render template
$data = array(
	'language' => get_field( 'acfb_code__language' ),
	'code' => get_field( 'acfb_code__code' )
);

// Dynamic block ID
$block_id = 'code-' . $block['id'];

// Check if a custom ID is set in the block editor
if( !empty($block['anchor']) ) {
    $block_id = $block['anchor'];
}

// Block classes
$class_name = 'code-block';
if( !empty($block['className']) ) {
    $class_name .= ' ' . $block['className'];
}

/** 
 * Pass the block data into the template part
 */ 
get_template_part(
	'includes/blocks/code/render',
	null,
	array(
		'block'      => $block,
		'is_preview' => $is_preview,
		'post_id'    => $post_id,

		'data'       => $data,
        'class_name' => $class_name,
        'block_id'   => $block_id,
	)
);