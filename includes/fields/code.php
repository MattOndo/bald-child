<?php

acf_add_local_field_group(array(
  'key' => 'acfb_code',
  'title' => 'Block: Code',
  'fields' => array(
		array(
			'key' => 'acfb_code__language',
			'label' => 'Language',
			'name' => 'language',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Select a language',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'choices' => array(
				'command_line' => 'Command Line',
				'css' => 'CSS',
        'html'   => 'HTML',
				'javascript' => 'JavaScript',
				'php' => 'PHP',
				'svg' => 'SVG',
				'typescript' => 'TypeScript',
    	),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 1,
		),
		array (
			'key' => 'acfb_code__code',
			'label' => 'Code',
			'name' => 'code',
			'type' => 'wysiwyg',
			'prefix' => '',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
			'new_lines' => '',
			'toolbar' => 'code',
			'tabs' => 'text'
	)
	),
  'location' => array (
      array (
          array (
              'param' => 'block',
              'operator' => '==',
              'value' => 'acf/code',
          ),
      ),
  ),
  "active" => 1,
  'show_in_graphql' => 1,
  "graphql_field_name" => "acfBlockCode",
  "map_graphql_types_from_location_rules" => 1,
));

add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
function my_toolbars( $toolbars )
{
    // Add a new toolbar called "Very Simple"
    // - this toolbar has only 1 row of buttons
    $toolbars['Code'] = array();
    $toolbars['Code'][1] = array('');

    // return $toolbars - IMPORTANT!
    return $toolbars;
}

?>