<?php
/*
Plugin Name:  WP Star 🌟
Plugin URI:   https://eoxia.com
Description:  A tool used to compare everything you want with design to enrich your WordPress posts.
Version:      0.1.0
Author:       Eoxia
Author URI:   https://eoxia.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /core/assets/languages/
Text Domain: wp-star
*/

DEFINE( 'WP_STAR_PLUGIN_PATH', realpath( plugin_dir_path( __FILE__ ) ) . '/' );
DEFINE( 'WP_STAR_PLUGIN_URL', plugins_url( basename( __DIR__ ) ) . '/' );
DEFINE( 'WP_STAR_PLUGIN_DIR', basename( __DIR__ ) );

require_once( 'core/external/eo-framework/eo-framework.php' );

// Boot du plugin.
\eoxia\Init_Util::g()->exec( WP_STAR_PLUGIN_PATH, basename( __FILE__, '.php' ) );
