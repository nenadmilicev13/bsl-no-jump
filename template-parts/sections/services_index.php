<div class="services-index">
    <div class="wrapper wrapper--sm">
        <div class="services-index__wrap">

        <?php if ( have_rows('services_items') ) : ?>
            <?php while ( have_rows('services_items') ) : the_row(); ?>
                <a href="<?php echo get_sub_field('link'); ?>">
                    <div class="services-index__container hover-js"data-image-src="view">
                        <div class="services-index-item-left">
                            <h3 class="services-index-item-left__title"><?php echo get_sub_field('title'); ?></h3>
                            <div class="services-index-item-left__text">
                                <div class="entry-content">
                                    <p> <?php echo get_sub_field('content'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="services-index-item-right">
                            <ul class="services-index-item-right__left">
                                <?php if ( have_rows('items') ) : ?>
                                    <?php while ( have_rows('items') ) : the_row(); ?>

                                        <li><?php echo get_sub_field('name'); ?></li>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                            <ul class="services-index-item-right__right">
                                <?php if ( have_rows('items2') ) : ?>
                                    <?php while ( have_rows('items2') ) : the_row(); ?>

                                        <li><?php echo get_sub_field('name'); ?></li>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="services-index__btns">
                            <span>Learn More</span>
                        </div>
                    </div>
                </a>    
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</div>
