<section class="locations-section">
    <div class="content-top">
        <?php if (get_field('offices_pretitle', 'options')) : ?>
            <p class="pretitle" style="<?php the_field('offices_pretitle_custom_css', 'options'); ?>"><?php the_field('offices_pretitle', 'options'); ?></p>
        <?php endif; ?>


        <?php $titleCat = get_field('offices_title_category', 'options'); ?>
        <?php if ($titleCat == 'h1') : ?>
            <h1 class="image-text-title third-color margin-bottom-small" style="<?php the_field('offices_title_custom_css', 'options'); ?>">
                <?php the_field('offices_title', 'options'); ?>
            </h1>
        <?php elseif ($titleCat == 'h2') : ?>
            <h2 class="image-text-title bold third-color margin-bottom-small" style="<?php the_field('offices_title_custom_css', 'options'); ?>">
                <?php the_field('offices_title', 'options'); ?>
            </h2>
        <?php elseif ($titleCat == 'h3') : ?>
            <h3 class="image-text-title third-color margin-bottom-small" style="<?php the_field('offices_title_custom_css', 'options'); ?>">
                <?php the_field('offices_title', 'options'); ?>
            </h3>
        <?php elseif ($titleCat == 'h4') : ?>
            <h4 class="image-text-title third-color margin-bottom-small" style="<?php the_field('offices_title_custom_css', 'options'); ?>">
                <?php the_field('offices_title', 'options'); ?>
            </h4>
        <?php elseif ($titleCat == 'h5') : ?>
            <h5 class="image-text-title third-color margin-bottom-small" style="<?php the_field('offices_title_custom_css', 'options'); ?>">
                <?php the_field('offices_title', 'options'); ?>
            </h5>
        <?php elseif ($titleCat == 'h6') : ?>
            <h6 class="image-text-title third-color margin-bottom-small" style="<?php the_field('offices_title_custom_css', 'options'); ?>">
                <?php the_field('offices_title', 'options'); ?>
            </h6>
        <?php else : ?>
            <span class="image-text-title third-color margin-bottom-small" style="<?php the_field('title_custom_css', 'options'); ?>">
                <?php the_field('title', 'options'); ?>
            </span>
        <?php endif; ?>




        <?php if (get_field('offices_text', 'options')) : ?>
            <div class="text margin-bottom"><?php the_field('offices_text', 'options'); ?></div>
        <?php endif; ?>
    </div>
    <div class="content-bottom  show-on-scroll slide-up">

        <?php if (get_field('offices_repeater', 'options')) : ?>

            <?php while (the_repeater_field('offices_repeater', 'options')) : ?>
                <div class="box">
                    <div class="display_grid">

                        <?php if (get_sub_field('email', 'options')) : ?>
                            <a class="text white" href="mailto:<?php the_sub_field('email', 'options'); ?>">
                                <?php $image = get_sub_field('email_icon');
                                if (!empty($image)) : ?>
                                    <img class="email-icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <?php the_sub_field('email', 'options'); ?>
                            </a>
                        <?php endif; ?>

                        <div class="phones-wrap">
                            <?php if (get_sub_field('phone', 'options')) : ?>
                                <a class="text white" href="tel:<?php the_sub_field('phone', 'options'); ?>">
                                    <?php $image = get_sub_field('phone_icon');
                                    if (!empty($image)) : ?>
                                        <img class="phone-icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <?php the_sub_field('phone', 'options'); ?>
                                </a>
                            <?php endif; ?>
                            <?php if (get_sub_field('mobile', 'options')) : ?>
                                <a class="text white" href="tel:<?php the_sub_field('mobile', 'options'); ?>">
                                    <?php $image = get_sub_field('mobile_icon', 'options');
                                    if (!empty($image)) : ?>
                                        <img class="mobile-icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <?php the_sub_field('mobile', 'options'); ?>
                                </a>
                            <?php endif; ?>
                        </div>

                        <?php if (get_sub_field('address', 'options')) : ?>
                            <a target=" _blank" class="text white" href="<?php the_sub_field('address_link', 'options'); ?>">
                                <?php $image = get_sub_field('address_icon', 'options');
                                if (!empty($image)) : ?>
                                    <img class="address-icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <?php the_sub_field('address', 'options'); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="image-wrapper">
                        <?php $image = get_sub_field('image', 'options');
                        if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>