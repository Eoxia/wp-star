<?php
/**
 * Eoxia Mega Menu Class. Extends of the Walker Nav Menu WordPress
 *
 * @author Eoxia <contact@eoxia.com>
 * @since 1.0.0
 * @version 1.3.0
 * @package beflex
 */

namespace wp_star;

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
					<i class="fa fa-star-o"></i>
				<?php endfor; ?>
			</div>
			<div class="wpst-note-description"><?php echo esc_html( $wpst_note_description ); ?></div>
		</div>

	<?php endwhile; ?>
</div>
