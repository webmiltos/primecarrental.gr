        <?php
            $count = 0;
        ?>
        <?php
            $type = get_sub_field('post_slug');
            $pageurl = get_permalink();
            $paged = (get_query_var('page')) ? get_query_var('page') : 1;
            $args=array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'paged' => $paged,
                'orderby'    => 'date',
                'order'  => 'ASC'
            );
            $my_query = null;
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) { ?>

                    <?php
                    while ($my_query->have_posts()) : $my_query->the_post();
                        // $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), medium_large, '' );   // thumbnail sizes
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' );
                        $thumbnail_id = get_post_thumbnail_id( $post->ID );
                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                        $title = get_post(get_post_thumbnail_id())->post_title; 
                        ?>

                        <section class="mid-container first-image-text-wrapper ver3 <?php echo $count % 2 == 0 ? ' reverted' : '' ;?>">
                            <div class="first-image-text-wrap">

                                <div class="first-image-text-left-wrap">
                                    <?php 
                                    $image = get_field('intro_slider');
                                    $image = $image[0];
                                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                    if( $image ):?>
                                        <div class="first-image-text-main-image">
                                            <?php echo wp_get_attachment_image( $image['id'], $size ); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="image-text-content-wrapper small-container">
                                    <div class="primary-light-color-bg img-txt-bg-wrap"></div>
                                    <span class="image-text-title text-color margin-bottom-small show-on-scroll slide-left" style="<?php the_sub_field('title_custom_css'); ?>">
                                        <?php the_field('intro_title'); ?>
                                    </span>
                                    <div class="main-text text-color image-text-text show-on-scroll slide-left show-only-first-p" style="<?php the_sub_field('text_custom_css'); ?>">
                                        <?php the_field('main_text'); ?>
                                    </div>

                                    <div class="button-wrapper">
                                        <?php
                                        $btnType = get_field('button_type','options');
                                        if ( $btnType == "50" ) : ?>
                                            <?php $btnStyle = "round" ?>
                                        <?php elseif($btnType == "corner"): ?>
                                            <?php $btnStyle = "corner" ?>
                                        <?php endif; ?>
                                        <a class="border-btn-wrap extra-color third-color hover-light-black <?php echo $btnStyle; ?>" href="<?php echo get_permalink(); ?>">
                                            <?php if ( get_sub_field('button_text') ) : ?>
                                                <?php the_sub_field('button_text'); ?>
                                            <?php else: ?>
                                                <?php _e('Learn More','gocreations'); ?>
                                            <?php endif; ?>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </section>

                        <?php $count++; ?>

                    <?php endwhile; ?>

            <?php }
            wp_reset_query();  // Restore global post data stomped by the_post().
        ?>
