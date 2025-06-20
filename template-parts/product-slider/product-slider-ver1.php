<div class="intro-fleet margin-top-big">



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




    <span class="main-text text-color image-text-text medium-width center show-on-scroll"><?php the_sub_field('text'); ?></span>
    <div class="inner-wrapper inner-wrapper-content">
        <div class="border-btn-wrapper">
            <?php if (get_sub_field('button_link')) : ?>
                <?php
                $btnType = get_field('button_type', 'options');
                if ($btnType == "50") : ?>
                    <?php $btnStyle = "round" ?>
                <?php elseif ($btnType == "corner") : ?>
                    <?php $btnStyle = "corner" ?>
                <?php endif; ?>
                <a class="gc-car_button button border-btn-wrap extra-color center third-color hover-light-black <?php echo $btnStyle; ?>" href="<?php the_sub_field('button_link'); ?>">
                    <?php if (get_sub_field('button_text')) : ?>
                        <?php the_sub_field('button_text'); ?>
                    <?php else : ?>
                        <?php _e('View our fleet', 'gocreations'); ?>
                    <?php endif; ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="fleet-home-wrapper new-v1slider-wrapper">
    <div class="fleet-home-wrapper fleet-slider mid-container swiper-container three-per-view">
        <?php echo do_shortcode(get_sub_field('shortcode')); ?>
        

        <div class="inner-wrapper inner-wrapper-content mobile">
            <div class="border-btn-wrapper">
                <?php if (get_sub_field('button_link')) : ?>
                    <?php
                    $btnType = get_field('button_type', 'options');
                    if ($btnType == "50") : ?>
                        <?php $btnStyle = "round" ?>
                    <?php elseif ($btnType == "corner") : ?>
                        <?php $btnStyle = "corner" ?>
                    <?php endif; ?>
                    <a class="gc-car_button button border-btn-wrap extra-color center third-color hover-light-black <?php echo $btnStyle; ?>" href="<?php the_sub_field('button_link'); ?>">
                        <?php if (get_sub_field('button_text')) : ?>
                            <?php the_sub_field('button_text'); ?>
                        <?php else : ?>
                            <?php _e('View our fleet', 'gocreations'); ?>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="swiper-buttons-wrapper">
        <div class="swiper-button-next car-fleet-btn third-color"></div>
        <div class="swiper-button-prev car-fleet-btn third-color"></div>
    </div>
</div>
