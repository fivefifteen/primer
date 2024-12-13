<?php
function primer_generate_taxonomy_labels($singular, $plural = null) {
  if (!$plural) $plural = $singular . 's';
  
  return array(
    'name'              => $plural,
    'singular_name'     => $singular,
    'search_items'      => "Search $plural",
    'all_items'         => "All $plural",
    'parent_item'       => "Parent $singular",
    'parent_item_colon' => "Parent $singular:",
    'edit_item'         => "Edit $singular",
    'update_item'       => "Update $singular",
    'add_new_item'      => "Add New $singular",
    'new_item_name'     => "New $singular",
    'menu_name'         => $plural
  );
}


// add_action('init', 'primer_register_faq_category_taxonomy', 0);
function primer_register_faq_categories_taxonomy() {
  register_taxonomy('faq_category', 'faq', array(
    'hierarchical'  => true,
    'labels'        => primer_generate_taxonomy_labels('FAQ Category', 'FAQ Categories')
  ));
}
?>