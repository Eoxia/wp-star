<?php
/**
 * Init of Core.
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2022 Eoxia <dev@eoxia.com>
 * @license
 * @package   WP_Star\
 * @since     2.0.0
 */

namespace wp_star;

defined( 'ABSPATH' ) || exit;

/**
 * Init of the Core
 */
class Core_Init {
	public function __construct() {
		require_once WP_STAR_PATH . 'core/class/tgm-plugin-activation.php';
		require_once WP_STAR_PATH . 'core/helper/core-helper.php';
		require_once WP_STAR_PATH . 'core/util/core-util.php';
		require_once WP_STAR_PATH . 'core/action/core-action.php';
	}
}
new Core_Init();
