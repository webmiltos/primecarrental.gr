<footer class="custom-footer ver2">
    <div class="footer-wrapper secondary-color-bg">
        <div class="footer-ver2-wrap">

            <div class="footer-logo-wrap center margin-bottom-big">
                <?php
                $image = get_field('footer_logo', 'options');
                $size = 'large';
                if ($image) : ?>
                    <?php echo wp_get_attachment_image($image['id'], $size); ?>
                <?php endif; ?>
            </div>


            <div class="footer-ver2-info-wrapper">

                <?php if (get_field('email', 'options')) : ?>
                    <div class="contact-footer-items-wrapper">
                        <span class="white footer-info-cont-title"><?php _e('Email', 'gocreations'); ?></span>
                        <a class="contact-item footer white" href="mailto:<?php the_field('email', 'options'); ?>">
                            <?php the_field('email', 'options'); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="contact-footer-items-wrapper">
                    <span class="white footer-info-cont-title"><?php _e('Phone', 'gocreations'); ?></span>

                    <div class="contact-footer-items-wrap">


                        <?php if (get_field('mobile', 'options')) : ?>
                            <a href="tel:<?php the_field('mobile', 'options') ?>" class="contact-item footer white" target="_blank">
                                <span class="icon-mobile"></span>
                                <span class="icons-wrapper">
                                    <?php the_field('mobile', 'options'); ?>
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
                        <?php if (get_field('mobile_2', 'options')) : ?>
                            <a href="tel:<?php the_field('mobile_2', 'options') ?>" class="contact-item footer white" target="_blank">
                                <span class="icon-mobile"></span>
                                <span class="icons-wrapper">
                                    <?php the_field('mobile_2', 'options'); ?>
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
                        <?php if (get_field('phone_1', 'options')) : ?>
                            <a href="tel:<?php the_field('phone_1', 'options') ?>" class="contact-item footer white" target="_blank">
                                <span class="icon-phone"></span>
                                <?php the_field('phone_1', 'options'); ?>
                            </a>
                        <?php endif; ?>
                        <?php if (get_field('phone_2', 'options')) : ?>
                            <a href="tel:<?php the_field('phone_2', 'options') ?>" class="contact-item footer white" target="_blank">
                                <span class="icon-phone"></span>
                                <?php the_field('phone_2', 'options'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if (get_field('address', 'options')) : ?>
                    <div class="contact-footer-items-wrapper">
                        <span class="white footer-info-cont-title"><?php _e('Address', 'gocreations'); ?></span>
                        <?php if (get_field('google_maps_address_link', 'options')) : ?>
                            <a href="<?php the_field('google_maps_address_link', 'options') ?>" class="contact-item footer white center">
                                <?php the_field('address', 'options'); ?>
                            </a>
                        <?php else : ?>
                            <a href="<?php the_field('find_us_on_map_link', 'options') ?>" class="contact-item footer white center">
                                <?php the_field('address', 'options'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="ver2-footer-bot-wrap">
                <?php if (have_rows('footer_version2_menu', 'options')) : ?>
                    <ul class="menu">
                        <?php while (have_rows('footer_version2_menu', 'options')) : the_row(); ?>
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
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
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

            <?php if ( get_field('payments_image', 'options') ) : ?>
                <div class="payments-wrapper container">
                    <p class="secure-payments-text"> <?php echo __('Secure Payments', 'gocreations'); ?></p>
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

        </div>
    </div>

    <div class="footer-bottom-wrap dark-color-bg">
        <div class="footer">
            <span class="footer-copyright"> Copyright <?php echo date("Y"); ?> &copy; <?php echo get_bloginfo('name'); ?> | <?php _e('All Rights Reserved', 'gocreations'); ?></span>
            <span class="footer-signature"><?php _e('Designed & Developed by ', 'gocreations'); ?> <a href="https://gocreations.gr" rel="noopener noreferrer" target="_blank" title="gocreations">go creations</a></span>
        </div>
    </div>


</footer>