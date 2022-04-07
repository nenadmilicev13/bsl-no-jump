<?php
/**
 * Template name: Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Baseline
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			

			<div class="banner-head">
				<!-- <div class="video-sec__hidden">
					<div class="vimeo-wrapper"><iframe src="https://player.vimeo.com/video/159046953?background=1&amp;autoplay=1&amp;loop=1&amp;byline=0&amp;title=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
				</div> -->
				<!-- <div class="banner-head__spot js-banner-spot">
					<svg width="100%" height="1147" viewBox="0 0 1046 1147" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g filter="url(#filter0_f_971_16)">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M740.521 554.115C765.452 561.935 821.655 444.744 847.35 449.475C892.823 457.846 859.85 532.975 966.35 567.475C988.15 605.214 935.29 678.927 909.547 714.093C888.347 743.053 847.015 744.767 818.794 766.935C788.735 790.546 778.619 849.868 740.521 846.865C701.305 843.774 703.799 776.569 670.724 755.263C633.883 731.531 325.764 590.519 301.349 554.115C278.363 519.841 556.497 642.717 568.827 603.327C581.315 563.434 578.183 311.988 618.349 300.475C663.226 287.612 695.977 540.144 740.521 554.115Z" fill="#EF9B4E" fill-opacity="0.5"/>
						</g>
						<defs>
							<filter id="filter0_f_971_16" x="0" y="0" width="1271.5" height="1146.98" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
								<feGaussianBlur stdDeviation="150" result="effect1_foregroundBlur_971_16"/>
							</filter>
						</defs>
					</svg>
				</div> -->

				<div class="wrapper wrapper--sm">
					<div class="banner-head__content">
						<h1 class="banner-head__title">Where your brand's voice
						becomes visual.</h1>
						<div class="typing-container">
							<h2 id="sentence" class="sentence banner-head__subtitle">Powerful branding and unique SEO friendly websites that help your businesses <span id="feature-text"></span>
							<!-- <span class="input-cursor"></span></h2> -->
						</div>
					</div>
				</div>
				
				<div class="wrapper">
					<div class="video-sec hover-js"data-image-src="play-button">
						<a data-fancybox href="https://vimeo.com/305547899" loop=1 autoplay=1 mute=1>
							<div id="video" class="video-sec js-video-sec">
								<video class="video-p" controls muted width="100%" height="auto" autoplay controls loop controls="false" playsinline style="pointer-events: none;">
									<source src="http://localhost/baseline/wp-content/themes/baseline/assets/video/video.mp4" type="video/mp4">
									<source src="http://localhost/baseline/wp-content/themes/baseline/assets/video/video.ogg" type="video/ogg">
									Your browser does not support the video tag.
								</video>
								<!--<div class="video-sec__play js-video-sec__play"> -->
									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/play-button.svg" alt=""> -->
								<!-- </div> -->
							</div>
						</a>
					</div>
				 </div>
			</div>

			<div id="cards" class="cards cards-bt">
				<div class="wrapper">
					<div class="cards-top">
						<div class="section-head">
							<span class="section-head__pretitle">Work</span>
							<h2 class="section-head__title">Your project can be the next big thing we are proud to show off.</h2>
						</div>
						<span class="cards-cta">It takes one email to <a href="javascript:;">start.</a></span>
					</div>
					<div class="cards__container">
						<div class="card-item card-item__one hover-js"data-image-src="view">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/flower.png" alt="">
							<div class="card-item__info">
								<h5 class="card-item__info-title">Flower Couture</h5>
								<p class="card-item__info-text">Magna ultrices dictum odio morbi sagittis quis at orci.</p>
							</div>
						</div>
						<div class="card-item card-item__two hover-js"data-image-src="view">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/nestle.jpg" alt="">
							<div class="card-item__info">
								<h5 class="card-item__info-title">Nestlé</h5>
								<p class="card-item__info-text">Cursus id volutpat eleifend id quis in natoque velit. Integer risus adipiscing sed platea quis platea a purus consectetur.</p>
							</div>
						</div>
						<div class="card-item card-item__three hover-js"data-image-src="view">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/mihano.jpg" alt="">
							<div class="card-item__info">
								<h5 class="card-item__info-title">Mihano Momosa</h5>
								<p class="card-item__info-text">Nisl diam sed porttitor amet ullamcorper velit enim, faucibus sed.</p>
							</div>
						</div>
						<div class="card-item  card-item__four hover-js"data-image-src="view">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/michael.jpg" alt="">
							<div class="card-item__info">
								<h5 class="card-item__info-title">luv Michael</h5>
								<p class="card-item__info-text">Vitae, massa rhoncus ac velit in ac cras. Suspendisse facilisis eget arcu vestibulum lacus, faucibus.</p>
							</div>
						</div>
					</div>
					<div class="cards__bottom-text">
						<h3>Because all brands are unique, our solutions tell a different story each time.</h3>
						<div class="card__bottom-text__btn">
							<a class="btn" href="javascript">See more projects</a>
						</div>
					</div>
					
				</div>
			</div>

			<div class="testimonials" id="testimonials">
				<div class="wrapper">
					<div class="slider js-slider">
						<div class="slide slide--1">
							<div class="testimonial hover-js"data-image-src="drag">
								<h2 class="testimonial__text">
								“Arcu adipiscing tincidunt tristique euismod mi. Sed non id enim id malesuada. Ullamcorper porttitor pharetra fringilla bibendum amet consectetur dui ridiculus interdum.”
								</h2>
							</div>
							<address class="testimonial__author">
							<img class="testimonial__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/fergus.png" alt=""> 
							<div class="testimonials__autor-wrap">
								<h6 class="testimonial__name">Fergus Linskey</h6>
								<p class="testimonial__company">LEVO Health </p>
							</div>
							</address>
						</div>

						<div class="slide slide--2">
							<div class="testimonial hover-js"data-image-src="drag">
								<h2 class="testimonial__text">
								“Arcu adipiscing tincidunt tristique euismod mi. Sed non id enim id malesuada. Ullamcorper porttitor pharetra fringilla bibendum amet consectetur dui ridiculus interdum.”
								</h2>
							</div>
							<address class="testimonial__author">
								<img class="testimonial__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/fergus.png" alt=""> 
								<div class="testimonials__autor-wrap">
									<h6 class="testimonial__name">Fergus Linskey</h6>
									<p class="testimonial__company">LEVO Health </p>
								</div>
							</address>
						</div>

						<div class="slide slide--3">
							<div class="testimonial hover-js"data-image-src="drag">
								<h2 class="testimonial__text">
								“Arcu adipiscing tincidunt tristique euismod mi. Sed non id enim id malesuada. Ullamcorper porttitor pharetra fringilla bibendum amet consectetur dui ridiculus interdum.”
								</h2>
							</div>
							<address class="testimonial__author">
								<img class="testimonial__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/fergus.png" alt=""> 
								<div class="testimonials__autor-wrap">
									<h6 class="testimonial__name">Fergus Linskey</h6>
									<p class="testimonial__company">LEVO Health </p>
								</div>
							</address>
						</div>
						
					</div>
				</div>
						
			</div>

			<div class="text-sec">
				<div class="wrapper">
					<h2 class="text-sec__title">Big names that trust us.</h2>
				</div>
				
				<div class="brands__slider-wrapper">
					<div class="brands__slider-row">
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/6.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/7.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/8.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/9.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/10.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/11.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/12.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/13.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/14.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/15.svg" alt="">
								</div>
							</div>
						</div>

						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/6.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/7.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/8.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/9.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/10.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/11.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/12.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/13.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/14.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/15.svg" alt="">
								</div>
							</div>
						</div>
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/6.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/7.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/8.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/9.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/10.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/11.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/12.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/13.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/14.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/15.svg" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="brands__slider-row">
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/6.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/7.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/8.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/9.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/10.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/11.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/12.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/13.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/14.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/15.svg" alt="">
								</div>
							</div>
						</div>

						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/6.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/7.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/8.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/9.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/10.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/11.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/12.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/13.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/14.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/15.svg" alt="">
								</div>
							</div>
						</div>
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/6.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/7.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/8.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/9.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/10.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/11.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/12.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/13.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/14.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/15.svg" alt="">
								</div>
							</div>
						</div>
						
					</div>
					<div class="brands__slider-row">
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/6.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/7.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/8.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/9.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/10.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/11.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/12.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/13.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/14.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/15.svg" alt="">
								</div>
							</div>
						</div>
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/6.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/7.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/8.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/9.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/10.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/11.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/12.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/13.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/14.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/15.svg" alt="">
								</div>
							</div>
						</div>


						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/6.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/7.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/8.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/9.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/10.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/11.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/12.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/13.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/14.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/15.svg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="services services-m services-after">
				<div class="services__wrap">
					<div class="wrapper">
						<div class="services__container">
							<div class="services__item-left">
								<span class="section-head__pretitle">Services</span>
								<h3 id="section-head__title--sm" class="section-head__title ">Helping businesses grow and brands evolve since 2008</h3>
							</div>
							<div class="services__item-right">
								<div class="services__item-right-item">
									<h4 class="services__item-right-item-title">Branding</h4>
									<ul>
										<li>Logo Design</li>
										<li>Corporate Identity </li>
										<li>Brand Standards</li>
										<li>Branding & Re-Branding </li>
										<li>Illustrations </li>
										<li>Packaging Design</li>
										<li>Copywriting</li>
									</ul>
									<div class="services__item-btns">
										<a href="javascript:;">Learn More</a>
										<a class="btn btn--black" href="javascript:;">Quick start</a>
									</div>
									<div class="services__item-right-item-des">
										<h4 class="services__item-right-title">Branding</h4>
										<p>Being the unique black sheep in a herd of white should be the biggest aspiration when it comes to forming an authentic brand that your customers will remember,  and want to come baa-ck to.</p>
										<a href="javascript:;">Learn More</a>
										<div class="services__item-right-item-btn">
											<a class="btn btn--black" href="javascript:;">Quick start</a>
										</div>
									</div>
								</div>
								<div class="services__item-right-item">
									<h4 class="services__item-right-item-title">Print Design</h4>
									<ul>
										<li>Brochures</li>
										<li>Catalogues</li>
										<li>Sale Sheets</li>
										<li>Print Ads</li>
										<li>Indoor & Outdoor Ads</li>
										<li>Posters</li>
									</ul>
									<div class="services__item-btns">
										<a href="javascript:;">Learn More</a>
										<a class="btn btn--black" href="javascript:;">Quick start</a>
									</div>
									<div class="services__item-right-item-des">
										<h4 class="services__item-right-title">Print Design</h4>
										<p>Offline marketing isn't dead. Unlike in the case of digital advertising, printed ads can be converted into paper planes after they’ve completed their mission!</p>
										<a href="javascript:;">Learn More</a>
										<div class="services__item-right-item-btn">
											<a class="btn btn--black" href="javascript:;">Quick start</a>
										</div>
									</div>
								</div>
								<div class="services__item-right-item">
									<h4 class="services__item-right-item-title">Websites</h4>
									<ul>
										<li>UI/UX</li>
										<li>Web Design</li>
										<li>Landing Pages</li>
										<li>Online Store</li>
										<li>Front-end Development</li>
										<li>Back-end Development</li>
										<li>Content Writing</li>
									</ul>
									<div class="services__item-btns">
										<a href="javascript:;">Learn More</a>
										<a class="btn btn--black" href="javascript:;">Quick start</a>
									</div>
									<div class="services__item-right-item-des">
										<h4 class="services__item-right-title">Websites</h4>
										<p>Your website is your best outfit for a first date. We can help you make an impression your visitors will remember, turning them into paying clients and customers, getting you a second date.</p>
										<a href="javascript:;">Learn More</a>
										<div class="services__item-right-item-btn">
											<a class="btn btn--black" href="javascript:;">Quick start</a>
										</div>
									</div>
								</div>
								<div class="services__item-right-item">
									<h4 class="services__item-right-item-title">Digital Marketing</h4>
									<ul>
										<li>SEO</li>
										<li>Strategy</li>
										<li>Google Ad Campaigns</li>
										<li>Social Media</li>
										<li>SEO Copywriting</li>
									</ul>
									<div class="services__item-btns">
										<a href="javascript:;">Learn More</a>
										<a class="btn btn--black" href="javascript:;">Quick start</a>
									</div>
									<div class="services__item-right-item-des">
										<h4 class="services__item-right-title">Digital Marketing</h4>
										<p>Everyone’s online. If your not using the opportunity to reach millions of potential clients in the era of unlimited connection, let's get you on that train ASAP. It's a heck of a ride!</p>
										<a href="javascript:;">Learn More</a>
										<div class="services__item-right-item-btn">
											<a class="btn btn--black" href="javascript:;">Quick start</a>
										</div>
									</div>
								</div>
								<div class="services__item-right-item">
									<h4 class="services__item-right-item-title">Motion Graphics</h4>
									<ul>
										<li>Logo Animation</li>
										<li>Animations for Website</li>
										<li>Animations for Ad Campaign</li>
										<li>Social Media Animations</li>
										<li>Explainer Videos</li>
									</ul>
									<div class="services__item-btns">
										<a href="javascript:;">Learn More</a>
										<a class="btn btn--black" href="javascript:;">Quick start</a>
									</div>
									<div class="services__item-right-item-des">
										<h4 class="services__item-right-title">Motion Graphics</h4>
										<p>We dare you not to look at a moving object. Impossible? Motion is mesmerizing. If you are trying to capture instant attention, animation is the way to go. Let’s move it!</p>
										<a href="javascript:;">Learn More</a>
										<div class="services__item-right-item-btn">
											<a class="btn btn--black" href="javascript:;">Quick start</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="services__bottom services__bottom--home">
				<div class="wrapper">
					<div class="services__bottom-container">
						<div class="services__bottom-item">
							<div class="services__bottom-item-left">
								<p>B2C</p>
							</div>
							<div class="services__bottom-item-right">
								<span>Are you the client that needs our services?</span>
								<a href="javascript:;" class="color">We’d love to help!</a>
							</div>
						</div>
						<div class="services__bottom-item">
							<div class="services__bottom-item-left">
								<p>B2B</p>
							</div>
							<div class="services__bottom-item-right">
								<span>Do you have clients that need our services? </span>
								<a href="javascript:;" class="color">Let’s partner up!</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container__wrap">
				<div class="container">
					You have an idea but you’re not sure about it?
				</div>
				<div class="container">
					It’s too big, too small, too crazy, too boring, or just too average?
				</div>
				<div class="container">
					We’ve got you.
				</div>
			</div>

			<div class="cta cta--home">
				<div class="wrapper wrapper--sm">
					<div class="cta__container">
						<div class="cta__wrap">
							<div class="cta__left">
								<h2 class="cta__title">Your brand’s evolution starts <a href="javascript:;">here.</a></h2>
							</div>
						</div>
						<div class="cta__right">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/ctaa-img.svg" alt="">
						</div>
					</div>
				</div>
			</div>

  			<script src="https://unpkg.com/regenerator-runtime@0.13.1/runtime.js"></script>

		</main><!-- #main -->

		<div class="cursor">
			<div class="cursor-media">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/view.svg" alt="" id="view"></img>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/drag.svg" alt=""id="drag"></img>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/play-button.svg" alt=""id="play-button"></img>
			</div>	
		</div>
	</div><!-- #primary -->

<?php
get_footer();
