<?php
/**
 * Plugin Name: DreamIT Elementor Extension
 * Description: Custom Elementor extension.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      DreamIT
 * Author URI:  https://elementor.com/
 * Text Domain: dreamit-elementor-extension
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Require once the Composer Autoload
if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
	require_once dirname(__FILE__).'/vendor/autoload.php';
}



define( 'DREAMIT_DIR_PATH', plugin_dir_path( __FILE__ ) );


require DREAMIT_DIR_PATH . 'base.php';

require DREAMIT_DIR_PATH . 'post-type/post-type.php';

require DREAMIT_DIR_PATH . 'inc/flaticon/icons-loader.php';

require DREAMIT_DIR_PATH . 'inc/metabox/meta-loader.php';







