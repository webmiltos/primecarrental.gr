<!-- scrolled add for amea on mob-header -->
<div class="mob-header ver2">
    <div class="header-wrap-mobile">
        <div class="header-logo-wrap mob">
            <a class="headerLogo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php
                    $image = get_field('mobile_logo','options');
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?> mob-logo"/>
                <?php endif; ?>
            </a>
        </div>
        <div class="burger-menu-wrap-mob">
            <div class="burger-menu third-color burger-third-color">
                <div></div>
            </div>
        </div>
        <?php if ( get_field('request_link','options') ) : ?>
            <?php
            $btnType = get_field('button_type','options');
            if ( $btnType == "50" ) : ?>
                <?php $btnStyle = "round" ?>
            <?php elseif($btnType == "corner"): ?>
                <?php $btnStyle = "corner" ?>
            <?php endif; ?>
            <a href="<?php the_field('request_link','options'); ?>" class="border-btn-wrap center secondary-color-bg hover color-white <?php echo $btnStyle; ?>">
                <?php _e('Book Now','gocreations'); ?>
            </a>
        <?php endif; ?>
    </div>
    <div class="menu-mob">
        <div class="menu-mob-wrap secondary-color-bg">


            <div class="menu-main-menu-container">
                <?php if( have_rows('header_mobile_menu','options') ): ?>
                    <ul class="mob-menu">
                        <?php while( have_rows('header_mobile_menu','options') ): the_row(); ?>
                        <?php $choices = get_sub_field('menu_item_choices'); ?>
                        <?php $submenu = false; ?>
                        <?php $title = false; ?>
                        <?php $link = false; ?>
                        <?php $blank = false; ?>
                        <?php
                        if( $choices ): ?>
                            <?php if ( in_array('submenu', $choices) ) : ?>
                                <?php $submenu = true; ?>
                            <?php endif; ?>
                            <?php if ( in_array('custom', $choices) ) : ?>
                                <?php $title = true; ?>
                            <?php endif; ?>
                            <?php if ( in_array('custom_link', $choices) ) : ?>
                                <?php $link = true; ?>
                            <?php endif; ?>
                            <?php if ( in_array('blank', $choices) ) : ?>
                                <?php $blank = true; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page page_item <?php if ( $submenu ) : ?> menu-item-has-children <?php endif; ?>">
                            <?php if ( $link ) : ?>
                                    <a href="<?php the_sub_field('menu_item_custom_link'); ?>" class="white" <?php if ( $blank ) : ?> target="_blank"<?php endif; ?>>
                                        <?php the_sub_field('menu_item_title'); ?>
                                    </a>
                            <?php else: ?>
                                <?php 
                                $post_object = get_sub_field('menu_item_link');
                                if($post_object) :
                                    $post = $post_object;
                                    setup_postdata( $post ); ?>
                                    <a href="<?php the_permalink(); ?>" class="white" <?php if ( $blank ) : ?> target="_blank"<?php endif; ?>>
                                        <?php if ( $title ) : ?>
                                            <?php the_sub_field('menu_item_title'); ?>
                                        <?php else: ?>
                                            <?php the_title(); ?>
                                        <?php endif; ?>
                                    </a>
                                    <?php
                                    wp_reset_postdata();
                                endif;
                                ?>
                            <?php endif; ?>
                            <?php if ( $submenu ) : ?>
                                <ul class="sub-menu-mob">
                                    <?php if( have_rows('submenu','options') ): ?>
                                        <?php while( have_rows('submenu','options') ): the_row(); ?>
                                            <?php $choices = get_sub_field('submenu_item_choices'); ?>
                                            <?php $title = false; ?>
                                            <?php $sublink = false; ?>
                                            <?php $blank = false; ?>
                                            <?php if( $choices ): ?>
                                                <?php foreach( $choices as $choice ): ?>
                                                <?php if ( $choice == "custom" ) : ?>
                                                        <?php $title = true; ?>
                                                <?php endif; ?>
                                                <?php if ( $choice == "custom_link" ) : ?>
                                                        <?php $sublink = true; ?>
                                                <?php endif; ?>
                                                <?php if ( $choice == "blank" ) : ?>
                                                        <?php $blank = true; ?>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page page_item">
                                                <?php if ( $sublink ) : ?>
                                                        <a href="<?php the_sub_field('submenu_item_custom_link'); ?>" class="white" <?php if ( $blank ) : ?> target="_blank"<?php endif; ?>>
                                                            <?php the_sub_field('submenu_item_title'); ?>
                                                        </a>
                                                <?php else: ?>
                                                    <?php 
                                                    $post_object = get_sub_field('submenu_item_link');
                                                    if($post_object) :
                                                        $post = $post_object;
                                                        setup_postdata( $post ); ?>
                                                        <a href="<?php the_permalink(); ?>" class="white" <?php if ( $blank ) : ?> target="_blank"<?php endif; ?>>
                                                            <?php if ( $title ) : ?>
                                                                <?php the_sub_field('submenu_item_title'); ?>
                                                            <?php else: ?>
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

            <div class="faqs-left-wrapper secondary-color-bg mob-info">
                
            
                <?php if( get_field( 'address','options' ) ) : ?>
                    <div class="contact-information-wrapper">
                        <span class="text light white">
                            <?php _e('Find Us','gocreations'); ?>
                        </span>
                        <!-- extra a + delete adress class-->
                       <a href="<?php the_field( 'google_maps_address_link','options' ); ?>" target="_blank">
                            <span class="text regular medium white">
                                <?php the_field( 'address','options' ); ?>
                            </span>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if( get_field( 'phone_1','options' ) || get_field( 'mobile','options' ) ) : ?>
                    <div class="contact-information-wrapper">
                        <span class="text light white">
                            <?php _e('Call Us','gocreations'); ?>
                        </span>
                        <div class="email-telephone-info-wrapper no-line">
                            <a class="text regular medium white" href="tel:<?php the_field( 'phone_1','options' ); ?>">
                                <?php the_field( 'phone_1','options' ); ?>
                            </a>
                            <a class="text regular medium white" href="tel:<?php the_field( 'mobile','options' ); ?>">
                                <?php the_field( 'mobile','options' ); ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if( get_field( 'email','options' ) ) : ?>
                    <div class="contact-information-wrapper">
                        <span class="text regular medium-text white">
                            <?php _e('Email Us','gocreations'); ?>
                        </span>
                        <div class="email-telephone-info-wrapper">
                            <a class="text regular medium email white" href="mailto:<?php the_field( 'email','options' ); ?>">
                                <?php the_field( 'email','options' ); ?>
                            </a>
                        </div>

                    </div>
                <?php endif; ?>
            </div>   
            
            <?php if ( is_active_sidebar( 'wpml-custom-widget-mobile' ) ) : ?>
                <div class="header-lang-switcher mob">
                    <?php dynamic_sidebar( 'wpml-custom-widget-mobile' ); ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('instagram','options') || get_field('facebook','options') || get_field('twitter','options')): ?>

                <div class="mob-menu-bottom">

                    <div class="footer-menu-wrap">

                        <div class="footer-socials-wrap-bot">
                            <?php if (get_field('instagram','options')): ?>
                                <a href="<?php the_field('instagram','options') ?>" class="social-btn white" target="_blank">
                                    <span class="icon-instagram"></span>
                                </a>
                            <?php endif; ?>

                            <?php if (get_field('facebook','options')): ?>
                                <a href="<?php the_field('facebook','options') ?>" class="social-btn white" target="_blank">
                                    <span class="icon-facebook"></span>
                                </a>
                            <?php endif; ?>

                            <?php if (get_field('twitter','options')): ?>
                                <a href="<?php the_field('twitter','options') ?>" class="social-btn white" target="_blank">
                                    <span class="icon-twitter"></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php endif; ?>

        </div>
    </div>
</div>
