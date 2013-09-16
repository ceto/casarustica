<?php
/**
 * Enqueue scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/bootstrap.css
 * 2. /theme/assets/css/bootstrap-responsive.css
 * 3. /theme/assets/css/app.css
 * 4. /child-theme/style.css (if a child theme is activated)
 *
 * Enqueue scripts in the following order:
 * 1. jquery-1.9.1.min.js via Google CDN
 * 2. /theme/assets/js/vendor/modernizr-2.6.2.min.js
 * 3. /theme/assets/js/plugins.js (in footer)
 * 4. /theme/assets/js/main.js    (in footer)
 */
function roots_scripts() {
  wp_enqueue_style('roots_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', false, null);
  wp_enqueue_style('roots_bootstrap_responsive', get_template_directory_uri() . '/assets/css/bootstrap-responsive.css', array('roots_bootstrap'), null);
  wp_enqueue_style('roots_app', get_template_directory_uri() . '/assets/css/app.css', false, null);

  // Load style.css from child theme
  if (is_child_theme()) {
    wp_enqueue_style('roots_child', get_stylesheet_uri(), false, null);
  }

  // jQuery is loaded using the same method from HTML5 Boilerplate:
  // Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.
  if (!is_admin() && current_theme_supports('jquery-cdn')) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, null, false);
    add_filter('script_loader_src', 'roots_jquery_local_fallback', 10, 2);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.6.2.min.js', false, null, false);
  wp_register_script('roots_plugins', get_template_directory_uri() . '/assets/js/plugins.js', false, null, true);
  wp_register_script('google_maps','//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false',false,null,true);
  wp_register_script('roots_main', get_template_directory_uri() . '/assets/js/main.js', false, null, true);
  wp_enqueue_script('jquery');
  wp_enqueue_script('modernizr');
  wp_enqueue_script('roots_plugins');
  wp_enqueue_script('google_maps');
  wp_enqueue_script('roots_main');
}
add_action('wp_enqueue_scripts', 'roots_scripts', 100);

// http://wordpress.stackexchange.com/a/12450
function roots_jquery_local_fallback($src, $handle) {
  static $add_jquery_fallback = false;

  if ($add_jquery_fallback) {
    echo '<script>window.jQuery || document.write(\'<script src="' . get_template_directory_uri() . '/assets/js/vendor/jquery-1.9.1.min.js"><\/script>\')</script>' . "\n";
    $add_jquery_fallback = false;
  }

  if ($handle === 'jquery') {
    $add_jquery_fallback = true;
  }

  return $src;
}

function roots_google_analytics() { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo GOOGLE_ANALYTICS_ID; ?>', 'casarustica.hu');
  ga('send', 'pageview');

</script>
<?php }
if (GOOGLE_ANALYTICS_ID) {
  add_action('wp_footer', 'roots_google_analytics', 20);
}
