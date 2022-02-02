<?php
/**
 * Mains actions of module
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2022 Eoxia <dev@eoxia.com>
 * @license
 * @package   WP_Star\
 * @since     2.0.0
 */

namespace wp_star;

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Main actions of wp-star
 */
class Core_Action {

	/**
	 * Constructor
	 *
	 * @since 2.0.0
	 * @version 2.0.0
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'load_languages' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'callback_front_enqueue_scripts' ), 11 );
//		add_action( 'tgmpa_register', array( Wp_Star_Util::g(), 'wpstar_register_required_plugins' ), 11 );
	}

	/**
	 * Init style and script
	 *
	 * @since 2.0.0
	 * @version 2.0.0
	 *
	 * @return void nothing
	 */
	public function callback_admin_enqueue_scripts() {
	}

	/**
	 * Init style and script in frontend
	 *
	 * @since 2.0.0
	 * @version 2.0.0
	 *
	 * @return void nothing
	 */
	public function callback_front_enqueue_scripts() {
		wp_enqueue_style( 'wp-star-lightbox-style', WP_STAR_URL . 'core/assets/inc/lightbox/lightbox.min.css' );
		wp_enqueue_script( 'wp-star-lightbox-script', WP_STAR_URL . 'core/assets/inc/lightbox/lightbox.min.js', array( 'jquery' ) );
	}


	/**
	 * Initialise le fichier MO
	 *
	 * @since 0.1.0
	 * @version 0.1.0
	 */
	public function load_languages() {
		load_plugin_textdomain( 'wp-star', false, WP_STAR_DIR . '/core/asset/languages/' );
	}
}

new Core_Action();
