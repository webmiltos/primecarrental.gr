<?php $errorVer = get_field('404_design', 'options'); ?>
<?php if ($errorVer == 'design1') : ?>
    <?php $error = true; ?>
<?php elseif ($errorVer == 'design3') : ?>
    <?php $error = true; ?>
<?php else : ?>
    <?php $error = false; ?>
<?php endif; ?>
<header class="custom-header <?php echo (get_field('transparent_header') || ($error && is_404())) ? ' transparent' : ' not-transparent' ?>">
    <?php if (function_exists('the_custom_logo')) : ?>
        <?php if (get_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <div class="header-logos-wrapper">
                <?php
                $image = get_field('header_logo', 'options');
                if (!empty($image)) : ?>
                    <a class="main-logo-wrap main" href="<?php echo esc_url(home_url('/')); ?>">
                        <img class="main-logo" src="<?php echo $image['sizes']['regular']; ?>" alt="<?php echo $image['alt']; ?>logo" />
                    </a>
                <?php endif; ?>
                <?php
                $image = get_field('header_scrolled_logo', 'options');
                if (!empty($image)) : ?>
                    <a class="main-logo-wrap scrolled" href="<?php echo esc_url(home_url('/')); ?>">
                        <img class="main-logo" src="<?php echo $image['sizes']['regular']; ?>" alt="<?php echo $image['alt']; ?>logo" />
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php else : ?>
        <div class="header-logos-wrapper">
            <?php
            $image = get_field('header_logo', 'options');
            if (!empty($image)) : ?>
                <a class="main-logo-wrap main" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="main-logo" src="<?php echo $image['sizes']['regular']; ?>" alt="<?php echo $image['alt']; ?>logo" />
                </a>
            <?php endif; ?>
            <?php
            $image = get_field('header_scrolled_logo', 'options');
            if (!empty($image)) : ?>
                <a class="main-logo-wrap scrolled" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="main-logo" src="<?php echo $image['sizes']['regular']; ?>" alt="<?php echo $image['alt']; ?>logo" />
                </a>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="header-center-wrap">
        <div class="header-menu-wrap">

            <div class="menu-main-menu-container">

                <?php if (have_rows('header_desktop_menu_version1', 'options')) : ?>
                    <ul id="menu-main-menu" class="menu">
                        <?php while (have_rows('header_desktop_menu_version1', 'options')) : the_row(); ?>
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
                                <?php if ($submenu) : ?>
                                    <?php if (get_sub_field('simple_full', 'options')) : ?>

                                        <div class="full-wrapper-submenu">
                                            <div class="full-wrap-submenu">

                                                <div class="full-submenu-image-wrap">
                                                    <?php
                                                    $image = get_sub_field('submenu_main_image', 'options');
                                                    $size = 'medium_large'; // (thumbnail, medium, large, full or custom size)
                                                    if ($image) : ?>
                                                        <img main-image="<?php echo $image['url'] ?>" src='' class='single-image-dropdown'>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="full-wrap-submenu-items">
                                                    <?php if (have_rows('submenu', 'options')) : ?>
                                                        <ul class="full-submenu">
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
                                                                    <?php $hoverimage = get_sub_field('image', 'options'); ?>
                                                                    <?php if ($sublink) : ?>
                                                                        <a href="<?php the_sub_field('submenu_item_custom_link'); ?>" class="menu-item-dropdown-megamenu" image-link="<?php echo $hoverimage['sizes']['large']; ?>" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
                                                                            <?php the_sub_field('submenu_item_title'); ?>
                                                                        </a>
                                                                    <?php else : ?>
                                                                        <?php
                                                                        $post_object = get_sub_field('submenu_item_link');
                                                                        if ($post_object) :
                                                                            $post = $post_object;
                                                                            setup_postdata($post); ?>
                                                                            <a href="<?php the_permalink(); ?>" class="menu-item-dropdown-megamenu" image-link="<?php echo $hoverimage['sizes']['large']; ?>" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
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
                                                        </ul>
                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>

                                    <?php else : ?>
                                        <ul class="sub-menu">
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
                                                            <a href="<?php the_sub_field('submenu_item_custom_link'); ?>" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
                                                                <?php the_sub_field('submenu_item_title'); ?>
                                                            </a>
                                                        <?php else : ?>
                                                            <?php
                                                            $post_object = get_sub_field('submenu_item_link');
                                                            if ($post_object) :
                                                                $post = $post_object;
                                                                setup_postdata($post); ?>
                                                                <a href="<?php the_permalink(); ?>" <?php if ($blank) : ?> target="_blank" <?php endif; ?>>
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
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

            </div>
        </div>
    </div>



    <?php $langHeader = false; ?>
    <?php if (is_active_sidebar('wpml-custom-widget')) : ?>
        <?php $langHeader = true; ?>
    <?php endif; ?>

    <div class="header-right-wrap <?php echo $langHeader == true ? ' lang-header' : ''; ?>">

        <!-- extra  icon right header -->
        <!-- <div class="extra-header-icon">
            <a class="text light medium white" href="tel:<?php the_field('phone_1', 'options'); ?>">
                <span class="icon-phone-call"></span>
            </a>
        </div> -->


        <?php if (is_active_sidebar('wpml-custom-widget')) : ?>
            <div class="header-lang-switcher">
                <?php dynamic_sidebar('wpml-custom-widget'); ?>
            </div>
        <?php endif; ?>
        <?php
        $btnType = get_field('button_type', 'options');
        if ($btnType == "50") : ?>
            <?php $btnStyle = "round" ?>
        <?php elseif ($btnType == "corner") : ?>
            <?php $btnStyle = "corner" ?>
        <?php endif; ?>
        <?php if (get_field('header_button_link', 'options')) : ?>
            <a href="<?php the_field('header_button_link', 'options'); ?>" class="border-btn-wrap white scrolled-black hover-black <?php echo $btnStyle; ?>">
                <?php the_field('header_button_text', 'options'); ?>
            </a>
        <?php endif; ?>
    </div>

</header>