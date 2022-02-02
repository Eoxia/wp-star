<?php
/**
 * Filter of Star Module.
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2022 Eoxia <dev@eoxia.com>
 * @license   AGPLv3 <https://spdx.org/licenses/AGPL-3.0-or-later.html>
 * @package   WP_Star\star\Actions
 * @since     2.0.0
 */

namespace beflex_pro;

defined( 'ABSPATH' ) || exit;

/**
 * Diaporama filters
 */
class Star_Filter {
	/**
	 * Constructor
	 */
	public function __construct() {
		add_filter( 'acf/settings/load_json', array( $this, 'module_star_load_json' ) );
	}

	/**
	 * Add a json acf directory
	 *
	 * @method module_star_load_json
	 * @param  Array $paths Acf folders.
	 * @return Array $paths Acf folders
	 */
	function module_star_load_json( $paths ) {
		$paths[] = WP_STAR_PATH . 'module/star/assets/json';
		return $paths;
	}

}
new Star_Filter();
