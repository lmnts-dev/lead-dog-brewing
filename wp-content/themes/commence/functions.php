<?php
//* Code goes here

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}

/* Custom script with no dependencies, enqueued in the footer */

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
function  my_theme_enqueue_scripts() {
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/js/theme.js', 
    array(), false, true);
}


// Register Custom Post Type Artist
// Post Type Key: artist
add_action('init', 'create_artists_cpt', 0);
function create_artists_cpt()
{
  $labels = array(
    'name' => __('Artist', 'Post Type General Name', 'textdomain'),
    'singular_name' => __('Artist', 'Post Type Singular Name', 'textdomain'),
    'menu_name' => __('Artists', 'textdomain'),
    'name_admin_bar' => __('Artist', 'textdomain'),
    'archives' => __('Artist Archives', 'textdomain'),
    'attributes' => __('Artist Attributes', 'textdomain'),
    'parent_item_colon' => __('Parent Artist:', 'textdomain'),
    'all_items' => __('All Artists', 'textdomain'),
    'add_new_item' => __('Add New Artist', 'textdomain'),
    'add_new' => __('Add New', 'textdomain'),
    'new_item' => __('New Artist', 'textdomain'),
    'edit_item' => __('Edit Artist', 'textdomain'),
    'update_item' => __('Update Artist', 'textdomain'),
    'view_item' => __('View Artist', 'textdomain'),
    'view_items' => __('View Artists', 'textdomain'),
    'search_items' => __('Search Artist', 'textdomain'),
    'not_found' => __('Not found', 'textdomain'),
    'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
    'featured_image' => __('Featured Image', 'textdomain'),
    'set_featured_image' => __('Set featured image', 'textdomain'),
    'remove_featured_image' => __('Remove featured image', 'textdomain'),
    'use_featured_image' => __('Use as featured image', 'textdomain'),
    'insert_into_item' => __('Insert into Artist', 'textdomain'),
    'uploaded_to_this_item' => __('Uploaded to this Artist', 'textdomain'),
    'items_list' => __('Artists list', 'textdomain'),
    'items_list_navigation' => __('Artists list navigation', 'textdomain'),
    'filter_items_list' => __('Filter Artists list', 'textdomain'),
  );
  $args = array(
    'label' => __('Artist', 'textdomain'),
    'description' => __('', 'textdomain'),
    'labels' => $labels,
    'menu_icon' => 'dashicons-admin-users',
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 4,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => false,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'taxonomies' => array('post_tag', 'category'),
  );
  register_post_type('artist', $args);
}

// Register Custom Post Type Beer
// Post Type Key: beer
add_action('init', 'create_beers_cpt', 0);
function create_beers_cpt()
{
  $labels = array(
    'name' => __('Beers', 'Post Type General Name', 'textdomain'),
    'singular_name' => __('Beer', 'Post Type Singular Name', 'textdomain'),
    'menu_name' => __('Beers', 'textdomain'),
    'name_admin_bar' => __('Beer', 'textdomain'),
    'archives' => __('Beer Archives', 'textdomain'),
    'attributes' => __('Beer Attributes', 'textdomain'),
    'parent_item_colon' => __('Parent Beer:', 'textdomain'),
    'all_items' => __('All Beers', 'textdomain'),
    'add_new_item' => __('Add New Artist', 'textdomain'),
    'add_new' => __('Add New', 'textdomain'),
    'new_item' => __('New Beer', 'textdomain'),
    'edit_item' => __('Edit Beer', 'textdomain'),
    'update_item' => __('Update Beer', 'textdomain'),
    'view_item' => __('View Beer', 'textdomain'),
    'view_items' => __('View Beers', 'textdomain'),
    'search_items' => __('Search Beer', 'textdomain'),
    'not_found' => __('Not found', 'textdomain'),
    'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
    'featured_image' => __('Featured Image', 'textdomain'),
    'set_featured_image' => __('Set featured image', 'textdomain'),
    'remove_featured_image' => __('Remove featured image', 'textdomain'),
    'use_featured_image' => __('Use as featured image', 'textdomain'),
    'insert_into_item' => __('Insert into Beer', 'textdomain'),
    'uploaded_to_this_item' => __('Uploaded to this Beer', 'textdomain'),
    'items_list' => __('Beers list', 'textdomain'),
    'items_list_navigation' => __('Beers list navigation', 'textdomain'),
    'filter_items_list' => __('Filter Beers list', 'textdomain'),
  );
  $args = array(
    'label' => __('Beer', 'textdomain'),
    'description' => __('', 'textdomain'),
    'labels' => $labels,
    'menu_icon' => 'dashicons-beer',
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 4,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => false,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'taxonomies' => array('post_tag', 'category'),
  );
  register_post_type('beer', $args);
}

