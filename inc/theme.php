<?php
add_action('after_setup_theme', 'primer_setup');
function primer_setup() {
  // Clean up the head
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'wp_shortlink_wp_head');

  // Add document title tag to head
  add_theme_support('title-tag');

  // Add RSS links to head
  add_theme_support('automatic-feed-links');

  // Enable Post Thumbnails
  add_theme_support( 'post-thumbnails', array('post'));

  // Enable HTML5
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));

  // Add custom image sizes
  // add_image_size('card', 260, 390, true);
  // add_image_size('tiny', 30, 30, true);
  // add_image_size('wide_thumbnail', 300, 150, true);
  // add_image_size('profile_pic', 300, 300, true);

  // Register navigation menus
  register_nav_menu('header-navigation', 'Header Navigation');
  // register_nav_menu('footer-navigation', 'Footer Navigation');

  // Add Editor Style
  // add_editor_style('editor-style.css');
}


// Disables the Gutenberg Editor
add_filter('use_block_editor_for_post', '__return_false');


// Enqueues scripts and styles
add_action('wp_enqueue_scripts', 'primer_enqueue');
function primer_enqueue() {
  if (!is_admin()) {
    wp_register_style('primer_styles', THEME_URL . '/style.css', null, filemtime(THEME_PATH . '/style.css'), 'all');
    wp_enqueue_style('primer_styles');

    wp_register_script('primer_scripts', THEME_URL . '/scripts.js', array(), filemtime(THEME_PATH . '/scripts.js'), true);
    wp_enqueue_script('primer_scripts');
  }
}


// Adds the Google Analytics tracking code to the head
add_action('wp_head', 'primer_google_analytics_tracking_code');
function primer_google_analytics_tracking_code() {
  if (defined('GOOGLE_ANALYTICS_ID') && !empty(GOOGLE_ANALYTICS_ID)):
    $google_analytics_ids = (array) GOOGLE_ANALYTICS_ID;
?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?=$google_analytics_ids[0]?>"></script>
  <script>
    window.dataLayer = window.dataLayer || []
    function gtag () { dataLayer.push(arguments) }
    gtag('js', new Date())

    <?php foreach($google_analytics_ids as $google_analytics_id): ?>
      gtag('config', '<?=$google_analytics_id?>')
    <?php endforeach; ?>
  </script>
<?php
  endif;
}


// Prevents the theme from being updated by WordPress's servers
add_filter('http_request_args', 'primer_prevent_theme_updates', 5, 2);
function primer_prevent_theme_updates($r, $url) {
  if (strpos($url, 'http://api.wordpress.org/themes/update-check') !== 0) return $r;
  $themes = unserialize($r['body']['themes']);
  unset($themes[get_option('template')]);
  unset($themes[get_option('stylesheet')]);
  $r['body']['themes'] = serialize($themes);
  return $r;
}
?>