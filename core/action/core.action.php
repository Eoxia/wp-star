<?php
/**
 * Mains actions of module
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2018 Eoxia <dev@eoxia.com>
 * @license   AGPLv3 <https://spdx.org/licenses/AGPL-3.0-or-later.html>
 * @package   WP_Star\Actions
 * @since     1.0.0
 */

namespace wp_star;

defined( 'ABSPATH' ) || exit;

/**
 * Main actions of wp-star
 */
class Core_Action {

	/**
	 * Constructor
	 *
	 * @since 2.0.0
	 * @version 2.0.0
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'callback_front_enqueue_scripts' ), 11 );
		add_action( 'tgmpa_register', array( Wp_Star_Util::g(), 'wpstar_register_required_plugins' ), 11 );
		add_action( 'admin_notices', array( $this, 'acf_version_notice' ), 11 );

		add_action( 'init', array( $this, 'load_languages' ) );
	}

	/**
	 * Init style and script
	 *
	 * @since 2.0.0
	 * @version 2.0.0
	 *
	 * @return void nothing
	 */
	public function callback_admin_enqueue_scripts() {
	}

	/**
	 * Init style and script in frontend
	 *
	 * @since 2.0.0
	 * @version 2.0.0
	 *
	 * @return void nothing
	 */
	public function callback_front_enqueue_scripts() {
		wp_enqueue_style( 'wp-star-frontend-style', WP_STAR_PLUGIN_URL . 'core/asset/css/style.css', array(), \eoxia\Config_Util::$init['wp-star']->version );

		/** URl of module in javascipt */
		wp_register_script( 'wp-star-frontend-script', WP_STAR_PLUGIN_URL . 'core/asset/js/backend.min.js', array(), \eoxia\Config_Util::$init['wp-star']->version );
		wp_localize_script( 'wp-star-frontend-script', 'wp-star_data', array( 'url' => WP_STAR_PLUGIN_URL ) );
		wp_enqueue_script( 'wp-star-frontend-script' );
	}

	/**
	 * Alert user to update ACF version
	 *
	 * @since 2.0.0
	 * @return void
	 */
	public function acf_version_notice() {
		if ( ! is_acf() ) return;
		if ( ! file_exists( WP_STAR_PLUGIN_PATH . '/../advanced-custom-fields/acf.php' ) ) return;

		$acf_datas = get_plugin_data( WP_STAR_PLUGIN_PATH . '/../advanced-custom-fields/acf.php' );
		if ( (int) substr( $acf_datas['Version'], 0, 1 ) < 5 ) {
			?>
			<div class="notice notice-error">
				<p><?php esc_html_e( 'WP Star plugin work with ACF version 5+. Please update !', 'wp-star' ); ?></p>
			</div>
			<?php
		}
	}

	/**
	 * Initialise le fichier MO
	 *
	 * @since 0.1.0
	 * @version 0.1.0
	 */
	public function load_languages() {
		load_plugin_textdomain( 'wp-star', false, WP_STAR_PLUGIN_DIR . '/core/asset/languages/' );
	}
}

new Core_Action();
