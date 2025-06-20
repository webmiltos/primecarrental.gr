<?php /* Template Name: Single-Villas-Template */ ?>

<?php get_header(); ?>

<main class="site-content single-villa">

    <?php $introVer = get_field('intro_design'); ?>
    <?php if ($introVer == 'design1') : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver1'); ?>
    <?php elseif ($introVer == 'design2') : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver2'); ?>
    <?php elseif ($introVer == 'nointro') : ?>
    <?php else : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver3'); ?>
    <?php endif; ?>


    <?php if (get_field('persons_text') || get_field('beds_text') || get_field('baths_text') || have_rows('info_repeater')) : ?>
        <?php
        $botInfo = false;
        if (get_field('info_bar_design')) {
            $botInfo = true;
        }
        ?>
        <?php if (get_field('info_bar_design')) : ?>
            <div class="mid-container margin-top-big">
                <h2 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll">
                    <?php the_field('intro_title'); ?>
                </h2>
            </div>
        <?php endif; ?>
        <section class="info-bar-wrapper <?php echo $botInfo ? 'under' : 'top'; ?> ">
            <div class="info-bar-wrap">
                <?php if (get_field('persons_text')) : ?>
                    <div class="single-item-info">
                        <span class="icon-guests info-icon"></span>
                        <span class="info-text">
                            <?php the_field('persons_text'); ?>
                        </span>
                    </div>
                <?php endif; ?>
                <?php if (get_field('beds_text')) : ?>
                    <div class="single-item-info">
                        <span class="icon-bed info-icon"></span>
                        <span class="info-text">
                            <?php the_field('beds_text'); ?>
                        </span>
                    </div>
                <?php endif; ?>
                <?php if (get_field('baths_text')) : ?>
                    <div class="single-item-info">
                        <span class="icon-bathroom info-icon"></span>
                        <span class="info-text">
                            <?php the_field('baths_text'); ?>
                        </span>
                    </div>
                <?php endif; ?>
                <?php if (have_rows('info_repeater')) : ?>
                    <?php while (have_rows('info_repeater')) : the_row(); ?>
                        <div class="single-item-info">
                            <?php
                            $image = get_sub_field('icon');
                            $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                            if ($image) : ?>
                                <span class="single-info-icon">
                                    <?php echo wp_get_attachment_image($image['id'], $size); ?>
                                </span>
                            <?php endif; ?>
                            <span class="info-text repeat">
                                <?php the_sub_field('text'); ?>
                            </span>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if (get_field('info_button_link') && get_field('info_button_text')) : ?>
                    <div class="button-wrapper center info">
                        <?php
                        $btnType = get_field('button_type', 'options');
                        if ($btnType == "50") : ?>
                            <?php $btnStyle = "round" ?>
                        <?php elseif ($btnType == "corner") : ?>
                            <?php $btnStyle = "corner" ?>
                        <?php endif; ?>
                        <a href="<?php the_field('info_button_link'); ?>" class="border-btn-wrap center third-color hover-light-black <?php echo $btnStyle; ?>">
                            <?php the_field('info_button_text'); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>


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

            <?php if (have_rows('main_repeater')) : ?>
                <div class="faqs-wrap single-repeater">
                    <?php $time = 0.1; ?>
                    <?php while (have_rows('main_repeater')) : the_row(); ?>
                        <div class="single-faq show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s">
                            <span class="question-faq third-color"><?php the_sub_field('title'); ?></span>
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
                        <span class="cali pretitle third-color image-text-pretitle margin-bottom-small show-on-scroll slide-left">
                            <?php the_sub_field('pretitle'); ?>
                        </span>
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
                <?php if (get_field('the_area_pretitle')) : ?>
                    <span class="cali pretitle third-color image-text-pretitle margin-bottom-small">
                        <?php the_field('the_area_pretitle'); ?>
                    </span>
                <?php endif; ?>
                <?php if (get_field('the_area_title')) : ?>
                    <span class="image-text-title third-color margin-bottom-small bold-weight">
                        <?php the_field('the_area_title'); ?>
                    </span>
                <?php endif; ?>
                <?php if (get_field('the_area_content')) : ?>
                    <div class="main-text">
                        <?php the_field('the_area_content'); ?>
                    </div>
                <?php endif; ?>
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

            <?php if (get_field('the_area_link')) : ?>
                <div class="button-wrapper margin-top-big center margin-bottom-big">
                    <?php
                    $btnType = get_field('button_type', 'options');
                    if ($btnType == "50") : ?>
                        <?php $btnStyle = "round" ?>
                    <?php elseif ($btnType == "corner") : ?>
                        <?php $btnStyle = "corner" ?>
                    <?php endif; ?>
                    <a href="<?php the_field('the_area_link'); ?>" class="border-btn-wrap center third-color hover-light-black <?php echo $btnStyle; ?>">
                        <?php _e('Read More', 'gocreations'); ?>
                    </a>
                </div>
            <?php endif; ?>

        </section>
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
                <?php elseif ($designVer == 'design3') : ?>
                    <?php echo get_template_part('template-parts/archive/archive-cards2'); ?>
                <?php elseif ($designVer == 'design4') : ?>
                    <?php echo get_template_part('template-parts/archive/archive-cards3'); ?>
                <?php elseif ($designVer == 'design5') : ?>
                    <?php echo get_template_part('template-parts/archive/archive-cards-slider'); ?>
                <?php endif; ?>


            <?php elseif (get_row_layout() == 'packages') : ?>
                <?php echo get_template_part('template-parts/packages/packages-ver1'); ?>

            <?php elseif (get_row_layout() == 'call_to_action') : ?>
                <?php echo get_template_part('template-parts/call-to-action/call-to-action-ver1'); ?>


            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>



</main>

<?php get_footer(); ?>