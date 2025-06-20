<?php /* Template Name: Single-Travel-Template */ ?>

<?php get_header(); ?>

<main class="site-content single-villa">
    
    <?php $introVer = get_field('intro_design'); ?>
    <?php if ( $introVer == 'design1' ) : ?>
        <?php echo get_template_part( 'template-parts/intro-sections/intro-ver1' ); ?>
    <?php elseif($introVer == 'design2'): ?>
        <?php echo get_template_part( 'template-parts/intro-sections/intro-ver2' ); ?>
    <?php elseif($introVer == 'nointro'): ?>
    <?php else: ?>
        <?php echo get_template_part( 'template-parts/intro-sections/intro-ver3' ); ?>
    <?php endif; ?>


    <div class="image-text-content-wrapper single-main-section mid-container" id="main">

        <h2 class="image-text-title third-color margin-bottom-small show-on-scroll slide-right">
            <?php the_field('main_title'); ?>
        </h2>         
        
        <span class="image-text-subtitle third-color subtitle medium-weight margin-bottom show-on-scroll slide-right">
            <?php the_field('main_subtitle'); ?>
        </span>

        <div class="main-text text-color image-text-text show-on-scroll slide-right">
            <?php the_field('main_text'); ?>
        </div>

        <?php if( have_rows('main_repeater') ): ?>
            <div class="faqs-wrap single-repeater">
                <?php $time = 0.1; ?>
                <?php while( have_rows('main_repeater') ): the_row(); ?>
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


    <?php if( have_rows('main_section_repeater') ): ?>
        <?php $row = 1; ?>
        <?php while( have_rows('main_section_repeater') ): the_row(); ?>
            <section class="single-villa mid-container first-image-text-wrapper ver3 <?php echo ($row % 2 == 0) ? ' reverted' : '' ;?>">
                <div class="first-image-text-wrap villa">
                    <div class="first-image-text-left-wrap">
                        <?php 
                        $image = get_sub_field('image');
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        if( $image ):?>
                            <div class="first-image-text-main-image">
                                <?php echo wp_get_attachment_image( $image['id'], $size ); ?>
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



    <section class="facilities-outside-wrapper primary-color-bg ver3">
        <div class="facilities-wrapper villa ver3">

            <div class="top-center-wrapper">
                <h3 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_field('main_facilities_title'); ?>
                </h3>
            </div>

            <?php if( have_rows('main_facilities_repeater') ): ?>
                <div class="facilities-wrap">
                    <?php $time = 0.1; ?>
                    <?php while( have_rows('main_facilities_repeater') ): the_row(); ?>
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

    <section class="facilities-outside-wrapper primary-color-bg ver3">
        <div class="facilities-wrapper villa ver3">

            <div class="top-center-wrapper">
                <h3 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_field('additional_facilities_title'); ?>
                </h3>
            </div>

            <?php if( have_rows('additional_facilities_repeater') ): ?>
                <div class="facilities-wrap">
                    <?php $time = 0.1; ?>
                    <?php while( have_rows('additional_facilities_repeater') ): the_row(); ?>
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
        if( $images ): ?>
            <div class="area-gallery-wrap">
                <?php foreach( $images as $image ): ?>
                    <div class="area-image">
                        <a href="<?php echo $image['url']; ?>" class="area-gallery-image" data-fancybox="area-gallery" style="width:100%; height:100%; display: block; background-color: #DEDEDE; background-image:url('<?php echo $image['url']; ?>'); background-size: cover; background-position: center center;">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>




    <section class="blocks-outside-wrapper ver2">
        <div class="blocks-wrapper ver2">
            <div class="top-center-wrapper">
                <span class="cali pretitle third-color image-text-pretitle margin-bottom-small">
                    <?php the_field('archive_pretitle'); ?>
                </span>
                <span class="image-text-title third-color margin-bottom-small bold-weight">
                    <?php the_field('archive_title'); ?>
                </span>               
            </div>

            
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
            $type = 'travel';
            $pageurl = get_permalink();
            $args=array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby'    => 'rand',
                'post__not_in' => array( $post->ID )
            );
            $my_query = null;
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) { ?>
                <?php $time = 0.1; ?>
                <div class="blocks-wrap container blogs">
                    <?php
                    while ($my_query->have_posts()) : $my_query->the_post();
                        // $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), medium_large, '' );   // thumbnail sizes
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' );
                        $thumbnail_id = get_post_thumbnail_id( $post->ID );
                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                        $title = get_post(get_post_thumbnail_id())->post_title; 
                        $image = get_field('intro_slider');
                        $firstImg = $image[0];
                        ?>

                            <a class="block-box-wrap show-on-scroll slide-up" href="<?php echo get_permalink(); ?>" style="transition-delay:<?php echo $time; ?>s">
                                <div class="block-box-image">
                                    <?php echo wp_get_attachment_image( $firstImg['id'], 'large' ); ?>
                                </div>
                                <div class="block-box-content">
                                    <span class="margin-bottom blog-arch-title third-color"><?php the_title(); ?></span>
                                    <div class="margin-bottom box-content third-color">
                                        <?php echo wp_trim_words( get_field('main_text'), 20, '...' ); ?>
                                    </div>
                                    <div class="button-wrapper">
                                    <?php
                                    $btnType = get_field('button_type','options');
                                    if ( $btnType == "50" ) : ?>
                                        <?php $btnStyle = "round" ?>
                                    <?php elseif($btnType == "corner"): ?>
                                        <?php $btnStyle = "corner" ?>
                                    <?php endif; ?>
                                        <div class="border-btn-wrap third-color hover-light-black <?php echo $btnStyle; ?>">
                                            <?php _e('Learn More','gocreations'); ?>
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



</main>

<?php get_footer(); ?>