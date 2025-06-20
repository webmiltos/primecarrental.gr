<section class="blocks-outside-wrapper ver3 blogs cards3">
    <div class="blocks-wrapper ver3">
        <div class="top-center-wrapper">
            <span class="cali pretitle third-color image-text-pretitle margin-bottom-small">
                <?php the_sub_field('archive_pretitle'); ?>
            </span>

            <?php $titleCat = get_sub_field('title_category'); ?>
            <?php if ($titleCat == 'h1') : ?>
                <h1 class="image-text-title third-color margin-bottom-small bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('archive_title'); ?>
                </h1>
            <?php elseif ($titleCat == 'h2') : ?>
                <h2 class="image-text-title third-color margin-bottom-small bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('archive_title'); ?>
                </h2>
            <?php elseif ($titleCat == 'h3') : ?>
                <h3 class="image-text-title third-color margin-bottom-small bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('archive_title'); ?>
                </h3>
            <?php elseif ($titleCat == 'h4') : ?>
                <h4 class="image-text-title third-color margin-bottom-small bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('archive_title'); ?>
                </h4>
            <?php elseif ($titleCat == 'h5') : ?>
                <h5 class="image-text-title third-color margin-bottom-small bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('archive_title'); ?>
                </h5>
            <?php elseif ($titleCat == 'h6') : ?>
                <h6 class="image-text-title third-color margin-bottom-small bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('archive_title'); ?>
                </h6>
            <?php else : ?>
                <span class="image-text-title third-color margin-bottom-small bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('archive_title'); ?>
                </span>
            <?php endif; ?>
        </div>



        <?php
        $type = get_sub_field('post_slug');
        $items = get_sub_field('show_items');
        $pageurl = get_permalink();
        $args = array(
            'post_type' => $type,
            'post_status' => 'publish',
            'posts_per_page' => $items,
            'orderby'    => 'menu_order',
            'order'          => 'ASC',
            'post__not_in' => array($post->ID)
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) { ?>
            <?php $time = 0.1; ?>
            <div class="blocks-wrap container">
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

                            <?php if ( get_field('main_text') ) : ?>
                                <div class="margin-bottom box-content white">
                                    <?php echo wp_trim_words(get_field('main_text'), 20, '...'); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (get_field('persons_text') || get_field('beds_text') || get_field('baths_text') || have_rows('info_repeater')) : ?>
                                <div class="info-bar-wrapper under archive">
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
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="button-wrapper">
                                <?php
                                $btnType = get_field('button_type', 'options');
                                if ($btnType == "50") : ?>
                                    <?php $btnStyle = "round" ?>
                                <?php elseif ($btnType == "corner") : ?>
                                    <?php $btnStyle = "corner" ?>
                                <?php endif; ?>
                                <div class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>">
                                    <?php _e('ΜΑΘΕΤΕ ΠΕΡΙΣΣΟΤΕΡΑ', 'gocreations'); ?>
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
    <?php if (get_sub_field('button_link')) : ?>
        <?php
        $btnType = get_field('button_type', 'options');
        if ($btnType == "50") : ?>
            <?php $btnStyle = "round" ?>
        <?php elseif ($btnType == "corner") : ?>
            <?php $btnStyle = "corner" ?>
        <?php endif; ?>
        <div class="button-wrapper center">
            <a class="border-btn-wrap hover-black <?php echo $btnStyle; ?>" href="<?php the_sub_field('button_link'); ?>">
                <?php if (get_sub_field('button_text')) : ?>
                    <?php the_sub_field('button_text'); ?>
                <?php else : ?>
                    <?php _e('View All', 'gocreations'); ?>
                <?php endif; ?>
            </a>
        </div>
    <?php endif; ?>
    </div>
</section>