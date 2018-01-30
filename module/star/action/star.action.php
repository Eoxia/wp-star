<?php
/**
 * Les actions du module "Hello World".
 *
 * @author Jimmy Latour <jimmy.eoxia@gmail.com>
 * @since 0.1.0
 * @version 0.1.0
 * @copyright 2015-2017 Eoxia
 * @package EO_Framework_Starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Les actions du module "Hello World".
 */
class Star_Action {

	/**
	 * Le constructeur
	 *
	 * @since 0.1.0
	 * @version 0.1.0
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'wp_star_add_image_size' ) );
	}

	/**
	 * Add thumb sizes for the image Blocs
	 *
	 * @since 0.1.0
	 * @version 0.1.0
	 */
	public function wp_star_add_image_size() {
		add_image_size( 'wp_star', 400, 260, true );
	}
}

new Star_Action();
