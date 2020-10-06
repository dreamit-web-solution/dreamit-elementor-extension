<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;

if(!defined('ABSPATH')) exit;


class IconBox extends Widget_Base {

	public function get_name() {
		return 'iconbox';
	}

	public function get_title() {
		return __( 'Icon Box', 'itsoft' );
	}

	public function get_icon() {
		return 'eicon-icon-box';
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'icon_section',
			[
				'label' => __( 'Icons', 'itsoft' ),
			]
		);
			$this->add_control(
				'icons_type',
				[
				    'label' => esc_html__('Icon Type','itsoft'),
				    'type' => Controls_Manager::CHOOSE,
				    'options' =>[
					  'img' =>[
						'title' =>esc_html__('Image','itsoft'),
						'icon' =>'fa fa-picture-o',
					  ],
					  'icon' =>[
						'title' =>esc_html__('Icon','itsoft'),
						'icon' =>'fa fa-info',
					  ]
				    ],
				    'default' => 'icon',
				]
			 );
			 
			 $this->add_control(
				'select_icon',
				[
					'label' => esc_html__( 'Icon', 'itsoft' ),
					'type' => Controls_Manager::ICON,
					'condition'=>[
						'icons_type'=> 'icon',
					],
					'label_block' => true,
				]
			);
			
			$this->add_control(
				'select_img',
				[
				    'label' => esc_html__('Image','itsoft'),
				    'type'=>Controls_Manager::MEDIA,
				    'default' => [
					  'url' => \Elementor\Utils::get_placeholder_image_src(),
				    ],
				    'condition' => [
					  'icons_type' => 'img',
				    ]
				]
			);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Title & Description', 'itsoft' ),
			]
		);
			$this->add_control(
				'title_text',
				[
					'label' => __( 'Title', 'itsoft' ),
					'type' => Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter your title', 'itsoft' ),
					'label_block' => true,
					'default' => __( 'This is the title', 'itsoft' ),
				]
			);
			$this->add_control(
				'description_text',
				[
					'label' => __( 'Description', 'itsoft' ),
					'type' => Controls_Manager::TEXTAREA,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter your paragraph', 'itsoft' ),
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'itsoft' ),
				]
			);
		$this->end_controls_section();
/*
==========
Style Tab
==========
*/

		$this->start_controls_section(
			'icon_section_style',
			[
				'label' => __( 'Icon', 'itsoft' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs(
			'style_tabs'
		);
			$this->start_controls_tab(
				'style_normal_tab',
				[
					'label' => __( 'Normal', 'itsoft' ),
				]
			);
			
				$this->add_control(
					'icon_color',
					[
						'label' => __( 'Color', 'itsoft' ),
						'type' => Controls_Manager::COLOR,
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .icon-box-icon .icon i' => 'color: {{VALUE}}',
						],
					]
				);
				$this->add_group_control(
					\Elementor\Group_Control_Border::get_type(),
					[
						'name' => 'border',
						'label' => __( 'Border', 'itsoft' ),
						'selector' => '{{WRAPPER}} .icon-box-icon .icon i',
					]
				);
			
			$this->end_controls_tab();
			
			$this->start_controls_tab(
				'style_hover_tab',
				[
					'label' => __( 'Hover', 'itsoft' ),
				]
			);

				$this->add_control(
					'icon_hover_color',
					[
						'label' => __( 'Hover Color', 'itsoft' ),
						'type' => Controls_Manager::COLOR,
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .icon-box-icon .icon:hover i' => 'color: {{VALUE}}',
						],
					]
				);

				$this->add_group_control(
					\Elementor\Group_Control_Border::get_type(),
					[
						'name' => 'hover_border',
						'label' => __( 'Hover Border', 'itsoft' ),
						'selector' => '{{WRAPPER}} .icon-box-icon .icon:hover i',
					]
				);
			
			$this->end_controls_tab();
			
		$this->end_controls_tabs();

			$this->add_responsive_control(
				'icon_size',
				[
					'label' => __( 'Size', 'itsoft' ),
					'type' => Controls_Manager::SLIDER,
					'range' => [
						'px' => [
							'min' => 6,
							'max' => 300,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .icon-box-icon .icon i' => 'font-size: {{SIZE}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);
			$this->add_control(
				'height',
				[
					'label' => __( 'Height', 'itsoft' ),
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
						'{{WRAPPER}} .icon-box .icon-box-icon .icon i' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'width',
				[
					'label' => __( 'Width', 'itsoft' ),
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
						'{{WRAPPER}} .icon-box .icon-box-icon .icon i' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'line-height',
				[
					'label' => __( 'Line Height', 'itsoft' ),
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
						'{{WRAPPER}} .icon-box .icon-box-icon .icon i' => 'line-height: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'title_section',
			[
				'label' => __( 'Title', 'itsoft' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'title_color',
				[
					'label' => __( 'Color', 'itsoft' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .icon-box-content h2' => 'color: {{VALUE}}',
					],
				]
			);

			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'title_one_typography',
					'label' => __( 'Typography', 'itsoft' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .icon-box-content h2',
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'description_section',
			[
				'label' => __( 'Description', 'itsoft' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'description_color',
				[
					'label' => __( 'Color', 'itsoft' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .icon-box-content p' => 'color: {{VALUE}}',
					],
				]
			);

			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'description_typography',
					'label' => __( 'Typography', 'itsoft' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .icon-box-content p',
				]
			);

		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		
		?>
		<div class="icon-box">

			<div class="icon-box-icon">

				<?php if($settings['icons_type'] == 'icon' ) : ?>
				<div class="icon">
					<i class="<?php echo esc_attr($settings['select_icon']); ?>"></i>
				</div>

				<?php else: ?>
				<div class="img-icon">
					<img src="<?php echo $settings['select_img']['url'];?>" alt="" />
				</div>
				<?php endif; ?>

			</div>

			<div class="icon-box-content">
				<div class="title">
					<h2><?php echo $settings['title_text']; ?></h2>
				</div>
				<div class="description">
					<p><?php echo $settings['description_text']; ?></p>
				</div>
			</div>
		</div>
		<?php
	}
}