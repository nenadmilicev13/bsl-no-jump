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

		ScrollTrigger.matchMedia({
			"(min-width: 768px)": function () {
				const fadeInTexts = gsap.utils.toArray('.fadeIn-text');
				fadeInTexts.forEach((text) => {
					gsap.from(text, {
						opacity: 0,
						translateY: 100,
						duration: 1.3,
						stagger: {
						amount: 1,
						},
						scrollTrigger: {
						trigger: text,
						start: 'top bottom',
						end: 'bottom bottom',
						},
					});
				});
			}
		})
		

		const body = $(".site-main");
		if (body.length) {
			gsap.to(body, {
				opacity: 1,
				delay: 0.3,
				duration: 1,
				ease: "power3.out",
			});
		}

		///video
		const videoSec = $(".video-sec");
		if (videoSec.length) {
			gsap.from(".video-sec", {
				opacity: 0,
				delay: 0.5,
				duration: 1.5,
				y: 30,
			});
		}

		// const header = $(".header");
		// if (header.length) {
		// 	gsap.from(header, {
		// 		opacity: 0,
		// 		delay: 0.5,
		// 		duration: 0.8,
		// 		y: 15,
		// 	});
		// }

		const pretitle = $(".section-head__pretitle");
		if (pretitle.length) {
			gsap.from(pretitle, {
				opacity: 0,
				delay: 1.2,
				duration: 0.5,
				y: 30,
			});
		}

		
		const bannerDesc = $(".banner-desc");
		if (bannerDesc.length) {
			gsap.from(bannerDesc, {
				opacity: 1,
				duration: 0.6,
				y: 30,
				delay: 1,
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

		const singlePost = $(".single-post__content");
		if (singlePost.length) {
			gsap.from(singlePost, {
				opacity: 0,
				delay: 1.2,
				duration: 0.7,
				y: 50,
			});
		}

		const resourcesContainer = $(".resources__container");
		if (resourcesContainer.length) {
			gsap.from(".resources__container", {
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
					start: "bottom 60%",
					end: "bottom 60%",
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
					start: "top 60%",
					end: "bottom 60%",
					toggleActions: "play none play reverse",
					markers: true,
				},
			});
		}

		const cardsBottomText = $(".cards__bottom-text");
		if (cardsBottomText.length) {
			gsap.to(cardsBottomText, {
				opacity: 1,
				duration: 0.8,
				y: -110,
				scrollTrigger: {
					trigger: cardsBottomText,
					start: "top bottom",
					end: "top bottom",
					// markers: true,
				},
			});
		}

		const cardsItem = $(".card-item");
		const cards = gsap.utils.toArray(".card-item");

		if (cardsItem.length) {
			gsap.set(".card-item", { y: 100 });
			cards.forEach((card) => {
				gsap.to(card, {
					y: 0,
					duration: 0.5,
					// delay: 0.25,
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
		if (trigerStart.length) {
			gsap.to("body", {
				backgroundColor: color,
				ease: "power1.inOut",
				scrollTrigger: {
					trigger: ".triger-start",
					start: "top center",
					end: "top center",
					toggleActions: "play none none reverse",
					// markers: true,
				},
			});
		}
		const trigerEnd = $(".triger-end");
		if (trigerEnd.length) {
			gsap.to("body", {
				ease: "power1.inOut",
				scrollTrigger: {
					trigger: ".triger-end",
					start: "top center",
					end: "top center",
					// markers: true,
					onEnter: () => {
						gsap.to("body", {
							backgroundColor: "#fff",
						});
					},
					onEnterBack: () => {
						gsap.to("body", {
							backgroundColor: color,
						});
					},
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

		let videoElem1 = document.querySelector('.video-mihano');
		let videoPlayed = false;

		if (videoElem1) {
			let trigger = ScrollTrigger.create({
				trigger: videoElem1,
				start: 'top center',
				onEnter: () => {
					if (!videoPlayed) {
						videoElem1.play();
						videoPlayed = true;
					}
				}
			});
		}

		// let videoHacker = document.querySelector('.video-hacker');
		// let videoPlayed2 = false;

		// if(videoHacker) {
		// 	let trigger = ScrollTrigger.create({
		// 		trigger: videoHacker,
		// 		start: 'top center',
		// 		onEnter: () => {
		// 			if (!videoPlayed) {
		// 				videoHacker.play();
		// 				videoPlayed2 = true;
		// 			}
		// 		}
		// 	});
		// }

		let bannerAnimation = document.querySelector('.banner-head__animation-right');
		console.log(bannerAnimation);

		if(bannerAnimation) {
			gsap.to(bannerAnimation, {
				opacity: 1,
				y: 0,
				delay: 0.5,
				duration: 1,
			});
		}

		let contactForm = document.querySelector('.contact-form__wrap');
		if(contactForm) {
			gsap.to(contactForm, {
				opacity: 1,
				y: 0,
				delay: 1.7,
				duration: 1,
			});
		}
	},
};

export default Gsap;
