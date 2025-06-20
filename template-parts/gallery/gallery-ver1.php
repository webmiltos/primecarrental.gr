<section class="mid-container gallery-outside-wrapper ver1" id="gallery-ver1">
    <div class="primary-light-color-bg gallery"></div>
    <div class="gallery-outside-wrap">

        <div class="image-text-content-wrapper margin-bottom">
            <!-- <span class="cali pretitle third-color image-text-pretitle margin-bottom-small" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                <?php the_sub_field('pretitle'); ?>
            </span> -->
            <?php $titleCat = get_sub_field('title_category'); ?>
            <?php if ($titleCat == 'h1') : ?>
                <h1 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h1>
            <?php elseif ($titleCat == 'h2') : ?>
                <h2 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h2>
            <?php elseif ($titleCat == 'h3') : ?>
                <h3 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h3>
            <?php elseif ($titleCat == 'h4') : ?>
                <h4 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h4>
            <?php elseif ($titleCat == 'h5') : ?>
                <h5 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h5>
            <?php elseif ($titleCat == 'h6') : ?>
                <h6 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h6>
            <?php else : ?>
                <span class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </span>
            <?php endif; ?>

            <div class="main-text text-color image-text-text margin-bottom" style="<?php the_sub_field('text_custom_css'); ?>">
                <?php the_sub_field('text'); ?>
            </div>
        </div>

        <?php if (have_rows('gallery_repeater')) : ?>
            <?php $count = 0; ?>
            <?php while (have_rows('gallery_repeater')) : the_row(); ?>
                <?php $count++; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if (have_rows('gallery_repeater')) : ?>
            <div class="swiper-container gallery-slides-wrapper">
                <div class="gallery-slides swiper-wrapper">
                    <?php while (have_rows('gallery_repeater')) : the_row();
                        $image = get_sub_field('image');
                        $video_url = get_sub_field('url'); // Update to match your ACF field name
                    ?>
                        <div class="swiper-slide">
                            <div class="gallery-slide-img">
                                <?php if (!empty($video_url)) : ?>
                                    <!-- If video URL exists, render video -->
                                    <a href="<?php echo esc_url($video_url); ?>" data-fancybox="gallery">
                                        <div class="video-wrapper">
                                            <video style="width: 100%; height: 100%;" src="<?php echo esc_url($video_url); ?>" frameborder="0" allowfullscreen autoplay playsinline loop muted></video>
                                        </div>
                                    </a>
                                <?php else : ?>
                                    <!-- If no video URL, render image link -->
                                    <a href="<?php echo esc_url($image['url']); ?>" class="single-gallery-image" data-fancybox="gallery" style="width:100%; height:100%; display: block; background-color: #DEDEDE; background-image:url('<?php echo esc_url($image['url']); ?>'); background-size: cover; background-position: center center;">
                                        <span class="no-font"><?php echo esc_attr($image['alt']); ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="gallery-slide-content-wrapper margin-bottom-small">
                                <div class="gallery-slide-content">
                                    <div class="counter-wrapper">
                                        <div class="swiper-counter"><?php echo get_row_index(); ?></div><span class="total">/<?php echo $count; ?></span>
                                    </div>
                                    <span class="gallery-slide-title third-color"><?php the_sub_field('title'); ?></span>
                                </div>
                                <div class="arrows-wrapper">
                                    <div class="swiper-button-prev gallery third-color"></div>
                                    <div class="swiper-button-next gallery third-color"></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>


        <div class="container flex center margin-top">
            <?php if (get_sub_field('button_text')) : ?>
                <a href="<?php the_field('button_link'); ?>" class="button">
                    <?php the_sub_field('button_text'); ?>
                </a>
            <?php endif; ?>
        </div>

    </div>
</section>