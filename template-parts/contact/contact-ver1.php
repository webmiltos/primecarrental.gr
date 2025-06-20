<?php $locale = get_locale(); ?>
<section class="contact-outside-wrapper ver1">

    <div class="contact-wrapper ver1">
        <?php if (get_sub_field('pretitle') || get_sub_field('title') && false) : ?>
            <!-- <div class="top-center-wrapper">
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
            </div> -->
        <?php endif; ?>

        <div class="contact-content-wrapper">

            <div class="faqs-left-wrapper secondary-color-bg">

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


                <ul>
                    <?php if ( get_field('email', 'options') ) : ?>
                        <a class="text" href="mailto:<?php the_field('email', 'options'); ?>">
                            <li> <?php the_field('email', 'options'); ?> </li>
                        </a>
                    <?php endif; ?>
                    <?php if ( get_field('phone_1', 'options') ) : ?>
                        <a class="text" href="tel:<?php the_field('phone_1', 'options'); ?>">
                            <li> <?php the_field('phone_1', 'options'); ?></li>
                        </a>
                    <?php endif; ?>
                    <?php if ( get_field('phone_2', 'options') ) : ?>
                        <a class="text" href="tel:<?php the_field('phone_2', 'options'); ?>">
                            <li> <?php the_field('phone_2', 'options'); ?></li>
                        </a>
                    <?php endif; ?>
                    <?php if ( get_field('mobile', 'options') ) : ?>
                        <a class="text" href="tel:<?php the_field('mobile', 'options'); ?>">
                            <li> <?php the_field('mobile', 'options'); ?></li>
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('mobile_2', 'options')) : ?>
                        <a class="text" href="tel:<?php the_field('mobile_2', 'options'); ?>">
                            <li>
                                <?php the_field('mobile_2', 'options'); ?>
                            </li>
                        </a>
                    <?php endif; ?>
                </ul>



                <!-- extra -->

                <div class="buttons-wrap">
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
                                echo '<span class="find-us">';
                                _e('Βρείτε μας στον χάρτη', 'gocreations');
                                echo '</span>';
                                ?>
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
                    <?php if (get_field('address_2_link', 'options')) : ?>
                        <div class="border-btn-wrapper margin-top">
                            <a class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>" href="<?php the_field('address_2_link', 'options') ?>" target="_blank">
                                <?php
                                echo '<span class="find-us">';
                                _e('Βρείτε μας στον χάρτη', 'gocreations');
                                echo '</span>';
                                ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if ( get_field('facebook', 'options') || get_field('instagram', 'options') || get_field('twitter', 'options') ) : ?>
                    <div class="follow-wrapper">
                        <div class="text">Follow Us</div>
                        <div class="footer-socials-wrap-bot">
                            <?php if (get_field('facebook', 'options')) : ?>
                                <a href="<?php the_field('facebook', 'options') ?>" class="social-btn  " target="_blank">
                                    <span class="icon-facebook"></span>
                                </a>
                            <?php endif; ?>
    
                            <?php if (get_field('instagram', 'options')) : ?>
                                <a href="<?php the_field('instagram', 'options') ?>" class="social-btn  " target="_blank">
                                    <span class="icon-instagram"></span>
                                </a>
                            <?php endif; ?>
    
                            <?php if (get_field('twitter', 'options')) : ?>
                                <a href="<?php the_field('twitter', 'options') ?>" class="social-btn  " target="_blank">
                                    <span class="icon-twitter"></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

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

        </div>


    </div>
</section>