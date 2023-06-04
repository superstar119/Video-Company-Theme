<?php
/**
 * Custom posts for use with this theme
 */

add_action( 'init', 'custom_post_type', 0 );
/**
 * Register Custom Post Type
 */
function custom_post_type() {
	// Register Offer Custom Post Type
	// $labels = array(
	// 'name'                  => _x( 'Offers', 'offers', 'text_domain' ),
	// 'singular_name'         => _x( 'Offer', 'offer', 'text_domain' ),
	// 'menu_name'             => __( 'Offers', 'text_domain' ),
	// 'name_admin_bar'        => __( 'Offers', 'text_domain' ),
	// 'archives'              => __( 'Offers Archives', 'text_domain' ),
	// 'attributes'            => __( 'Offers Attributes', 'text_domain' ),
	// 'parent_item_colon'     => __( 'Parent Offers:', 'text_domain' ),
	// 'all_items'             => __( 'All Offers', 'text_domain' ),
	// 'add_new_item'          => __( 'Add Offer', 'text_domain' ),
	// 'add_new'               => __( 'Add Offer', 'text_domain' ),
	// 'new_item'              => __( 'New Offer', 'text_domain' ),
	// 'edit_item'             => __( 'Edit Offer', 'text_domain' ),
	// 'update_item'           => __( 'Update Offer', 'text_domain' ),
	// 'view_item'             => __( 'View Offer', 'text_domain' ),
	// 'view_items'            => __( 'View Offers', 'text_domain' ),
	// 'search_items'          => __( 'Search Offers', 'text_domain' ),
	// 'not_found'             => __( 'Not found', 'text_domain' ),
	// 'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	// 'featured_image'        => __( 'Featured Image', 'text_domain' ),
	// 'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	// 'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	// 'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	// 'insert_into_item'      => __( 'Insert into Offer', 'text_domain' ),
	// 'uploaded_to_this_item' => __( 'Uploaded to this Offer', 'text_domain' ),
	// 'items_list'            => __( 'Offers list', 'text_domain' ),
	// 'items_list_navigation' => __( 'Offers list navigation', 'text_domain' ),
	// 'filter_items_list'     => __( 'Filter Offers list', 'text_domain' ),
	// );
	// $args = array(
	// 'label'                 => __( 'Offers', 'text_domain' ),
	// 'description'           => __( 'Offers post type', 'text_domain' ),
	// 'labels'                => $labels,
	// 'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt', 'editor' ),
	// 'hierarchical'          => true,
	// 'public'                => true,
	// 'show_ui'               => true,
	// 'show_in_menu'          => true,
	// 'show_in_rest'          => true,
	// 'menu_position'         => 5,
	// 'show_in_admin_bar'     => true,
	// 'show_in_nav_menus'     => true,
	// 'can_export'            => true,
	// 'has_archive'           => false,
	// 'exclude_from_search'   => false,
	// 'publicly_queryable'    => true,
	// 'capability_type'       => 'post',
	// 'menu_icon'             => 'dashicons-media-text'
	// );
	// register_post_type( 'offer', $args );

		// Register Member Custom Post Type
	$labels_member = array(
	'name'                  => _x( 'Members', 'members', 'text_domain' ),
	'singular_name'         => _x( 'Member', 'member', 'text_domain' ),
	'menu_name'             => __( 'Members', 'text_domain' ),
	'name_admin_bar'        => __( 'Members', 'text_domain' ),
	'archives'              => __( 'Members Archives', 'text_domain' ),
	'attributes'            => __( 'Members Attributes', 'text_domain' ),
	'parent_item_colon'     => __( 'Parent Members:', 'text_domain' ),
	'all_items'             => __( 'All Members', 'text_domain' ),
	'add_new_item'          => __( 'Add Member', 'text_domain' ),
	'add_new'               => __( 'Add Member', 'text_domain' ),
	'new_item'              => __( 'New Member', 'text_domain' ),
	'edit_item'             => __( 'Edit Member', 'text_domain' ),
	'update_item'           => __( 'Update Member', 'text_domain' ),
	'view_item'             => __( 'View Member', 'text_domain' ),
	'view_items'            => __( 'View Members', 'text_domain' ),
	'search_items'          => __( 'Search Members', 'text_domain' ),
	'not_found'             => __( 'Not found', 'text_domain' ),
	'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	'featured_image'        => __( 'Featured Image', 'text_domain' ),
	'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	'insert_into_item'      => __( 'Insert into Member', 'text_domain' ),
	'uploaded_to_this_item' => __( 'Uploaded to this Member', 'text_domain' ),
	'items_list'            => __( 'Members list', 'text_domain' ),
	'items_list_navigation' => __( 'Members list navigation', 'text_domain' ),
	'filter_items_list'     => __( 'Filter Members list', 'text_domain' ),
	);
	$args_member = array(
		'label'                 => __( 'Members', 'text_domain' ),
		'description'           => __( 'Members post type', 'text_domain' ),
		'labels'                => $labels_member,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt', 'editor' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'             => 'dashicons-businessman'
	);
	register_post_type( 'member', $args_member );

	// Register Talent Custom Post Type
	$labels_talent = array(
		'name'                  => _x( 'Talents', 'talents', 'text_domain' ),
		'singular_name'         => _x( 'Talent', 'talent', 'text_domain' ),
		'menu_name'             => __( 'Talents', 'text_domain' ),
		'name_admin_bar'        => __( 'Talents', 'text_domain' ),
		'archives'              => __( 'Talents Archives', 'text_domain' ),
		'attributes'            => __( 'Talents Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Talents:', 'text_domain' ),
		'all_items'             => __( 'All Talents', 'text_domain' ),
		'add_new_item'          => __( 'Add Talent', 'text_domain' ),
		'add_new'               => __( 'Add Talent', 'text_domain' ),
		'new_item'              => __( 'New Talent', 'text_domain' ),
		'edit_item'             => __( 'Edit Talent', 'text_domain' ),
		'update_item'           => __( 'Update Talent', 'text_domain' ),
		'view_item'             => __( 'View Talent', 'text_domain' ),
		'view_items'            => __( 'View Talents', 'text_domain' ),
		'search_items'          => __( 'Search Talents', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Talent', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Talent', 'text_domain' ),
		'items_list'            => __( 'Talents list', 'text_domain' ),
		'items_list_navigation' => __( 'Talents list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Talents list', 'text_domain' ),
	);
	$args_talent = array(
		'label'                 => __( 'Talents', 'text_domain' ),
		'description'           => __( 'Talents post type', 'text_domain' ),
		'labels'                => $labels_talent,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt', 'editor' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'             => 'dashicons-businessperson'
	);
	register_post_type( 'talent', $args_talent );

	// Register Project Custom Post Type
	$labels_project = array(
		'name'                  => _x( 'Projects', 'projects', 'text_domain' ),
		'singular_name'         => _x( 'Project', 'project', 'text_domain' ),
		'menu_name'             => __( 'Projects', 'text_domain' ),
		'name_admin_bar'        => __( 'Projects', 'text_domain' ),
		'archives'              => __( 'Projects Archives', 'text_domain' ),
		'attributes'            => __( 'Projects Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Projects:', 'text_domain' ),
		'all_items'             => __( 'All Projects', 'text_domain' ),
		'add_new_item'          => __( 'Add Project', 'text_domain' ),
		'add_new'               => __( 'Add Project', 'text_domain' ),
		'new_item'              => __( 'New Project', 'text_domain' ),
		'edit_item'             => __( 'Edit Project', 'text_domain' ),
		'update_item'           => __( 'Update Project', 'text_domain' ),
		'view_item'             => __( 'View Project', 'text_domain' ),
		'view_items'            => __( 'View Projects', 'text_domain' ),
		'search_items'          => __( 'Search Projects', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Project', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'text_domain' ),
		'items_list'            => __( 'Projects list', 'text_domain' ),
		'items_list_navigation' => __( 'Projects list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Projects list', 'text_domain' ),
	);
	$args_project = array(
		'label'                 => __( 'Projects', 'text_domain' ),
		'description'           => __( 'Projects post type', 'text_domain' ),
		'labels'                => $labels_project,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt', 'editor' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'             => 'dashicons-welcome-learn-more'
	);
	register_post_type( 'project', $args_project );

	// Register Intelligence Custom Post Type
	$labels_intelligence = array(
		'name'                  => _x( 'Intelligences', 'intelligences', 'text_domain' ),
		'singular_name'         => _x( 'Intelligence', 'intelligence', 'text_domain' ),
		'menu_name'             => __( 'Intelligences', 'text_domain' ),
		'name_admin_bar'        => __( 'Intelligences', 'text_domain' ),
		'archives'              => __( 'Intelligences Archives', 'text_domain' ),
		'attributes'            => __( 'Intelligences Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Intelligences:', 'text_domain' ),
		'all_items'             => __( 'All Intelligences', 'text_domain' ),
		'add_new_item'          => __( 'Add Intelligence', 'text_domain' ),
		'add_new'               => __( 'Add Intelligence', 'text_domain' ),
		'new_item'              => __( 'New Intelligence', 'text_domain' ),
		'edit_item'             => __( 'Edit Intelligence', 'text_domain' ),
		'update_item'           => __( 'Update Intelligence', 'text_domain' ),
		'view_item'             => __( 'View Intelligence', 'text_domain' ),
		'view_items'            => __( 'View Intelligences', 'text_domain' ),
		'search_items'          => __( 'Search Intelligences', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Intelligence', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Intelligence', 'text_domain' ),
		'items_list'            => __( 'Intelligences list', 'text_domain' ),
		'items_list_navigation' => __( 'Intelligences list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Intelligences list', 'text_domain' ),
	);
	$args_intelligence = array(
		'label'                 => __( 'Intelligences', 'text_domain' ),
		'description'           => __( 'Intelligences post type', 'text_domain' ),
		'labels'                => $labels_intelligence,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt', 'editor' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'             => 'dashicons-megaphone'
	);
	register_post_type( 'intelligence', $args_intelligence );
}
