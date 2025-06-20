<?php /* Template Name: Blogs-Template */ ?>


<?php get_header(); ?>

<main class="site-content">

    <section class="blocks-outside-wrapper ver2 blogs">
        <div class="blocks-wrapper ver2">
            <div class="top-center-wrapper mid-top-padding">
                <span class="cali pretitle third-color image-text-pretitle margin-bottom-small">
                    <?php the_field('intro_pretitle'); ?>
                </span>
                <h1 class="image-text-title third-color margin-bottom-small bold-weight">
                    <?php the_field('intro_title'); ?>
                </h1>               
            </div>

            
            <?php
            $type = 'post';
            $pageurl = get_permalink();
            $args=array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby'    => 'menu_order',
                'order'          => 'ASC',
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