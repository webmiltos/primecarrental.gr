<section class="relative reviews-main-section">
    <div class="mid-container quotes-outside-wrapper ver3">
        
        <div class="quote-main-image-wrapper">
            <?php
                $image = get_sub_field('image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $image ):?>
                    <?php echo wp_get_attachment_image( $image['id'], $size ); ?>
                    <?php endif; ?>
                </div>
                
        <?php if( have_rows('reviews') ): ?>
            <div class="reviews-section swiper-container">
                <div class="reviews-wrapper swiper-wrapper">
                    <?php while( have_rows('reviews') ): the_row(); 
                        $image = get_sub_field('image');
                        ?>
                        <div class="reviews-wrap swiper-slide">
                            <div class="review-slide-wrap">
                                <h3 class="image-text-title third-color margin-bottom-small">
                                    <?php the_sub_field('title'); ?>
                                </h3>
                                <div class="main-text center">
                                    <?php the_sub_field('text'); ?>
                                </div>
                                <span class="review-name secondary-font margin-bottom-small"><?php the_sub_field('name'); ?></span>
                                <div class="reviews-icon-wrap margin-top">
                                    <?php
                                    $image = get_sub_field('icon');
                                    $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                                    if( $image ):?>
                                        <?php echo wp_get_attachment_image( $image['id'], $size ); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="swiper-pagination reviews"></div>
            </div>
        <?php endif; ?>
    </div>
    
</section>