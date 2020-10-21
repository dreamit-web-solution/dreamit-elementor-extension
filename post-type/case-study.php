<?php





	// Case Study
	function techno_case_study_post_type() 
	{
		$labels = array(
			'name'               => _x( 'Case Study', 'post type general name', 'techno' ),
			'singular_name'      => _x( 'Case Study', 'post type singular name', 'techno' ),
			'menu_name'          => _x( 'Case Study', 'admin menu', 'techno' ),
			'name_admin_bar'     => _x( 'Case Study', 'add new on admin bar', 'techno' ),
			'add_new'            => _x( 'Add New', 'Case Study', 'techno' ),
			'add_new_item'       => __( 'Add New Case Study', 'techno' ),
			'new_item'           => __( 'New Case Study', 'techno' ),
			'edit_item'          => __( 'Edit Case Study', 'techno' ),
			'view_item'          => __( 'View Case Study', 'techno' ),
			'all_items'          => __( 'All Case Study', 'techno' ),
			'search_items'       => __( 'Search Case Study', 'techno' ),
			'parent_item_colon'  => __( 'Parent Case Study:', 'techno' ),
			'not_found'          => __( 'No Case Study found.', 'techno' ),
			'not_found_in_trash' => __( 'No Case Study found in Trash.', 'techno' )
		);
		
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'menu_icon'          =>'dashicons-format-status',		
			'exclude_from_search'=> true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'em_case_study' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor', 'thumbnail')
		);
		
		register_post_type( 'em_case_study' , $args );
		
		$labels = array(
			'name'              => _x( 'Categories', 'taxonomy general name', 'techno' ),
			'singular_name'     => _x( 'Category', 'taxonomy singular name', 'techno' ),
			'search_items'      => __( 'Search Categories', 'techno' ),
			'all_items'         => __( 'All Categories', 'techno' ),
			'parent_item'       => __( 'Parent Category', 'techno' ),
			'parent_item_colon' => __( 'Parent Category:', 'techno' ),
			'edit_item'         => __( 'Edit Category', 'techno' ),
			'update_item'       => __( 'Update Category', 'techno' ),
			'add_new_item'      => __( 'Add New Category', 'techno' ),
			'new_item_name'     => __( 'New Category Name', 'techno' ),
			'menu_name'         => __( 'Categories', 'techno' ),
		);

		$args = array(
			'public'            => false,
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => false,
			'query_var'         => false,
			'rewrite'           => array( 'slug' => 'casestudy-category' ),  
		);
		
		register_taxonomy( 'em_case_study_cat', array( 'em_case_study' ), $args );
	}
	add_action( 'init', 'techno_case_study_post_type' );