<?php /* Template Name: Projects-Template */ ?>


<?php get_header(); ?>
<?php $locale = get_locale(); ?>
<main class="site-content">
            
       <section class="blocks-outside-wrapper ver3 blogs more cards3">
            <div class="blocks-wrapper ver3">
                <div class="top-center-wrapper mid-top-padding archive">
                    <span class="cali pretitle third-color image-text-pretitle margin-bottom-small">
                        <?php the_field('intro_pretitle'); ?>
                    </span>
                    <h1 class="image-text-title third-color margin-bottom-small bold-weight">
                        <?php the_field('intro_title'); ?>
                    </h1>    
                    <span class="cali main-text center text-color image-text margin-bottom-small">
                        <?php the_field('intro_text'); ?>
                    </span>           
                </div>


                <?php
                $type = 'project';
                $pageurl = get_permalink();
                $args = array(
                    'post_type' => $type,
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby'    => 'menu_order',
                    'order'          => 'ASC',
                    'post__not_in' => array( get_the_id() )
                );
                $my_query = null;
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) { ?>
                    <?php $time = 0.1; ?>
                    <div class="blocks-wrap">
                        <?php
                        while ($my_query->have_posts()) : $my_query->the_post();
                            $post_id = get_the_ID();
                            $image = get_field('intro_slider');
                            $firstImg = $image[0];
                            $post_link = get_permalink( $post_id );
                        ?>

                            <a class="block-box-wrap show-on-scroll slide-up" href="<?php echo esc_url( $post_link ); ?>" style="transition-delay:<?php echo $time; ?>s">
                                <div class="block-box-image">
                                    <?php echo wp_get_attachment_image($firstImg['id'], 'large'); ?>
                                </div>
                                <div class="block-box-content">
                                    <span class="margin-bottom box-title white"><?php the_field('intro_title'); ?></span>
                                    <div class="margin-bottom box-content white">
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
                                        <div class="border-btn-wrap <?php echo $btnStyle; ?>">
                                        <?php
                                        if (strpos($locale, 'el') === 0) { ?>
                                            <?php _e('Μαθετε Περισσότερα', 'gocreations'); ?>
                                        <?php } elseif (strpos($locale, 'en') === 0) { ?>
                                            <?php _e('Learn More', 'gocreations'); ?>
                                        <?php } else {?>
                                            <?php _e('Learn More', 'gocreations'); ?>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php $time = $time + 0.1; ?>

                        <?php endwhile;?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php } ?>
            </div>
        </section>
</main>

<?php get_footer(); ?>