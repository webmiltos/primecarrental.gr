<?php $locale = get_locale(); ?>
<section class="contact-outside-wrapper ver3">
    <div class="contact-wrapper ver3">
        <div class="contact-content-wrapper">

            <div class="contact-form-wrap primary-light-color-bg">
                <div class="cf7-form-wrap floating-labels-form">
                    <span class="cali pretitle third-color image-text-pretitle margin-bottom-small" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                        <?php the_sub_field('pretitle'); ?>
                    </span>
                    <?php $titleCat = get_sub_field('title_category'); ?>
                    <?php if ($titleCat == 'h1') : ?>
                        <h1 class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                            <?php the_sub_field('title'); ?>
                        </h1>
                    <?php elseif ($titleCat == 'h2') : ?>
                        <h2 class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                            <?php the_sub_field('title'); ?>
                        </h2>
                    <?php elseif ($titleCat == 'h3') : ?>
                        <h3 class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                            <?php the_sub_field('title'); ?>
                        </h3>
                    <?php elseif ($titleCat == 'h4') : ?>
                        <h4 class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                            <?php the_sub_field('title'); ?>
                        </h4>
                    <?php elseif ($titleCat == 'h5') : ?>
                        <h5 class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                            <?php the_sub_field('title'); ?>
                        </h5>
                    <?php elseif ($titleCat == 'h6') : ?>
                        <h6 class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                            <?php the_sub_field('title'); ?>
                        </h6>
                    <?php else : ?>
                        <span class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                            <?php the_sub_field('title'); ?>
                        </span>
                    <?php endif; ?>
                    <?php echo do_shortcode(get_sub_field('form_shortcode')); ?>
                </div>
            </div>

            <div class="faqs-left-wrapper secondary-color-bg">
                <span class="cali pretitle white image-text-pretitle margin-bottom-small">
                    <!-- <?php _e('Contact Us', 'gocreations'); ?> -->
                </span>
                <span class="contact-title white  margin-bottom-small"> 
                    <?php
                    if (strpos($locale, 'el') === 0) { ?>
                        <?php _e('Επικοινωνήστε Μαζί Μας!', 'gocreations'); ?>
                   <?php } elseif (strpos($locale, 'en') === 0) { ?>
                        <?php _e('Feel free to contact us!', 'gocreations'); ?>
                    <?php } else {?>
                        <?php _e('Feel free to contact us!', 'gocreations'); ?>
                    <?php } ?>
                </span>

                <?php if (get_field('address', 'options')) : ?>
                    <div class="contact-information-wrapper">
                        <span class="text light white mini-title">
                        <?php
                        if (strpos($locale, 'el') === 0) { ?>
                            <?php _e('Βρείτε Μας', 'gocreations'); ?>
                        <?php } elseif (strpos($locale, 'en') === 0) { ?>
                            <?php _e('Find Us', 'gocreations'); ?>
                        <?php } else {?>
                            <?php _e('Find Us', 'gocreations'); ?>
                        <?php } ?>
                        </span>
                        <?php if (get_field('google_maps_address_link', 'options')) : ?>
                            <a href="<?php the_field('google_maps_address_link', 'options') ?>" class="text medium address white" target="_blank">
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
                        <span class="text light white mini-title">
                        <?php
                        if (strpos($locale, 'el') === 0) { ?>
                            <?php _e('Καλέστε Μας', 'gocreations'); ?>
                        <?php } elseif (strpos($locale, 'en') === 0) { ?>
                            <?php _e('Call Us', 'gocreations'); ?>
                        <?php } else {?>
                            <?php _e('Call Us', 'gocreations'); ?>
                        <?php } ?>
                        </span>
                        <div class="email-telephone-info-wrapper">
                            <?php if ( get_field('phone_1', 'options') ) : ?>
                                <a class="text light medium white" href="tel:<?php the_field('phone_1', 'options'); ?>">
                                    <?php the_field('phone_1', 'options'); ?>
                                </a>
                            <?php endif; ?>
                            <?php if ( get_field('mobile', 'options') ) : ?>
                                <a class="text light medium white" href="tel:<?php the_field('mobile', 'options'); ?>">
                                    <?php the_field('mobile', 'options'); ?>
                                </a>
                            <?php endif; ?>
                            <?php if ( get_field('phone_2', 'options') ) : ?>
                                <a class="text light medium white" href="tel:<?php the_field('phone_2', 'options'); ?>">
                                    <?php the_field('phone_2', 'options'); ?>
                                </a>
                            <?php endif; ?>
                            <?php if ( get_field('mobile_2', 'options') ) : ?>
                                <a class="text light medium white" href="tel:<?php the_field('mobile_2', 'options'); ?>">
                                    <?php the_field('mobile_2', 'options'); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (get_field('email', 'options')) : ?>
                    <div class="contact-information-wrapper">
                        <span class="text light medium-text white mini-title">
                        <?php
                        if (strpos($locale, 'el') === 0) { ?>
                            <?php _e('Στείλτε Μας Email', 'gocreations'); ?>
                        <?php } elseif (strpos($locale, 'en') === 0) { ?>
                            <?php _e('Email Us', 'gocreations'); ?>
                        <?php } else {?>
                            <?php _e('Email Us', 'gocreations'); ?>
                        <?php } ?>
                        </span>
                        <div class="email-telephone-info-wrapper">
                            <a class="text light medium email white" href="mailto:<?php the_field('email', 'options'); ?>">
                                <?php the_field('email', 'options'); ?>
                            </a>
                        </div>



                    </div>
                <?php endif; ?>
                <!-- extra -->
                <?php
                $btnType = get_field('button_type', 'options');
                if ($btnType == "50") : ?>
                    <?php $btnStyle = "round" ?>
                <?php elseif ($btnType == "corner") : ?>
                    <?php $btnStyle = "corner" ?>
                <?php endif; ?>
                <?php if (get_field('address_link', 'options')) : ?>
                    <div class="border-btn-wrapper margin-top">
                        <a class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>" href="<?php the_field('address_link', 'options') ?>" target="_blank">
                        <?php
                        if (strpos($locale, 'el') === 0) { ?>
                            <?php _e('Βρείτε Μας Στον Χάρτη', 'gocreations'); ?>
                        <?php } elseif (strpos($locale, 'en') === 0) { ?>
                            <?php _e('Find Us On Map', 'gocreations'); ?>
                        <?php } else {?>
                            <?php _e('Find Us On Map', 'gocreations'); ?>
                        <?php } ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>



        </div>


    </div>
</section>