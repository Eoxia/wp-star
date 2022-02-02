<?php
/**
 * Init of Star module.
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2022 Eoxia <dev@eoxia.com>
 * @license   AGPLv3 <https://spdx.org/licenses/AGPL-3.0-or-later.html>
 * @package   WP_Star\
 * @since     2.0.0
 */

namespace wp_star;

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Init of the Diaporama Module
 */
class Star_Init {
	public function __construct() {
		require_once WP_STAR_PATH . 'module/star/action/star-action.php';
		require_once WP_STAR_PATH . 'module/star/filter/star-filter.php';
	}
}
new Star_Init();
