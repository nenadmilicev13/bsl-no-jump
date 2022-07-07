import Cursor from "./_site/cursor";
import Sliders from "./_site/sliders";
import Type from "./_site/type";
import ScrollingText from "./_site/scrollingText";
import Header from "./_site/header";
import Split from "./_site/split";
import Video from "./_site/video";
import NavBtn from "./_site/navBtn";
import Masonry from "./_site/masonry";
import Gsap from "./_site/gsap";
import modal from "./_site/modal";

jQuery(function () {
	console.log("test");

	// // Cursor
	Cursor.init();

	// Slick Slider
	Sliders.init();

	// Type
	Type.init();

	// Gsap
	ScrollingText.init();

	// Split
	Split.init();

	// Header
	Header.init();

	// Modal

	modal.init();

	// Video
	Video.init();

	// NavBtn
	NavBtn.init();

	// Masonry
	Masonry.init();

	// console.log(document.querySelector('main').classList);

	if (document.querySelector("main").classList.contains("finsource")) {
		const color = "#0b2f28";
		Gsap.init(color);
	} else if (document.querySelector("main").classList.contains("mihano")) {
		const color = "#000";
		Gsap.init(color);
	} else if (document.querySelector("main").classList.contains("hecker")) {
		const color = "#0031f9";
		Gsap.init(color);
	} else if (document.querySelector("main").classList.contains("jedinstvo")) {
		const color = "#c29e60";
		Gsap.init(color);
	} else if (document.querySelector("main").classList.contains("qanya")) {
		const color = "#011e41";
		Gsap.init(color);
	} else if (document.querySelector("main").classList.contains("nestle")) {
		const color = "#2b7681";
		Gsap.init(color);
	} else {
		Gsap.init();
	}
});