// Register Custom Post Type Merch
// Post Type Key: merch
add_action('init', 'create_merch_cpt', 0);
function create_merch_cpt()
{
  $labels = array(
    'name' => __('Merch', 'Post Type General Name', 'textdomain'),
    'singular_name' => __('Merch', 'Post Type Singular Name', 'textdomain'),
    'menu_name' => __('Merch', 'textdomain'),
    'name_admin_bar' => __('Merch', 'textdomain'),
    'archives' => __('Merch Archives', 'textdomain'),
    'attributes' => __('Merch Attributes', 'textdomain'),
    'parent_item_colon' => __('Parent Merch:', 'textdomain'),
    'all_items' => __('All Merch', 'textdomain'),
    'add_new_item' => __('Add New Merch Item', 'textdomain'),
    'add_new' => __('Add New', 'textdomain'),
    'new_item' => __('New Merch Item', 'textdomain'),
    'edit_item' => __('Edit Merch Item', 'textdomain'),
    'update_item' => __('Update Merch Item', 'textdomain'),
    'view_item' => __('View Merch Item', 'textdomain'),
    'view_items' => __('View Merch', 'textdomain'),
    'search_items' => __('Search Merch', 'textdomain'),
    'not_found' => __('Not found', 'textdomain'),
    'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
    'featured_image' => __('Featured Image', 'textdomain'),
    'set_featured_image' => __('Set featured image', 'textdomain'),
    'remove_featured_image' => __('Remove featured image', 'textdomain'),
    'use_featured_image' => __('Use as featured image', 'textdomain'),
    'insert_into_item' => __('Insert into Merch Item', 'textdomain'),
    'uploaded_to_this_item' => __('Uploaded to this Merch Item', 'textdomain'),
    'items_list' => __('Merch list', 'textdomain'),
    'items_list_navigation' => __('Merch list navigation', 'textdomain'),
    'filter_items_list' => __('Filter Merch list', 'textdomain'),
  );
  $args = array(
    'label' => __('Merch', 'textdomain'),
    'description' => __('', 'textdomain'),
    'labels' => $labels,
    'menu_icon' => 'dashicons-store',
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 4,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => false,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'taxonomies' => array('post_tag', 'category'),
  );
  register_post_type('merch', $args);
}

