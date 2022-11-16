<?php
//* Code goes here

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
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