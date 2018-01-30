<?php
/**
 * Initialise les fichiers .config.json
 *
 * @package Evarisk\Plugin
 */

namespace wp_star;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return true if acf exists
 *
 * @method is_acf
 */
function is_acf() {
	if ( class_exists( 'acf' ) ) :
		return true;
	endif;
}
