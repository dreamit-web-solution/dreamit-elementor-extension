<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if(!defined('ABSPATH')) exit;


class EffectiveSlider extends Widget_Base{

	public function get_name(){
		return "effectiveslider";
	}
	
	public function get_title(){
		return "Effective Slider";
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
				'subtitle',
				[
					'label' => __( 'Subtitle', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Welcome To Techno', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'title1',
				[
					'label' => __( 'Title 1', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Provide All IT Services', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'title2',
				[
					'label' => __( 'Title 2', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Hosting Services', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'title3',
				[
					'label' => __( 'Title 3', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Digital Marketing Service', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboret dolore magna aliqua. Ut en ad minim  ullamco laboris nisi ut aliquip.', 'dreamit-elementor-extension' ),
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'button_section',
			[
				'label' => __( 'Button', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'button1',
				[
					'label' => __( 'Button 1', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::HEADING,
				]
			);
			$this->add_control(
				'button1_text',
				[
					'label' => __( 'Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'About Us', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'button1_link',
				[
					'label' => __( 'Link', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::URL,
					'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'button2',
				[
					'label' => __( 'Button 2', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'button2_text',
				[
					'label' => __( 'Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'How IT Work', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'button2_link',
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


	}

	protected function render(){

		$settings = $this->get_settings_for_display();

		?>

		<div id="intro-section" class="effective-area overlay-white <?php echo esc_attr( $extra_class ); ?>">
			<div class="effective-content text-center">
				<h5><?php echo $settings['subtitle']; ?></h5>
				<h2 class="cd-headline clip is-full-width">
					<span class="cd-words-wrapper">
						<b class="is-visible"><?php echo $settings['title1']; ?></b>
						<b><?php echo $settings['title2']; ?></b>
						<b><?php echo $settings['title3']; ?></b>
					</span>
				</h2>
				<p><?php echo $settings['description']; ?></p>
				<div class="effective_slider_btn">
					<a href="<?php echo esc_url($settings['button1_link']['url']); ?>" class="button-active"><?php echo $settings['button1_text']; ?></a>
					<a href="<?php echo esc_url($settings['button2_link']['url']); ?>"><?php echo $settings['button2_text']; ?></a>
				</div>
			</div>
		</div>

		<?php

	}
}