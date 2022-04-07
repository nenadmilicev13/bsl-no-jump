const $ = jQuery.noConflict();
import SplitText from "gsap/SplitText";
import { gsap } from "gsap";

'use strict';
const Test = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {

        let resizeTimeout;
            const resizeComplete = () => {
            mySplitText.revert();
        };

        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(resizeComplete, 200);
        });

		gsap.registerPlugin(SplitText);
        let mySplitText = new SplitText('.banner-head__title', { type: 'lines' });
        // let mySplitText2 = new SplitText('.section-head__title--white', { type: 'lines' });
     

        const splitTextAnimation = gsap.from(mySplitText.lines, .6, {
        y: 30,
        opacity: 0,
        // ease: 'Power2.easeOut',
        delay: 0.5,
            stagger: {
                amount: 0.3,
            },
        });

        const subtitle = $(".banner-head__subtitle");
		if(subtitle.length) {
            gsap.from('.banner-head__subtitle', {opacity: 0, delay: 1.2, duration: .8, y: 30})
        }
	}
};

export default Test;