<?php
// Gravity Forms: Disable the built-in theme (so we can create a custom one)
add_filter('gform_disable_form_theme_css', '__return_true');
add_filter('gform_disable_form_legacy_css', '__return_true');


// Updraft Plus: Prevent backups being created for non-production environments
add_filter('updraftplus_boot_backup', 'primer_prevent_non_prod_backups');
function primer_prevent_non_prod_backups($do_backup) {
  if (wp_get_environment_type() !== 'production') return false;
  return $do_backup;
}


// Yoast SEO: Custom breadcrumb separator when using the `yoast_breadcrumb` function
add_filter('wpseo_breadcrumb_separator', 'primer_breadcrumb_separator');
function primer_breadcrumb_separator($separator) {
  return ' / ';
}
?>