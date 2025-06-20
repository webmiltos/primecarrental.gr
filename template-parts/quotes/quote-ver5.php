<section class="reviews-section">
    <div class="container top show-on-scroll slide-up" style="transition-delay: 0.2s;">
        <p class="pretitle style=" <?php the_sub_field('pretitle_custom_css'); ?>"><?php the_sub_field('pretitle'); ?></p>



        <?php $titleCat = get_sub_field('title_category'); ?>
        <?php if ($titleCat == 'h1') : ?>
            <h1 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                <?php the_sub_field('title'); ?>
            </h1>
        <?php elseif ($titleCat == 'h2') : ?>
            <h2 class="image-text-title bold third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                <?php the_sub_field('title'); ?>
            </h2>
        <?php elseif ($titleCat == 'h3') : ?>
            <h3 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                <?php the_sub_field('title'); ?>
            </h3>
        <?php elseif ($titleCat == 'h4') : ?>
            <h4 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                <?php the_sub_field('title'); ?>
            </h4>
        <?php elseif ($titleCat == 'h5') : ?>
            <h5 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                <?php the_sub_field('title'); ?>
            </h5>
        <?php elseif ($titleCat == 'h6') : ?>
            <h6 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                <?php the_sub_field('title'); ?>
            </h6>
        <?php else : ?>
            <span class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                <?php the_sub_field('title'); ?>
            </span>
        <?php endif; ?>
        <p class="text semi-bold"><?php the_sub_field('text'); ?></p>
    </div>

    <div class="container bottom show-on-scroll slide-up" style=" transition-delay: 0.2s;">
        <div class="swiper-container reviews-slider">
            <div class="swiper-wrapper">
                <?php if (get_sub_field('reviews')) : ?>
                    <?php while (the_repeater_field('reviews')) : ?>
                        <div class="repeater-item swiper-slide show-on-scroll slide-right" style="transition-delay: 0.2s;">
                            <div class="top">
                                <h4 class="title"><?php the_sub_field('title'); ?></h4>
                            </div>
                            <div class="middle">
                                <div class="image-wrap">
                                    <?php $image = get_sub_field('icon');
                                    if (!empty($image)) : ?>
                                        <img class="stars" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="text medium bold"><?php the_sub_field('text'); ?></div>
                            </div>
                            <div class="bottom">
                                <p class="text bold"> <?php the_sub_field('name', 'options'); ?></p>
                                <p class="text bold grey"> <?php the_sub_field('date', 'options'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="buttons-wrapper">
                <div class="swiper-button-next-reviews"></div>
                <div class="swiper-button-prev-reviews"></div>
            </div>
        </div>
    </div>
</section>