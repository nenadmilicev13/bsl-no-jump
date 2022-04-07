const $ = jQuery.noConflict();

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

'use strict';
const ScrollingText = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		gsap.registerPlugin(ScrollTrigger);
		const containers = gsap.utils.toArray(".container");
		containers.forEach((container, i) => {
		  let toggletest;
		  i !== 2
			? (toggletest = 'play reverse play reverse')
			: (toggletest = 'play pause play reverse');
		  let tl = gsap.timeline({
			opacity: 1,
			scrollTrigger: {
			  trigger: container,
			  pin: true,
			  pinSpacing: false,
			//   scrub: true,
			//   markers: true,
			  start: 'top center',
				end: 'bottom center',
				toggleActions: toggletest,
			},
		  });
		
		  tl.to(container, {
			autoAlpha: 0
		  }).to(
			container,
			{
			  autoAlpha: 1
			},
			0
		  );
		});
	}
};

export default ScrollingText;
