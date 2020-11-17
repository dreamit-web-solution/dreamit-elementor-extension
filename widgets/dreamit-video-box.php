<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if(!defined('ABSPATH')) exit;


class VideoBox extends Widget_Base{
	public function get_name(){
		return "videobox";
	}
	
	public function get_title(){
		return "Video Box";
	}
	
	public function get_icon(){
		return "eicon-icon-box";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function _register_controls(){

        $this->start_controls_section(
            'youtube_section', [
                'label' => __( 'Youtube', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
	        $this->add_control(
	        	'youtube_video_url',
					[
						'label' => __( 'Video URL', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
                        'default' => [
                            'url' => '#'
                        ]
					]
	        );
	        $this->add_control(
	        	'youtube_video_icon',
					[
						'label' => __( 'Video Icon', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::ICONS,
						'default' => [
							'value' => 'fas fa-play',
						],
					]
	        );
        $this->end_controls_section();

        $this->start_controls_section(
            'vimeo_section', [
                'label' => __( 'Vimeo', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
	        $this->add_control(
	        	'vimeo_video_url',
					[
						'label' => __( 'Video URL', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
					]
	        );
	        $this->add_control(
	        	'vimeo_video_icon',
					[
						'label' => __( 'Video Icon', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::ICONS,
						'default' => [
							'value' => 'fas fa-play',
						],
					]
	        );
        $this->end_controls_section();

        $this->start_controls_section(
            'background_section', [
                'label' => __( 'Background', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_CONTENT,
				'conditions' => [
					'relation' => 'or',
					'terms' => [
						[
				            'terms' => [
				                [
				                    'name' => 'select_style',
				                    'operator' => '==',
				                    'value' => 'one'
				                ],
				            ]
						],
						[
							'terms' => [
				                [
				                    'name' => 'select_style',
				                    'operator' => '==',
				                    'value' => 'three'
				                ],
				            ]
						]
					]
				]
            ]
        );
			$this->add_control(
				'background_image',
				[
					'label' => __( 'Choose Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
        $this->end_controls_section();

/*
==========
Style Tab
==========
*/

		$this->start_controls_section(
			'general_section',
			[
				'label' => __( 'General', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'select_style',
				[
					'label' => __( 'Select Style', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::SELECT,
					'options' => [
						'one' => __( 'One', 'dreamit-elementor-extension' ),
						'two' => __( 'Two', 'dreamit-elementor-extension' ),
						'three' => __( 'Three', 'dreamit-elementor-extension' ),
					],
					'default' => 'one',
					
				]
			);
			$this->add_responsive_control(
				'icon_align',
				[
					'label' => __( 'Alignment', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => __( 'Left', 'dreamit-elementor-extension' ),
							'icon' => 'eicon-text-align-left',
						],
						'center' => [
							'title' => __( 'Center', 'dreamit-elementor-extension' ),
							'icon' => 'eicon-text-align-center',
						],
						'right' => [
							'title' => __( 'Right', 'dreamit-elementor-extension' ),
							'icon' => 'eicon-text-align-right',
						],
						'justify' => [
							'title' => __( 'Justified', 'dreamit-elementor-extension' ),
							'icon' => 'eicon-text-align-justify',
						],
					],
					'selectors' => [
						'{{WRAPPER}} .single-video' => 'text-align: {{VALUE}};',
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'icon_section',
			[
				'label' => __( 'Icon', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'icon_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .video-icon i' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_responsive_control(
				'icon_size',
				[
					'label' => __( 'Icon Size', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::SLIDER,
					'range' => [
						'px' => [
							'min' => 6,
							'max' => 300,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .video-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'inner_size',
				[
					'label' => __( 'Inner Size', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 5,
						],
						'%' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .video-icon i' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'outer_size',
				[
					'label' => __( 'Outer Size', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 5,
						],
						'%' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .video-icon a' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();



		?>


			<?php if($settings['select_style']=='one'){ ?>

			<div id="parallax-video" class="single-video style-one">
			
				<?php if( !empty($settings['background_image']['url']) ){ ?>
				<div class="em-video-image">	
					<img src="<?php echo $settings['background_image']['url']; ?>" alt="" />
				</div>
				<?php } ?>
									
				
				<div class="choose-video-icon">	

					<div class="video-icon">
						
						<?php if( !empty($settings['youtube_video_url']['url']) ){ ?>
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $em_youtube; ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['youtube_video_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
						<?php } ?>
						
						<?php if( !empty($settings['vimeo_video_url']['url']) ){ ?>
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $em_vimeo; ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['vimeo_video_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
						<?php } ?>
						
					</div>
					
				</div>
			</div>

			<?php }elseif($settings['select_style']=='two'){ ?>

			<div id="parallax-video" class="single-video style-two">
				
				<div class="choose-video-icon">	

					<div class="video-icon">
						
						<?php if( !empty($settings['youtube_video_url']['url']) ){ ?>
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $em_youtube; ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['youtube_video_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
						<?php } ?>
						
						<?php if( !empty($settings['vimeo_video_url']['url']) ){ ?>
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $em_vimeo; ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['vimeo_video_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
						<?php } ?>
						
					</div>
					
				</div>
			</div>

			<?php }elseif($settings['select_style']=='three'){ ?>

			<div id="parallax-video" class="single-video style-three">

				<div class="slider-shape layer-1 layer" data-depth="0.50"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vp1.jpg'; ?>" alt="01"></div>
			   <div class="slider-shape layer-2 layer" data-depth="0.45"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vp2.jpg'; ?>" alt="02"></div>
			   <div class="slider-shape layer-3 layer" data-depth="0.35"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vp3.jpg'; ?>" alt="03"></div>
			   <div class="slider-shape layer-4 layer" data-depth="0.30"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/vp4.jpg'; ?>" alt="04"></div>

				<?php if( !empty($settings['background_image']['url']) ){ ?>
				<div class="em-video-image">	
					<img src="<?php echo $settings['background_image']['url']; ?>" alt="" />
				</div>
				<?php } ?>
									
				
				<div class="choose-video-icon">	

					<div class="video-icon">
						
						<?php if( !empty($settings['youtube_video_url']['url']) ){ ?>
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $em_youtube; ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['youtube_video_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
						<?php } ?>
						
						<?php if( !empty($settings['vimeo_video_url']['url']) ){ ?>
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $em_vimeo; ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['vimeo_video_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
						<?php } ?>
						
					</div>
					
				</div>
			</div>

			<?php } ?>	



		<?php
	}
}