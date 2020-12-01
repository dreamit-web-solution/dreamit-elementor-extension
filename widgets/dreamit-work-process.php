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


class WorkProcess extends Widget_Base{

	public function get_name(){
		return "workprocess";
	}
	
	public function get_title(){
		return "Work Process";
	}
	
	public function get_icon(){
		return "eicon-flow";
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
				'image',
				[
					'label' => __( 'Choose Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					'condition' => [
						'select_style' => 'one'
					]
				]
			);
			$this->add_control(
				'number',
				[
					'label' => __( 'Number', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);
			$this->add_control(
				'title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Default title', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your title here', 'dreamit-elementor-extension' ),
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
				'icon',
				[
					'label' => __( 'Icon', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-star',
						'library' => 'solid',
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
		$this->end_controls_section();

		$this->start_controls_section(
			'color_section',
			[
				'label' => __( 'Color', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .work_progress:hover .wrok_process_thumb, .work_progress-number span, .work_progress-number span::before, .work_progress-number span::after, .style-two .work_progress-number span' => 'background: {{VALUE}};',
						'{{WRAPPER}} .work_progress:hover .wrok_process_thumb' => 'border-color: {{VALUE}};',
					],
				]
			);
		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>

		<?php if($settings['select_style']=='one'){ ?>

		<div class="work_progress default-style">
			<div class="wrok_process_thumb">
				<img src="<?php echo $settings['image']['url']; ?>" alt="">
				<div class="work_progress-number">
					<span><?php echo $settings['number']; ?></span>
				</div>
			</div>
			<div class="progress_content">

				<div class="work_progress-title">
					<h2>
						<?php echo $settings['title']; ?>
					</h2>
				</div>
				<div class="work_progress-desc">
					<p>
						<?php echo $settings['description']; ?>
					</p>
				</div>
			</div>
		</div>

		<?php }elseif($settings['select_style']=='two'){ ?>

		<div class="work_progress style-two">
			
				<div class="work_progress_icon">

					<span><?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?></span>

					<div class="work_progress-number">
						<span><?php echo $settings['number']; ?></span>
					</div>
				</div>			
			
			<div class="progress_content">

				<div class="work_progress-title">
					<h2>
						<?php echo $settings['title']; ?>
					</h2>
				</div>
				<div class="work_progress-desc">
					<p>
						<?php echo $settings['description']; ?>
					</p>
				</div>
			</div><!-- .progress_content -->
		</div>

		<?php }elseif($settings['select_style']=='three'){ ?>

		<div class="work_progress style-three">
	
			<div class="progress_content">

				<div class="work_progress-number">
					<span><?php echo $settings['number']; ?></span>
				</div>
				<div class="work_progress-title">
					<h2>
						<?php echo $settings['title']; ?>
					</h2>
				</div>
				<div class="work_progress-desc">
					<p>
						<?php echo $settings['description']; ?>
					</p>
				</div>
			</div><!-- .progress_content -->
		</div>

		<?php } ?>

		<?php
	}
}