const $ = jQuery.noConflict();

'use strict';
const Type = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		const type = $(".typing-container");
		if(type.length) {
			const carouselText = [{
					text: "bring in clients.",
					color: "#EF9B4E"
				},
				{
					text: "achieve success.",
					color: "#367f61"
				},
				{
					text: "create a lasting impression.",
					color: "#fc6d6d"
				}
			]

			$(document).ready(async function () {
				carousel(carouselText, "#feature-text")
			});

			async function typeSentence(sentence, eleRef, delay = 30) {
				const letters = sentence.split("");
				let i = 0;
				while (i < letters.length) {
					await waitForMs(delay);
					$(eleRef).append(letters[i]);
					i++
				}
				return;
			}

			async function deleteSentence(eleRef) {
				const sentence = $(eleRef).html();
				const letters = sentence.split("");
				let i = 0;
				while (letters.length > 0) {
					await waitForMs(20);
					letters.pop();
					$(eleRef).html(letters.join(""));
				}
			}

			async function carousel(carouselList, eleRef) {
				var i = 0;
				while (true) {
					updateFontColor(eleRef, carouselList[i].color)
					await typeSentence(carouselList[i].text, eleRef);
					await waitForMs(1500);
					await deleteSentence(eleRef);
					await waitForMs(300);
					i++
					if (i >= carouselList.length) {
						i = 0;
					}
				}
			}

			function updateFontColor(eleRef, color) {
				$(eleRef).css('color', color);
				$('.js-banner-spot path').css('fill', color);
			}

			function waitForMs(ms) {
				return new Promise(resolve => setTimeout(resolve, ms))
			}
		}
		
	}
};

export default Type;
