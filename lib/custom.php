<?php
/**
 * Custom functions
 */

//Comment out the following line to enable the admin bar
add_filter('show_admin_bar', '__return_false');


/*
 * Function to test which template files are being called
 * Bug testing only. Not to be used on a production site!! 
 */
add_action('wp_footer', 'spring_wrap_info');

function spring_wrap_info() {  
  $format = '<h6>The %s template being used is: %s</h6>';
  $main   = Spring_Wrapping::$main_template;
  global $template;

  printf($format, 'Main', $main);
  printf($format, 'Base', $template);
}