<?php


	// Post Tab
	function techno_post_tabpost_type(){
		
		$labels = array(
			'name'               => _x( 'Posts Tab', 'post type general name', 'techno' ),
			'singular_name'      => _x( 'Post Tab', 'post type singular name', 'techno' ),
			'menu_name'          => _x( 'Post Tab', 'admin menu', 'techno' ),
			'name_admin_bar'     => _x( 'Post Tab', 'add new on admin bar', 'techno' ),
			'add_new'            => _x( 'Add New', 'Post Tab', 'techno' ),
			'add_new_item'       => __( 'Add New Post Tab', 'techno' ),
			'new_item'           => __( 'New Post Tab', 'techno' ),
			'edit_item'          => __( 'Edit Post Tab', 'techno' ),
			'view_item'          => __( 'View Post Tab', 'techno' ),
			'all_items'          => __( 'All Post Tab', 'techno' ),
			'search_items'       => __( 'Search Post Tab', 'techno' ),
			'parent_item_colon'  => __( 'Parent Post Tab:', 'techno' ),
			'not_found'          => __( 'No Post Tab found.', 'techno' ),
			'not_found_in_trash' => __( 'No Post Tab found in Trash.', 'techno' )
		);
		
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'menu_icon'          =>'dashicons-welcome-add-page',		
			'exclude_from_search'=> true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'em_tab' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor', 'thumbnail')
		);
		
		register_post_type( 'em_tab' , $args );
	}
	add_action( 'init', 'techno_post_tabpost_type' );