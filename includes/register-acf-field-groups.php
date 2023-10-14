<?php

function my_acf_add_local_field_groups() {
  // ACF Field Group Registration
  $groups = array(
      'code'
  );

  foreach ($groups as $group) {
    require_once get_stylesheet_directory() . '/includes/fields/code' . '.php';
  }
    
  
}

add_action('acf/init', 'my_acf_add_local_field_groups');