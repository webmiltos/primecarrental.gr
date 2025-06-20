<?php /* Template Name: Alt-Landing-Page-Template */ ?>


<?php get_header(); ?>

<main class="site-content">

    <!-- about-template code replaced with main  -->

    <?php $introVer = get_field('intro_design'); ?>
    <?php if ($introVer == 'design1') : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver1'); ?>
    <?php elseif ($introVer == 'design2') : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver2'); ?>
    <?php elseif ($introVer == 'nointro') : ?>
    <?php else : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver3'); ?>
    <?php endif; ?>


    <div class="intro-fleet">
        <span class="main-text text-color image-text-text show-on-scroll"><?php the_field('pretitle_intro'); ?></span>
        <h1 class="image-text-title third-color margin-bottom-small show-on-scroll"><?php the_field('title_intro'); ?></h1>
        <span class="main-text text-color image-text-text show-on-scroll"><?php the_field('text_intro'); ?></span>


        <?php if ((((is_page('968')) ||  is_page('977')) || is_page('1096')) || is_page('1094')) : ?>
            <div class="border-btn-wrapper margin-top center">
                <a class="border-btn-wrap white hover-black round blue <?php echo $btnStyle; ?>" href="/our-fleet/">
                    <?php _e('View all Fleet', 'gocreations'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>

    <?php if (get_field('fleet_shortcode')) : ?>
        <div class="fleet-home-wrapper fleet-slider mid-container swiper-container three-per-view">
            <?php echo do_shortcode(get_field('fleet_shortcode')); ?>
            <div class="swiper-buttons-wrapper">
                <div class="swiper-button-next third-color"></div>
                <div class="swiper-button-prev third-color"></div>
            </div>
        </div>
    <?php endif ?>

    <?php if (get_field('google_maps_iframe')) : ?>
        <section id="map" class="map-outside-wrapper ver1">
            <div class="map-wrapper ver1">
                <?php if (get_field('google_maps_iframe')) : ?>
                    <?php echo get_field('google_maps_iframe'); ?>
                <?php endif; ?>
            </div>
        </section>
    <?php endif ?>

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


            <?php elseif (get_row_layout() == 'plain_text') : ?>
                <?php echo get_template_part('template-parts/plain-text/plain-text-ver1'); ?>



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

            <?php elseif (get_row_layout() == 'simple__content') : ?>
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


            <?php elseif (get_row_layout() == 'useful_info') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/useful-info/useful-info-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/useful-info/useful-info-ver2'); ?>
                <?php endif; ?>


            <?php elseif (get_row_layout() == 'offices') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/offices/offices-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/offices/offices-ver2'); ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>



</main>

<?php get_footer(); ?>