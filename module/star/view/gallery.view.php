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

$wpst_gallery = get_sub_field( 'wpstar_gallery' );

if ( ! empty( $wpst_gallery ) ) : ?>
	<div class="wpst-gallery wpeo-gridlayout grid-3">
		<?php foreach ( $wpst_gallery as $image ) : ?>
			<a class="wpst-gallery-item" href="<?php echo esc_url( $image['url'] ); ?>">
				<img src="<?php echo esc_url( $image['sizes']['thumbnail'] ); ?>" />
			</a>
		<?php endforeach; ?>
	</div> <?php
endif; ?>
