<?php
/**
 * Mains actions of module
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2022 Eoxia <dev@eoxia.com>
 * @license
 * @package   WP_Star\
 * @since     2.0.0
 */

namespace wp_star;

defined( 'ABSPATH' ) || exit;

class Core_Helper {
	/**
	 * @var Singleton
	 * @access private
	 * @static
	 */
	private static $_instance = null;

	/**
	 * Méthode qui crée l'unique instance de la classe
	 * si elle n'existe pas encore puis la retourne.
	 *
	 * @param void
	 * @return Singleton
	 */
	public static function getInstance() {

		if(is_null(self::$_instance)) {
			self::$_instance = new Core_Helper();
		}

		return self::$_instance;
	}

	/**
	 * Le constructeur
	 *
	 * @since 0.1.0-alpha
	 * @version 0.1.0-alpha
	 */
	private function __construct() {}

	/**
	 * Return true if acf exists
	 *
	 * @method is_acf
	 */
	public function is_acf() {
		if ( class_exists( 'acf' ) ) :
			return true;
		endif;
	}
}
