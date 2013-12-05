<?php
/**
 * Enable theme features
 */
add_theme_support('root-relative-urls');            // Enable relative URLs
add_theme_support('nice-search');                   // Enable /?s= to /search/ redirect
add_theme_support('jquery-cdn');                    // Enable to load jQuery from the Google CDN
add_theme_support('html5', array('search-form'));   // Enable HTML in the search form

/**
 * Configuration values
 */
define('POST_EXCERPT_LENGTH', 40); // Length in words for excerpt_length filter (http://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length)

/**
 * .main classes
 * TODO: need to look at whether this stuff is worth keeping-kd
 */
function spring_main_class() {
  if (spring_display_sidebar()) {
    // Classes on pages with the sidebar
    $class = 'content-main';
  } else {
    // Classes on full width pages
    $class = 'content-main';
  }

  return $class;
}

/**
 * .sidebar classes
 */
function spring_sidebar_class() {
  return 'sidebar-main';
}

/**
 * Define which pages shouldn't have the sidebar
 *
 * See lib/sidebar.php for more details
 */
function spring_display_sidebar() {
  $sidebar_config = new Spring_Sidebar(
    /**
     * Conditional tag checks (http://codex.wordpress.org/Conditional_Tags)
     * Any of these conditional tags that return true won't show the sidebar
     *
     * To use a function that accepts arguments, use the following format:
     *
     * array('function_name', array('arg1', 'arg2'))
     *
     * The second element must be an array even if there's only 1 argument.
     */
    array(
      'is_404'   
    ),
    /**
     * Page template checks (via is_page_template())
     * Any of these page templates that return true won't show the sidebar
     */
    array(
      'template-custom.php'
    )
  );

  return apply_filters('spring_display_sidebar', $sidebar_config->display);
}

/**
 * $content_width is a global variable used by WordPress for max image upload sizes
 * and media embeds (in pixels).
 *
 * Example: If the content area is 640px wide, set $content_width = 620; so images and videos will not overflow.
 * Default: 1140px is the default Bootstrap container width.
 */
if (!isset($content_width)) { $content_width = 1140; }
