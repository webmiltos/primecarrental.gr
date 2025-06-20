<section class="quotes-outside-wrapper ver1">
    <div class="quotes-outside-wrap">

        <?php if( have_rows('quotes') ): ?>
            <div class="swiper-container quotes-wrapper">
                <div class="swiper-wrapper center">
                    <?php while( have_rows('quotes') ): the_row(); ?>
                        <div class="swiper-slide">
                            <?php $titleCat = get_sub_field('title_category'); ?>
                            <?php if ( $titleCat == 'h1' ) : ?>
                                <h1 class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                                    <?php the_sub_field('title'); ?>
                                </h1>               
                            <?php elseif( $titleCat == 'h2' ): ?>
                                <h2 class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                                    <?php the_sub_field('title'); ?>
                                </h2>
                            <?php elseif( $titleCat == 'h3' ): ?>
                                <h3 class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                                    <?php the_sub_field('title'); ?>
                                </h3>
                            <?php elseif( $titleCat == 'h4' ): ?>
                                <h4 class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                                    <?php the_sub_field('title'); ?>
                                </h4>
                            <?php elseif( $titleCat == 'h5' ): ?>
                                <h5 class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                                    <?php the_sub_field('title'); ?>
                                </h5>
                            <?php elseif( $titleCat == 'h6' ): ?>
                                <h6 class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                                    <?php the_sub_field('title'); ?>
                                </h6>
                            <?php else: ?>
                                <span class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                                    <?php the_sub_field('title'); ?>
                                </span>
                            <?php endif; ?>

                            <?php
                            $image = get_field('white_stars_image','options');
                            $size = 'custom size'; // (thumbnail, medium, large, full or custom size)
                            if( $image ):?>
                                <div class="star-wrapper">
                                    <?php echo wp_get_attachment_image( $image['id'], $size ); ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ( get_sub_field('text') ) : ?>
                                <div class="main-text center">
                                    <!-- <p style="text-align: center;">☆☆☆☆☆ -->
    
                                    <?php the_sub_field('text'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_sub_field('subtitle') ) : ?>
                                <span class="cali subtitle white image-text-subtitle" style="<?php the_sub_field('subtitle_custom_css'); ?>">
                                    <?php the_sub_field('subtitle'); ?>
                                </span>
                            <?php endif; ?>
                            
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="swiper-pagination quote center"></div>
            </div>
        <?php endif; ?>

        <div class="gallery-image-wrapper">
            <?php
            $image = get_sub_field('image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ):?>
                <?php echo wp_get_attachment_image( $image['id'], $size ); ?>
            <?php endif; ?>
        </div>

    </div>
</section>