<?php /* Template Name: Single-Location-Template */ ?>

<?php get_header(); ?>

<main class="site-content single-villa">

    <?php $introHeight = false; ?>
    <?php if (get_field('intro_height')) : ?>
        <?php $introHeight = true; ?>
    <?php endif; ?>
    <section class="intro-wrapper location-intro-wrap <?php echo $introHeight ? ' small' : ''; ?>">
        <div class="intro-wrap">

            <div class="single-slider-wrapper swiper-container">
                <div class="swiper-wrapper">
                    <?php $items = 0; ?>
                    <?php
                    $images = get_field('intro_slider');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($images) : ?>
                        <?php foreach ($images as $image) : ?>
                            <?php $items = $items + 1; ?>
                            <div class="swiper-slide">
                                <?php echo wp_get_attachment_image($image['id'], $size); ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="intro-out-wrap-content">

                <div class="intro-content-wrapper small-container show-on-scroll slide-up">
                    <span class="cali pretitle white">
                        <?php the_field('intro_pretitle'); ?>
                    </span>
                    <h1 class="intro-title white margin-bottom">
                        <?php the_field('intro_title'); ?>
                    </h1>
                    <div class="intro-btns-wrapper">

                        <?php if (get_field('intro_button_link')) : ?>
                            <?php
                            $btnType = get_field('button_type', 'options');
                            if ($btnType == "50") : ?>
                                <?php $btnStyle = "round" ?>
                            <?php elseif ($btnType == "corner") : ?>
                                <?php $btnStyle = "corner" ?>
                            <?php endif; ?>
                            <div class="border-btn-wrapper">
                                <a class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>" href="<?php the_field('intro_button_link') ?>">
                                    <?php if (get_field('intro_button_text')) : ?>
                                        <?php the_field('intro_button_text') ?>
                                    <?php else : ?>
                                        <?php _e('Μαθετε Περισσότερα', 'gocreations'); ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('intro_first_button_link')) : ?>
                            <?php
                            $btnType = get_field('button_type', 'options');
                            if ($btnType == "50") : ?>
                                <?php $btnStyle = "round" ?>
                            <?php elseif ($btnType == "corner") : ?>
                                <?php $btnStyle = "corner" ?>
                            <?php endif; ?>
                            <div class="border-btn-wrapper">
                                <a class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>" href="<?php the_field('intro_first_button_link') ?>">
                                    <?php if (get_field('intro_first_button_text')) : ?>
                                        <?php the_field('intro_first_button_text') ?>
                                    <?php else : ?>
                                        <?php _e('Μαθετε Περισσότερα', 'gocreations'); ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('intro_second_button_link')) : ?>
                            <?php
                            $btnType = get_field('button_type', 'options');
                            if ($btnType == "50") : ?>
                                <?php $btnStyle = "round" ?>
                            <?php elseif ($btnType == "corner") : ?>
                                <?php $btnStyle = "corner" ?>
                            <?php endif; ?>
                            <div class="border-btn-wrapper">
                                <a class="border-btn-wrap white-bg <?php echo $btnStyle; ?>" href="<?php the_field('intro_second_button_link') ?>">
                                    <?php if (get_field('intro_second_button_text')) : ?>
                                        <?php the_field('intro_second_button_text') ?>
                                    <?php else : ?>
                                        <?php _e('Μαθετε Περισσότερα', 'gocreations'); ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ($items > 1) : ?>
                    <?php
                    $btnType = get_field('button_type', 'options');
                    if ($btnType == "50") : ?>
                        <?php $btnStyle = "round" ?>
                    <?php elseif ($btnType == "corner") : ?>
                        <?php $btnStyle = "corner" ?>
                    <?php endif; ?>
                    <div class="intro-single-ver1-btns">
                        <div class="swiper-button-prev intro <?php echo $btnStyle; ?>"></div>
                        <div class="swiper-button-next intro <?php echo $btnStyle; ?>"></div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>



    <?php if (get_field('main_title') || get_field('main_subtitle') || get_field('main_text') || have_rows('main_repeater')) : ?>
        <section class="image-text-content-wrapper single-main-section mid-container" id="main">

            <h2 class="image-text-title third-color margin-bottom-small show-on-scroll slide-right">
                <?php the_field('main_title'); ?>
            </h2>

            <span class="image-text-subtitle third-color subtitle medium-weight margin-bottom show-on-scroll slide-right">
                <?php the_field('main_subtitle'); ?>
            </span>

            <div class="main-text text-color image-text-text show-on-scroll slide-right">
                <?php the_field('main_text'); ?>
            </div>

            <span class="image-text-subtitle third-color subtitle medium-weight margin-bottom show-on-scroll" style="margin:15px 0px;">
                <?php the_field('main_repeater_title'); ?>
            </span>

            <?php if (have_rows('main_repeater')) : ?>
                <div class="faqs-wrap single-repeater">
                    <?php $time = 0.1; ?>
                    <?php while (have_rows('main_repeater')) : the_row(); ?>
                        <div class="single-faq show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s">
                            <span class="question-faq secondary-color"><?php the_sub_field('title'); ?></span>
                            <div class="panel">
                                <?php the_sub_field('text'); ?>
                            </div>
                        </div>
                        <?php $time = $time + 0.07; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </section>
    <?php endif; ?>



    <?php if (have_rows('main_section_repeater')) : ?>
        <?php $row = 1; ?>
        <?php while (have_rows('main_section_repeater')) : the_row(); ?>
            <section class="single-villa mid-container first-image-text-wrapper ver3 <?php echo ($row % 2 == 0) ? ' reverted' : ''; ?>">
                <div class="first-image-text-wrap villa">
                    <div class="first-image-text-left-wrap">
                        <?php
                        $image = get_sub_field('image');
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        if ($image) : ?>
                            <div class="first-image-text-main-image">
                                <?php echo wp_get_attachment_image($image['id'], $size); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="image-text-content-wrapper small-container">
                        <h3 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-left" style="<?php the_sub_field('title_custom_css'); ?>">
                            <?php the_sub_field('title'); ?>
                        </h3>
                        <div class="main-text text-color image-text-text show-on-scroll margin-bottom-big slide-left" style="<?php the_sub_field('text_custom_css'); ?>">
                            <?php the_sub_field('text'); ?>
                        </div>
                    </div>

                </div>
            </section>
            <?php $row = $row + 1; ?>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (get_field('main_facilities_title') || have_rows('main_facilities_repeater')) : ?>
        <section class="facilities-outside-wrapper primary-color-bg ver3">
            <div class="facilities-wrapper villa ver3">

                <div class="top-center-wrapper">
                    <h3 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_field('main_facilities_title'); ?>
                    </h3>
                </div>

                <?php if (have_rows('main_facilities_repeater')) : ?>
                    <div class="facilities-wrap">
                        <?php $time = 0.1; ?>
                        <?php while (have_rows('main_facilities_repeater')) : the_row(); ?>
                            <div class="facilities-box-wrap show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s">
                                <span class="margin-bottom-small facilities-title third-color"><?php the_sub_field('title'); ?></span>
                                <div class="facilities-main-content">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                            <?php $time = $time + 0.07; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
        </section>
    <?php endif; ?>

    <?php if (get_field('additional_facilities_title') || have_rows('additional_facilities_repeater')) : ?>
        <section class="facilities-outside-wrapper primary-color-bg ver3">
            <div class="facilities-wrapper villa ver3">

                <div class="top-center-wrapper">
                    <h3 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_field('additional_facilities_title'); ?>
                    </h3>
                </div>

                <?php if (have_rows('additional_facilities_repeater')) : ?>
                    <div class="facilities-wrap">
                        <?php $time = 0.1; ?>
                        <?php while (have_rows('additional_facilities_repeater')) : the_row(); ?>
                            <div class="facilities-box-wrap show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s">
                                <span class="margin-bottom-small facilities-title third-color"><?php the_sub_field('title'); ?></span>
                                <div class="facilities-main-content">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                            <?php $time = $time + 0.07; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
        </section>
    <?php endif; ?>


    <?php if (have_rows('gallery_section')) : ?>
        <?php while (have_rows('gallery_section')) : the_row(); ?>
            <?php if (get_row_layout() == 'gallery') : ?>

                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/gallery/gallery-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/gallery/gallery-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/gallery/gallery-ver3'); ?>
                <?php endif; ?>

            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (get_field('the_area_pretitle') || get_field('the_area_title') || get_field('the_area_content') || get_field('the_area_gallery')) : ?>
        <section class="area-wrapper small-container">
            <div class="top-center-wrapper small-container">
                <span class="cali pretitle third-color image-text-pretitle margin-bottom-small">
                    <?php the_field('the_area_pretitle'); ?>
                </span>
                <span class="image-text-title third-color margin-bottom-small bold-weight">
                    <?php the_field('the_area_title'); ?>
                </span>
                <div class="main-text">
                    <?php the_field('the_area_content'); ?>
                </div>
            </div>
            <?php
            $images = get_field('the_area_gallery');
            $size = 'large';
            if ($images) : ?>
                <div class="area-gallery-wrap">
                    <?php foreach ($images as $image) : ?>
                        <div class="area-image">
                            <a href="<?php echo $image['url']; ?>" class="area-gallery-image" data-fancybox="area-gallery" style="width:100%; height:100%; display: block; background-color: #DEDEDE; background-image:url('<?php echo $image['url']; ?>'); background-size: cover; background-position: center center;">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    <?php endif; ?>

    <?php if (get_field('archive_pretitle') || get_field('archive_pretitle')) : ?>
        <?php
        $type = 'location';
        $pageurl = get_permalink();
        $args = array(
            'post_type' => $type,
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby'    => 'rand',
            'post__not_in' => array($post->ID)
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) { ?>
            <section class="blocks-outside-wrapper ver2 blogs">

                <div class="blocks-wrapper ver2">

                    <div class="top-center-wrapper">
                        <span class="cali pretitle third-color image-text-pretitle margin-bottom-small">
                            <?php the_field('archive_pretitle'); ?>
                        </span>
                        <span class="image-text-title third-color margin-bottom-small bold-weight">
                            <?php the_field('archive_title'); ?>
                        </span>
                    </div>


                    <?php
                    $type = 'location';
                    $pageurl = get_permalink();
                    $args = array(
                        'post_type' => $type,
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'orderby'    => 'rand',
                        'post__not_in' => array($post->ID)
                    );
                    $my_query = null;
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) { ?>
                        <?php $time = 0.1; ?>
                        <div class="blocks-wrap container blogs">
                            <?php
                            while ($my_query->have_posts()) : $my_query->the_post();
                                // $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), medium_large, '' );   // thumbnail sizes
                                $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), false, '');
                                $thumbnail_id = get_post_thumbnail_id($post->ID);
                                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                $title = get_post(get_post_thumbnail_id())->post_title;
                                $image = get_field('intro_slider');
                                $firstImg = $image[0];
                            ?>

                                <a class="block-box-wrap show-on-scroll slide-up" href="<?php echo get_permalink(); ?>" style="transition-delay:<?php echo $time; ?>s">
                                    <div class="block-box-image">
                                        <?php echo wp_get_attachment_image($firstImg['id'], 'large'); ?>
                                    </div>
                                    <div class="block-box-content">
                                        <span class="margin-bottom blog-arch-title third-color"><?php the_title(); ?></span>
                                        <div class="margin-bottom box-content third-color">
                                            <?php echo wp_trim_words(get_field('main_text'), 20, '...'); ?>
                                        </div>
                                        <div class="button-wrapper">
                                            <?php
                                            $btnType = get_field('button_type', 'options');
                                            if ($btnType == "50") : ?>
                                                <?php $btnStyle = "round" ?>
                                            <?php elseif ($btnType == "corner") : ?>
                                                <?php $btnStyle = "corner" ?>
                                            <?php endif; ?>
                                            <div class="border-btn-wrap third-color hover-light-black <?php echo $btnStyle; ?>">
                                                <?php _e('Μαθετε Περισσότερα', 'gocreations'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php $time = $time + 0.1; ?>

                            <?php endwhile; ?>
                        </div>
                    <?php }
                    wp_reset_query();  // Restore global post data stomped by the_post().
                    ?>
                </div>

            </section>
        <?php } ?>
    <?php endif; ?>


    <?php if (have_rows('flexible_content')) : ?>
        <?php while (have_rows('flexible_content')) : the_row(); ?>
            <?php if (get_row_layout() == 'image_text_1') : ?>

                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/image-text1/image-text1-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/image-text1/image-text1-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/image-text1/image-text1-ver3'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'image_text_2') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/image-text2/image-text2-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/image-text2/image-text2-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/image-text2/image-text2-ver3'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'blocks') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/blocks/block-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/blocks/block-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/blocks/block-ver3'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'facilities') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/facilities/facilities-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/facilities/facilities-ver2'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/facilities/facilities-ver3'); ?>
                <?php elseif ($designVer == 'design4') : ?>
                    <?php echo get_template_part('template-parts/facilities/facilities-slider'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/facilities/facilities-ver5'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'gallery') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/gallery/gallery-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/gallery/gallery-ver2'); ?>
                <?php elseif ($designVer == 'design3') : ?>
                    <?php echo get_template_part('template-parts/gallery/gallery-ver3'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/gallery/gallery-ver4'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'quote') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/quotes/quote-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/quotes/quote-ver2'); ?>
                <?php elseif ($designVer == 'design3') : ?>
                    <?php echo get_template_part('template-parts/quotes/quote-ver3'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/quotes/quote-ver4'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'faqs') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/faqs/faqs-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/faqs/faqs-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/faqs/faqs-ver3'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'contact') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/contact/contact-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/contact/contact-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/contact/contact-ver3'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'map') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/map/map-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/map/map-ver2'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'simple_content') : ?>
                <?php echo get_template_part('template-parts/simple-content/simple-ver1'); ?>

            <?php elseif (get_row_layout() == 'archive') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/archive/archive-locations'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/archive/archive-accommodation'); ?>
                <?php endif; ?>

            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>



</main>

<?php get_footer(); ?>