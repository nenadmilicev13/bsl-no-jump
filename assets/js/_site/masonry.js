const $ = jQuery.noConflict();

'use strict';
const Masonry = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		// layout Masonry after each image loads
		$('.insight-item__img').imagesLoaded( function() {
			$('.insights__container').masonry({
				itemSelector: '.insight-item',
				percentPosition: true,
				// gutter: 10
			});
		});

		$('.services-single__container').masonry({
			itemSelector: '.service-single__item',
			percentPosition: true
		});
	}
};

export default Masonry;


