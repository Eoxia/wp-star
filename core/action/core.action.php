<?php
/**
 * Les actions principales de l'application.
 *
 * @author Jimmy Latour <jimmy.eoxia@gmail.com>
 * @since 0.1.0
 * @version 0.1.0
 * @copyright 2015-2017 Eoxia
 * @package EO_Framework_Starter
 */

namespace wp_star;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Les actions principales de l'application.
 */
class wp_star_Core_Action {

	/**
	 * Le constructeur
	 *
	 * @since 0.1.0
	 * @version 0.1.0
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'callback_mixed_enqueue_scripts' ), 11 );
		add_action( 'wp_enqueue_scripts', array( $this, 'callback_mixed_enqueue_scripts' ), 11 );
		add_action( 'tgmpa_register', array( wp_star_Util::g(), 'wp_star_register_required_plugins' ), 11 );

		add_action( 'init', array( $this, 'callback_plugins_loaded' ) );
	}

	/**
	 * Initialise le fichier style.min.css et backend.min.js du plugin DigiRisk.
	 *
	 * @since 0.1.0
	 * @version 0.1.0
	 *
	 * @return void nothing
	 */
	public function callback_mixed_enqueue_scripts() {
		wp_enqueue_style( 'eo-framework-starter-backend-style', WP_STAR_PLUGIN_URL . 'core/asset/css/style.css', array(), \eoxia\Config_Util::$init['starter']->version );
		wp_enqueue_script( 'eo-framework-starter-backend-script', WP_STAR_PLUGIN_URL . 'core/asset/js/backend.min.js', array(), \eoxia\Config_Util::$init['starter']->version );
	}

	/**
	 * Initialise le fichier MO
	 *
	 * @since 0.1.0
	 * @version 0.1.0
	 */
	public function callback_plugins_loaded() {
		load_plugin_textdomain( 'wp-star', false, WP_STAR_PLUGIN_DIR . '/core/asset/languages/' );
	}
}

new wp_star_Core_Action();
