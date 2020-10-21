<?php 
/** Added all post type
*/
class DreamIT_Post_Type{

	public function __construct(){
		$this->load_post_type();
	}

	public function load_post_type(){

		require plugin_dir_path( __FILE__ ). '/slider.php';
		require plugin_dir_path( __FILE__ ). '/portfolio.php';
		require plugin_dir_path( __FILE__ ). '/testimonial.php';
		require plugin_dir_path( __FILE__ ). '/case-study.php';
		require plugin_dir_path( __FILE__ ). '/brand.php';
		require plugin_dir_path( __FILE__ ). '/screenshot.php';
		require plugin_dir_path( __FILE__ ). '/post-tab.php';

	}
	
}
new DreamIT_Post_Type();
