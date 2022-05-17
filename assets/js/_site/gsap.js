const $ = jQuery.noConflict();
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

("use strict");
const Gsap = {
	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function (color) {
		gsap.registerPlugin(ScrollTrigger);

		let load;

		const timeout = setTimeout(() => {
			load = ScrollTrigger.getAll();
			load.forEach((instance) => {
				instance.refresh();
			});
		}, 300);


		const body = $(".main-content");
		if (body.length) {
			gsap.to(".main-content", { opacity: 1, delay: 0.4, duration: 0.4, ease: "power3.out" });
		}

		///video
		const videoSec = $(".video-sec");
		if (videoSec.length) {
			gsap.from(".video-sec", {
				opacity: 0,
				delay: 1.4,
				duration: 1.5,
				y: 30,
			});
		}

		const pretitle = $(".section-head__pretitle");
		if (pretitle.length) {
			gsap.from(pretitle, {
				opacity: 0,
				delay: 1.2,
				duration: 0.5,
				y: 30,
			});
		}

		const servicesIndex = $(".services-index");
		if (servicesIndex.length) {
			gsap.from(servicesIndex, {
				opacity: 0,
				delay: 1.2,
				duration: 0.5,
				y: 30,
			});
		}

		const bannerImg = $(".banner__img");
		if (bannerImg.length) {
			gsap.from(bannerImg, {
				opacity: 0,
				delay: 1.6,
				duration: 0.7,
				y: 50,
			});
		}

		const insightsContainer = $(".insights__container");
		if (insightsContainer.length) {
			gsap.from(".insights__container", {
				opacity: 0,
				delay: 1.2,
				duration: 0.8,
				y: 30,
			});
		}

		const cardsBt = $(".cards-bt");
		if (cardsBt.length) {
			gsap.to(".home", {
				backgroundColor: "#0f0f0f",
				scrollTrigger: {
					trigger: ".testimonials",
					start: "bottom center",
					end: "bottom center",
					toggleActions: "restart none reverse none",
					// markers: true,
				},
			});
		}

		const teamText = $(".section-head__title--white");
		if (teamText.length) {
			gsap.to(".section-head__title--white", {
				opacity: 1,
				ease: "power1.inOut",
				scrollTrigger: {
					trigger: ".banner__img",
					start: "bottom center",
					end: "bottom center",
				},
			});
		}

		const teamItem = $(".team-item");
		if (teamItem.length) {
			gsap.from(".team-item", {
				opacity: 0,
				duration: 1,
				stagger: {
					amount: 0.3,
				},
				scrollTrigger: {
					trigger: ".team__container",
					start: "top center",
					end: "bottom center",
				},
			});
		}

		const cardsTop = $(".cards-top");
		if (cardsTop.length) {
			gsap.to(".cards-top", {
				opacity: 1,
				ease: "power1.inOut",
				y: 0,
				scrollTrigger: {
					trigger: cardsTop,
					start: "top 80%",
					end: "top 60%",
				},
			});
		}

		const testimonials = $(".testimonials");
		if (testimonials.length) {
			gsap.to(".testimonials", {
				opacity: 0,
				scrollTrigger: {
					trigger: ".text-sec",
					start: "top center",
					end: "bottom center",
					toggleActions: "play none play reverse",
					// markers: true,
				},
			});
		}

		// const cardsContainer = $(".cards__container");
		// if (cardsContainer.length) {
		// 	gsap.to(".cards__container", {
		// 		opacity: 0,
		// 		scrollTrigger: {
		// 			trigger: ".cards",
		// 			start: "bottom center",
		// 			end: "bottom center",
		// 			toggleActions: "restart none reverse none",
		// 			// markers: true,
		// 		},
		// 	});
		// }

		const cardsBottomText = $(".cards__bottom-text");
		if (cardsBottomText.length) {
			// gsap.set("cardsBottomText",{y: -60});
			gsap.to(cardsBottomText, {
				opacity: 1,
				duration: 0.8,
				y: -110,
				scrollTrigger: {
					trigger: cardsBottomText,
					start: "top center",
					end: "top center",
					// toggleActions: "restart none reverse none",
					// markers: true,
				},
			});
		}

		const cardsItem = $(".card-item");
		const cards = gsap.utils.toArray(".card-item");
			
		if (cardsItem.length) {
			gsap.set(".card-item",{y: 100});
			cards.forEach((card) => {
				gsap.to(card, {
					y: 0,
					duration: .7,
					opacity: 1,
					scrollTrigger: {
						trigger: card,
						start: "top 80%",
						end: "bottom 80%",
						// toggleActions: "play none play none",
						// markers: true,
					},
				});
			});
		}

		const bannerDesc = $(".banner-desc");
		if (bannerDesc.length) {
			gsap.from(bannerDesc, {
				opacity: 0,
				duration: 0.6,
				y: 30,
				delay: 0.8,
			});
		}

		const servicesSingleContainer = $(".services-single__container");
		if (servicesSingleContainer.length) {
			gsap.from(servicesSingleContainer, {
				opacity: 0,
				duration: 0.6,
				y: 30,
				delay: 1,
			});
		}
		
		const trigerStart = $(".triger-start");
		if(trigerStart.length){

			gsap.to("body", {
				backgroundColor: color,
				ease: "power1.inOut",
				scrollTrigger: {
					trigger: ".triger-start",
					start: "top center",
					end: "top center",	
					toggleActions: "play none none reverse",
					markers: true,
				},
			});
		}
		const trigerEnd = $(".triger-end");
		if(trigerEnd.length){

			gsap.to("body", {
				ease: "power1.inOut",
				scrollTrigger: {
					trigger: ".triger-end",
					start: "top center",
					end: "top center",	
					// markers: true,
					onEnter: () => {
						gsap.to('body', {
							backgroundColor: '#fff'
						})
					},
					onEnterBack: () => {
						gsap.to('body', {
							backgroundColor: color
						})
					}
				},
			});
		}

		const fadeOut = $(".fade-out");
		if (fadeOut.length) {
			gsap.to(fadeOut, {
				opacity: 0,
				scrollTrigger: {
					trigger: ".triger-start",
					start: "top center",
					end: "top center",	
					toggleActions: "play none none reverse",
				},
			});
		}

		const fadeIn = $(".fade-in");
		if (fadeIn.length) {
			gsap.to(fadeIn, {
				opacity: 1,
				// delay: 0.5,
				scrollTrigger: {
					trigger: ".triger-start",
					start: "top center",
					end: "top center",	
					toggleActions: "play none none reverse",
				},
			});
		}
	},
};

export default Gsap;
