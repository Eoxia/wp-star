<?php
/**
 * View of module star
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2018 Eoxia <dev@eoxia.com>
 * @license   AGPLv3 <https://spdx.org/licenses/AGPL-3.0-or-later.html>
 * @package   WP_Star\star\Views
 * @since     1.0.0
 */

namespace wp_star;

defined( 'ABSPATH' ) || exit;

?>
<div class="wpst-list-link wp-block-button">
	<?php while ( have_rows( 'wpstar_list_button', $block['id'] ) ) : the_row();

		$wpst_link        = get_sub_field( 'wpstar_button_link' );
		$wpst_link_color  = get_sub_field( 'wpstar_button_color' );
		if( $wpst_link ):
			$link_url    = $wpst_link['url'];
			$link_title  = $wpst_link['title'];
			$link_target = $wpst_link['target'] ? $wpst_link['target'] : '_self';
			?>
			<a class="wpst-link wp-block-button__link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="<?php echo ! empty( $wpst_link_color ) ? 'background: ' . esc_attr( $wpst_link_color ) . ';' : ''; ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>

	<?php endwhile; ?>
</div>
