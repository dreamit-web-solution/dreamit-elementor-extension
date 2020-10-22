<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Utils;
use Elementor\Group_Control_Image_Size;
use Elementor\Repeater;
use Elementor\Group_Control_Box_Shadow;

if(!defined('ABSPATH')) exit;


class CallToAction extends Widget_Base{

	public function get_name(){
		return "calltoaction";
	}
	
	public function get_title(){
		return "Call To Action";
	}
	
	public function get_icon(){
		return "eicon-image-rollover";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'video_url',
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
				'video_icon',
				[
					'label' => __( 'Video Icon', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-play',
					],
				]
			);
			$this->add_control(
				'subtitle',
				[
					'label' => __( 'Sub Title', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Default sub title', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your sub title here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Default Title', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your Title here', 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __( 'Default Description', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your Description here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'button-text',
				[
					'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your Button text', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'button_url',
				[
					'label' => __( 'Link', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
					'show_external' => true,
					'default' => [
						'url' => '',
						'is_external' => true,
						'nofollow' => true,
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
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'select_style',
				[
					'label' => __( 'Select Style', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'options' => [
						'one' => __( 'One', 'dreamit-elementor-extension' ),
						'two' => __( 'Two', 'dreamit-elementor-extension' ),
					],
					'default' => 'one',
					
				]
			);
			$this->add_responsive_control(
				'text_align',
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
						'{{WRAPPER}} .call-to-action.style-two' => 'text-align: {{VALUE}};',
					],
					'condition' => [
						'select_style' => 'two',
					]
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'color_section',
			[
				'label' => __( 'Text', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'title-color',
				[
					'label' => __( 'Title Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .call-to-action-title h2' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'label' => __( 'Title Typography', 'dreamit-elementor-extension' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .call-to-action-title h2',
				]
			);
			$this->add_control(
				'subtitle-color',
				[
					'label' => __( 'Sub Title Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'separator' => 'before',
					'selectors' => [
						'{{WRAPPER}} .call-to-action-title h3' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'subtitle_typography',
					'label' => __( 'Sub Title Typography', 'dreamit-elementor-extension' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .call-to-action-title h3',
				]
			);
			$this->add_control(
				'description-color',
				[
					'label' => __( 'Description Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'separator' => 'before',
					'selectors' => [
						'{{WRAPPER}} .call-to-action-desc p' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'description_typography',
					'label' => __( 'Description Typography', 'dreamit-elementor-extension' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .call-to-action-desc p',
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'button_section',
			[
				'label' => __( 'Button', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->start_controls_tabs('style_tabs');
			$this->start_controls_tab(
				'style_normal_tab',
				[
					'label' => __( 'Normal', 'dreamit-elementor-extension' ),
				]
			);
				$this->add_control(
					'button_text_color',
					[
						'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .call-to-action-btn a' => 'color: {{VALUE}};',
						],
					]
				);
				$this->add_control(
					'button-color',
					[
						'label' => __( 'Button Color', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::COLOR,
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .call-to-action-btn a' => 'background: {{VALUE}};',
						],
					]
				);
			$this->end_controls_tab();
			$this->start_controls_tab(
				'style_hover_tab',
				[
					'label' => __( 'Hover', 'dreamit-elementor-extension' ),
				]
			);
				$this->add_control(
					'hover_button_text_color',
					[
						'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .call-to-action-btn a:hover' => 'color: {{VALUE}};',
						],
					]
				);
				$this->add_control(
					'button-hover-color',
					[
						'label' => __( 'Button Color', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::COLOR,
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .call-to-action-btn a:hover' => 'background: {{VALUE}};',
						],
					]
				);
			$this->end_controls_tab();
			$this->end_controls_tabs();

			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'button_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .call-to-action-btn a',
				]
			);
		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'i', 'class', $settings['video_icon'] );

		?>

		<?php if($settings['select_style']=='one'){ ?>

			<div class="call-to-action">
				<div class="call-to-video">

					<?php if( !empty( $settings['video_url']['url'] ) ){ ?>
						<div class="call-video-link">

							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo esc_url($settings['video_url']['url']); ?>"><i <?php echo $this->get_render_attribute_string( 'i' ); ?>></i></a>

						</div>
					<?php } ?>

				</div>

				<div class="single_call-to-action_text">
					<div class="call-to-action_top_text">
						<div class="call-to-action-title">
							<span class="subtitlespan"><h3><?php echo $settings['subtitle']; ?></h3></span>
							<h2><?php echo $settings['title']; ?></h2>
						</div>
					</div>
					<div class="call-to-action-inner">				
						<div class="call-to-action-desc">
							<p><?php echo $settings['description']; ?></p>
						</div>						
					</div>

					<?php if( !empty($settings['button-text']) ){ ?>
					<div class="call-to-action-btn">
						<a href="<?php echo esc_url($settings['button_url']['url']); ?>"><?php echo $settings['button-text']; ?></a>
					</div>
					<?php } ?>
				</div>
			</div>

		<?php }elseif($settings['select_style']=='two'){ ?>

			<div class="call-to-action style-two">
				<div class="row align-items-center">

				<div class="col-md-8">
				<div class="single_call-to-action_text">
					<div class="call-to-action_top_text">
						<div class="call-to-action-title">
							<span class="subtitlespan"><h3><?php echo $settings['subtitle']; ?></h3></span>
							<h2><?php echo $settings['title']; ?></h2>
						</div>
					</div>

					<?php if( !empty($settings['description']) ){ ?>
					<div class="call-to-action-inner">				
						<div class="call-to-action-desc">
							<p><?php echo $settings['description']; ?></p>
						</div>						
					</div>
					<?php } ?>

					<?php if( !empty($settings['button-text']) ){ ?>
					<div class="call-to-action-btn">
						<a href="<?php echo esc_url($settings['button_url']['url']); ?>"><?php echo $settings['button-text']; ?></a>
					</div>
					<?php } ?>
				</div>
				</div>

				<div class="col-md-4 align-items-center">
				<div class="call-to-video">
					<?php if( !empty( $settings['video_url']['url'] ) ){ ?>
						<div class="call-video-link">

							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo esc_url($settings['video_url']['url']); ?>"><i <?php echo $this->get_render_attribute_string( 'i' ); ?>></i></a>

						</div>
					<?php } ?>
				</div>
				</div>

				</div>
			</div>

		<?php } ?>

		<?php
	}
}