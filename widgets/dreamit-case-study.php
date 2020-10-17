<?php



use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if(!defined('ABSPATH')) exit;


class CaseStudy extends Widget_Base{

	public function get_name(){
		return "casestudy";
	}
	
	public function get_title(){
		return "Case Study";
	}
	
	public function get_icon(){
		return "eicon-integration";
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
			$this->add_control(
				'overlay_color',
				[
					'label' => __( 'Overlay Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .style-two .case-study-thumb:before' => 'background: {{VALUE}};',
					],
				]
			);
		$this->end_controls_section();


	}

	protected function render(){

		$settings = $this->get_settings_for_display();

		?>


			<?php if($settings['select_style']=='one'){ ?>

			<div class="em_load_adn bgimgload case_default">					
				<div class="blog_wrap blog-messonary">

					<?php $the_query = new \WP_Query( array( 'post_type' => 'em_case_study' ) ); ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post();

						$terms = get_the_terms(get_the_ID(), 'em_case_study_cat');						
					?>
						<!-- single blog -->
						<div class="col-md-<?php if( !empty( $set_column ) ){echo $set_column;}?> grid-item col-xs-12 col-sm-6" >

							<div class="single_case_study">
							
	
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="itsoft-single-cases-study ">					
										
										<!-- BLOG THUMB -->
										<?php if(has_post_thumbnail()){?>
											<div class="case-study-thumb ">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> 
												</a>
											</div>									
										<?php } ?>
										
										<div class="cases-study-content ">
										
											<!-- BLOG TITLE -->
											<div class="em-cases-study-title ">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
											</div>
											<div class="case_category">

													<?php if( $terms ){
														
													foreach( $terms as $single_slugs ){?>
														<span class="category-item">
														   <?php echo $single_slugs->name ;?>
														</span>																			
													<?php }} ?>

											</div>
																									
											<!-- Blog Description -->
											<?php if($show_content=='yes'){?>
												
													<!-- BLOG TITLE AND CONTENT -->
													<div class="em-cases-study-inner ">
														<div class="cases-study-content ">					
															<p><?php echo wp_trim_words( get_the_content(), 16, ' ' ); ?></p>
														</div>
													</div>
											
											<?php } ?>										
											<!-- Blog Read More Button -->
											<?php if($show_button=='yes'){?>
												<div class="em-case-study-button">
													<?php if($btn_text){?>
															<a href="<?php the_permalink(); ?>" class="study_btn"><?php echo $btn_text;?></a>
													<?php } ?>
												</div>											
											<?php } ?>
										</div>	
											
									</div>
								</div> <!--  END SINGLE BLOG -->
	
							</div>
						
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>
				</div>
			</div>

			<?php }elseif($settings['select_style']=='two'){ ?>

			<div class=" blog_style_adn_2">				
				<div class="blog_wrap case_study_carousel owl-carousel curosel-style style-two">
					
					<?php $the_query = new \WP_Query( array( 'post_type' => 'em_case_study' ) ); ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); 	
					
					$terms = get_the_terms(get_the_ID(), 'em_case_study_cat');

					?>
						<!-- single blog -->
						<div class="col-md-12 col-xs-12 col-sm-12" >
							<div class="single_case_study">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="dreamit-single-cases-study">					
										
										<!-- BLOG THUMB -->
										<?php if(has_post_thumbnail()){?>
											<div class="case-study-thumb ">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> 
												</a>
											</div>									
										<?php } ?>
										
										<div class="cases-study-content ">
										
											<!-- BLOG TITLE -->
											<div class="em-cases-study-title ">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
												
											</div>
											<div class="case_category">
												
													<?php if( $terms ){
														
													foreach( $terms as $single_slugs ){?>
														<span class="category-item">
														   <?php echo $single_slugs->name ;?>
														</span>																			
													<?php }} ?>

											</div>

											<!-- Blog Description -->
											<?php if($show_content=='yes'){?>
												
													<!-- BLOG TITLE AND CONTENT -->
													<div class="em-cases-study-inner ">
														<div class="cases-study-content ">					
															<p><?php echo wp_trim_words( get_the_content(), 19, ' ' ); ?></p>
														</div>
													</div>
											
											<?php } ?>
											
											
											<!-- Blog Read More Button -->
											<?php if($show_button=='yes'){?>
												
												<div class="em-case-study-button">
													<?php if($btn_text){?>
															<a href="<?php the_permalink(); ?>" class="learn_btn"><?php echo $btn_text;?></a>
															<i class="fa fa-long-arrow-right btn_icon"></i>
													<?php } ?>
												</div>											
											
											<?php } ?>
										</div>			
									</div>
								</div> <!--  END SINGLE BLOG -->
	
									
							</div>
						
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>

					
				</div>
			</div>

			<?php }elseif($settings['select_style']=='three'){ ?>


			<div class=" blog_style_adn_2">				
				<div class="blog_wrap case_study_carousel owl-carousel case-study-style3 curosel-style">
					
					<?php $the_query = new \WP_Query( array( 'post_type' => 'em_case_study' ) ); ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); 
				
					$terms = get_the_terms(get_the_ID(), 'em_case_study_cat');

					?>
						<!-- single blog -->
						<div class="col-md-12 col-xs-12 col-sm-12">
							<div class="single_case_study <?php echo esc_attr( $extra_class ); ?>">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="dreamit-single-cases-study ">					
										
										<!-- BLOG THUMB -->
										<?php if(has_post_thumbnail()){?>
											<div class="case-study-thumb ">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> 
												</a>
											</div>									
										<?php } ?>
										
										<div class="cases-study-content">
										
											<div class="case_category">
                								<?php if( $terms ){	
        											foreach( $terms as $single_slugs ){?>
        												<span class="category-item">
        												   <?php echo $single_slugs->name ;?>
        												</span>																			
        											<?php }}?>																			
                								</div>
											<!-- CASE TITLE -->
											<div class="em-cases-study-title ">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
												
											</div>


											<!-- Blog Description -->
											<?php if($show_content=='yes'){?>
												
													<!-- BLOG TITLE AND CONTENT -->
													<div class="em-cases-study-inner ">
														<div class="cases-study-content ">					
															<p><?php echo wp_trim_words( get_the_content(), 19, ' ' ); ?></p>
														</div>
													</div>
											
											<?php } ?>
											
											
											<!-- Blog Read More Button -->
											<?php if($show_button=='yes'){?>
												
												<div class="em-case-study-button">
													<?php if($btn_text){?>
															<a href="<?php the_permalink(); ?>" class="learn_btn"><?php echo $btn_text;?></a>
													<?php } ?>
												</div>											
											
											<?php } ?>
										</div>			
									</div>
								</div> <!--  END SINGLE BLOG -->
	
									
							</div>
						
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>

					
				</div>
			</div>





			<?php } ?>

		<?php
	}
}