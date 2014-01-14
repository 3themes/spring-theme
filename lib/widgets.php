<?php
/**
 * Register sidebars and widgets
 */
function spring_widgets_init() {
  // Sidebars
  register_sidebar(array(
    'name'          => __('Primary', 'spring'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'spring_widgets_init');


