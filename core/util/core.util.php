<?php
/**
 * Plugins required by module
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2018 Eoxia <dev@eoxia.com>
 * @license   AGPLv3 <https://spdx.org/licenses/AGPL-3.0-or-later.html>
 * @package   Annonces\Actions
 * @since     2.0.0
 */

namespace wp_star;

defined( 'ABSPATH' ) || exit;

/**
 * Appelle la vue permettant d'afficher la navigation
 */
class Wp_Star_Util extends \eoxia\Singleton_Util {

	/**
	 * Le constructeur
	 *
	 * @since 2.0.0-alpha
	 * @version 2.0.0-alpha
	 */
	protected function construct() {}

	/**
	 * Donne le chemin de la vue à inclure dans le module
	 *
	 * @since 2.0.0
	 * @return void
	 */
	public function wpstar_register_required_plugins() {
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$plugins = array(
			array(
				'name'     => 'Advanced Custom Fields',
				'slug'     => 'advanced-custom-fields',
				'required' => true,
			),
		);

		/*
		 * Array of configuration settings. Amend each line as needed.
		 *
		 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
		 * strings available, please help us make TGMPA even better by giving us access to these translations or by
		 * sending in a pull-request with .po file(s) with the translations.
		 *
		 * Only uncomment the strings in the config array if you want to customize the strings.
		 */
		$config = array(
			'id'           => 'wp-star',          // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'parent_slug'  => 'plugins.php',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			'strings'      => array(
				'page_title'                      => __( 'Install Required Plugins', 'wp-star' ),
				'menu_title'                      => __( 'Install Plugins', 'wp-star' ),
				'installing'                      => __( 'Installing Plugin: %s', 'wp-star' ), // %1$s = plugin name
				'oops'                            => __( 'Something went wrong with the plugin API.', 'wp-star' ),
				'notice_can_install_required'     => _n_noop( 'This plugin requires the following plugin installed or update: %1$s.', 'This plugin requires the following plugins installed or updated: %1$s.', 'wp-star' ), // %1$s = plugin name(s)
				'notice_can_install_recommended'  => _n_noop( 'This plugin recommends the following plugin installed or updated: %1$s.', 'This plugin recommends the following plugins installed or updated: %1$s.', 'wp-star' ), // %1$s = plugin name(s)
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'wp-star' ), // %1$s = plugin name(s)
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'wp-star' ), // %1$s = plugin name(s)
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'wp-star' ), // %1$s = plugin name(s)
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'wp-star' ), // %1$s = plugin name(s)
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this plugin: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this plugin: %1$s.', 'wp-star' ), // %1$s = plugin name(s)
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'wp-star' ), // %1$s = plugin name(s)
				'install_link'                    => _n_noop( 'Go Install Plugin', 'Go Install Plugins', 'wp-star' ),
				'activate_link'                   => _n_noop( 'Go Activate Plugin', 'Go Activate Plugins', 'wp-star' ),
				'return'                          => __( 'Return to Required Plugins Installer', 'wp-star' ),
				'plugin_activated'                => __( 'Plugin activated successfully.', 'wp-star' ),
				'complete'                        => __( 'All plugins installed and activated successfully. %s', 'wp-star' ), // %1$s = dashboard link
			),
		);

		tgmpa( $plugins, $config );
	}
}

Wp_Star_Util::g();
