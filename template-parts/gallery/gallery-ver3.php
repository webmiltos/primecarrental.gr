<section class="mid-container gallery-outside-wrapper ver3" id="gallery-ver3">
    <div class="gallery-outside-wrap">

        <div class="image-text-content-wrapper center margin-bottom">
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

        <?php
        $images = get_sub_field('gallery');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($images) : ?>
            <div class="swiper-container gallery-slides-wrapper">
                <div class="gallery-slides swiper-wrapper">
                    <?php foreach ($images as $image) : ?>
                        <div class="swiper-slide">
                            <div class="gallery-slide-img">
                                <!-- <?php echo wp_get_attachment_image($image['id'], 'full'); ?> -->
                                <a href="<?php echo $image['url']; ?>" class="single-gallery-image" data-fancybox="gallery" style="width:100%; height:100%; display: block; background-color: #DEDEDE; background-image:url('<?php echo $image['url']; ?>'); background-size: cover; background-position: center center;">
                                </a>
                            </div>
                            <div class="gallery-slide-content-wrapper margin-bottom-small">
                                <div class="arrows-wrapper">
                                    <div class="swiper-button-prev gallery white"></div>
                                    <div class="swiper-button-next gallery white"></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
    <div class="container flex center margin-top">
        <?php if (get_sub_field('button_text')) : ?>
            <a href="<?php the_field('button_link'); ?>" class="button">
                <?php the_sub_field('button_text'); ?>
            </a>
        <?php endif; ?>
    </div>
</section>