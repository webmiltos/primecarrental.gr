<footer class="custom-footer ver1">
    <div class="footer-wrapper secondary-color-bg">
        <div class="footer-wrap">
            <div class="footer-top-wrapper">
                <div class="footer-first-wrapper">
                    <div class="footer-logo-wrap">
                        <?php
                        $image = get_field('footer_logo', 'options');
                        $size = 'large';
                        if ($image) : ?>
                            <?php echo wp_get_attachment_image($image['id'], $size); ?>
                        <?php endif; ?>
                    </div>

                    <?php if ( get_field('online_admin_link', 'options') ) : ?>
                        <a class="button round text" href="<?php the_field('online_admin_link', 'options'); ?>">Book Now</a>
                    <?php endif; ?>

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

                <div class="footer-menu-wrap">
                    <span class="footer-menu-title">
                        <?php the_field('footer_version1_first_Title', 'options'); ?>
                    </span>
                    <?php if (have_rows('footer_version1_first_menu', 'options')) : ?>
                        <ul class="menu">
                            <?php while (have_rows('footer_version1_first_menu', 'options')) : the_row(); ?>
                                <?php $choices = get_sub_field('menu_item_choices'); ?>
                                <?php $title = false; ?>
                                <?php $link = false; ?>
                                <?php $blank = false; ?>
                                <?php
                                if ($choices) : ?>
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
                                <li class="menu-item menu-item-type-post_type menu-item-object-page page_item">
                                    <?php if ($link) : ?>
                                        <a href="<?php the_sub_field('menu_item_custom_link'); ?>" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
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
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="footer-menu-wrap">
                    <span class="footer-menu-title">
                        <?php the_field('footer_version1_second_title', 'options'); ?>
                    </span>
                    <?php if (have_rows('footer_version1_second_menu', 'options')) : ?>
                        <ul class="menu">
                            <?php while (have_rows('footer_version1_second_menu', 'options')) : the_row(); ?>
                                <?php $choices = get_sub_field('menu_item_choices'); ?>
                                <?php $title = false; ?>
                                <?php $link = false; ?>
                                <?php $blank = false; ?>
                                <?php
                                if ($choices) : ?>
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
                                <li class="menu-item menu-item-type-post_type menu-item-object-page page_item">
                                    <?php if ($link) : ?>
                                        <a href="<?php the_sub_field('menu_item_custom_link'); ?>" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
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
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>

                <div class="footer-menu-wrap">
                    <span class="footer-menu-title">
                        <?php _e('Επικοινωνήστε Μαζί Μας', 'gocreations'); ?>
                    </span>

                    <ul class="menu">

                         <?php if (get_field('address', 'options')) : ?>
                            <li class="contact-footer-items-wrapper">
                                <span class="icon-map-pin"></span>
                                <a target="_blank" href="<?php the_field('address_link', 'options') ?>" class="contact-item footer">
                                    <?php the_field('address', 'options'); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (get_field('address_2', 'options')) : ?>
                            <li class="contact-footer-items-wrapper space-left">
                                <!-- <span class="footer-info-cont">A</span> -->
                                <a target="_blank" href="<?php the_field('address_2_link', 'options') ?>" class="contact-item footer">
                                    <?php the_field('address_2', 'options'); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (get_field('mobile', 'options')) : ?>
                            <li class="contact-footer-items-wrapper">
                                <span class="icon-phone-call"></span>
                                <a href="tel:<?php the_field('mobile', 'options') ?>" class="contact-item footer" target="_blank">
                                    <?php the_field('mobile', 'options'); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (get_field('phone_1', 'options')) : ?>
                            <li class="contact-footer-items-wrapper space-left">
                                <!-- <span class="phone-icon"></span> -->
                                <a href="tel:<?php the_field('phone_1', 'options') ?>" class="contact-item footer" target="_blank">
                                    <?php the_field('phone_1', 'options'); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (get_field('phone_2', 'options')) : ?>
                            <li class="contact-footer-items-wrapper space-left">
                                <!-- <span class="  footer-info-cont">T</span> -->
                                <a href="tel:<?php the_field('phone_2', 'options') ?>" class="contact-item footer" target="_blank">
                                    <?php the_field('phone_2', 'options'); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (get_field('mobile_2', 'options')) : ?>
                            <li class="contact-footer-items-wrapper space-left">
                                <!-- <span class="  footer-info-cont">M</span> -->
                                <a href="tel:<?php the_field('mobile_2', 'options') ?>" class="contact-item footer" target="_blank">
                                    <?php the_field('mobile_2', 'options'); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (get_field('email', 'options')) : ?>
                            <li class="contact-footer-items-wrapper">
                                <span class="icon-mail"></span>
                                <a class="contact-item footer" href="mailto:<?php the_field('email', 'options'); ?>">
                                    <?php the_field('email', 'options'); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>


                </div>
            </div>

        </div>
    </div>

    <?php if ( get_field('payments_image', 'options') ) : ?>
        <div class="payments-wrapper container">
            <p class="text"> <?php echo __('Secure Payments', 'gocreations'); ?></p>
            <div class="footer-logo-wrap">
                <?php
                $image = get_field('payments_image', 'options');
                $size = 'full';
                if ($image) : ?>
                    <?php echo wp_get_attachment_image($image['id'], $size); ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    

    <div class="footer-bottom-wrap secondary-color-bg">
        <div class="border-top footer">
            <span class="footer-copyright">&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?></span>
            <span class="footer-signature"><?php _e('Σχεδιάστηκε & Αναπτύχθηκε από την ', 'gocreations'); ?> <a href="https://gocreations.gr" rel="noopener noreferrer" target="_blank" title="gocreations">go creations</a></span>
        </div>
    </div>


</footer>