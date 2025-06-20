<?php /* Template Name: Single-Service-Template */ ?>

<?php get_header(); ?>

<main class="site-content single-service">

    <?php $introVer = get_field('intro_design'); ?>
    <?php if ($introVer == 'nointro') : ?>
        <!-- No intro section -->
    <?php elseif ($introVer == 'design1') : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver1'); ?>
    <?php elseif ($introVer == 'design2') : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver2'); ?>
    <?php elseif ($introVer == 'design3') : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver3'); ?>
    <?php else : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver4'); ?>
    <?php endif; ?>


    <?php if ( get_field('main_logo_single','options') ) : ?>
        <!-- specific code for milos miles -->
        <section class="mid-container">
            <div class="single-main-logo-wrap">
                <span class="row"></span>
                <?php
                $image = get_field('main_logo_single','options');
                $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                if ($image) : ?>
                <div class="logo-single-wrap">
                    <?php echo wp_get_attachment_image($image['id'], $size); ?>
                </div>
                <?php endif; ?>
                <span class="row"></span>
            </div>
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


            <?php elseif (get_row_layout() == 'product_categories') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/product-categories/product-categories-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/product-categories/product-categories-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/product-categories/product-categories-ver1'); ?>
                <?php endif; ?>



            <?php elseif (get_row_layout() == 'product_slider') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/product-slider/product-slider-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/product-slider/product-slider-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/product-slider/product-slider-ver1'); ?>
                <?php endif; ?>


            <?php elseif (get_row_layout() == 'post_type_slider') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/post-type-slider/post-type-slider-ver1'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/post-type-slider/post-type-slider-ver1'); ?>
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
                <?php elseif ($designVer == 'design4') : ?>
                    <?php echo get_template_part('template-parts/quotes/quote-ver4'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/quotes/quote-ver5'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'faqs') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/faqs/faqs-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/faqs/faqs-ver2'); ?>
                <?php elseif ($designVer == 'design3') : ?>
                    <?php echo get_template_part('template-parts/faqs/faqs-ver3'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/faqs/faqs-ver4'); ?>
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




<?php if ( false ) : ?>
    <main class="site-content single-service">
    
        <?php $introVer = get_field('intro_design'); ?>
        <?php if ($introVer == 'design1') : ?>
            <?php echo get_template_part('template-parts/intro-sections/intro-ver1'); ?>
        <?php elseif ($introVer == 'design2') : ?>
            <?php echo get_template_part('template-parts/intro-sections/intro-ver2'); ?>
        <?php elseif ($introVer == 'nointro') : ?>
        <?php else : ?>
            <?php echo get_template_part('template-parts/intro-sections/intro-ver3'); ?>
        <?php endif; ?>
    
    
        <div class="image-text-content-wrapper single-main-section mid-container" id="main">
            <!-- for amea no-font remove span  if title is not empty  -->
            <?php if (get_field('main_title')) : ?>
                <h2 class="image-text-title third-color margin-bottom-small show-on-scroll slide-right">
                    <?php the_field('main_title'); ?>
                </h2>
            <?php else : ?>
                <h2 class="no-font">
                    service
                </h2>
            <?php endif; ?>
    
    
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
    
        </div>
    
    
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
    
    
        <section class="blocks-outside-wrapper ver3 blogs more">
            <div class="blocks-wrapper ver3">
                <div class="top-center-wrapper">
                    <span class="cali pretitle third-color image-text-pretitle margin-bottom-small">
                        <?php the_field('archive_pretitle'); ?>
                    </span>
                    <span class="image-text-title third-color margin-bottom-small bold-weight">
                        <h3><?php the_field('archive_title'); ?></h3>
                    </span>
                </div>
    
    
                <?php
                $type = 'service';
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
                    <div class="blocks-wrap">
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
                                    <span class="margin-bottom box-title white"><?php the_field('intro_title'); ?></span>
                                    <!-- <div class="margin-bottom box-content third-color">
                                        <?php echo wp_trim_words(get_field('main_text'), 20, '...'); ?>
                                    </div> -->
                                    <div class="button-wrapper">
                                        <?php
                                        $btnType = get_field('button_type', 'options');
                                        if ($btnType == "50") : ?>
                                            <?php $btnStyle = "round" ?>
                                        <?php elseif ($btnType == "corner") : ?>
                                            <?php $btnStyle = "corner" ?>
                                        <?php endif; ?>
                                        <div class="border-btn-wrap   <?php echo $btnStyle; ?>">
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
    
    
        <?php echo get_template_part('template-parts/contact/contact-ver3'); ?>
    
        <?php echo get_template_part('template-parts/map/map-ver1'); ?>
    
    
    </main>
<?php endif; ?>


<?php get_footer(); ?>