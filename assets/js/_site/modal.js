const $ = jQuery.noConflict();

("use strict");
const modal = {
	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		const closeModal = document.querySelector(".closeModal");
		const modal = document.querySelector(".modal");
		const openModal = document.querySelector(".modalTrigger");
		const videoAutoplay = document.querySelector(".videoAutoplay");

		console.log(openModal);

		openModal.addEventListener("click", () => {
			modal.classList.remove("hidden");
			videoAutoplay.src += "&autoplay=1";
		});

		closeModal.addEventListener("click", () => {
			modal.classList.add("hidden");
			videoAutoplay.src =
				"https://player.vimeo.com/video/727366630?h=65a6924758&title=0&byline=0&portrait=0";
		});
	},
};

export default modal;
