<?php
/**
 * Actions of module Star
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2018 Eoxia <dev@eoxia.com>
 * @license   AGPLv3 <https://spdx.org/licenses/AGPL-3.0-or-later.html>
 * @package   WP_Star\star\Actions
 * @since     1.0.0
 */

namespace wp_star;

defined( 'ABSPATH' ) || exit;

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
