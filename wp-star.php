<?php
/**
 * Plugin Name:  WP Star 🌟
 * Plugin URI:   https://eoxia.com
 * Description:  A tool used to compare everything you want with design to enrich your WordPress posts.
 * Version:      2.0.0
 * Author:       Eoxia
 * Author URI:   https://eoxia.com
 * license:      AGPLv3
 * License URI:  https://spdx.org/licenses/AGPL-3.0-or-later.html
 * Domain Path: /core/assets/languages/
 * Text Domain: wp-star
 */

namespace wp_star;

defined( 'ABSPATH' ) || exit;

DEFINE( 'WP_STAR_PATH', realpath( plugin_dir_path( __FILE__ ) ) . '/' );
DEFINE( 'WP_STAR_URL', plugins_url( basename( __DIR__ ) ) . '/' );
DEFINE( 'WP_STAR_DIR', basename( __DIR__ ) );

require_once WP_STAR_PATH . 'wp-star-init.php';
