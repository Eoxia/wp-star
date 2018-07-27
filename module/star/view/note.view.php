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

?>
<div class="wpst-list-note">
	<?php while ( have_rows( 'wpstar_list_note' ) ) : the_row();

		$wpst_note_label       = get_sub_field( 'wpstar_label_note' );
		$wpst_note_description = get_sub_field( 'wpstar_description_note' );
		$wpst_note_star        = get_sub_field( 'wpstar_note' );
		?>

		<div class="wpst-note">
			<div class="wpst-note-label"><?php echo esc_html( $wpst_note_label ); ?></div>
			<div class="wpst-note-star wpst-<?php echo esc_html( $wpst_note_star ); ?>">
				<?php for ( $i = 0; $i < 5; $i++ ) : ?>
					<div class="wpst-note-icon"></div>
				<?php endfor; ?>
			</div>
			<div class="wpst-note-description"><?php echo esc_html( $wpst_note_description ); ?></div>
		</div>

	<?php endwhile; ?>
</div>
