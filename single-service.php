<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package baseline
 */

get_header(); ?>
    <main class="site-main">
        <div class="banner-head banner-head--text">
            <div class="wrapper wrapper--sm">
                <div class="banner-head__content">
                    <span class="section-head__pretitle"><?php echo get_field('banner_pretitle'); ?></span>
                    <h1 class="banner-head__title"><?php echo get_field('banner_title'); ?></h1>
                    <p class="banner-head__subtitle  banner-head__subtitle--sm"><?php echo get_field('banner_desc'); ?></p>
                </div>
            </div>
        </div>

        <div class="services-single">
            <div class="wrapper wrapper--sm">
                <div class="services-single__container">
                <?php if ( have_rows('service_item') ) : ?>
                    <?php while ( have_rows('service_item') ) : the_row(); ?>

                        <div class="service-single__item service-single__item-info">
                            <div class="entry-content ">
                                <h3><?php echo get_sub_field('title'); ?></h3>
                                <?php echo get_sub_field('content'); ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

<?php
get_footer();
