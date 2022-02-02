<?php
/**
 * Init of core and modules
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2022 Eoxia <dev@eoxia.com>
 * @license
 * @package   WP_Star\
 * @since     2.0.0
 */

namespace wp_star;

if ( ! defined( 'ABSPATH' ) ) { exit; }

class WP_Star_Init {

	public function __construct() {
		// Core include.
		require_once WP_STAR_PATH . 'core/core-init.php';

		// Modules include.
		if ( \wp_star\Core_Helper::getInstance()->is_acf() ) {
			require_once WP_STAR_PATH . 'module/star/star-init.php';
		}

	}

}
new WP_Star_Init();
