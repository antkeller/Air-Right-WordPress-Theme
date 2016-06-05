<?php
// Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
function html5reset_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
	// register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'html5reset_setup' );

// Clean up the <head>, if you so desire.
function removeHeadLinks() {
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');

// GET PAGE TITLE
function getPageTitle($pageID) {
	$title = get_post_meta($pageID, '_yoast_wpseo_title', true);
	if(!$title) {
		return get_the_title($pageID);
	} else {
		return $title;
	}
}

// Custom Menu
register_nav_menu( 'primary', __( 'Main Navigation Menu' ) );
register_nav_menu( 'mobile', __( 'Mobile Navigation Menu' ) );
register_nav_menu( 'footer', __( 'Footer Navigation Menu' ) );

// SET UP CUSTOM POST TYPES
function register_custom_post_types() {
  // START PRODUCTS
  $labels = array(
    'name' => _x('Products', 'post type general name'),
    'singular_name' => _x('Product', 'post type singular name'),
    'add_new' => _x('Add New', 'airright_products'),
    'add_new_item' => __('Add New Product'),
    'edit_item' => __('Edit Product'),
    'new_item' => __('New Product'),
    'all_items' => __('All Products'),
    'view_item' => __('View Product'),
    'search_items' => __('Search Products'),
    'not_found' =>  __('No Product Found'),
    'not_found_in_trash' => __('No Products Found In Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Products'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array("slug" => "products"),
    'capability_type' => 'page',
    'has_archive' => false,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'page-attributes', 'comments' )
  );
  register_post_type('airright_products',$args);
	// START INDUSTRIES
  $labels = array(
    'name' => _x('Industries', 'post type general name'),
    'singular_name' => _x('Industry', 'post type singular name'),
    'add_new' => _x('Add New', 'airright_industries'),
    'add_new_item' => __('Add New Industry'),
    'edit_item' => __('Edit Industry'),
    'new_item' => __('New Industry'),
    'all_items' => __('All Industries'),
    'view_item' => __('View Industry'),
    'search_items' => __('Search Industries'),
    'not_found' =>  __('No Industry Found'),
    'not_found_in_trash' => __('No Industries Found In Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Industries'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array("slug" => "industries"),
    'capability_type' => 'page',
    'has_archive' => false,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'page-attributes', 'comments' )
  );
  register_post_type('airright_industries',$args);
	// START SERVICES
  $labels = array(
    'name' => _x('Services', 'post type general name'),
    'singular_name' => _x('Service', 'post type singular name'),
    'add_new' => _x('Add New', 'airright_services'),
    'add_new_item' => __('Add New Service'),
    'edit_item' => __('Edit Service'),
    'new_item' => __('New Service'),
    'all_items' => __('All Services'),
    'view_item' => __('View Service'),
    'search_items' => __('Search Services'),
    'not_found' =>  __('No Service Found'),
    'not_found_in_trash' => __('No Services Found In Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Services'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array("slug" => "services"),
    'capability_type' => 'page',
    'has_archive' => false,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'page-attributes', 'comments' )
  );
  register_post_type('airright_services',$args);
}
// run the registration
add_action( 'init', 'register_custom_post_types' );
?>
