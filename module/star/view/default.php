<?php
/**
 * View of module star
 *
 * @author    Eoxia <dev@eoxia.com>
 * @copyright (c) 2006-2022 Eoxia <dev@eoxia.com>
 * @license   AGPLv3 <https://spdx.org/licenses/AGPL-3.0-or-later.html>
 * @package   WP_Star\star\Actions
 * @since     2.0.0
 */

namespace wp_star;

defined( 'ABSPATH' ) || exit;

$diapo_class = 'wpst-project';
if ( ! empty( $block['align'] ) ) :
	$diapo_class .= ' align' . $block['align'];
endif;
?>

<div class="<?php echo esc_attr( $diapo_class ); ?>">
	<?php
	$wpst_title     = get_field( 'wpstar_title', $block['id'] );
	$wpst_thumb     = get_field( 'wpstar_thumbnail', $block['id'] );
	$wpst_thumb_url = ( $wpst_thumb ) ? $wpst_thumb['sizes']['wp_star'] : WP_STAR_URL . 'module/star/assets/img/default.jpg';
	$wpst_excerpt   = get_field( 'wpstar_description', $block['id'] );
	?>

	<div class="wpst-project-container">
		<figure class="wpst-thumbnail">
			<img src="<?php echo esc_url( $wpst_thumb_url ); ?>" />
		</figure>

		<div class="wpst-content">
			<?php include \wp_star\Core_Util::getInstance()->get_module_view_path( 'star', 'template-gallery' ); ?>

			<?php if ( ! empty( $wpst_title ) ) : ?>
				<div class="wpst-title"><?php echo esc_html( $wpst_title ); ?></div>
			<?php endif; ?>

			<?php if ( ! empty( $wpst_excerpt ) ) : ?>
				<div class="wpst-excerpt"><?php echo esc_html( $wpst_excerpt ); ?></div>
			<?php endif; ?>

			<?php if ( have_rows( 'wpstar_list_note', $block['id'] ) ) : ?>
				<?php include \wp_star\Core_Util::getInstance()->get_module_view_path( 'star', 'template-note' ); ?>
			<?php endif; ?>


			<?php include \wp_star\Core_Util::getInstance()->get_module_view_path( 'star', 'template-comment' ); ?>


			<?php if ( have_rows( 'wpstar_list_button', $block['id'] ) ) : ?>
				<?php include \wp_star\Core_Util::getInstance()->get_module_view_path( 'star', 'template-link' ); ?>
			<?php endif; ?>
		</div><!-- .wpst-container -->
	</div><!-- .wpst-project-container -->
</div>
<?php
