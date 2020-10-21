<?php




	// Brand Sponsor Post Type
	function techno_brand_post_type() 
	{
		$labels = array(
			'name'               => _x( 'Brand', 'post type general name', 'techno' ),
			'singular_name'      => _x( 'Brand', 'post type singular name', 'techno' ),
			'menu_name'          => _x( 'Brand', 'admin menu', 'techno' ),
			'name_admin_bar'     => _x( 'Brand', 'add new on admin bar', 'techno' ),
			'add_new'            => _x( 'Add New', 'Brand', 'techno' ),
			'add_new_item'       => __( 'Add New Brand', 'techno' ),
			'new_item'           => __( 'New Brand', 'techno' ),
			'edit_item'          => __( 'Edit Brand', 'techno' ),
			'view_item'          => __( 'View Brand', 'techno' ),
			'all_items'          => __( 'All Brand', 'techno' ),
			'search_items'       => __( 'Search Brand', 'techno' ),
			'parent_item_colon'  => __( 'Parent Brand:', 'techno' ),
			'not_found'          => __( 'No Brand found.', 'techno' ),
			'not_found_in_trash' => __( 'No Brand found in Trash.', 'techno' )
		);
		
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'menu_icon'          =>'dashicons-format-status',		
			'exclude_from_search'=> true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'em_brand' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor', 'thumbnail')
		);
		
		register_post_type( 'em_brand' , $args );
	}
	add_action( 'init', 'techno_brand_post_type' );