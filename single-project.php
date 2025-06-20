<?php /* Template Name: Single-Poject-Template */ ?>

<?php get_header(); ?>

<main class="site-content single-project">

    <?php $introVer = get_field('intro_design'); ?>
    <?php if ($introVer == 'nointro') : ?>

    <?php elseif ($introVer == 'design1') : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver1'); ?>
    <?php elseif ($introVer == 'design2') : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver2'); ?>
    <?php elseif ($introVer == 'design3') : ?>
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
                Project
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



    <section class="blocks-outside-wrapper ver3 blogs more cards3">
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
            $type = 'project';
            $pageurl = get_permalink();
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => 3,
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
                                        <?php _e('Μαθετε Περισσότερα', 'gocreations'); ?>
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