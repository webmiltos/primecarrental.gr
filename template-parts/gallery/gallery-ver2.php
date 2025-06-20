<section class="gallery-outside-wrapper ver2" id="gallery-ver2">
    <div class="gallery-outside-wrap">

        <div class="image-text-content-wrapper center">
            <span class="cali pretitle white image-text-pretitle margin-bottom-small" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                <?php the_sub_field('pretitle'); ?>
            </span>
            <?php $titleCat = get_sub_field('title_category'); ?>
            <?php if ($titleCat == 'h1') : ?>
                <h1 class="image-text-title white margin-bottom" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h1>
            <?php elseif ($titleCat == 'h2') : ?>
                <h2 class="image-text-title white margin-bottom" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h2>
            <?php elseif ($titleCat == 'h3') : ?>
                <h3 class="image-text-title white margin-bottom" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h3>
            <?php elseif ($titleCat == 'h4') : ?>
                <h4 class="image-text-title white margin-bottom" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h4>
            <?php elseif ($titleCat == 'h5') : ?>
                <h5 class="image-text-title white margin-bottom" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h5>
            <?php elseif ($titleCat == 'h6') : ?>
                <h6 class="image-text-title white margin-bottom" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h6>
            <?php else : ?>
                <span class="image-text-title white margin-bottom" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </span>
            <?php endif; ?>
            <?php
            $btnType = get_field('button_type', 'options');
            if ($btnType == "50") : ?>
                <?php $btnStyle = "round" ?>
            <?php elseif ($btnType == "corner") : ?>
                <?php $btnStyle = "corner" ?>
            <?php endif; ?>
            <?php if (get_sub_field('gallery_link')) : ?>
                <div class="border-btn-wrapper">
                    <a class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>" href="<?php the_sub_field('gallery_link'); ?>">
                        <?php _e('View Gallery', 'gocreations'); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <div class="gallery-image-wrapper">
            <?php
            $image = get_sub_field('gallery_image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if ($image) : ?>
                <?php echo wp_get_attachment_image($image['id'], $size); ?>
            <?php endif; ?>
        </div>


        <?php $images = get_sub_field('gallery'); ?>
        <?php if (!empty($images)) : ?>
            <div class="single-main-gallery swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($images as $image) : ?>
                        <a href="<?php echo $image['url']; ?>" class="swiper-slide single-gallery-image" data-fancybox="gallery" style="background-color: #DEDEDE; background-image:url('<?php echo $image['url']; ?>'); background-size: cover; background-position: center center;" alt="<?php echo esc_attr($image['alt']); ?>">
                        </a>
                    <?php endforeach; ?>

                </div>

                <div class="gallery-buttons">
                    <div class="swiper-button-prev single-gallery prev"></div>
                    <div class="swiper-button-next single-gallery next"></div>
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