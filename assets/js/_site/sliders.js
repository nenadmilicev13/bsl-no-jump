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
			useTransform: false, // fix za blicanje na kraju slajda//
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
			slidesToScroll: 3,
			centerMode: true,
			variableWidth: true,
			dots: false,
			arrows: false,
			swipeToSlide: true,
			touchThreshold: 100,
			useTransform: false, // fix za blicanje na kraju slajda//
			responsive: [
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1.5,
						centerPadding: '80px',
						centerMode: false,
						variableWidth: false,
					}
				}
			]
		})
	}
};

export default Sliders;