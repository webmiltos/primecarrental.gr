<!-- new for three-type-vehicle -->

<div class="intro-fleet">
    <h1 class="image-text-title third-color margin-bottom-small show-on-scroll margin-top-big inter"><?php the_sub_field('title'); ?></h1>
    <span class="main-text text-color image-text-text medium-width center show-on-scroll"><?php the_sub_field('text'); ?></span>
</div>

<section class="three-vehicle-types">
    <ul class="fleet-collection-wrap mid-container fleet-wrapper basic-styling three-types">

        <?php if (get_sub_field('product_repeater')) : ?>
            <?php while (the_repeater_field('product_repeater')) : ?>
                <li class="single-fleet-wrap fleet-single-wrap">
                    <div class="gc-car_search">
                        <a href="<?php the_sub_field('link'); ?>">
                            <div class="gc-image-wrap">
                                <?php $image = get_sub_field('image');
                                if (!empty($image)) : ?>
                                    <img class="contain" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <h4 class="three-types-title"><?php the_sub_field('title'); ?></h4>

                            <div class="inner-wrapper inner-wrapper-content">
                                <div class="border-btn-wrapper margin-top">
                                    <?php if (get_sub_field('link')) : ?>
                                        <?php
                                        $btnType = get_field('button_type', 'options');
                                        if ($btnType == "50") : ?>
                                            <?php $btnStyle = "round" ?>
                                        <?php elseif ($btnType == "corner") : ?>
                                            <?php $btnStyle = "corner" ?>
                                        <?php endif; ?>
                                        <a class="gc-car_button button border-btn-wrap extra-color center third-color hover-light-black <?php echo $btnStyle; ?>" href="<?php the_sub_field('link'); ?>">
                                            <?php if (get_sub_field('button_text')) : ?>
                                                <?php the_sub_field('button_text'); ?>
                                            <?php else : ?>
                                                <?php _e('Learn More', 'gocreations'); ?>
                                            <?php endif; ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>

    </ul>
</section>