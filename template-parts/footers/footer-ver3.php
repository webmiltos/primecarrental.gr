<footer class="custom-footer ver3">
    <div class="footer-wrapper secondary-color-bg">
        <div class="footer-wrap">

            <div class="ver3-footer-top-wrap">
                <div class="footer-logo-wrap">
                    <?php
                    $image = get_field('footer_logo', 'options');
                    $size = 'large';
                    if ($image) : ?>
                        <?php echo wp_get_attachment_image($image['id'], $size); ?>
                    <?php endif; ?>
                </div>
                <?php if (have_rows('footer_version3_top_menu', 'options')) : ?>
                    <ul class="menu">
                        <?php while (have_rows('footer_version3_top_menu', 'options')) : the_row(); ?>
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
            </div>

            <div class="footer-top-wrapper mid-container padding-top">

                <div class="footer-menu-wrap">
                    <h4 class="footer-menu-title white">
                        <?php the_field('footer_version3_first_Title', 'options'); ?>
                    </h4>
                    <?php if (have_rows('footer_version3_first_menu', 'options')) : ?>
                        <ul class="menu">
                            <?php while (have_rows('footer_version3_first_menu', 'options')) : the_row(); ?>
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
                    <h4 class="footer-menu-title white">
                        <?php the_field('footer_version3_second_title', 'options'); ?>
                    </h4>
                    <?php if (have_rows('footer_version3_second_menu', 'options')) : ?>
                        <ul class="menu">
                            <?php while (have_rows('footer_version3_second_menu', 'options')) : the_row(); ?>
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
                <!-- extra  start-->
                <!-- <div class="footer-menu-wrap">
                    <span class="footer-menu-title white">
                        <?php the_field('footer_version3_third_title', 'options'); ?>
                    </span>
                    <?php if (have_rows('footer_version3_third_menu', 'options')) : ?>
                        <ul class="menu">
                            <?php while (have_rows('footer_version3_third_menu', 'options')) : the_row(); ?>
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
                </div> -->
                <!-- extra  end-->

                <div class="footer-menu-wrap">
                    <h4 class="footer-menu-title white margin-bottom">
                        <?php _e('Contact Us', 'gocreations'); ?>
                    </h4>

                    <?php if (get_field('address', 'options')) : ?>
                        <div class="contact-footer-items-wrapper">
                            <span class="icon-map-pin white"></span>
                            <a href="<?php the_field('find_us_on_map_link', 'options') ?>" class="contact-item footer white">
                                <?php the_field('address', 'options'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('phone_1', 'options')) : ?>
                        <div class="contact-footer-items-wrapper">
                            <span class="icon-phone-call white"></span>
                            <a href="tel:<?php the_field('phone_1', 'options') ?>" class="contact-item footer white" target="_blank">
                                <?php the_field('phone_1', 'options'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('phone_2', 'options')) : ?>
                        <div class="contact-footer-items-wrapper">
                            <span class="icon-phone-call white"></span>
                            <a href="tel:<?php the_field('phone_2', 'options') ?>" class="contact-item footer white" target="_blank">
                                <?php the_field('phone_2', 'options'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('mobile', 'options')) : ?>
                        <div class="contact-footer-items-wrapper">
                            <span class="icon-phone-call white"></span>
                            <a href="tel:<?php the_field('mobile', 'options') ?>" class="contact-item footer white" target="_blank">
                                <?php the_field('mobile', 'options'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('mobile_2', 'options')) : ?>
                        <div class="contact-footer-items-wrapper">
                            <span class="icon-phone-call white"></span>
                            <a href="tel:<?php the_field('mobile_2', 'options') ?>" class="contact-item footer white" target="_blank">
                                <?php the_field('mobile_2', 'options'); ?>
                            </a>
                        </div>
                    <?php endif; ?>


                    <?php if (get_field('email', 'options')) : ?>
                        <div class="contact-footer-items-wrapper">
                            <span class="icon-mail white"></span>
                            <a class="contact-item footer white" href="mailto:<?php the_field('email', 'options'); ?>">
                                <?php the_field('email', 'options'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <!-- extra start -->

                    <div class="contact-footer-items-wrapper greece-image">
                        <?php $image = get_field('extra_footer_image', 'options');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                        <?php endif; ?>
                    </div>

                    <?php if (get_field('extra_members_text', 'options')) : ?>
                        <div class="contact-footer-items-wrapper margin-bottom">
                            <div class="contact-item footer white">
                                <?php the_field('extra_members_text', 'options'); ?>
                            </div>
                        </div>
                    <?php endif; ?>


                    <?php if (get_field('cars_footer_text', 'options')) : ?>
                        <div class="contact-footer-items-wrapper">
                            <div class="contact-item footer white">
                                <?php the_field('cars_footer_text', 'options'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('scooters_footer_text', 'options')) : ?>
                        <div class="contact-footer-items-wrapper">
                            <div class="contact-item footer white">
                                <?php the_field('scooters_footer_text', 'options'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="contact-footer-items-wrapper paypal-image">
                        <?php $image = get_field('extra_footer_image2', 'options');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                        <?php endif; ?>
                    </div>

                </div>




                <?php if ( get_field('tripadvisor', 'options') || get_field('linkedin', 'options') || get_field('youtube', 'options') || get_field('google', 'options') || get_field('pinterest', 'options') || get_field('facebook', 'options') || get_field('instagram', 'options') || get_field('twitter', 'options') ) : ?>
                    <div class="footer-menu-wrap">
                            
                        
                        <h4 class="footer-menu-title white margin-bottom">
                            <?php _e('Follow Us', 'gocreations'); ?>
                        </h4>
                        
                        <div class="footer-socials-wrap-bot">
                            <?php if (get_field('facebook', 'options')) : ?>
                                <a href="<?php the_field('facebook', 'options') ?>" class="social-btn white" target="_blank">
                                    <span class="icon-facebook"></span>
                                </a>
                            <?php endif; ?>
                            
                            <?php if (get_field('instagram', 'options')) : ?>
                                <a href="<?php the_field('instagram', 'options') ?>" class="social-btn white" target="_blank">
                                    <span class="icon-instagram"></span>
                                </a>
                            <?php endif; ?>
                                
                            <?php if (get_field('twitter', 'options')) : ?>
                                <a href="<?php the_field('twitter', 'options') ?>" class="social-btn white" target="_blank">
                                    <span class="icon-twitter"></span>
                                </a>
                            <?php endif; ?>

                            <?php if (get_field('tripadvisor', 'options')) : ?>
                                <a href="<?php the_field('tripadvisor', 'options') ?>" class="social-btn white" target="_blank">
                                    <span class="icon-tripadvisor"></span>
                                </a>
                            <?php endif; ?>
                            
                            <?php if (get_field('google', 'options')) : ?>
                                <a href="<?php the_field('google', 'options') ?>" class="social-btn white" target="_blank">
                                    <span class="icon-google"></span>
                                </a>
                            <?php endif; ?>
                                
                            <?php if (get_field('pinterest', 'options')) : ?>
                                <a href="<?php the_field('pinterest', 'options') ?>" class="social-btn white" target="_blank">
                                    <span class="icon-pinterest"></span>
                                </a>
                            <?php endif; ?>
                                    
                            <?php if (get_field('linkedin', 'options')) : ?>
                                <a href="<?php the_field('linkedin', 'options') ?>" class="social-btn white" target="_blank">
                                    <span class="icon-linkedin"></span>
                                </a>
                            <?php endif; ?>
                                        
                            <?php if (get_field('youtube', 'options')) : ?>
                                <a href="<?php the_field('youtube', 'options') ?>" class="social-btn white" target="_blank">
                                    <span class="icon-youtube"></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="rating-wrapper">
                        <?php $image = get_field('rating_image', 'options');
                        if (!empty($image)) : ?>
                            <a href="<?php the_field('rating_link', 'options') ?>" class="" target="_blank">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>


            <?php if ( get_field('payments_image', 'options') ) : ?>
                <div class="payments-wrapper container">
                    <p class="white"> <?php echo __('Secure Payments', 'gocreations'); ?></p>
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


    <div class="footer-bottom-wrap secondary-color-bg">
        <div class="border-top footer">
            <span class="footer-copyright">&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>
            </span>
            <span class="footer-signature"><?php _e('Designed & Developed by ', 'gocreations'); ?> <a href="https://gocars.online" rel="noopener noreferrer" target="_blank" title="gocreations">GOCARS.online</a></span>
        </div>
    </div>


</footer>


<style>
    .rating-wrapper img {
        margin-top: 25px;
        left: -5px;
        position: relative;
        max-width: 250px;
    }
</style>