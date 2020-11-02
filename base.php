<?php


final class DreamIT_Elementor_Extension {

	/**
	 * Plugin Version
	 *
	 * @since 1.0.0
	 *
	 * @var string The plugin version.
	 */
	const VERSION = '1.0.0';

	/**
	 * Minimum Elementor Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum Elementor version required to run the plugin.
	 */
	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

	/**
	 * Minimum PHP Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum PHP version required to run the plugin.
	 */
	const MINIMUM_PHP_VERSION = '7.0';

	/**
	 * Instance
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 * @static
	 *
	 * @var DreamIT_Elementor_Extension The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @static
	 *
	 * @return DreamIT_Elementor_Extension An instance of the class.
	 */
	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct() {

		add_action( 'init', [ $this, 'i18n' ] );
		add_action( 'plugins_loaded', [ $this, 'init' ] );
	}

	/**
	 * Load Textdomain
	 *
	 * Load plugin localization files.
	 *
	 * Fired by `init` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function i18n() {

		load_plugin_textdomain( 'dreamit-elementor-extension' );

	}

	/**
	 * Initialize the plugin
	 *
	 * Load the plugin only after Elementor (and other plugins) are loaded.
	 * Checks for basic plugin requirements, if one check fail don't continue,
	 * if all check have passed load the files required to run the plugin.
	 *
	 * Fired by `plugins_loaded` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return;
		}

		// Add Plugin actions
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );
		// add_action( 'elementor/controls/controls_registered', [ $this, 'init_controls' ] );
		
		add_action( 'elementor/elements/categories_registered', [ $this, 'add_category' ] );

		// add_action( 'wp_enqueue_scripts', [$this, 'load_plugin_script'] );
		add_action( 'elementor/editor/after_enqueue_styles', [ $this, 'load_plugin_script' ] );
		add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'load_plugin_script' ] );

		


	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have Elementor installed or activated.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'elementor-test-extension' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'elementor-test-extension' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'elementor-test-extension' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required Elementor version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-test-extension' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'elementor-test-extension' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'elementor-test-extension' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-test-extension' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'elementor-test-extension' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'elementor-test-extension' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Init Widgets
	 *
	 * Include widgets files and register them
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init_widgets() {

		// Include Widget files
		require_once( __DIR__ . '/widgets/service-box.php');
		require_once( __DIR__ . '/widgets/dreamit-service-carousel.php');
		require_once( __DIR__ . '/widgets/dreamit-flip-box.php');
		require_once( __DIR__ . '/widgets/dreamit-feature-box.php');
		require_once( __DIR__ . '/widgets/dreamit-slick-slider.php');
		require_once( __DIR__ . '/widgets/dreamit-team.php');
		require_once( __DIR__ . '/widgets/dreamit-work-process.php');
		require_once( __DIR__ . '/widgets/dreamit-call-to-action.php');
		require_once( __DIR__ . '/widgets/dreamit-testimonial.php');
		require_once( __DIR__ . '/widgets/dreamit-blog-post.php');
		require_once( __DIR__ . '/widgets/dreamit-section-title.php');
		require_once( __DIR__ . '/widgets/dreamit-case-study.php');
		require_once( __DIR__ . '/widgets/dreamit-brand.php');
		require_once( __DIR__ . '/widgets/dreamit-counter-box.php');
		require_once( __DIR__ . '/widgets/dreamit-icon-box.php' );
		require_once( __DIR__ . '/widgets/dreamit-video-box.php' );
		require_once( __DIR__ . '/widgets/dreamit-nivo-slider.php' );
		require_once( __DIR__ . '/widgets/dreamit-post-tab.php' );
		require_once( __DIR__ . '/widgets/dreamit-pricing-table.php');
		require_once( __DIR__ . '/widgets/dreamit-portfolio.php');

		// Register widget

		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new ServiceBox());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new ServiceCarousel());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new FlipBox());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new FeatureBox());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new SlickSlider());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Team());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new WorkProcess());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new CallToAction());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Testimonial());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new BlogPost());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new SectionTitle());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new CaseStudy());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Brand());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new CounterBox());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new IconBox() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new VideoBox() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new NivoSlider() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new PostTab() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new PricingTable());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Portfolio());
		
		add_action( 'elementor/elements/categories_registered', [$this, 'add_category'] );

	}

	/**
	 * Init Controls
	 *
	 * Include controls files and register them
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	// public function init_controls() {

	// 	// Include Control files
	// 	require_once( __DIR__ . '/controls/test-control.php' );

	// 	// Register control
	// 	\Elementor\Plugin::$instance->controls_manager->register_control( 'control-type-', new \Test_Control() );

	// }


	// Add Category
	function add_category( $elements_manager ) {

		$elements_manager->add_category(
			'dreamit-category',
			[
				'title' => __( 'DreamIT Elementor Extension', 'dreamit-elementor-extension' ),
				'icon' => 'fa fa-plug',
			]
		);
	}

	function load_plugin_script() {
		
		$plugin_url = plugin_dir_url( __FILE__ );

		wp_enqueue_style( 'style1', $plugin_url . 'assets/css/widgets-style.css' );

		wp_enqueue_style( 'flaticon', $plugin_url . 'assets/css/flaticon.css' );

	}
	

	

}

DreamIT_Elementor_Extension::instance();