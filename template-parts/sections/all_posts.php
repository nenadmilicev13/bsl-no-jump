<div class="resources">
    <div class="wrapper">
        <div class="resources__container">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1
                );

                $all_posts = new WP_Query( $args );
                ?>

                <?php if ( $all_posts->have_posts() ) : ?>
                    <?php while ( $all_posts->have_posts() ) : $all_posts->the_post(); ?>
                        <div class="resource-item hover-js"data-image-src="view">
                            <a href="<?php the_permalink(); ?>">
                                <div class="resource-item__img">
                                
                                        <img src="<?php the_post_thumbnail_url('rect'); ?>" alt="">
                                    
                                </div>
                                <h2 class="resource-item__title"><?php the_title(); ?></h2>
                                <div class="resource-item__content">
                                    <div class="entry-content ">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            <?php wp_reset_query(); ?>
        </div>
    </div>
    
</div>