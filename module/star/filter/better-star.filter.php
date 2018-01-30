<?php
/**
 * Better Star Filter
 *
 * @author Eoxia <contact@eoxia.com>
 * @since 1.0.0
 * @version 1.3.0
 * @package beflex
 */

namespace wp_star;

/**
 * Main class of the theme
 */
class wp_star_Filter {
	/**
	 * Constructor
	 */
	public function __construct() {
		add_filter( 'acf/settings/load_json', array( $this, 'wp_star_bloc_json_load' ) );
		add_filter( 'the_content', array( $this, 'wp_star_content' ) );
	}

	/**
	 * Add a json acf directory
	 *
	 * @method wp_star_bloc_json_load
	 * @param  Array $paths Acf folders.
	 * @return Array $paths Acf folders
	 */
	public function wp_star_bloc_json_load( $paths ) {
		$paths[] = WP_STAR_PLUGIN_PATH . 'module/star/asset/json';
		return $paths;
	}

	/**
	 * Add the view to WordPress content
	 *
	 * @method wp_star_content
	 * @param  String $content Contenu de la page.
	 * @return String $content Contenu de la page.
	 */
	public function wp_star_content( $content ) {
		$list_project = get_field( 'wpstar_list_project' );
		if ( empty( $list_project ) ) :
			return;
		endif;

		ob_start();
		\eoxia\View_Util::exec( 'wp-star', 'star', 'main' );
		$view = ob_get_clean();

		$content = $content . $view;
		return $content;
	}

}
new wp_star_Filter();
