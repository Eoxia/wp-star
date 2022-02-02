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

$wpst_comment = get_field( 'wpstar_comment_author', $block['id'] );

if ( ! empty( $wpst_comment ) ) : ?>
	<div class="wpst-comment-author">
		<?php echo esc_html( $wpst_comment ); ?>
	</div> <?php
endif; ?>
