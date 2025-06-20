<div class="mob-header ver3">
    <div class="header-wrap-mobile">


        <?php if (get_field('header_button_link', 'options')) : ?>
            <a href="<?php the_field('header_button_link', 'options'); ?>" class="book-now-button">
                <?php the_field('header_button_text', 'options'); ?>
            </a>
        <?php endif; ?>



        <div class="header-logo-wrap mob">
            <a class="headerLogo" href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                $image = get_field('mobile_logo', 'options');
                if (!empty($image)) : ?>
                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </a>
        </div>

        <div class="mob-header-right-wrap">

            <?php if (get_field('phone_1', 'options')) : ?>
                <div class="instant-call-icon mob">
                    <a class="text light medium white" href="tel:<?php the_field('phone_1', 'options'); ?>">
                        <span class="icon-phone-call"></span>
                    </a>
                </div>

            <?php elseif (get_field('mobile', 'options')): ?>
                <div class="instant-call-icon mob">
                    <a class="text light medium white" href="tel:<?php the_field('mobile', 'options'); ?>">
                        <span class="icon-phone-call"></span>
                    </a>
                </div>
            <?php endif; ?>
            <?php if (get_field('request_link', 'options')) : ?>
                <a href="<?php the_field('request_link', 'options'); ?>" class="border-btn-wrap center secondary-color-bg white">
                    <?php _e('Επικοινωνίστε Μαζί Μας!', 'gocreations'); ?>
                </a>
            <?php endif; ?>
            <div class="burger-menu-wrap-mob">
                <div class="burger-menu main-color">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-mob">
        <div class="menu-mob-wrap white">

            <div class="menu-main-menu-container">
                <?php if (have_rows('header_mobile_menu', 'options')) : ?>
                    <ul class="mob-menu">
                        <?php while (have_rows('header_mobile_menu', 'options')) : the_row(); ?>
                            <?php $choices = get_sub_field('menu_item_choices'); ?>
                            <?php $submenu = false; ?>
                            <?php $title = false; ?>
                            <?php $link = false; ?>
                            <?php $blank = false; ?>
                            <?php
                            if ($choices) : ?>
                                <?php if (in_array('submenu', $choices)) : ?>
                                    <?php $submenu = true; ?>
                                <?php endif; ?>
                                <?php if (in_array('custom', $choices)) : ?>
                                    <?php $title = true; ?>
                                <?php endif; ?>
                                <?php if (in_array('custom_link', $choices)) : ?>
                                    <?php $link = true; ?>
                                <?php endif; ?>
                                <?php if (in_array('blank', $choices)) : ?>
                                    <?php $blank = true; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page page_item <?php if ($submenu) : ?> menu-item-has-children <?php endif; ?>">
                                <?php if ($link) : ?>
                                    <a href="<?php the_sub_field('menu_item_custom_link'); ?>" class="main-color" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
                                        <?php the_sub_field('menu_item_title'); ?>
                                    </a>
                                <?php else : ?>
                                    <?php
                                    $post_object = get_sub_field('menu_item_link');
                                    if ($post_object) :
                                        $post = $post_object;
                                        setup_postdata($post); ?>
                                        <a href="<?php the_permalink(); ?>" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
                                            <?php if ($title) : ?>
                                                <?php the_sub_field('menu_item_title'); ?>
                                            <?php else : ?>
                                                <?php the_title(); ?>
                                            <?php endif; ?>
                                        </a>
                                    <?php
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                <?php endif; ?>
                                <?php if ($submenu) : ?>
                                    <ul class="sub-menu-mob">
                                        <?php if (have_rows('submenu', 'options')) : ?>
                                            <?php while (have_rows('submenu', 'options')) : the_row(); ?>
                                                <?php $choices = get_sub_field('submenu_item_choices'); ?>
                                                <?php $title = false; ?>
                                                <?php $sublink = false; ?>
                                                <?php $blank = false; ?>
                                                <?php if ($choices) : ?>
                                                    <?php foreach ($choices as $choice) : ?>
                                                        <?php if ($choice == "custom") : ?>
                                                            <?php $title = true; ?>
                                                        <?php endif; ?>
                                                        <?php if ($choice == "custom_link") : ?>
                                                            <?php $sublink = true; ?>
                                                        <?php endif; ?>
                                                        <?php if ($choice == "blank") : ?>
                                                            <?php $blank = true; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page page_item">
                                                    <?php if ($sublink) : ?>
                                                        <a href="<?php the_sub_field('submenu_item_custom_link'); ?>" class="text-color" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
                                                            <?php the_sub_field('submenu_item_title'); ?>
                                                        </a>
                                                    <?php else : ?>
                                                        <?php
                                                        $post_object = get_sub_field('submenu_item_link');
                                                        if ($post_object) :
                                                            $post = $post_object;
                                                            setup_postdata($post); ?>
                                                            <a href="<?php the_permalink(); ?>" class="text-color" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
                                                                <?php if ($title) : ?>
                                                                    <?php the_sub_field('submenu_item_title'); ?>
                                                                <?php else : ?>
                                                                    <?php the_title(); ?>
                                                                <?php endif; ?>
                                                            </a>
                                                        <?php
                                                            wp_reset_postdata();
                                                        endif;
                                                        ?>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <?php if (get_field('header_button_link', 'options')) : ?>
                <div class="mob-burger-btn-request">
                    <?php
                        $btnType = get_field('button_type', 'options');
                        if ($btnType == "50") : ?>
                        <?php $btnStyle = "round" ?>
                    <?php elseif ($btnType == "corner") : ?>
                        <?php $btnStyle = "corner" ?>
                    <?php endif; ?>
                    <a href="<?php the_field('header_button_link', 'options'); ?>" class="border-btn-wrap center third-color-bg hover color-white <?php echo $btnStyle; ?>">
                        <?php the_field('header_button_text', 'options'); ?>
                    </a>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('wpml-custom-widget-mobile')) : ?>
                <div class="header-lang-switcher mob">
                    <?php dynamic_sidebar('wpml-custom-widget-mobile'); ?>
                </div>
            <?php endif; ?>

            <div class="mob-menu-bottom">
                <span class="footer-menu-title white margin-bottom">
                    <?php _e('Επικοινωνίστε Μαζί Μας!', 'gocreations'); ?>
                </span>

                <?php if (get_field('address', 'options')) : ?>
                    <div class="contact-footer-items-wrapper">
                        <span class="footer-info-cont icon-map-pin"></span>
                        <span class="contact-item footer white">
                            <a href="<?php the_field('google_maps_address_link', 'options') ?>">
                                <?php the_field('address', 'options'); ?>
                            </a>
                        </span>
                    </div>
                <?php endif; ?>

                <div class="contact-footer-items-wrapper">
                    <span class="footer-info-cont icon-phone-call"></span>
                    <div class="contact-footer-items-wrap">
                        <?php if (get_field('mobile', 'options')) : ?>
                            <a href="tel:<?php the_field('mobile', 'options') ?>" class="contact-item footer white" target="_blank">
                                <?php the_field('mobile', 'options'); ?>
                            </a>
                        <?php endif; ?>
                        <?php if (get_field('phone_1', 'options')) : ?>
                            <a href="tel:<?php the_field('phone_1', 'options') ?>" class="contact-item footer white" target="_blank">
                                <?php the_field('phone_1', 'options'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if (get_field('email', 'options')) : ?>
                    <div class="contact-footer-items-wrapper">
                        <span class="footer-info-cont icon-mail"></span>
                        <a class="contact-item footer white" href="mailto:<?php the_field('email', 'options'); ?>">
                            <?php the_field('email', 'options'); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facebook', 'options') || get_field('instagram', 'options') || get_field('twitter', 'options')) : ?>
                    <span class="header-menu-title white small-margin-bot">
                        <?php _e('Follow Us', 'gocreations'); ?>
                    </span>

                    <div class="footer-socials-wrap-bot">
                        <?php if (get_field('instagram', 'options')) : ?>
                            <a href="<?php the_field('instagram', 'options') ?>" class="social-btn white" target="_blank">
                                <span class="icon-instagram"></span>
                            </a>
                        <?php endif; ?>

                        <?php if (get_field('facebook', 'options')) : ?>
                            <a href="<?php the_field('facebook', 'options') ?>" class="social-btn white" target="_blank">
                                <span class="icon-facebook"></span>
                            </a>
                        <?php endif; ?>

                        <?php if (get_field('twitter', 'options')) : ?>
                            <a href="<?php the_field('twitter', 'options') ?>" class="social-btn white" target="_blank">
                                <span class="icon-twitter"></span>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </div>
</div>