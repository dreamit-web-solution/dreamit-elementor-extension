<?php



	// Screenshot Post Type
	function techno_screenshot_post_type(){
		$labels = array(
			'name'               => _x( 'Screenshot', 'post type general name', 'techno' ),
			'singular_name'      => _x( 'Screenshot', 'post type singular name', 'techno' ),
			'menu_name'          => _x( 'Screenshot', 'admin menu', 'techno' ),
			'name_admin_bar'     => _x( 'Screenshot', 'add new on admin bar', 'techno' ),
			'add_new'            => _x( 'Add New', 'Screenshot', 'techno' ),
			'add_new_item'       => __( 'Add New Screenshot', 'techno' ),
			'new_item'           => __( 'New Screenshot', 'techno' ),
			'edit_item'          => __( 'Edit Screenshot', 'techno' ),
			'view_item'          => __( 'View Screenshot', 'techno' ),
			'all_items'          => __( 'All Screenshot', 'techno' ),
			'search_items'       => __( 'Search Screenshot', 'techno' ),
			'parent_item_colon'  => __( 'Parent Screenshot:', 'techno' ),
			'not_found'          => __( 'No Screenshot found.', 'techno' ),
			'not_found_in_trash' => __( 'No Screenshot found in Trash.', 'techno' )
		);
		
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'menu_icon'          =>'dashicons-format-status',		
			'exclude_from_search'=> true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'em_screenshot' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor', 'thumbnail')
		);
		
		register_post_type( 'em_screenshot' , $args );
	}
	add_action( 'init', 'techno_screenshot_post_type' );