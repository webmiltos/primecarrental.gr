<?php /* Template Name: Single-Blog-Template */ ?>

<?php get_header(); ?>

<main class="site-content single-project">
    
    <section class="intro-wrapper small mid-container">
        <div class="intro-content-wrapper-blog show-on-scroll slide-up">
            <h1 class="intro-title bold-weight margin-bottom">
                <?php the_field('intro_title'); ?>
            </h1>
            <span class="post-date">
                <?php echo get_the_date('d/m/Y'); ?>
            </span>
        </div>
        <div class="intro-wrap">

            <div class="single-slider-wrapper swiper-container">
                <div class="swiper-wrapper">
                    <?php $items = 0; ?>
                    <?php 
                    $images = get_field('intro_slider');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $images ):?>
                        <?php foreach( $images as $image ): ?>
                            <div class="swiper-slide">
                                <?php echo wp_get_attachment_image( $image['id'], $size ); ?>
                            </div>
                            <?php $items = $items + 1; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="intro-out-wrap-content">
                <?php if ( $items > 1 ) : ?>
                    <div class="swiper-button-prev intro"></div>
                    <div class="swiper-button-next intro"></div>
                <?php endif; ?>
            </div>

        </div>
    </section>



    <div class="image-text-content-wrapper single-main-section mid-container blog-single" id="main">
        <div class="primary-color-bg"></div>

        <h2 class="image-text-title third-color margin-bottom-small show-on-scroll slide-right">
            <?php the_field('main_title'); ?>
        </h2>         
        
        <span class="image-text-subtitle third-color subtitle medium-weight margin-bottom show-on-scroll slide-right">
            <?php the_field('main_subtitle'); ?>
        </span>

        <div class="main-text text-color image-text-text show-on-scroll slide-right">
            <?php the_field('main_text'); ?>
        </div>

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
            $type = 'post';
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
                                <span class="margin-bottom blog-arch-title third-color"><?php the_title(); ?></span>
                                <span class="post-date margin-bottom-small">
                                    <?php echo get_the_date('d/m/Y'); ?>
                                </span>
                                <div class="block-box-image">
                                    <?php echo wp_get_attachment_image( $firstImg['id'], 'large' ); ?>
                                </div>
                                <div class="block-box-content primary-color-bg">
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
                                            <?php _e('Μαθετε Περισσότερα','gocreations'); ?>
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