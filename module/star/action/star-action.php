<?php
/**
 * Actions of module Star
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2022 Eoxia <dev@eoxia.com>
 * @license   AGPLv3 <https://spdx.org/licenses/AGPL-3.0-or-later.html>
 * @package   WP_Star\star\Actions
 * @since     2.0.0
 */

namespace wp_star;

defined( 'ABSPATH' ) || exit;

class Star_Action {

	/**
	 * Le constructeur
	 *
	 * @since 0.1.0
	 * @version 0.1.0
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'wp_star_add_image_size' ) );
		add_action( 'acf/init', array( $this, 'init_star_block' ) );
	}

	/**
	 * Add thumb sizes for the image Blocs
	 *
	 * @since 0.1.0
	 * @version 0.1.0
	 */
	public function wp_star_add_image_size() {
		add_image_size( 'wp_star', 400, 260, true );
	}

	/**
	 * Init Star block for Gutenberg
	 *
	 * @return void
	 */
	public function init_star_block() {
		if ( function_exists( 'acf_register_block' ) ) {
			acf_register_block(
				array(
					'name'            => 'wp_star',
					'title'           => esc_html__( 'WP Star - Comparateur', 'wp-star' ),
					'description'     => esc_html__( 'Add block that allows you to rate everything you want', 'wp-star' ),
					'mode'            => 'auto',
					'category'        => 'formatting',
					'icon'            => 'star-filled',
					'keywords'        => array( 'star', 'comparatif', 'comparateur' ),
					'render_callback' => array( $this, 'wp_star_render_callback' ),
					'enqueue_assets'  => function() {
						wp_enqueue_style( 'block-star-style', WP_STAR_URL . 'module/star/assets/css/style.min.css' );
						wp_enqueue_script( 'block-star-script', WP_STAR_URL . 'module/star/assets/js/star.js', array( 'jquery' ), rand(), true );
						do_action( 'star_block_custom_assets' );
					},
				)
			);
		}
	}

	/**
	 * Star Block Callback Function.
	 *
	 * @param   array $block The block settings and attributes.
	 * @param   string $content The block inner HTML (empty).
	 * @param   bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	public function wp_star_render_callback( $block, $content = '', $is_preview = false, $post_id = 0 ) {
		$view_path = \wp_star\Core_Util::getInstance()->get_module_view_path( 'star', 'default' );
		include $view_path;
	}
}

new Star_Action();
