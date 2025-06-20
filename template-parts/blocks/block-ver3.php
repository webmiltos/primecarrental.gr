<section class="blocks-outside-wrapper ver3">
    <div class="blocks-wrapper ver3">
        <div class="top-center-wrapper">
            <span class="cali pretitle third-color image-text-pretitle margin-bottom-small" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                <?php the_sub_field('pretitle'); ?>
            </span>
            <?php $titleCat = get_sub_field('title_category'); ?>
            <?php if ($titleCat == 'h1') : ?>
                <h1 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h1>
            <?php elseif ($titleCat == 'h2') : ?>
                <h2 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h2>
            <?php elseif ($titleCat == 'h3') : ?>
                <h3 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h3>
            <?php elseif ($titleCat == 'h4') : ?>
                <h4 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h4>
            <?php elseif ($titleCat == 'h5') : ?>
                <h5 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h5>
            <?php elseif ($titleCat == 'h6') : ?>
                <h6 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h6>
            <?php else : ?>
                <span class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </span>
            <?php endif; ?>
            <div class="subtitle">
                <?php the_sub_field('text'); ?>
            </div>
        </div>


        <?php if (get_sub_field('custom_or_post_type')) : ?>
            <?php
            $featured_posts = get_sub_field('post_types');
            if ($featured_posts) : ?>
                <div class="blocks-wrap">
                    <?php $time = 0.1; ?>
                    <?php foreach ($featured_posts as $post) :

                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post);
                        $image = get_field('intro_slider');
                        $firstImg = $image[0];
                    ?>
                        <a class="block-box-wrap show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s" href="<?php the_permalink(); ?>">
                            <div class="block-box-image">
                                <?php echo wp_get_attachment_image($firstImg['id'], 'large'); ?>
                            </div>
                            <div class="block-box-content">
                                <span class="margin-bottom box-title bold-weight white"><?php the_field('intro_title'); ?></span>
                                <div class="margin-bottom box-content white">
                                    <?php echo wp_trim_words(get_field('main_text'), 20, '...'); ?>
                                </div>
                                <?php
                                $btnType = get_field('button_type', 'options');
                                if ($btnType == "50") : ?>
                                    <?php $btnStyle = "round" ?>
                                <?php elseif ($btnType == "corner") : ?>
                                    <?php $btnStyle = "corner" ?>
                                <?php endif; ?>
                                <div class="button-wrapper">
                                    <div class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>">
                                        <?php _e('Μαθετε Περισσότερα', 'gocreations'); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php $time = $time + 0.1; ?>
                    <?php endforeach; ?>
                </div>
                <?php
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php else : ?>
            <?php if (have_rows('blocks')) : ?>
                <div class="blocks-wrap">
                    <?php $time = 0.1; ?>
                    <?php while (have_rows('blocks')) : the_row();
                        $image = get_sub_field('image');
                    ?>
                        <?php
                        $featured_post = get_sub_field('link');
                        if ($featured_post) :
                            $permalink = get_permalink($featured_post->ID);
                        ?>
                            <a class="block-box-wrap show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s" href="<?php echo esc_url($permalink); ?>">
                                <div class="block-box-image">
                                    <?php echo wp_get_attachment_image($image['id'], 'large'); ?>
                                </div>
                                <div class="block-box-content">
                                    <span class="margin-bottom bold-weight box-title white"><?php the_sub_field('title'); ?></span>
                                    <div class="margin-bottom box-content white"><?php the_sub_field('content'); ?></div>

                                    <?php
                                    $btnType = get_field('button_type', 'options');
                                    if ($btnType == "50") : ?>
                                        <?php $btnStyle = "round" ?>
                                    <?php elseif ($btnType == "corner") : ?>
                                        <?php $btnStyle = "corner" ?>
                                    <?php endif; ?>
                                    <div class="button-wrapper">
                                        <div class="border-btn-wrap main-color <?php echo $btnStyle; ?>">
                                            <?php _e('Μαθετε Περισσότερα', 'gocreations'); ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php else : ?>
                            <div class="block-box-wrap show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s">
                                <div class="block-box-image">
                                    <?php echo wp_get_attachment_image($image['id'], 'large'); ?>
                                </div>
                                <div class="block-box-content">
                                    <span class="margin-bottom bold-weight box-title white"><?php the_sub_field('title'); ?></span>
                                    <div class="margin-bottom box-content white"><?php the_sub_field('content'); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $time = $time + 0.1; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <div class="container flex center margin-top">
            <?php if (get_sub_field('button_text')) : ?>
                <a href="<?php the_sub_field('button_link'); ?>" class="border-btn-wrap black">
                    <?php the_sub_field('button_text'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

