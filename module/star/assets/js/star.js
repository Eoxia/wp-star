/**
 * initializeBlock
 *
 * Adds custom JavaScript to the block HTML.
 */

jQuery(document).ready(function(){
	WPStarLightboxInit();
});

// Initialize dynamic block preview (editor).
if( window.acf ) {
	// window.acf.addAction( 'render_block_preview/type=beflex-map', initializeBlock );
}



var WPStarLightboxInit = function() {
	var i = 0;
	var lightbox = [];
	jQuery('.wpst-project .wpst-gallery').each(function() {
		var content = jQuery(this).find('.wpst-gallery-item');

		var args = {
			showCounter: false,
			navText    : ['<i class="dashicons dashicons-arrow-left-alt2"></i>','<i class="dashicons dashicons-arrow-right-alt2"></i>'],
			closeText  : '<i class="dashicons dashicons-no-alt"></i>'
		};

		lightbox[i] = content.simpleLightbox( jQuery.extend( args, content.data('lightbox') ) );
		i++;
	})
}
