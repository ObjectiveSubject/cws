<?php

// Case Studies post type ================================ /
add_action('init', 'register_case_study');

function register_case_study() {

	$labels = array (
		'name' => 'Case Studies',
		'singular_name' => 'Case Study',
		'menu_name' => 'Case Studies',
		'name_admin_bar' => 'Case Study',
		'add_new' => 'Add Case Study',
		'add_new_item' => 'Add New Case Study',
		'edit' => 'Edit',
		'edit_item' => 'Edit Case Study',
		'new_item' => 'New Case Study',
		'all_items' => 'All Case Studies',
		'view' => 'View Case Study',
		'view_item' => 'View Case Study',
		'search_items' => 'Search Case Studies',
		'not_found' => 'No Case Studies Found',
		'not_found_in_trash' => 'No Case Studies Found in Trash',
		'parent' => 'Parent Case Studies',
	);

	register_post_type('case_study', array(
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'has_archive' => true,
			'rewrite' => array('slug' => 'case-studies', 'with_front' => false),
			'query_var' => true,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail', 'excerpt'),
			'menu_icon' => 'dashicons-format-aside',
			'labels' => $labels
		)
	);
}

// Custom Admin Columns (optional) ======= /

// function my_{post-type}_columns($columns) {
// 	$columns = array(
// 		'cb'	 	=> '<input type="checkbox" />',
// 		'title' 	=> 'Title',
//     'taxonomy' => 'Taxonomy',
//     'processes' => 'Processes',
// 		'date'		=>	'Date',
// 	);
// 	return $columns;
// }
// function my_custom_columns($column, $post_id) {
// 	switch ($column) {
// 		case "taxonomy" :
// 			$terms = get_the_term_list( $post_id , 'taxonomy' , '' , ', ' , '' );
// 			if ( is_string( $terms ) )
// 				echo $terms;
// 			else
// 				echo '—';
// 			break;
// 	}
// }
// add_action("manage_{post-type}_posts_custom_column", "my_custom_columns", 10, 2);
// add_filter("manage_edit-{post-type}_columns", "my_{post-type}_columns");


// Professionals post type ================================ /
add_action('init', 'register_professional');

function register_professional() {

	$labels = array (
		'name' => 'Professionals',
		'singular_name' => 'Professional',
		'menu_name' => 'Professionals',
		'name_admin_bar' => 'Professional',
		'add_new' => 'Add Professional',
		'add_new_item' => 'Add New Professional',
		'edit' => 'Edit',
		'edit_item' => 'Edit Professional',
		'new_item' => 'New Professional',
		'all_items' => 'All Professionals',
		'view' => 'View Professional',
		'view_item' => 'View Professional',
		'search_items' => 'Search Professionals',
		'not_found' => 'No Professionals Found',
		'not_found_in_trash' => 'No Professionals Found in Trash',
		'parent' => 'Parent Professionals',
	);

	register_post_type('professional', array(
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'has_archive' => true,
			'rewrite' => array('slug' => 'professionals', 'with_front' => false),
			'query_var' => true,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail'),
			'menu_icon' => 'dashicons-businessman',
			'labels' => $labels
		)
	);
}

// Services post type ================================ /
add_action('init', 'register_service');

function register_service() {

	$labels = array (
		'name' => 'Services',
		'singular_name' => 'Service',
		'menu_name' => 'Services',
		'name_admin_bar' => 'Service',
		'add_new' => 'Add Service',
		'add_new_item' => 'Add New Service',
		'edit' => 'Edit',
		'edit_item' => 'Edit Service',
		'new_item' => 'New Service',
		'all_items' => 'All Services',
		'view' => 'View Service',
		'view_item' => 'View Service',
		'search_items' => 'Search Services',
		'not_found' => 'No Services Found',
		'not_found_in_trash' => 'No Services Found in Trash',
		'parent' => 'Parent Services',
	);

	register_post_type('service', array(
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'has_archive' => true,
			'rewrite' => array('slug' => 'services', 'with_front' => false),
			'query_var' => true,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail','excerpt'),
			'menu_icon' => 'dashicons-admin-tools',
			'labels' => $labels
		)
	);
}

?>
