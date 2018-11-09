<?php
/**
 * View of module star
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2018 Eoxia <dev@eoxia.com>
 * @license   AGPLv3 <https://spdx.org/licenses/AGPL-3.0-or-later.html>
 * @package   WP_Star\star\Actions
 * @since     1.0.0
 */

namespace wp_star;

defined( 'ABSPATH' ) || exit;

if ( have_rows( 'wpstar_list_project' ) ) : ?>
	<div class="wpst-list">
		<?php while ( have_rows( 'wpstar_list_project' ) ) : the_row();

			$wpst_title     = get_sub_field( 'wpstar_title' );
			$wpst_thumb     = get_sub_field( 'wpstar_thumbnail' );
			$wpst_thumb_url = ( $wpst_thumb ) ? $wpst_thumb['sizes']['wp_star'] : WP_STAR_PLUGIN_URL . 'module/star/asset/img/default.jpg';
			$wpst_excerpt   = get_sub_field( 'wpstar_description' );
			?>

			<div class="wpst-project">
				<div class="wpst-project-container">
					<figure class="wpst-thumbnail">
						<img src="<?php echo esc_url( $wpst_thumb_url ); ?>" />
					</figure>

					<div class="wpst-content">
						<?php if ( ! empty( $wpst_title ) ) : ?>
							<div class="wpst-title"><?php echo esc_html( $wpst_title ); ?></div>
						<?php endif; ?>

						<?php if ( ! empty( $wpst_excerpt ) ) : ?>
							<div class="wpst-excerpt"><?php echo esc_html( $wpst_excerpt ); ?></div>
						<?php endif; ?>

						<?php if ( have_rows( 'wpstar_list_note' ) ) : ?>
							<?php \eoxia\View_Util::exec( 'wp-star', 'star', 'note' ); ?>
						<?php endif; ?>

						<?php \eoxia\View_Util::exec( 'wp-star', 'star', 'comment' ); ?>

						<?php if ( have_rows( 'wpstar_list_button' ) ) : ?>
							<?php \eoxia\View_Util::exec( 'wp-star', 'star', 'link' ); ?>
						<?php endif; ?>
					</div><!-- .wpst-container -->
				</div><!-- .wpst-project-container -->
			</div>

		<?php endwhile; ?>
	</div><?php
endif;
