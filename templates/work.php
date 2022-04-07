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
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/michael.jpg" alt="">
							<div class="card-item__info">
								<h5 class="card-item__info-title">luv Michael</h5>
								<p class="card-item__info-text">Vitae, massa rhoncus ac velit in ac cras. Suspendisse facilisis eget arcu vestibulum lacus, faucibus.</p>
							</div>
						</div>
						<div class="break-line"></div>
						<div class="card-item card-item__five hover-js"data-image-src="view">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/hecker-work.png" alt="">
							<div class="card-item__info">
								<h5 class="card-item__info-title">Hecker</br> Construction</h5>
								<p class="card-item__info-text">Imperdiet sed volutpat nullam fermentum. Quam proin sagittis volutpat diam proin non dui velit. Eget sed sollicitudin ipsum sed tincidunt magna venenatis condimentum. Eu tincidunt donec montes, quis.</p>
							</div>
						</div>
						<div class="break-line"></div>
						<div class="card-item card-item__six hover-js"data-image-src="view">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/qanya.png" alt="">
                            <div class="card-item__info">
                                <h5 class="card-item__info-title">QANYA</h5>
                                <p class="card-item__info-text">Laoreet amet nec et varius leo, sollicitudin aliquet suspendisse tristique. Faucibus lobortis potenti et tortor sed in magnis velit ac.</p>
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
