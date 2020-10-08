<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;

if(!defined('ABSPATH')) exit;


class SectionTitle extends Widget_Base{

	public function get_name(){
		return "sectiontitle";
	}
	
	public function get_title(){
		return "Section Title";
	}
	
	public function get_icon(){
		return "eicon-t-letter";
	}
	public function get_categories(){
		return ['dreamit-category'];
	}
	
	protected function _register_controls(){

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'text_align',
					[
						'label' => __( 'Alignment', 'dreamit-elementor-extension' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							't_left' => __( 'Text Left', 'dreamit-elementor-extension' ),
							't_center' => __( 'Text Center', 'dreamit-elementor-extension' ),
							't_right' => __( 'Text Right', 'dreamit-elementor-extension' ),
						],
						'default' => 't_left',
					],
			);
			$this->add_control(
				'subtitle',
				[
					'label' => __( 'Subtitle', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter subtitle', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'Section subtitle', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'title_one',
				[
					'label' => __( 'Title One', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter title one', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'Section title one', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'title_two',
				[
					'label' => __( 'Title Two', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter title two', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'Section title two', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'highlight_text',
				[
					'label' => __( 'Highlight Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter highlight text', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'Highlight text', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter description', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dreamit-elementor-extension' ),
				]
			);
		$this->end_controls_section();

/*
==========
Style Tab
==========
*/

		$this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Style', 'dreamit-elementor-extension' ),
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
		$this->end_controls_section();

		$this->start_controls_section(
			'content_section_style',
			[
				'label' => __( 'Content', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'subtitle_heading',
				[
					'label' => __( 'Subtitle', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::HEADING,
				]
			);
			$this->add_control(
				'subtitle_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .section-title h5' => 'color: {{VALUE}}',
						'{{WRAPPER}} .title_tx h5' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'subtitle_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .section-title h5',
				]
			);
			$this->add_responsive_control(
				'subtitle_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .section-title h5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'title_one_heading',
				[
					'label' => __( 'Title One', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'title_one_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .section-title h3' => 'color: {{VALUE}}',
						'{{WRAPPER}} .title_tx h3' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'title_one_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .section-title h3',
				]
			);
			$this->add_responsive_control(
				'title_one_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .section-title h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'title_two_heading',
				[
					'label' => __( 'Title Two', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'title_two_color',
				[
					'label' => __( 'Title Two Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .section-title h2' => 'color: {{VALUE}}',
						'{{WRAPPER}} .title_tx h2' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'title_two_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .section-title h2',
				]
			);
			$this->add_responsive_control(
				'title_two_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'highlight_text_heading',
				[
					'label' => __( 'Highlight Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'highlight_text_color',
				[
					'label' => __( 'Highlight Text Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .section-title span' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'highlight_text_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .section-title span',
				]
			);
			$this->add_control(
				'underline_heading',
				[
					'label' => __( 'Underline', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'underline_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .bar.bar-big::before' => 'border-top-color: {{VALUE}}',
					],
				]
			);
			$this->add_responsive_control(
				'underline_bottom_space',
				[
					'label' => __( 'Spacing', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::SLIDER,
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bar-main' => 'margin-bottom: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'description_heading',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'description_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .section-title p' => 'color: {{VALUE}}',
						'{{WRAPPER}} .title_ptx p' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'description_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'scheme' => Scheme_Typography::TYPOGRAPHY_1,
					'selector' => '{{WRAPPER}} .section-title p',
				]
			);
			$this->add_responsive_control(
				'description_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .section-title p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();
	}

	protected function render(){

		$settings = $this->get_settings_for_display();

		?>

		<?php if($settings['select_style']=='one'){ ?>
		<div class="">

			<div class="section-title <?php echo $settings['text_align']; ?>">
				
				<h5><?php echo $settings['subtitle']; ?></h5>
				
				<h3><?php echo $settings['title_one']; ?></h3>

				<h2><?php echo $settings['title_two']; ?><span><?php echo $settings['highlight_text']; ?></span></h2>
				
							
				<div class="bar-main">
					<div class="bar bar-big"></div>
				</div>
				

				<p><?php echo $settings['description']; ?></p>

				
			</div>	

		</div>

		<?php }elseif($settings['select_style']=='two'){ ?>

		<div class="title_in_area">
		<div class="title_in">
			<div class="title_tx">
				
				<h5><?php echo $settings['subtitle']; ?></h5>
				
				<h3><?php echo $settings['title_one']; ?></h3>
				
				<h2><?php echo $settings['title_two']; ?><span><?php echo $settings['highlight_text']; ?></span></h2>
				
			</div>
		</div>
		<div class="title_p">

			<div class="title_ptx">

				<p><?php echo $settings['description']; ?></p>

			</div>
			
		</div>
		</div>

		<?php } ?>

		<?php 
	}

}