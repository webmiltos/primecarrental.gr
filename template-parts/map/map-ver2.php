<section class="contact-outside-wrapper ver1">
    <div class="contact-wrapper ver1">
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
        <div class="contact-content-wrapper">

            <div class="faqs-left-wrapper secondary-color-bg">
                <span class="cali pretitle light white image-text-pretitle margin-bottom-small uppercase">
                    <?php the_sub_field('pretitle'); ?>
                </span>
                <span class="contact-title margin-bottom-small">
                    <?php the_sub_field('title'); ?>
                </span>

                <?php if (get_field('address', 'options')) : ?>
                    <div class="contact-information-wrapper">
                        <span class="text regular white main-color">
                            <?php _e('Find Us', 'gocreations'); ?>
                        </span>
                        <?php if (get_field('google_maps_address_link', 'options')) : ?>
                            <a href="<?php the_field('google_maps_address_link', 'options') ?>" class="text medium address white">
                                <?php the_field('address', 'options'); ?>
                            </a>
                        <?php else : ?>
                            <span class="text medium address white">
                                <?php the_field('address', 'options'); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if (get_field('phone_1', 'options') || get_field('mobile', 'options')) : ?>
                    <div class="contact-information-wrapper">
                        <span class="text regular white main-color">
                            <?php _e('Call Us', 'gocreations'); ?>
                        </span>
                        <div class="email-telephone-info-wrapper">
                            <?php if ( get_field('phone_1', 'options') ) : ?>
                                <a class="text light medium white" href="tel:<?php the_field('phone_1', 'options'); ?>">
                                    <!-- <span class="icon-phone"></span> -->
                                    <?php the_field('phone_1', 'options'); ?>
                                </a>
                            <?php endif; ?>
                            <?php if ( get_field('mobile', 'options') ) : ?>
                                <a class="text light medium white" href="tel:<?php the_field('mobile', 'options'); ?>">
                                    <!-- <span class="icon-mobile"></span> -->
                                    <?php the_field('mobile', 'options'); ?>
                                    <span class="icons-wrapper">
                                        <?php
                                        $image = get_field('whatsapp_icon', 'options');
                                        $size = 'small';
                                        if ($image) : ?>
                                            <?php echo wp_get_attachment_image($image['id'], $size); ?>
                                        <?php endif; ?>
                                        <?php
                                        $image = get_field('viber_icon', 'options');
                                        $size = 'small';
                                        if ($image) : ?>
                                            <?php echo wp_get_attachment_image($image['id'], $size); ?>
                                        <?php endif; ?>
                                    </span>
                                </a>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (get_field('email', 'options')) : ?>
                    <div class="contact-information-wrapper margin-bottom">
                        <span class="text light medium-text white main-color">
                            <?php _e('Email Us', 'gocreations'); ?>
                        </span>
                        <div class="email-telephone-info-wrapper">
                            <a class="text light medium email white" href="mailto:<?php the_field('email', 'options'); ?>">
                                <?php the_field('email', 'options'); ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="border-btn-wrapper">
                    <a class="border-btn-wrap white hover-black round" href="<?php the_field('address_link', 'options'); ?>">
                        <?php _e('Find Us on Map', 'gocreations'); ?> </a>
                </div>

            </div>

            <div class="map-wrapper ver2">
                <?php if (get_field('google_maps_iframe', 'options')) : ?>
                    <?php echo get_field('google_maps_iframe', 'options'); ?>
                <?php else : ?>
                    <?php
                    $location = get_field('location', 'options');
                    if ($location) : ?>
                        <div class="acf-map">
                            <div class="marker"></div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

            </div>

        </div>


    </div>
</section>