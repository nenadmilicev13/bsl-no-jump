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
				<div class="wrapper wrapper--sm">
					<div class="banner-head__content">
						<h1 class="banner-head__title">Where your brand's voice
						becomes visual.</h1>
						<div class="typing-container">
							<h2 id="sentence" class="sentence banner-head__subtitle">Powerful branding and unique SEO friendly websites that help your businesses <span id="feature-text"></span>
						</div>
					</div>
				</div>
				
				<div class="wrapper">
					<div class="video-sec video-sec__hero hover-js"data-image-src="play-button">
						<a data-fancybox href="https://vimeo.com/305547899" loop=1 autoplay=1 mute=1>
							<div id="video" class="video-sec js-video-sec">
								<video class="video-p" muted width="100%" height="auto" autoplay loop playsinline style="pointer-events: none;">
									<source src="http://localhost/baseline/wp-content/themes/baseline/assets/video/bsl.mp4" type="video/mp4">
									<source src="http://localhost/baseline/wp-content/themes/baseline/assets/video/bsl.ogg" type="video/ogg">
									Your browser does not support the video tag.
								</video>
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
							<a href="/baseline/fe-hecker/">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/hecker.jpg" alt="">
								<div class="card-item__info">
									<h5 class="card-item__info-title">Hecker Construction</h5>
									<p class="card-item__info-text">Magna ultrices dictum odio morbi sagittis quis at orci.</p>
								</div>
							</a>
						</div>
						<div class="card-item card-item__two hover-js"data-image-src="view">
							<a href="/baseline/fe-nestle/">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/nestle.jpg" alt="">
								<div class="card-item__info">
									<h5 class="card-item__info-title">Nestlé</h5>
									<p class="card-item__info-text">Cursus id volutpat eleifend id quis in natoque velit. Integer risus adipiscing sed platea quis platea a purus consectetur.</p>
								</div>
							</a>
						</div>
						<div class="card-item card-item__three hover-js"data-image-src="view">
							<a href="/baseline/fe-mihano/">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/mihano.jpg" alt="">
								<div class="card-item__info">
									<h5 class="card-item__info-title">Mihano Momosa</h5>
									<p class="card-item__info-text">Nisl diam sed porttitor amet ullamcorper velit enim, faucibus sed.</p>
								</div>
							</a>
						</div>
						<div class="card-item  card-item__four hover-js"data-image-src="view">
							<a href="/baseline/fe-qanya/">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/qanya-work.jpg" alt="">
								<div class="card-item__info">
									<h5 class="card-item__info-title">QANYA</h5>
									<p class="card-item__info-text">Vitae, massa rhoncus ac velit in ac cras. Suspendisse facilisis eget arcu vestibulum lacus, faucibus.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="cards__bottom-text">
						<h3>Because all brands are unique, our solutions tell a different story each time.</h3>
						<div class="card__bottom-text__btn">
							<a class="btn" href="javascript">Check out our favourite projects</a>
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
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/levo_health.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/baron_castel.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/pandora.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/mihano_momosa.svg" alt="">
								</div>
							</div>
							
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/hecker_construction.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/qanya-b.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/olympus.svg" alt="">
								</div>
							</div>
							
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/nespresso.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/reshape.svg" alt="">
								</div>
							</div>
						</div>
						
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/levo_health.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/baron_castel.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/pandora.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/mihano_momosa.svg" alt="">
								</div>
							</div>
							
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/hecker_construction.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/qanya-b.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/olympus.svg" alt="">
								</div>
							</div>
							
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/nespresso.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/reshape.svg" alt="">
								</div>
							</div>
						</div>
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/levo_health.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/baron_castel.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/pandora.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/mihano_momosa.svg" alt="">
								</div>
							</div>
							
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/hecker_construction.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/qanya-b.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/olympus.svg" alt="">
								</div>
							</div>
							
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/nespresso.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/reshape.svg" alt="">
								</div>
							</div>
						</div>
					</div>

					<div class="brands__slider-row">
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/aquafilter.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/mhk.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/unhcr.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/swiss_pro.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/steelImpex.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/nestle_health_science.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/unicef.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/central_road_laboratory.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/tyto_care.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/pour_vous.svg" alt="">
								</div>
							</div>
							
						</div>
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/aquafilter.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/mhk.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/unhcr.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/swiss_pro.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/steelImpex.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/nestle_health_science.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/unicef.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/central_road_laboratory.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/tyto_care.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/pour_vous.svg" alt="">
								</div>
							</div>
							
						</div>
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/aquafilter.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/mhk.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/unhcr.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/swiss_pro.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/steelImpex.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/nestle_health_science.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/unicef.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/central_road_laboratory.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/tyto_care.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/pour_vous.svg" alt="">
								</div>
							</div>
							
						</div>
					</div>
					
					<div class="brands__slider-row">
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/sonax.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/immertec.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/wunder_baum.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/finsource.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/phox_health.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/dunn_co.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/hartmann_packaging.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/unops.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/digital_medical.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/lasercap.svg" alt="">
								</div>
							</div>
						</div>
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/sonax.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/immertec.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/wunder_baum.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/finsource.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/phox_health.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/dunn_co.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/hartmann_packaging.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/unops.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/digital_medical.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/lasercap.svg" alt="">
								</div>
							</div>
						</div>
						<div class="brands__slider">
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/sonax.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/immertec.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/wunder_baum.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/finsource.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/phox_health.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/dunn_co.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/hartmann_packaging.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/unops.svg" alt="">
								</div>
							</div>

							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/digital_medical.svg" alt="">
								</div>
							</div>
							<div class="brands__slider-item">
								<div class="brands__slider-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/lasercap.svg" alt="">
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
										<li>Copywriting</li>
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
						<video class="video-p" muted width="100%" height="auto" autoplay loop playsinline style="pointer-events: none;">
							<source src="http://localhost/baseline/wp-content/themes/baseline/assets/video/footervideo.mp4" type="video/mp4">
							<source src="http://localhost/baseline/wp-content/themes/baseline/assets/video/footervideo.ogg" type="video/ogg">
							Your browser does not support the video tag.
						</video>
						</div>
					</div>
				</div>
			</div>

  			<script src="https://unpkg.com/regenerator-runtime@0.13.1/runtime.js"></script>

		</main><!-- #main -->

		
	</div><!-- #primary -->

<?php
get_footer();