// Register Custom Post Type Distributor Portal Content
// Post Type Key: distributor portal content
add_action('init', 'create_portal_content_cpt', 0);
function create_portal_content_cpt()
{
  $labels = array(
    'name' => __('Portal Content', 'Post Type General Name', 'textdomain'),
    'singular_name' => __('Portal Content', 'Post Type Singular Name', 'textdomain'),
    'menu_name' => __('Portal Content', 'textdomain'),
    'name_admin_bar' => __('Portal Content', 'textdomain'),
    'archives' => __('Portal Content Archives', 'textdomain'),
    'attributes' => __('Portal Content Attributes', 'textdomain'),
    'parent_item_colon' => __('Parent Portal Content:', 'textdomain'),
    'all_items' => __('All Portal Content', 'textdomain'),
    'add_new_item' => __('Add New Portal Content Item', 'textdomain'),
    'add_new' => __('Add New', 'textdomain'),
    'new_item' => __('New Portal Content Item', 'textdomain'),
    'edit_item' => __('Edit Portal Content Item', 'textdomain'),
    'update_item' => __('Update Portal Content Item', 'textdomain'),
    'view_item' => __('View Portal Content Item', 'textdomain'),
    'view_items' => __('View Portal Content', 'textdomain'),
    'search_items' => __('Search Portal Content', 'textdomain'),
    'not_found' => __('Not found', 'textdomain'),
    'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
    'featured_image' => __('Featured Image', 'textdomain'),
    'set_featured_image' => __('Set featured image', 'textdomain'),
    'remove_featured_image' => __('Remove featured image', 'textdomain'),
    'use_featured_image' => __('Use as featured image', 'textdomain'),
    'insert_into_item' => __('Insert into Portal Content Item', 'textdomain'),
    'uploaded_to_this_item' => __('Uploaded to this Portal Content Item', 'textdomain'),
    'items_list' => __('Portal Content list', 'textdomain'),
    'items_list_navigation' => __('Portal Content list navigation', 'textdomain'),
    'filter_items_list' => __('Filter Portal Content list', 'textdomain'),
  );
  $args = array(
    'label' => __('Portal Content', 'textdomain'),
    'description' => __('', 'textdomain'),
    'labels' => $labels,
    'menu_icon' => 'dashicons-media-archive',
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 4,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => false,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'taxonomies' => array('post_tag', 'category'),
  );
  register_post_type('portal_content', $args);
}


// Register Custom Post Type FAQS
// Post Type Key: faq
add_action('init', 'create_faq_cpt', 0);
function create_faq_cpt()
{
  $labels = array(
    'name' => __('FAQs', 'Post Type General Name', 'textdomain'),
    'singular_name' => __('FAQ', 'Post Type Singular Name', 'textdomain'),
    'menu_name' => __('FAQs', 'textdomain'),
    'name_admin_bar' => __('FAQ', 'textdomain'),
    'archives' => __('FAQ Archives', 'textdomain'),
    'attributes' => __('FAQ Attributes', 'textdomain'),
    'parent_item_colon' => __('Parent FAQ:', 'textdomain'),
    'all_items' => __('All FAQs', 'textdomain'),
    'add_new_item' => __('Add New FAQ Item', 'textdomain'),
    'add_new' => __('Add New', 'textdomain'),
    'new_item' => __('New FAQ Item', 'textdomain'),
    'edit_item' => __('Edit FAQ Item', 'textdomain'),
    'update_item' => __('Update FAQ Item', 'textdomain'),
    'view_item' => __('View FAQ Item', 'textdomain'),
    'view_items' => __('View FAQ', 'textdomain'),
    'search_items' => __('Search FAQ', 'textdomain'),
    'not_found' => __('Not found', 'textdomain'),
    'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
    'featured_image' => __('Featured Image', 'textdomain'),
    'set_featured_image' => __('Set featured image', 'textdomain'),
    'remove_featured_image' => __('Remove featured image', 'textdomain'),
    'use_featured_image' => __('Use as featured image', 'textdomain'),
    'insert_into_item' => __('Insert into FAQ Item', 'textdomain'),
    'uploaded_to_this_item' => __('Uploaded to this FAQ Item', 'textdomain'),
    'items_list' => __('FAQ list', 'textdomain'),
    'items_list_navigation' => __('FAQ list navigation', 'textdomain'),
    'filter_items_list' => __('Filter FAQ list', 'textdomain'),
  );
  $args = array(
    'label' => __('FAQ', 'textdomain'),
    'description' => __('', 'textdomain'),
    'labels' => $labels,
    'menu_icon' => 'dashicons-text',
    'supports' => array('title', 'excerpt', 'thumbnail', 'editor'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 4,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => false,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'taxonomies' => array('post_tag', 'category'),
  );
  register_post_type('faq', $args);
}