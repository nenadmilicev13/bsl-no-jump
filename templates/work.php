<?php
/**
 * Template name: Work
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package  nmtheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="banner-head banner-head--text">
                <div class="wrapper wrapper--sm">
                    <div class="banner-head__content">
                        <span class="section-head__pretitle">Work</span>
                        <h1 class="banner-head__title">Because all brands are unique, our solutions tell a different story each time.</h1>
                    </div>
                </div>
            </div>

            <div class="cards cards-margin">
				<div class="wrapper">

					<div class="cards__container cards__container-work">
						<div class="card-item hover-js"data-image-src="view">
						<a href="http://localhost/baseline/fe-finsource/">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/finsource-business-card.jpg" alt="">
							<div class="card-item__info">
								<h5 class="card-item__info-title">FinSource Accounting</h5>
								<p class="card-item__info-text">Laoreet amet nec et varius leo, sollicitudin aliquet suspendisse tristique. Faucibus lobortis potenti et tortor sed in magnis velit ac.</p>
							</div>
						</a>
						</div>
						<div class="card-item card-item__two hover-js"data-image-src="view">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/nestle.jpg" alt="">
							<div class="card-item__info">
								<h5 class="card-item__info-title">Nestlé</h5>
								<p class="card-item__info-text">Cursus id volutpat eleifend id quis in natoque velit. Integer risus adipiscing sed platea quis platea a purus consectetur.</p>
							</div>
						</div>
						
						<div class="card-item hover-js" data-image-src="view">
							<a href="http://localhost/baseline/fe-mihano/">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/mihano.jpg" alt="">
								<div class="card-item__info">
									<h5 class="card-item__info-title">Mihano Momosa</h5>
									<p class="card-item__info-text">Nisl diam sed porttitor amet ullamcorper velit enim, faucibus sed.</p>
								</div>
							</a>
						</div>
						
						
						<div class="card-item card-item__four hover-js" data-image-src="view">
							<a href="http://localhost/baseline/fe-fc-jedinstvo-gospodjinci/">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/fc-jedinstvo.jpg" alt="">
								<div class="card-item__info">
									<h5 class="card-item__info-title">FC Jedinstvo Gospodjinci</h5>
									<p class="card-item__info-text">Laoreet amet nec et varius leo, sollicitudin aliquet suspendisse tristique.</p>
								</div>
							</a>
						</div>
						<div class="break-line"></div>
						<div class="card-item card-item__five hover-js"data-image-src="view">
							<a href="http://localhost/baseline/fe-hecker/">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/hecker.jpg" alt="">
								<div class="card-item__info">
									<h5 class="card-item__info-title">Hecker</br> Construction</h5>
									<p class="card-item__info-text">Magna ultrices dictum odio morbi sagittis quis at orci.</p>
								</div>
							</a>
						</div>
						<div class="break-line"></div>
						<div class="card-item card-item__six hover-js"data-image-src="view">
							<a href="http://localhost/baseline/fe-qanya/">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/qanya-work.jpg" alt="">
								<div class="card-item__info">
									<h5 class="card-item__info-title">QANYA</h5>
									<p class="card-item__info-text">Laoreet amet nec et varius leo, sollicitudin aliquet suspendisse tristique. Faucibus lobortis potenti et tortor sed in magnis velit ac.</p>
								</div>
							</a>
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

            <div class="cta">
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
			</div>
		</main><!-- #main -->
		<div class="cursor">
			<div class="cursor-media">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/view.svg" alt="" id="view"></img>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/drag.svg" alt=""id="drag"></img>
			</div>	
		</div>
        <script src="https://unpkg.com/regenerator-runtime@0.13.1/runtime.js"></script>
	</div><!-- #primary -->
<?php
get_footer();

//////////////////////////////////////////////////////////////////////////
