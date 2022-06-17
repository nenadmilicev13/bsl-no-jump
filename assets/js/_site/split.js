const $ = jQuery.noConflict();
import SplitText from "gsap/SplitText";
import { gsap } from "gsap";

'use strict';
const Split = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {

        const splitText = () => {
			let mySplitText = new SplitText(".banner-head__title", {
				type: "lines",
			});
			const splitTextAnimation = gsap.from(mySplitText.lines, {
				y: 30,
				opacity: 0,
				// ease: 'Power2.easeOut',
				delay: 0.3,
				duration: 0.6,
				stagger: {
					amount: 0.3,
				},
			});

            const subtitle = $(".banner-head__subtitle");
            if(subtitle.length) {
                gsap.from('.banner-head__subtitle', {opacity: 0, delay: 0.8, duration: .8, y: 30})
            }

			let resizeTimeout;
			const resizeComplete = () => {
				mySplitText.revert();
			};

			window.addEventListener("resize", () => {
				clearTimeout(resizeTimeout);
				resizeTimeout = setTimeout(resizeComplete, 200);
			});
		};

        gsap.registerPlugin(SplitText);

		const checkFonts = () => {
			if (document.fonts.check("72px Helvetica Neue")) {
				splitText();
				return;
			} else {
				setTimeout(checkFonts, 500);
			}
		};
		checkFonts();
	}
};

export default Split;
