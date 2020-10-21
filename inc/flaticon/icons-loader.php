<?php 
/** Added all post type
*/
class DreamIT_FlatIcon{

	public function __construct(){
		
		$this->load_flat_icon();
	}

	public function load_flat_icon(){

		require plugin_dir_path( __FILE__ ). '/icons.php';

	}
	
}
new DreamIT_FlatIcon();