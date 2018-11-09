<?php
/*
Plugin Name:  WP Star 🌟
Plugin URI:   https://eoxia.com
Description:  A tool used to compare everything you want with design to enrich your WordPress posts.
Version:      1.1.0
Author:       Eoxia
Author URI:   https://eoxia.com
license:      AGPLv3
License URI:  https://spdx.org/licenses/AGPL-3.0-or-later.html
Domain Path: /core/assets/languages/
Text Domain: wp-star
*/

DEFINE( 'WP_STAR_PLUGIN_PATH', realpath( plugin_dir_path( __FILE__ ) ) . '/' );
DEFINE( 'WP_STAR_PLUGIN_URL', plugins_url( basename( __DIR__ ) ) . '/' );
DEFINE( 'WP_STAR_PLUGIN_DIR', basename( __DIR__ ) );

require_once( 'core/external/eo-framework/eo-framework.php' );

// Boot du plugin.
\eoxia\Init_Util::g()->exec( WP_STAR_PLUGIN_PATH, basename( __FILE__, '.php' ) );
