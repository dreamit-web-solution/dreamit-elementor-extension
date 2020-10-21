<?php





	function techno_portfolio_post_type() 
	{
		$labels = array(
			'name'               => _x( 'Portfolio', 'post type general name', 'techno' ),
			'singular_name'      => _x( 'Portfolio', 'post type singular name', 'techno' ),
			'menu_name'          => _x( 'Portfolio', 'admin menu', 'techno' ),
			'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'techno' ),
			'add_new'            => _x( 'Add New', 'Portfolio', 'techno' ),
			'add_new_item'       => __( 'Add New Portfolio', 'techno' ),
			'new_item'           => __( 'New Portfolio', 'techno' ),
			'edit_item'          => __( 'Edit Portfolio', 'techno' ),
			'view_item'          => __( 'View Portfolio', 'techno' ),
			'all_items'          => __( 'All Portfolio', 'techno' ),
			'search_items'       => __( 'Search Portfolio', 'techno' ),
			'parent_item_colon'  => __( 'Parent Portfolio:', 'techno' ),
			'not_found'          => __( 'No Portfolio found.', 'techno' ),
			'not_found_in_trash' => __( 'No Portfolio found in Trash.', 'techno' )
		);
		
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'menu_icon'          =>'dashicons-images-alt2',		
			'exclude_from_search'=> true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'em_portfolios' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor', 'thumbnail')
		);
		
		register_post_type( 'em_portfolio' , $args );
		
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
			'rewrite'           => array( 'slug' => 'portfolio-category' ),
		);
		
		register_taxonomy( 'em_portfolio_cat', array( 'em_portfolio' ), $args );
	}
	add_action( 'init', 'techno_portfolio_post_type' );