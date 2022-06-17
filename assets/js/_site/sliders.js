const $ = jQuery.noConflict();

'use strict';
const Sliders = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		var slider = $('.js-slider');
		var carousel = $('.carousel');
		// slider
		slider.slick({
			slidesToShow: 1,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
					}
				}
			]
		});

		carousel.slick({
			slidesToShow: 3,
			centerPadding: '160px',
			centerMode: true,
			variableWidth: true,
			dots: false,
			arrows: false,
			swipeToSlide: true,
			touchThreshold: 100,
			responsive: [
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						centerPadding: '80px',
					}
				}
			]
		})
	}
};

export default Sliders;