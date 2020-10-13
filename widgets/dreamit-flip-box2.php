<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;

if(!defined('ABSPATH')) exit;


class FlipBox2 extends Widget_Base{

	public function get_name(){
		return "flipbox2";
	}
	
	public function get_title(){
		return "Flip Box2";
	}
	
	public function get_icon(){
		return "eicon-flip-box";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

    protected function _register_controls(){

        $this->start_controls_section(
            'front_section',
            [
                'label' => __( 'Front Part', 'dreamit-elementor-extension' ),
            ]
        );
             $this->add_control(
                'front_icon',
                [
                    'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::ICON,
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'front_title',
                [
                    'label' => __( 'Title', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::TEXT,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'placeholder' => __( 'Enter your title', 'dreamit-elementor-extension' ),
                    'label_block' => true,
                    'default' => __( 'This is front title', 'dreamit-elementor-extension' ),
                ]
            );
            $this->add_control(
                'front_description',
                [
                    'label' => __( 'Description', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::TEXTAREA,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'placeholder' => __( 'Enter your paragraph', 'dreamit-elementor-extension' ),
                    'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dreamit-elementor-extension' ),
                ]
            );
        $this->end_controls_section();

        $this->start_controls_section(
            'back_section',
            [
                'label' => __( 'Back Part', 'dreamit-elementor-extension' ),
            ]
        );
             $this->add_control(
                'back_icon',
                [
                    'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::ICON,
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'back_title',
                [
                    'label' => __( 'Title', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::TEXT,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'placeholder' => __( 'Enter your title', 'dreamit-elementor-extension' ),
                    'label_block' => true,
                    'default' => __( 'This is back title', 'dreamit-elementor-extension' ),
                ]
            );
            $this->add_control(
                'back_description',
                [
                    'label' => __( 'Description', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::TEXTAREA,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'placeholder' => __( 'Enter your paragraph', 'dreamit-elementor-extension' ),
                    'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dreamit-elementor-extension' ),
                ]
            );
            $this->add_control(
                'back_button_text',
                [
                    'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::TEXT,
                    'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
                    'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
                ]
            );
            $this->add_control(
                'back_button_link',
                [
                    'label' => __( 'Link', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::URL,
                    'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
                ]
            );
        $this->end_controls_section();
/*
==========
Style Tab
==========
*/  

        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__( 'General', 'dreamit-elementor-extension' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_control(
                'flip_position',
                [
                    'label' => esc_html__( 'Flip Direction', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::CHOOSE,
                    'default' => 'flip-right',
                    'label_block' => false,
                    'options' => [
                        'flip-right' => [
                            'title' => esc_html__( 'Left To Right', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-h-align-right',
                        ],
                        'flip-up' => [
                            'title' => esc_html__( 'Bottom To Top', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-v-align-top',
                        ],
                        'flip-down' => [
                            'title' => esc_html__( 'Top To Bottom', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-v-align-bottom',
                        ],
                        'flip-left' => [
                            'title' => esc_html__( 'Right To Left', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-h-align-left',
                        ],
                    ],
                    'toggle' => false,
                ]
            );
        $this->end_controls_section();

        $this->start_controls_section(
            'front_part_style',
            [
                'label' => esc_html__( 'Front Part', 'dreamit-elementor-extension' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'front_background',
                    'label' => __( 'Background', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .flip-box .flip-container .flip-front',
                ]
            );
            $this->add_control(
                'front_icon_style',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );
            $this->add_control(
                'front_icon_color',
                [
                    'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .flip-front .front-icon i' => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'front_icon_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-front .front-icon i',
                ]
            );
            $this->add_responsive_control(
                'front_icon_gap',
                [
                    'label' => esc_html__( 'Bottom Gap', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', '%' ],
                    'range' => [
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                        'px' => [
                            'min' => -200,
                            'max' => 200,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-front .front-icon' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'front_title_style',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Title', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );
            $this->add_control(
                'front_title_color',
                [
                    'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .flip-front .front-title h2' => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'front_title_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-front .front-title h2',
                ]
            );
            $this->add_responsive_control(
                'front_title_gap',
                [
                    'label' => esc_html__( 'Bottom Gap', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', '%' ],
                    'range' => [
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                        'px' => [
                            'min' => -200,
                            'max' => 200,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-front .front-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'front_description_style',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );
            $this->add_control(
                'front_description_color',
                [
                    'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .flip-front .front-description p' => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'front_description_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-front .front-description p',
                ]
            );
        $this->end_controls_section();

        $this->start_controls_section(
            'back_part_style',
            [
                'label' => esc_html__( 'Back Part', 'dreamit-elementor-extension' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'back_background',
                    'label' => __( 'Background', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .flip-box .flip-container .flip-back',
                ]
            );
            $this->add_control(
                'back_icon_style',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );
            $this->add_control(
                'back_icon_color',
                [
                    'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .flip-back .back-icon i' => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'back_icon_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-back .back-icon i',
                ]
            );
            $this->add_responsive_control(
                'back_icon_gap',
                [
                    'label' => esc_html__( 'Bottom Gap', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', '%' ],
                    'range' => [
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                        'px' => [
                            'min' => -200,
                            'max' => 200,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-back .back-icon' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'back_title_style',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Title', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );
            $this->add_control(
                'back_title_color',
                [
                    'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .flip-back .back-title h2' => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'back_title_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-back .back-title h2',
                ]
            );
            $this->add_responsive_control(
                'back_title_gap',
                [
                    'label' => esc_html__( 'Bottom Gap', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', 'em', '%' ],
                    'range' => [
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                        'px' => [
                            'min' => -200,
                            'max' => 200,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-back .back-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'back_description_style',
                [
                    'type' => Controls_Manager::HEADING,
                    'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );
            $this->add_control(
                'back_description_color',
                [
                    'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .flip-back .back-description p' => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'back_description_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-back .back-description p',
                ]
            );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        
        ?>
            
        <div class="flip-box">
            <div class="flip-container <?php echo esc_attr($settings['flip_position']);?>">

                <div class="flip-front">
					<div class="flip-front-content">
						<div class="front-icon">
							<i class="<?php echo esc_attr($settings['front_icon']); ?>"></i>
						</div>

						<div class="front-title">
							<h2><?php echo $settings['front_title']; ?></h2>
						</div>

						<div class="front-description">
							<p><?php echo $settings['front_description']; ?></p>
						</div>

					</div>
                </div>

                <div class="flip-back">
					<div class="flip-back-content">
						<div class="back-icon">
							<i class="<?php echo esc_attr($settings['back_icon']); ?>"></i>
						</div>

						<div class="back-title">
							<h2><?php echo $settings['back_title']; ?></h2>
						</div>

						<div class="back-description">
							<p><?php echo $settings['back_description']; ?></p>
						</div>

						<div class="back-button">
							<a href="<?php echo esc_url($settings['back_button_link']['url']); ?>"><?php echo $settings['back_button_text']; ?></a>
						</div>
						</div>
                </div>
            </div>
        </div>

        <?php
    }
}