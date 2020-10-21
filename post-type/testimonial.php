<?php





	// testimonial
	function techno_testimonial_post_type() 
	{
		$labels = array(
			'name'               => _x( 'Testimonials', 'post type general name', 'techno' ),
			'singular_name'      => _x( 'Testimonial', 'post type singular name', 'techno' ),
			'menu_name'          => _x( 'Testimonial', 'admin menu', 'techno' ),
			'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'techno' ),
			'add_new'            => _x( 'Add New', 'Testimonial', 'techno' ),
			'add_new_item'       => __( 'Add New Testimonial', 'techno' ),
			'new_item'           => __( 'New Testimonial', 'techno' ),
			'edit_item'          => __( 'Edit Testimonial', 'techno' ),
			'view_item'          => __( 'View Testimonial', 'techno' ),
			'all_items'          => __( 'All Testimonial', 'techno' ),
			'search_items'       => __( 'Search Testimonial', 'techno' ),
			'parent_item_colon'  => __( 'Parent Testimonial:', 'techno' ),
			'not_found'          => __( 'No Testimonials found.', 'techno' ),
			'not_found_in_trash' => __( 'No Testimonials found in Trash.', 'techno' )
		);
		
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'menu_icon'          =>'dashicons-format-status',		
			'exclude_from_search'=> true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'em_testimonial' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor', 'thumbnail')
		);
		
		register_post_type( 'em_testimonial' , $args );
	}
	add_action( 'init', 'techno_testimonial_post_type' );