import Cursor from "./_site/cursor";
import Sliders from "./_site/sliders";
import Type from "./_site/type";

import ScrollingText from "./_site/scrollingText";
// import Header from "./_site/header";
import Test from "./_site/test";
import Video from "./_site/video";
import NavBtn from "./_site/navBtn";
import Masonry from "./_site/masonry";
// import Footer from './_site/footer';
import Gsap from "./_site/gsap";

jQuery(function () {
	// // Cursor
	Cursor.init();

	// Slick Slider
	Sliders.init();

	// Type
	Type.init();

	// Gsap
	ScrollingText.init();

	// Header
	// Header.init();

	// Test
	Test.init();

	// Gsap
	// Gsap.init();

	// Video
	Video.init();

	// NavBtn
	NavBtn.init();

	// Masonry
	Masonry.init();

	// Footer
	// Footer.init();

<<<<<<< HEAD
	// console.log("hello");
	// console.log("Cao Nenade ovo Je Bobisa");
=======
	console.log("hello");
	console.log("Cao Nenade ovo Je Bobisa");
>>>>>>> 76bdfe631a28e2285c41a1633f275026da4fa3fe

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
	} else {
		Gsap.init();
	}
});
