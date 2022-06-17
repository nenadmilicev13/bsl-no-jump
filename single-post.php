<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aquaFilter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="banner-head banner-head--text banner-head--text__single-post">
				<div class="wrapper wrapper--sm">
					<div class="banner-head__content banner-head__content--sm">
                        <span class="section-head__pretitle">Resources</span>
						<h1 class="banner-head__title"><?php the_title(); ?></h1>
					</div>
				</div>
				<div class="banner-head--text__single-post-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/steva0.png" alt="">
				</div>
			</div>
            

			<div class="main-content">
				<div class="wrapper wrapper--s">
					<?php
					while ( have_posts() ) : the_post(); ?>
						<!-- flex content -->
						<div class="entry-content  single-post__content">
							<?php the_content(); ?>
						</div>
			
						<?php
					endwhile; // End of the loop.
					?>
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
	</div><!-- #primary -->

	<!-- <div class="cursor">
		<div class="cursor-media">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/view.svg" alt="" id="view"></img>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/drag.svg" alt=""id="drag"></img>
		</div>	
	</div> -->

<?php
get_footer();
