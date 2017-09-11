<?php

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

add_filter( 'show_admin_bar', '__return_false' );



// Load specific jquery function
function my_init() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery'); 
		
		
		
		// <link rel="stylesheet" id="style-css" href="./development2_files/style.css" type="text/css" media="all" />
		wp_register_style('my_theme_style0', './development2_files/style.css', array(), '1.0', 'all'); 
		// wp_enqueue_style('my_theme_style0', get_stylesheet_uri());

		// ********* ESTE ES EL CSS ***************
		// <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> ???
		wp_register_style('my_theme_style1', 'http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css', array(), '1.4.5', 'all'); 
		wp_enqueue_style('my_theme_style1', get_stylesheet_uri());
	}
}
// add_action('init', 'my_init');




function ohconnect_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'ohconnect_resources');

// Get top ancestor
function get_top_ancestor_id() {
	
	global $post;
	
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	
	return $post->ID;
	
}

// Does page have children?
function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
	
}



//display child pages of the current page
if ( !function_exists('get_children_pages') ) {
	function get_children_pages() {
		global $wp_query;

		if ( empty($wp_query->post->post_parent) ) {
			$parent = $wp_query->post->ID;
		} else {
			$parent = $wp_query->post->post_parent;
		}

		wp_list_pages( 'title_li=&child_of=' . $parent . '&depth=' );
	}
}

// Theme setup
function learningWordPress_setup() {
	
	// Navigation Menus
	register_nav_menus(array(
		'header' => __( 'Header Menu' ),
		'primary' => __( 'Primary Menu' ),
		'secondary' => __( 'Secondary Menu' ),
		'footer' => __( 'Footer Menu'),
	));
	
	// Add featured image support
	add_theme_support('post-thumbnails');
	
	add_image_size
	( 'small-thumbnail'
	, 180 // width in pixels
	, 120 // height in pixels
	, true // crop or no crop
	);
	
	add_image_size
	( 'banner-image'
	, 920
	, 210
	, array('left','top')
	);
	


}
add_action('after_setup_theme', 'learningWordPress_setup');

?>
