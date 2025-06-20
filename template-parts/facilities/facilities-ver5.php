<section class="facilities-outside-wrapper">
    <div class="facilities-wrapper ver5">
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
                <h2 class="image-text-title third-color margin-bottom-small inter" style="<?php the_sub_field('title_custom_css'); ?>">
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


            <span class="text text-color image-text-content margin-bottom" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                <?php the_sub_field('text'); ?>
            </span>

            <?php if (get_sub_field('button_link')) : ?>
                <div class="button-wrapper">
                    <?php
                    $btnType = get_field('button_type', 'options');
                    if ($btnType == "50") : ?>
                        <?php $btnStyle = "round" ?>
                    <?php elseif ($btnType == "corner") : ?>
                        <?php $btnStyle = "corner" ?>
                    <?php endif; ?>
                    <a class="border-btn-wrap extra-color third-color hover-light-black <?php echo $btnStyle; ?>" href="<?php the_sub_field('button_link'); ?>">
                        <?php if (get_sub_field('button_text')) : ?>
                            <?php the_sub_field('button_text'); ?>
                        <?php else : ?>
                            <?php _e('Learn More', 'gocreations'); ?>
                        <?php endif; ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>


        <div class="facilities-v5-desktop">
            <?php if (have_rows('facilities')) : ?>
                <div class="facilities-wrap">
                    <?php $time = 0.1; ?>
                    <?php $i = 1; ?>
                    <?php while (have_rows('facilities')) : the_row();
                        $image = get_sub_field('icon');
                    ?>
                        <div class="facilities-box-wrap<?php echo $i > 6 ? ' hide' : ''; ?> show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s">
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
                        <?php $i = $i + 1; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="facilities-v5-mobile">
            <?php if (have_rows('facilities')) : ?>
                <div class="swiper facilities-slider-v5">
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

                    <div class="swiper-pagination"></div>

                </div>
            <?php endif; ?>
        </div>


        <?php if (get_sub_field('button_link')) : ?>
            <div class="button-wrapper mobile">
                <?php
                $btnType = get_field('button_type', 'options');
                if ($btnType == "50") : ?>
                    <?php $btnStyle = "round" ?>
                <?php elseif ($btnType == "corner") : ?>
                    <?php $btnStyle = "corner" ?>
                <?php endif; ?>
                <a class="border-btn-wrap extra-color third-color hover-light-black <?php echo $btnStyle; ?>" href="<?php the_sub_field('button_link'); ?>">
                    <?php if (get_sub_field('button_text')) : ?>
                        <?php the_sub_field('button_text'); ?>
                    <?php else : ?>
                        <?php _e('Learn More', 'gocreations'); ?>
                    <?php endif; ?>
                </a>
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