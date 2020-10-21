<?php 


class DreamIT_MetaBox{

	public function __construct(){
		
		$this->load_meta_box();
	}

	public function load_meta_box(){

		require plugin_dir_path( __FILE__ ). '/metaboxes.php';

	}
	
}
new DreamIT_MetaBox();