<?php






	function techno_slider_post_type() 
	{
		$labels = array(
			'name'               => _x( 'Sliders', 'post type general name', 'techno' ),
			'singular_name'      => _x( 'Slider', 'post type singular name', 'techno' ),
			'menu_name'          => _x( 'Slider', 'admin menu', 'techno' ),
			'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'techno' ),
			'add_new'            => _x( 'Add New', 'slider', 'techno' ),
			'add_new_item'       => __( 'Add New Slider', 'techno' ),
			'new_item'           => __( 'New Slider', 'techno' ),
			'edit_item'          => __( 'Edit Slider', 'techno' ),
			'view_item'          => __( 'View Slider', 'techno' ),
			'all_items'          => __( 'All Slider', 'techno' ),
			'search_items'       => __( 'Search Slider', 'techno' ),
			'parent_item_colon'  => __( 'Parent Slider:', 'techno' ),
			'not_found'          => __( 'No sliders found.', 'techno' ),
			'not_found_in_trash' => __( 'No sliders found in Trash.', 'techno' )
		);
		
		$args = array(
			
		
			'labels'             => $labels,
			'public'             => true,
			'menu_icon'          =>'dashicons-format-gallery',
			'exclude_from_search'=> true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'slider' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title', 'thumbnail','page-attributes')
		);
		
		register_post_type( 'em_slider' , $args );
	}
	add_action( 'init', 'techno_slider_post_type' );