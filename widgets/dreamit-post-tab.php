<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if(!defined('ABSPATH')) exit;


class PostTab extends Widget_Base{
	public function get_name(){
		return "posttab";
	}
	
	public function get_title(){
		return "Post Tab";
	}
	
	public function get_icon(){
		return "eicon-tabs";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function _register_controls(){

/*
==========
Style Tab
==========
*/


		$this->start_controls_section(
			'tabs_section',
			[
				'label' => __( 'Tabs', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'menu_name_color',
				[
					'label' => __( 'Menu Name Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .post-tab .em_tab_pils li a' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_control(
				'icon_color',
				[
					'label' => __( 'Icon Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .post-tab .em_tab_pils li a i' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'tabs_background',
					'label' => __( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient', 'video' ],
					'selector' => '{{WRAPPER}} .post-tab .em_tab_pils li',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'tabs_border',
					'label' => __( 'Border', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .post-tab .em_tab_pils li',
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'title_heading',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::HEADING,
				]
			);
			$this->add_control(
				'title_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .em_tab_content .tab_pan_content h2' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .em_tab_content .tab_pan_content h2',
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
						'{{WRAPPER}} .em_tab_content .tab_pan_content p' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'description_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .em_tab_content .tab_pan_content p',
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'box_section',
			[
				'label' => __( 'Box', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'box_background',
					'label' => __( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient', 'video' ],
					'selector' => '{{WRAPPER}} .em_tab_content.tab-content',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'box_shadow',
					'label' => __( 'Box Shadow', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .em_tab_content.tab-content',
				]
			);
		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$args = array(
			'post_type' => 'em_tab',
		);
		$post_query = new \WP_Query($args);

		?>	
					<div class="post-tab">
						<div class="em_tab_inner ">
							<div class="col-md-12">
								<ul class="em_tab_pils nav nav-pills">
									<?php while ($post_query->have_posts()) : $post_query->the_post(); 	 ?>	
											<?php  $em_tab_menu  = get_post_meta( get_the_ID(),'_techno_em_tab_menu', true );?>
											<?php  $em_tab_active  = get_post_meta( get_the_ID(),'_techno_em_tab_active', true );?>
											<?php  $em_tab_icon  = get_post_meta( get_the_ID(),'_techno_em_tab_icon', true );?>
											<?php  $em_tab_image  = get_post_meta( get_the_ID(),'_techno_em_tab_image', true );?>	
									
											<li  <?php if($em_tab_active){?> class="<?php echo $em_tab_active;?>"  <?php }?> ><a <?php if($em_tab_image){?> style="background-image:url(<?php echo $em_tab_image; ?>);"  <?php } ?>   data-toggle="pill" href="#tab-<?php echo get_the_ID(); ?>"><i class="<?php echo $em_tab_icon; ?>"></i><?php if($em_tab_menu){echo $em_tab_menu;   }?></a></li>
																	
											
									<?php endwhile; ?>	
								 </ul>		
							</div>



							
							<div class="em_tab_content tab-content">
							  <?php while ($post_query->have_posts()) : $post_query->the_post(); 		 ?>	
							  
							<?php  $em_tab_active  = get_post_meta( get_the_ID(),'_techno_em_tab_active', true );?>
								<div id="tab-<?php echo get_the_ID(); ?>" class="tab-pane  <?php if($em_tab_active){echo $em_tab_active;}?>">
								
								<?php if(has_post_thumbnail()){?> 
									<div class="col-md-6">
											<div class="post_tab_thumb">
												<?php the_post_thumbnail();?>
											</div>
									</div>
									
									<div class="col-md-6">	
										<div class="tab_pan_content">
											<h2><?php the_title();?></h2>
											<?php the_content();?>	
										</div>											
									</div>
									<?php }else{?>

										<div class="col-md-12">	
											<div class="tab_pan_content">
												<h2><?php the_title();?></h2>
												<?php the_content();?>
											</div>									
										</div>
									<?php } ?>	
								</div>
							
									<?php endwhile; ?>
							</div>											
							<?php wp_reset_query(); ?>	
							
						</div>	
					</div>
		<?php
	}
}