<div class="mob-header ver1">
    <div class="header-wrap-mobile">

        <div class="header-logo-wrap mob">
            <a class="headerLogo" href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                $image = get_field('mobile_logo', 'options');
                if (!empty($image)) : ?>
                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </a>
        </div>

        <?php
        $btnType = get_field('button_type', 'options');
        if ($btnType == "50") : ?>
            <?php $btnStyle = "round" ?>
        <?php elseif ($btnType == "corner") : ?>
            <?php $btnStyle = "corner" ?>
        <?php endif; ?>
        <?php if (get_field('request_link', 'options')) : ?>
            <a href="<?php the_field('request_link', 'options'); ?>" class="border-btn-wrap center secondary-color-bg hover color-white <?php echo $btnStyle; ?>">
                <?php _e('Book Now', 'gocreations'); ?>
            </a>
        <?php else : ?>
            <a href="<?php the_field('header_button_link', 'options'); ?>" class="border-btn-wrap center secondary-color-bg hover color-white <?php echo $btnStyle; ?>">
                <?php the_field('header_button_text', 'options'); ?>
            </a>
        <?php endif; ?>

        <div class="mob-header-ver1-right-wrap">
            <!-- <div class="extra-header-icon">
                <a class="text light medium white" href="tel:<?php the_field('phone_1', 'options'); ?>">
                    <span class="icon-phone-call-black"></span>
                </a>
            </div> -->

            <div class="burger-menu-wrap-mob">
                <div class="burger-menu third-color burger-third-color">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-mob">
        <div class="menu-mob-wrap secondary-color-bg">


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
                                    <a href="<?php the_sub_field('menu_item_custom_link'); ?>" class="white" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
                                        <?php the_sub_field('menu_item_title'); ?>
                                    </a>
                                <?php else : ?>
                                    <?php
                                    $post_object = get_sub_field('menu_item_link');
                                    if ($post_object) :
                                        $post = $post_object;
                                        setup_postdata($post); ?>
                                        <a href="<?php the_permalink(); ?>" class="white" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
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
                                                        <a href="<?php the_sub_field('submenu_item_custom_link'); ?>" class="white" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
                                                            <?php the_sub_field('submenu_item_title'); ?>
                                                        </a>
                                                    <?php else : ?>
                                                        <?php
                                                        $post_object = get_sub_field('submenu_item_link');
                                                        if ($post_object) :
                                                            $post = $post_object;
                                                            setup_postdata($post); ?>
                                                            <a href="<?php the_permalink(); ?>" class="white" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
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

                <div class="mobile-menu-book-now">
                    <a target=" _blank" href="<?php the_field('online_admin_link', 'options'); ?>" class="border-btn-wrap center secondary-color-bg hover color-white round">
                        Book Now
                    </a>
                </div>
            </div>
            <?php if (is_active_sidebar('wpml-custom-widget-mobile')) : ?>
                <div class="header-lang-switcher mob">
                    <?php dynamic_sidebar('wpml-custom-widget-mobile'); ?>
                </div>
            <?php endif; ?>

            <div class="mob-menu-bottom">

                <?php if ( get_field('facebook', 'options') || get_field('instagram', 'options') || get_field('twitter', 'options') ) : ?>
                    <div class="footer-menu-wrap">
                        <span><?php _e('Follow Us', 'gocreations'); ?></span>
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
                    </div>
                <?php endif; ?>
            
                <div class="footer-menu-wrap">

                    <?php if (get_field('email', 'options')) : ?>
                        <a class="contact-item" href="mailto:<?php the_field('email', 'options'); ?>">
                            <?php the_field('email', 'options'); ?>
                        </a>
                    <?php endif; ?>

                    <?php if (get_field('phone_1', 'options')) : ?>
                        <a href="tel:<?php the_field('phone_1', 'options') ?>" class="contact-item footer  " target="_blank">
                            <?php the_field('phone_1', 'options'); ?>
                        </a>
                    <?php endif; ?>

                    <?php if (get_field('phone_2', 'options')) : ?>
                        <a href="tel:<?php the_field('phone_2', 'options') ?>" class="contact-item footer  " target="_blank">
                            <?php the_field('phone_2', 'options'); ?>
                        </a>

                    <?php endif; ?>

                    <?php if (get_field('mobile', 'options')) : ?>
                        <a href="tel:<?php the_field('mobile', 'options') ?>" class="contact-item footer  " target="_blank">
                            <?php the_field('mobile', 'options'); ?>
                        </a>
                    <?php endif; ?>



                    <?php if (get_field('address_2', 'options')) : ?>
                        <a href="" class="contact-item footer">
                            <?php the_field('address_2', 'options'); ?>
                        </a>
                    <?php endif; ?>

                    <?php if (get_field('mobile_2', 'options')) : ?>
                        <a href="tel:<?php the_field('mobile_2', 'options') ?>" class="contact-item footer  " target="_blank">
                            <?php the_field('mobile_2', 'options'); ?>
                        </a>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</div>