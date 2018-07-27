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
<div class="wpst-list-link">
	<?php while ( have_rows( 'wpstar_list_button' ) ) : the_row();

		$wpst_link        = get_sub_field( 'wpstar_button_link' );
		$wpst_link_icon   = get_sub_field( 'wpstar_button_icon' );
		$wpst_link_label  = get_sub_field( 'wpstar_button_label' );
		$wpst_link_target = get_sub_field( 'wpstar_button_target' ) ? '_blank' : '';
		?>

		<?php if ( ! empty( $wpst_link ) ) : ?>
			<a class="wpst-link wpeo-button button-size-small button-radius-3 button-dark" href="<?php echo esc_url( $wpst_link ); ?>" target="<?php echo esc_html( $wpst_link_target ); ?>">
				<?php if ( ! empty( $wpst_link_icon ) ) : ?>
					<i class="fa-fw fas <?php echo esc_html( $wpst_link_icon ); ?>"></i>
				<?php endif; ?>
				<span><?php echo ! empty( $wpst_link_label ) ? esc_html( $wpst_link_label ) : esc_html_e( 'View more', 'wp-star' ); ?></span>
			</a>
		<?php endif; ?>

	<?php endwhile; ?>
</div>
