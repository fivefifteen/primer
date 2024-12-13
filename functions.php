<?php
define('THEME_URL', get_template_directory_uri());
define('THEME_PATH', get_template_directory());
define('IMAGES', THEME_URL . '/img');


require_once(THEME_PATH . '/inc/plugins.php');
require_once(THEME_PATH . '/inc/post-types.php');
require_once(THEME_PATH . '/inc/roles.php');
require_once(THEME_PATH . '/inc/taxonomies.php');
require_once(THEME_PATH . '/inc/theme.php');


// A wrapper for error_log() that will run arrays and objects through print_r()
// and also allows for an unlimited number of parameters
function write_log(...$log) {
  foreach ($log as $key => $val) {
    if (is_array($val) || is_object($val)) {
      $log[$key] = print_r($val, true);
    }
  }

  error_log(implode(' ', $log));
}


// Checks to see if $key exists in $arr and returns it, otherwise returns $default
function arrval($arr, $key, $default = null) {
  return is_array($arr) && isset($arr[$key]) ? $arr[$key] : $default;
}


// Returns the contents of an SVG file or an IMG tag with the src set to the file path
function get_svg($svg, $class = 'style-svg', $alt = null, $get_contents = false, $echo = false) {
  $file = '/img/svg/' . $svg . '.svg';
  $file_path = get_stylesheet_directory() . $file;
  $file_url = get_stylesheet_directory_uri() . $file;
  $response = false;

  if (!$class) $class = '';
  $class = trim("{$svg} {$class}");

  if (file_exists($file_path)) {
    if ($get_contents) {
      $response = file_get_contents($file_path);
    } else {
      $response = "<img src=\"{$file_url}\" class=\"{$class}\" alt=\"{$alt}\" />";
    }

    if ($echo) echo $response;
  }

  return $response;
}
?>