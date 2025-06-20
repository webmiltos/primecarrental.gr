<section class="facilities-outside-wrapper primary-color-bg ver2">
    <div class="facilities-wrapper ver2">
        <div class="top-center-wrapper">
            <span class="cali pretitle third-color image-text-pretitle margin-bottom-small" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                <?php the_sub_field('pretitle'); ?>
            </span>
            
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
        </div>

        <?php if (have_rows('facilities')) : ?>
            <div class="swiper facilities-slider">
                <div class="facilities-wrap swiper-wrapper">
                    <?php $time = 0.1; ?>
                    <?php while (have_rows('facilities')) : the_row();
                        $image = get_sub_field('icon');
                    ?>
                        <div class="facilities-box-wrap show-on-scroll slide-up swiper-slide" style="transition-delay:<?php echo $time; ?>s">
                            <div class="facilities-box-content secondary-color">
                                <div class="facilities-box-image">
                                    <?php echo wp_get_attachment_image($image['id'], 'large'); ?>
                                </div>
                                <div class="column">
                                    <span class="margin-bottom-small facilities-title third-color"><?php the_sub_field('title'); ?></span>
                                    <div class="facilities-content text-color"><?php the_sub_field('text'); ?></div>
                                </div>
                            </div>
                        </div>
                        <?php $time = $time + 0.07; ?>
                    <?php endwhile; ?>
                </div>
                <div class="facilities-pagination-wrapper">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        <?php endif; ?>
        <?php
        $btnType = get_field('button_type', 'options');
        if ($btnType == "50") : ?>
            <?php $btnStyle = "round" ?>
        <?php elseif ($btnType == "corner") : ?>
            <?php $btnStyle = "corner" ?>
        <?php endif; ?>
        <?php if (get_sub_field('facilities_link')) : ?>
            <div class="border-btn-wrapper center margin-top-big">
                <a class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>" href="<?php the_sub_field('facilities_link'); ?>">
                    <?php _e('View All', 'gocreations'); ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</section>