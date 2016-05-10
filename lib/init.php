<?php
/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'roots'),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
  // set_post_thumbnail_size(150, 150, false);
  // add_image_size('category-thumb', 300, 9999); // 300px wide (and unlimited height)

  add_image_size('large169', 1024, 576, TRUE);
  add_image_size('large43', 1024, 768, TRUE);

  add_image_size('medium169', 768, 432, TRUE);
  add_image_size('medium43', 768, 576, TRUE);
  add_image_size('medium11', 768, 768, TRUE);


  add_image_size('small169', 320, 180, TRUE);
  add_image_size('small43', 320, 240, TRUE);
  add_image_size('small11', 320, 320, TRUE);

  add_image_size('tiny169', 240, 135, TRUE);
  add_image_size('tiny43', 240, 180, TRUE);
  add_image_size('tiny11', 240, 240, TRUE);





  // Add post formats (http://codex.wordpress.org/Post_Formats)
  add_theme_support('post-formats', array('gallery'));
  add_theme_support( 'html5', array('search-form', 'gallery', 'caption' ) );

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'roots_setup');

// Backwards compatibility for older than PHP 5.3.0
if (!defined('__DIR__')) { define('__DIR__', dirname(__FILE__)); }

// Define helper constants
$get_theme_name = explode('/themes/', get_template_directory());

define('THEME_NAME',                next($get_theme_name));
define('RELATIVE_PLUGIN_PATH',      str_replace(home_url() . '/', '', plugins_url()));
define('RELATIVE_CONTENT_PATH',     str_replace(home_url() . '/', '', content_url()));
define('THEME_PATH',                RELATIVE_CONTENT_PATH . '/themes/' . THEME_NAME);
