<section class="first-image-text-outside-wrapper sec ver2">
    <div class="mid-container first-image-text-wrapper sec ver2">
        <div class="first-image-text-wrap">

            <div class="image-text2-left-wrap">
                <?php if( have_rows('slider') ): ?>
                    <div class="swiper-container image-text2-slides-wrapper">
                        <div class="image-text2-slides swiper-wrapper">
                            <?php while( have_rows('slider') ): the_row(); 
                                $image = get_sub_field('image');
                                ?>
                                <div class="swiper-slide">
                                    <div class="image-text2-slide-content-wrapper">
                                        <div class="image-text2-slide-content">
                                            <span class="image-text2-slide-title secondary-font third-color"><?php the_sub_field('title'); ?></span>
                                            <span class="image-text2-slide-text text-color"><?php the_sub_field('subtitle'); ?></span>
                                        </div>
                                        <?php
                                        $btnType = get_field('button_type','options');
                                        if ( $btnType == "50" ) : ?>
                                            <?php $btnStyle = "round" ?>
                                        <?php elseif($btnType == "corner"): ?>
                                            <?php $btnStyle = "corner" ?>
                                        <?php endif; ?>
                                        <div class="arrows-wrapper">
                                            <div class="swiper-button-prev img2 third-color <?php echo $btnStyle; ?>"></div>
                                            <div class="swiper-button-next img2 third-color <?php echo $btnStyle; ?>"></div>
                                        </div>
                                    </div>
                                    <div class="image-text2-slide-img">
                                        <?php echo wp_get_attachment_image( $image['id'], 'large' ); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="primary-light-color-bg img-txt-bg-wrap"></div>
            </div>

            <div class="image-text-content-wrapper small-container">
                <span class="cali pretitle third-color image-text-pretitle margin-bottom-small" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                    <?php the_sub_field('pretitle'); ?>
                </span>
                <?php $titleCat = get_sub_field('title_category'); ?>
                <?php if ( $titleCat == 'h1' ) : ?>
                    <h1 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h1>               
                <?php elseif( $titleCat == 'h2' ): ?>
                    <h2 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h2>
                <?php elseif( $titleCat == 'h3' ): ?>
                    <h3 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h3>
                <?php elseif( $titleCat == 'h4' ): ?>
                    <h4 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h4>
                <?php elseif( $titleCat == 'h5' ): ?>
                    <h5 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h5>
                <?php elseif( $titleCat == 'h6' ): ?>
                    <h6 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h6>
                <?php else: ?>
                    <span class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </span>
                <?php endif; ?>
                <span class="image-text-subtitle third-color subtitle medium-weight margin-bottom-big" style="<?php the_sub_field('subtitle_custom_css'); ?>">
                    <?php the_sub_field('subtitle'); ?>
                </span>
                <?php if( have_rows('list') ): ?>
                    <div class="image-text2-list-wrapper ver1"  style="<?php the_sub_field('list_custom_css'); ?>">
                        <?php $time = 0.1; ?>
                        <?php while( have_rows('list') ): the_row(); ?>
                            <div class="image-text2-list-item margin-bottom-big show-on-scroll slide-right" style="transition-delay:<?php echo $time; ?>s">
                                <span class="image-text2-list-title secondary-font third-color"><?php the_sub_field('title'); ?></span>
                                <div class="image-text2-list-text text-color"><?php the_sub_field('content'); ?></div>
                            </div>
                            <?php $time = $time + 0.1; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if ( get_sub_field('button_link') ) : ?>
                    <div class="button-wrapper">
                        <?php
                        $btnType = get_field('button_type','options');
                        if ( $btnType == "50" ) : ?>
                            <?php $btnStyle = "round" ?>
                        <?php elseif($btnType == "corner"): ?>
                            <?php $btnStyle = "corner" ?>
                        <?php endif; ?>
                        <a class="border-btn-wrap extra-color third-color hover-light-black <?php echo $btnStyle; ?>" href="<?php the_sub_field('button_link'); ?>">
                            <?php if ( get_sub_field('button_text') ) : ?>
                                <?php the_sub_field('button_text'); ?>
                            <?php else: ?>
                                <?php _e('Learn More','gocreations'); ?>
                            <?php endif; ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>


        </div>
    </div>
</section>