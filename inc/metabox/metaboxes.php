<?php




	function techno_metabox() {

		$prefix = '_techno_';

		//header metabox
	 	$page_heading_style = new_cmb2_box( array(
		'id'            => $prefix . 'em_header_style_option',
		'title'         => esc_html__( 'Header Style Option', 'techno' ),
		'object_types'  => array( 'page' ), // Post type
		'priority'   => 'high',
		) );
	

	
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Top Menu Style ','techno'),
			'id'      => $prefix . 'techno_header_topa',
			'type'    => 'radio_inline',
			'options' => array(
			'1' => esc_html__( 'Show Top Menu This Page', 'techno' ),
			'2'   => esc_html__( 'Hide Top Menu This Page', 'techno' ),
			),
			'default' =>'2',
		) );
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Header Style','techno'),
			'id'      => $prefix . 'techno_header_style',
			'show_option_none' => true,
			'desc'   => esc_html__( 'Note: When you select 1-1,3,4,6 style menu, that time you need to set top bar menu, otherwise you can not find our real menu style.', 'techno' ), 			
			'type'    => 'select',
			'options' => array(
				'1' => esc_html__( '1 Header Main Menu', 'techno' ),				
				'7' => esc_html__( '2 Header Main Menu with Sticky', 'techno' ),				
				'2' => esc_html__( '3 Header Transparent Menu', 'techno' ),
				'3' => esc_html__( '4 Header Transparent With Sticky Menu', 'techno' ),		
				'4' => esc_html__( '5 Header One Page Menu', 'techno' ),
				'5' => esc_html__( '6 Header One Page Transparent Menu', 'techno' ),				
				'6' => esc_html__( '7 Header One Page Transparent With Sticky  Menu', 'techno' ),
				'8' => esc_html__( '8 Header Menu With Search', 'techno' ),
				'10' => esc_html__( '9 Header Menu With Button', 'techno' ),
				'9' => esc_html__( '10 Header Transparent With Search', 'techno' ),
				'16' => esc_html__( '11 Header Transparent With Button', 'techno' ),					
				'14' => esc_html__( '12 Header One Page With Search Menu', 'techno' ),								
				'17' => esc_html__( '13 Header One Page Transparent With Search Menu', 'techno' ),			
				'18' => esc_html__( '14 Header One Page Transparent With Button', 'techno' ),					
				'15' => esc_html__( '15 Full Width Transparent Menu With Button & Search', 'techno' ),					
			),
			'default' =>'1',
		) );	
		
		  //page metabox
		  $page_breadcrumb = new_cmb2_box( array(
		   'id'            => $prefix . 'pageid1',
		   'title'         => esc_html__( 'Breadcumb Option', 'techno' ),
		   'object_types'  => array( 'post','page','em_event','em_portfolio' ), // Post type
		   'priority'   => 'high',
		  ) );
		  
		  $page_breadcrumb->add_field( array(
		   'name'    => esc_html__('Page Title','techno'),
		   'id'      => $prefix . 'ptitle',
		   'type'    => 'radio_inline',
		   'options' => array(
			'ptitles' => esc_html__( 'Hide Title', 'techno' ),
			'ptitleh'   => esc_html__( 'Show Title', 'techno' ),
		   ),
		   'default' =>'ptitleh',
		  ) );   
		  
		  
		$page_breadcrumb->add_field( array(
			'name'    => esc_html__('Breadcrumb','techno'),
			'id'      => $prefix . 'breadcrumbs',
			'type'    => 'radio_inline',
			'options' => array(
			'0' => esc_html__( 'Show breadcrumb', 'techno' ),
			'1'   => esc_html__( 'Hide breadcrumb', 'techno' ),
			),
			'default' =>0,
		) );
		$page_breadcrumb->add_field( array(
			'name'    => esc_html__('Breadcrumb Title','techno'),
			'id'      => $prefix . 'btitle',
			'type'    => 'radio_inline',
			'options' => array(
			'btitles' => esc_html__( 'Show Title', 'techno' ),
			'btitleh'   => esc_html__( 'Hide Title', 'techno' ),
			),
			'default' =>'btitleh',
		) );    
		$page_breadcrumb->add_field(array(
			'name' => esc_html__( 'Page Breadcrumb Image', 'techno' ),
			'id'   => $prefix .'pageimagess',
			'desc'       => esc_html__( 'insert image here', 'techno' ),  
			'type' => 'file',
		) );  
		$page_breadcrumb->add_field( array(
			'name'             => esc_html__('Text Align','techno'),
			'desc'             => esc_html__('Select an option','techno'),
			'id'   => $prefix .'page_text_align',
			'type'             => 'select',
			'show_option_none' => true,
			'default'          => 'text-center',
			'options'          => array(
			'text-left' => esc_html__( 'Align Left', 'techno' ),
			'text-center'   => esc_html__( 'Align Middle', 'techno' ),
			'text-right'     => esc_html__( 'Alige Right', 'techno' ),
			),
		) );
		$page_breadcrumb->add_field( array(
			'name'             => esc_html__('Text Transform','techno'),
			'desc'             => esc_html__('Select an option','techno'),
			'id'   => $prefix .'page_text_transform',
			'type'             => 'select',
			'show_option_none' => true,
			'default'          => 'ccase',
			'options'          => array(
			'lcase' => esc_html__( 'Transform lowercase', 'techno' ),
			'ucase'   => esc_html__( 'Transform uppercase', 'techno' ),
			'ccase'     => esc_html__( 'Transform capitalize', 'techno' ),
			),
		) );	
		

		//Testimonial
		$testimonial = new_cmb2_box( array(
			'id'            => $prefix . 'em_testimonial',
			'title'         => esc_html__( 'Testimonial Option', 'techno' ),
			'object_types'  => array( 'em_testimonial' ), // Post type
			'priority'   => 'high',
		) );
			$testimonial->add_field( array(
				'name'       => esc_html__( 'Degignation', 'techno' ),
				'desc'       => esc_html__( 'insert Degignation here', 'techno' ),
				'id'         => $prefix . 'testi_deg',
				'type'       => 'text',
			) );	
			
							
		//Case Study
		$casestudy = new_cmb2_box( array(
			'id'            => $prefix . 'em_case_study',
			'title'         => esc_html__( 'Case Study Option', 'techno' ),
			'object_types'  => array( 'em_case_study' ), // Post type
			'priority'   => 'high',
		) );
			$casestudy->add_field( array(
				'name'       => esc_html__( 'Case Study Description', 'techno' ),
				'desc'       => esc_html__( 'Description', 'techno' ),
				'id'         => $prefix . 'casedesc',
				'type'       => 'wysiwyg',
			) );	
							
				
				
			//===================================
			//Portfolio Metaboxes
			//===================================  

			$portfolio = new_cmb2_box( array(
				'id'            => $prefix . 'portfolio',
				'title'         => esc_html__( 'Portfolio Option', 'techno' ),
				'object_types'  => array( 'em_portfolio', ), // Post type
				'priority'   => 'high',
			) );
			$portfolio->add_field( array(
				'name'       => esc_html__( 'Portfolio Description', 'techno' ),
				'desc'       => esc_html__( 'Description', 'techno' ),
				'id'         => $prefix . 'portdesc',
				'type'       => 'wysiwyg',
			) );				
			
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide All Option','techno'),			  
			   'id'      => $prefix . 'saloption',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_alshow' => esc_html__( 'Show', 'techno' ),
				'm_alhide'   => esc_html__( 'Hide', 'techno' ),
			   ),
			   'default' =>'m_alhide',
			  ) );			
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Popup Image','techno'),			  
			   'id'      => $prefix . 'siimagepop',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_ishow' => esc_html__( 'Show', 'techno' ),
				'm_ihide'   => esc_html__( 'Hide', 'techno' ),
			   ),
			   'default' =>'m_ishow',
			  ) );
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Link Page','techno'),			  
			   'id'      => $prefix . 'sllink',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_lshow' => esc_html__( 'Show', 'techno' ),
				'm_lhide'   => esc_html__( 'Hide', 'techno' ),
			   ),
			   'default' =>'m_lshow',
			  ) );				  
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Popup Youtube','techno'),			  
			   'id'      => $prefix . 'shyoutub',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_yshow' => esc_html__( 'Show', 'techno' ),
				'm_yhide'   => esc_html__( 'Hide', 'techno' ),
			   ),
			   'default' =>'m_yhide',
			  ) );				
			   $portfolio->add_field( array(
				'name'       => esc_html__( 'Youtube Video', 'techno' ),
				'desc'       => esc_html__( 'insert video link. ex-https://youtu.be/OJ9ejTy4J98', 'techno' ),
				'id'         => $prefix . 'pyoutube',
				'type'       => 'text_url',
			   ) );
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Popup Vimeo','techno'),			  
			   'id'      => $prefix . 'svvimeo',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_vshow' => esc_html__( 'Show', 'techno' ),
				'm_vhide'   => esc_html__( 'Hide', 'techno' ),
			   ),
			   'default' =>'m_vhide',
			  ) );				   
			   $portfolio->add_field( array(
				'name'       => esc_html__( 'Vimeo Video', 'techno' ),
				'desc'       => esc_html__( 'insert video link. ex-https://youtu.be/OJ9ejTy4J98', 'techno' ),
				'id'         => $prefix . 'pvimeo',
				'type'       => 'text_url',
			   ) );		   

			  $portfolio->add_field( array(
			   'name'    => esc_html__('Select Multi Gellary','techno'),			  
			   'id'      => $prefix . 'm_g_image_pop',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_gshow' => esc_html__( 'Show', 'techno' ),
				'm_ghide'   => esc_html__( 'Hide', 'techno' ),
			   ),
			   'default' =>'m_ghide',
			  ) );				   
				$portfolio->add_field( array(
					'name'       => esc_html__( 'Multiple Gellary Image', 'techno' ),
					'desc'       => esc_html__( 'insert multiple gellary image here for single page', 'techno' ),
					'id'         => $prefix . 'pgellaryu',
					'type'       => 'file_list',
				) );
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Title','techno'),			  
			   'id'      => $prefix . 'pshow_title',
			   'type'    => 'radio_inline',
			   'options' => array(
				'ptitle_show' => esc_html__( 'Show', 'techno' ),
				'ptitle_hide'   => esc_html__( 'Hide', 'techno' ),
			   ),
			   'default' =>'ptitle_show',
			  ) );					
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Category','techno'),			  
			   'id'      => $prefix . 'pshow_cat',
			   'type'    => 'radio_inline',
			   'options' => array(
				'pcat_show' => esc_html__( 'Show', 'techno' ),
				'pcat_hide'   => esc_html__( 'Hide', 'techno' ),
			   ),
			   'default' =>'pcat_show',
			  ) );	
		//===================================
		//Pricing table metabox
		//===================================
		$pricing = new_cmb2_box( array(
			'id'            => $prefix . 'pricing',
			'title'         => esc_html__( 'Price Option', 'techno' ),
			'object_types'  => array( 'em_pricing', ), // Post type
			'priority'   => 'high',
		) );
				$pricing->add_field( array(
					'name'       => esc_html__( 'Price Currency', 'techno' ),
					'desc'       => esc_html__( 'insert Currency here e.g $', 'techno' ),
					'id'         => $prefix . 'currency',
					'type'       => 'text',
				) );	
				$pricing->add_field( array(
					'name'       => esc_html__( 'Price Amount', 'techno' ),
					'desc'       => esc_html__( 'insert Amount here', 'techno' ),
					'id'         => $prefix . 'price_amount',
					'type'       => 'text',
				) );	
				$pricing->add_field( array(
					'name'       => esc_html__( 'Price Delay', 'techno' ),
					'desc'       => esc_html__( 'insert Year, Month, Week or Day here', 'techno' ),
					'id'         => $prefix . 'day',
					'type'       => 'text',
				) );						
				$pricing->add_field( array(
					'name'       => esc_html__( 'pricing content', 'techno' ),
					'desc'       => esc_html__( 'insert pricing Item', 'techno' ),
					'id'         => $prefix . 'pricing_item_loop',
					'type'       => 'text',
					'repeatable'      => true,
				) );
				$pricing->add_field( array(
					'name' => esc_html__( 'Button Text', 'techno' ),
					'desc' => esc_html__( 'Insert Text Here', 'techno' ),
					'id'   => $prefix . 'button_text',
					'type' => 'text',
				) );					
				$pricing->add_field( array(
					'name' => esc_html__( 'Button Link', 'techno' ),
					'desc' => esc_html__( 'Insert register Link', 'techno' ),
					'id'   => $prefix . 'button_link',
					'type' => 'text_url',
				) );
				$pricing->add_field( array(
					'name' => esc_html__( 'Active Class', 'techno' ),
					'desc' => esc_html__( 'Add Active Class here "active"', 'techno' ),
					'id'   => $prefix . 'active',
					'type' => 'text',
				) );

				
				
		//post tab metabox
			$emtab = new_cmb2_box( array(
				'id'            => $prefix . 'em_tab',
				'title'         => esc_html__( 'Tab Option', 'techno' ),
				'object_types'  => array( 'em_tab' ), // Post type
				'priority'   => 'high',
			) );

				$emtab->add_field( array(
					'name'       => esc_html__( 'Tab Menu Name', 'techno' ),
					'desc'       => esc_html__( 'insert tab menu here', 'techno' ),
					'id'         => $prefix . 'em_tab_menu',
					'type'       => 'text',
				) );					
									
				$emtab->add_field(array(
					'name' => esc_html__( 'Tab Menu Image', 'techno' ),
					'id'   => $prefix .'em_tab_image',
					'desc'       => esc_html__( 'insert image here', 'techno' ),  
					'type' => 'file',
				) );
				$emtab->add_field( array(
					'name'       => esc_html__( 'Tab Menu Active', 'techno' ),
					'desc'       => esc_html__( 'must be set "active in" class into one post from all post, for active tab item', 'techno' ),
					'id'         => $prefix . 'em_tab_active',
					'type'       => 'text',
				) );
				$emtab->add_field( array(
					'name'       => esc_html__( 'Tab Icon Name', 'techno' ),
					'desc'       => esc_html__( 'Type Your favorite Font awesome Icon name', 'techno' ),
					'id'         => $prefix . 'em_tab_icon',
					'type'       => 'text',
				) );
				
					
				
				
								
			//slider table metabox
				$slider = new_cmb2_box( array(
					'id'            => $prefix . 'techno_slider',
					'title'         => esc_html__( 'Slider Option', 'techno' ),
					'object_types'  => array( 'em_slider', ), // Post type
					'priority'   => 'high',
				) );
	
	
			$slider->add_field( array(
				'name'       => esc_html__( 'Title', 'techno' ),
				'desc'       => esc_html__( 'insert title here. for highlight text use <span> ex-<span>Design</span>', 'techno' ),
				'id'         => $prefix . 'em_slide_title',
				'type'       => 'textarea_small',
			) );

			$slider->add_field( array(
				'name'    => esc_html__('Title Animate','techno'),
				'id'      => $prefix . 'em_aimate_title',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'techno' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'techno' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'techno' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'techno' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'techno' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'techno' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'techno' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'techno' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'techno' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'techno' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'techno' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'techno' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'techno' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'techno' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'techno' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'techno' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'techno' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'techno' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'techno' ),				
					'rollIn' => esc_html__( 'rollIn', 'techno' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'techno' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'techno' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'techno' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'techno' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'techno' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'techno' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'techno' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'techno' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'techno' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Title Animate Duration','techno'),
				'id'      => $prefix . 'em_durations_title',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'techno' ),							
					'0.2' => esc_html__( 'point 2s', 'techno' ),							
					'0.3' => esc_html__( 'point 3s', 'techno' ),							
					'0.4' => esc_html__( 'point 4s', 'techno' ),							
					'0.5' => esc_html__( 'point 5s', 'techno' ),							
					'0.6' => esc_html__( 'point 6s', 'techno' ),							
					'0.7' => esc_html__( 'point 7s', 'techno' ),							
					'0.8' => esc_html__( 'point 8s', 'techno' ),							
					'0.9' => esc_html__( 'point 9s', 'techno' ),							
					'1.2' => esc_html__( '1 point 2s', 'techno' ),							
					'1.3' => esc_html__( '1 point 3s', 'techno' ),							
					'1.4' => esc_html__( '1 point 4s', 'techno' ),							
					'1.5' => esc_html__( '1 point 5s', 'techno' ),							
					'1.8' => esc_html__( '1 point 8s', 'techno' ),							
					'2' => esc_html__( '2s', 'techno' ),							
					'2.2' => esc_html__( '2 point 2s', 'techno' ),							
					'2.3' => esc_html__( '2 point 5s', 'techno' ),							
					'3' => esc_html__( '3s', 'techno' ),							
				),
				'default' =>'2',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Title Animate Delay','techno'),
				'id'      => $prefix . 'em_dealy_title',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'techno' ),							
					'0.1' => esc_html__( 'point 1s', 'techno' ),							
					'0.2' => esc_html__( 'point 2s', 'techno' ),							
					'0.3' => esc_html__( 'point 3s', 'techno' ),							
					'0.4' => esc_html__( 'point 4s', 'techno' ),							
					'0.5' => esc_html__( 'point 5s', 'techno' ),							
					'0.6' => esc_html__( 'point 6s', 'techno' ),							
					'0.7' => esc_html__( 'point 7s', 'techno' ),							
					'0.8' => esc_html__( 'point 8s', 'techno' ),							
					'0.9' => esc_html__( 'point 9s', 'techno' ),							
					'1.2' => esc_html__( '1 point 2s', 'techno' ),							
					'1.3' => esc_html__( '1 point 3s', 'techno' ),							
					'1.4' => esc_html__( '1 point 4s', 'techno' ),							
					'1.5' => esc_html__( '1 point 5s', 'techno' ),							
					'1.8' => esc_html__( '1 point 8s', 'techno' ),							
					'2' => esc_html__( '2s', 'techno' ),							
					'2.2' => esc_html__( '2 point 2s', 'techno' ),							
					'2.3' => esc_html__( '2 point 5s', 'techno' ),							
					'3' => esc_html__( '3s', 'techno' ),							
				),
				'default' =>'0',
			) );		

		
		
		
			
			$slider->add_field( array(
				'name'       => esc_html__( 'Sub Title', 'techno' ),
				'desc'       => esc_html__( 'insert sub-title here. for highlight text use <span> ex-<span>website</span>', 'techno' ),
				'id'         => $prefix . 'em_slide_subtitle',
				'type'       => 'textarea_small',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Sub Title Animate','techno'),
				'id'      => $prefix . 'em_aimate_subtitle',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'techno' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'techno' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'techno' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'techno' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'techno' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'techno' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'techno' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'techno' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'techno' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'techno' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'techno' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'techno' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'techno' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'techno' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'techno' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'techno' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'techno' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'techno' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'techno' ),				
					'rollIn' => esc_html__( 'rollIn', 'techno' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'techno' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'techno' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'techno' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'techno' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'techno' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'techno' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'techno' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'techno' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'techno' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Sub Title Animate Duration','techno'),
				'id'      => $prefix . 'em_durations_subtitle',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'techno' ),							
					'0.2' => esc_html__( 'point 2s', 'techno' ),							
					'0.3' => esc_html__( 'point 3s', 'techno' ),							
					'0.4' => esc_html__( 'point 4s', 'techno' ),							
					'0.5' => esc_html__( 'point 5s', 'techno' ),							
					'0.6' => esc_html__( 'point 6s', 'techno' ),							
					'0.7' => esc_html__( 'point 7s', 'techno' ),							
					'0.8' => esc_html__( 'point 8s', 'techno' ),							
					'0.9' => esc_html__( 'point 9s', 'techno' ),							
					'1.2' => esc_html__( '1 point 2s', 'techno' ),							
					'1.3' => esc_html__( '1 point 3s', 'techno' ),							
					'1.4' => esc_html__( '1 point 4s', 'techno' ),							
					'1.5' => esc_html__( '1 point 5s', 'techno' ),							
					'1.8' => esc_html__( '1 point 8s', 'techno' ),							
					'2' => esc_html__( '2s', 'techno' ),							
					'2.2' => esc_html__( '2 point 2s', 'techno' ),							
					'2.3' => esc_html__( '2 point 5s', 'techno' ),							
					'3' => esc_html__( '3s', 'techno' ),							
				),
				'default' =>'2',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Sub Title Animate Delay','techno'),
				'id'      => $prefix . 'em_dealy_subtitle',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'techno' ),							
					'0.1' => esc_html__( 'point 1s', 'techno' ),							
					'0.2' => esc_html__( 'point 2s', 'techno' ),							
					'0.3' => esc_html__( 'point 3s', 'techno' ),							
					'0.4' => esc_html__( 'point 4s', 'techno' ),							
					'0.5' => esc_html__( 'point 5s', 'techno' ),							
					'0.6' => esc_html__( 'point 6s', 'techno' ),							
					'0.7' => esc_html__( 'point 7s', 'techno' ),							
					'0.8' => esc_html__( 'point 8s', 'techno' ),							
					'0.9' => esc_html__( 'point 9s', 'techno' ),							
					'1.2' => esc_html__( '1 point 2s', 'techno' ),							
					'1.3' => esc_html__( '1 point 3s', 'techno' ),							
					'1.4' => esc_html__( '1 point 4s', 'techno' ),							
					'1.5' => esc_html__( '1 point 5s', 'techno' ),							
					'1.8' => esc_html__( '1 point 8s', 'techno' ),							
					'2' => esc_html__( '2s', 'techno' ),							
					'2.2' => esc_html__( '2 point 2s', 'techno' ),							
					'2.3' => esc_html__( '2 point 5s', 'techno' ),							
					'3' => esc_html__( '3s', 'techno' ),							
				),
				'default' =>'0',
			) );				
			$slider->add_field( array(
				'name'       => esc_html__( 'Content', 'techno' ),
				'desc'       => esc_html__( 'insert content here', 'techno' ),
				'id'         => $prefix . 'em_slide_textarea',
				'type'       => 'textarea',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Content Animate','techno'),
				'id'      => $prefix . 'em_aimate_content',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'techno' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'techno' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'techno' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'techno' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'techno' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'techno' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'techno' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'techno' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'techno' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'techno' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'techno' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'techno' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'techno' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'techno' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'techno' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'techno' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'techno' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'techno' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'techno' ),				
					'rollIn' => esc_html__( 'rollIn', 'techno' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'techno' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'techno' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'techno' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'techno' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'techno' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'techno' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'techno' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'techno' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'techno' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Content Animate Duration','techno'),
				'id'      => $prefix . 'em_durations_content',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'techno' ),							
					'0.2' => esc_html__( 'point 2s', 'techno' ),							
					'0.3' => esc_html__( 'point 3s', 'techno' ),							
					'0.4' => esc_html__( 'point 4s', 'techno' ),							
					'0.5' => esc_html__( 'point 5s', 'techno' ),							
					'0.6' => esc_html__( 'point 6s', 'techno' ),							
					'0.7' => esc_html__( 'point 7s', 'techno' ),							
					'0.8' => esc_html__( 'point 8s', 'techno' ),							
					'0.9' => esc_html__( 'point 9s', 'techno' ),							
					'1.2' => esc_html__( '1 point 2s', 'techno' ),							
					'1.3' => esc_html__( '1 point 3s', 'techno' ),							
					'1.4' => esc_html__( '1 point 4s', 'techno' ),							
					'1.5' => esc_html__( '1 point 5s', 'techno' ),							
					'1.8' => esc_html__( '1 point 8s', 'techno' ),							
					'2' => esc_html__( '2s', 'techno' ),							
					'2.2' => esc_html__( '2 point 2s', 'techno' ),							
					'2.3' => esc_html__( '2 point 5s', 'techno' ),							
					'3' => esc_html__( '3s', 'techno' ),							
				),
				'default' =>'3',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Content Animate Delay','techno'),
				'id'      => $prefix . 'em_dealy_content',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'techno' ),							
					'0.1' => esc_html__( 'point 1s', 'techno' ),							
					'0.2' => esc_html__( 'point 2s', 'techno' ),							
					'0.3' => esc_html__( 'point 3s', 'techno' ),							
					'0.4' => esc_html__( 'point 4s', 'techno' ),							
					'0.5' => esc_html__( 'point 5s', 'techno' ),							
					'0.6' => esc_html__( 'point 6s', 'techno' ),							
					'0.7' => esc_html__( 'point 7s', 'techno' ),							
					'0.8' => esc_html__( 'point 8s', 'techno' ),							
					'0.9' => esc_html__( 'point 9s', 'techno' ),							
					'1.2' => esc_html__( '1 point 2s', 'techno' ),							
					'1.3' => esc_html__( '1 point 3s', 'techno' ),							
					'1.4' => esc_html__( '1 point 4s', 'techno' ),							
					'1.5' => esc_html__( '1 point 5s', 'techno' ),							
					'1.8' => esc_html__( '1 point 8s', 'techno' ),							
					'2' => esc_html__( '2s', 'techno' ),							
					'2.2' => esc_html__( '2 point 2s', 'techno' ),							
					'2.3' => esc_html__( '2 point 5s', 'techno' ),							
					'3' => esc_html__( '3s', 'techno' ),							
				),
				'default' =>'0',
			) );				
			
			$slider->add_field( array(
				'name'       => esc_html__( 'Button Text 1', 'techno' ),
				'desc'       => esc_html__( 'insert button text here', 'techno' ),
				'id'         => $prefix . 'em_slide_btn1',
				'type'       => 'text',
			) );
			$slider->add_field( array(
				'name'       => esc_html__( 'Slide Image', 'techno' ),
				'desc'       => esc_html__( 'insert single slide image here', 'techno' ),
				'id'         => $prefix . 'em_slide_img',
				'type'       => 'file',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Image Animate','techno'),
				'id'      => $prefix . 'em_aimate_image',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'techno' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'techno' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'techno' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'techno' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'techno' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'techno' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'techno' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'techno' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'techno' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'techno' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'techno' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'techno' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'techno' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'techno' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'techno' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'techno' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'techno' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'techno' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'techno' ),				
					'rollIn' => esc_html__( 'rollIn', 'techno' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'techno' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'techno' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'techno' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'techno' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'techno' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'techno' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'techno' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'techno' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'techno' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Image Animate Duration','techno'),
				'id'      => $prefix . 'em_durations_image',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'techno' ),							
					'0.2' => esc_html__( 'point 2s', 'techno' ),							
					'0.3' => esc_html__( 'point 3s', 'techno' ),							
					'0.4' => esc_html__( 'point 4s', 'techno' ),							
					'0.5' => esc_html__( 'point 5s', 'techno' ),							
					'0.6' => esc_html__( 'point 6s', 'techno' ),							
					'0.7' => esc_html__( 'point 7s', 'techno' ),							
					'0.8' => esc_html__( 'point 8s', 'techno' ),							
					'0.9' => esc_html__( 'point 9s', 'techno' ),							
					'1.2' => esc_html__( '1 point 2s', 'techno' ),							
					'1.3' => esc_html__( '1 point 3s', 'techno' ),							
					'1.4' => esc_html__( '1 point 4s', 'techno' ),							
					'1.5' => esc_html__( '1 point 5s', 'techno' ),							
					'1.8' => esc_html__( '1 point 8s', 'techno' ),							
					'2' => esc_html__( '2s', 'techno' ),							
					'2.2' => esc_html__( '2 point 2s', 'techno' ),							
					'2.3' => esc_html__( '2 point 5s', 'techno' ),							
					'3' => esc_html__( '3s', 'techno' ),							
				),
				'default' =>'2',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Image Animate Delay','techno'),
				'id'      => $prefix . 'em_dealy_image',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'techno' ),							
					'0.1' => esc_html__( 'point 1s', 'techno' ),							
					'0.2' => esc_html__( 'point 2s', 'techno' ),							
					'0.3' => esc_html__( 'point 3s', 'techno' ),							
					'0.4' => esc_html__( 'point 4s', 'techno' ),							
					'0.5' => esc_html__( 'point 5s', 'techno' ),							
					'0.6' => esc_html__( 'point 6s', 'techno' ),							
					'0.7' => esc_html__( 'point 7s', 'techno' ),							
					'0.8' => esc_html__( 'point 8s', 'techno' ),							
					'0.9' => esc_html__( 'point 9s', 'techno' ),							
					'1.2' => esc_html__( '1 point 2s', 'techno' ),							
					'1.3' => esc_html__( '1 point 3s', 'techno' ),							
					'1.4' => esc_html__( '1 point 4s', 'techno' ),							
					'1.5' => esc_html__( '1 point 5s', 'techno' ),							
					'1.8' => esc_html__( '1 point 8s', 'techno' ),							
					'2' => esc_html__( '2s', 'techno' ),							
					'2.2' => esc_html__( '2 point 2s', 'techno' ),							
					'2.3' => esc_html__( '2 point 5s', 'techno' ),							
					'3' => esc_html__( '3s', 'techno' ),							
				),
				'default' =>'0',
			) );		

			
			
			$slider->add_field( array(
				'name'       => esc_html__( 'Button url 1', 'techno' ),
				'desc'       => esc_html__( 'insert button text url here', 'techno' ),
				'id'         => $prefix . 'em_slide_btn1utl',
				'type'       => 'text_url',
			) );			
			$slider->add_field( array(
				'name'       => esc_html__( 'Button Text 2', 'techno' ),
				'desc'       => esc_html__( 'insert button text here', 'techno' ),
				'id'         => $prefix . 'em_slide_btn2',
				'type'       => 'text',
			) );
			$slider->add_field( array(
				'name'       => esc_html__( 'Button url 2', 'techno' ),
				'desc'       => esc_html__( 'insert button text url here', 'techno' ),
				'id'         => $prefix . 'em_slide_btn2url',
				'type'       => 'text_url',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Button Animate','techno'),
				'id'      => $prefix . 'em_aimate_btn',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'techno' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'techno' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'techno' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'techno' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'techno' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'techno' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'techno' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'techno' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'techno' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'techno' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'techno' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'techno' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'techno' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'techno' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'techno' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'techno' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'techno' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'techno' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'techno' ),				
					'rollIn' => esc_html__( 'rollIn', 'techno' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'techno' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'techno' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'techno' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'techno' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'techno' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'techno' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'techno' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'techno' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'techno' ),				
				),
				'default' =>'bounceInUp',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Button Animate Duration','techno'),
				'id'      => $prefix . 'em_durations_btn',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'techno' ),							
					'0.2' => esc_html__( 'point 2s', 'techno' ),							
					'0.3' => esc_html__( 'point 3s', 'techno' ),							
					'0.4' => esc_html__( 'point 4s', 'techno' ),							
					'0.5' => esc_html__( 'point 5s', 'techno' ),							
					'0.6' => esc_html__( 'point 6s', 'techno' ),							
					'0.7' => esc_html__( 'point 7s', 'techno' ),							
					'0.8' => esc_html__( 'point 8s', 'techno' ),							
					'0.9' => esc_html__( 'point 9s', 'techno' ),							
					'1.2' => esc_html__( '1 point 2s', 'techno' ),							
					'1.3' => esc_html__( '1 point 3s', 'techno' ),							
					'1.4' => esc_html__( '1 point 4s', 'techno' ),							
					'1.5' => esc_html__( '1 point 5s', 'techno' ),							
					'1.8' => esc_html__( '1 point 8s', 'techno' ),							
					'2' => esc_html__( '2s', 'techno' ),							
					'2.2' => esc_html__( '2 point 2s', 'techno' ),							
					'2.3' => esc_html__( '2 point 5s', 'techno' ),							
					'3' => esc_html__( '3s', 'techno' ),							
				),
				'default' =>'3',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Button Animate Delay','techno'),
				'id'      => $prefix . 'em_dealy_btn',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'techno' ),							
					'0.1' => esc_html__( 'point 1s', 'techno' ),							
					'0.2' => esc_html__( 'point 2s', 'techno' ),							
					'0.3' => esc_html__( 'point 3s', 'techno' ),							
					'0.4' => esc_html__( 'point 4s', 'techno' ),							
					'0.5' => esc_html__( 'point 5s', 'techno' ),							
					'0.6' => esc_html__( 'point 6s', 'techno' ),							
					'0.7' => esc_html__( 'point 7s', 'techno' ),							
					'0.8' => esc_html__( 'point 8s', 'techno' ),							
					'0.9' => esc_html__( 'point 9s', 'techno' ),							
					'1.2' => esc_html__( '1 point 2s', 'techno' ),							
					'1.3' => esc_html__( '1 point 3s', 'techno' ),							
					'1.4' => esc_html__( '1 point 4s', 'techno' ),							
					'1.5' => esc_html__( '1 point 5s', 'techno' ),							
					'1.8' => esc_html__( '1 point 8s', 'techno' ),							
					'2' => esc_html__( '2s', 'techno' ),							
					'2.2' => esc_html__( '2 point 2s', 'techno' ),							
					'2.3' => esc_html__( '2 point 5s', 'techno' ),							
					'3' => esc_html__( '3s', 'techno' ),							
				),
				'default' =>'1',
			) );				
			$slider->add_field( array(
				'name'    => esc_html__('Text Alignment Style','techno'),
				'id'      => $prefix . 'em_slider_posi',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'' => esc_html__( 'Select alignment', 'techno' ),
					'text-left' => esc_html__( 'Left Alignment', 'techno' ),
					'text-center' => esc_html__( 'Center Alignment', 'techno' ),
					'text-right' => esc_html__( 'Right Alignment', 'techno' ),
				),
				'default' =>'text-center',
			) );				
			$slider->add_field( array(
				'name'       => esc_html__( 'More Sliders Option, Please see slider widget area', 'techno' ),
				'id'         => $prefix . 'title_heading_line',
				'type'       => 'title',
			) );
			
	}
	add_action( 'cmb2_admin_init', 'techno_metabox' );