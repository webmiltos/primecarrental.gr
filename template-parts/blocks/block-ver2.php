<section class="blocks-outside-wrapper ver2">
    <div class="blocks-wrapper ver2">
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
                        <a href="<?php the_permalink(); ?>" class="block-box-wrap show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s">
                            <div class="block-box-image">
                                <?php echo wp_get_attachment_image($firstImg['id'], 'large'); ?>
                            </div>
                            <div class="block-box-content">
                                <span class="box-title third-color"><?php the_field('intro_title'); ?></span>
                                <div class="margin-bottom box-content third-color">
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
                                    <span class="border-btn-wrap third-color hover-light-black <?php echo $btnStyle; ?>">
                                        <?php _e('Learn More', 'gocreations'); ?>
                                    </span>
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
                            <a href="<?php echo esc_url($permalink); ?>" class="block-box-wrap show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s">
                                <div class="block-box-image">
                                    <?php echo wp_get_attachment_image($image['id'], 'large'); ?>
                                </div>
                                <div class="block-box-content">
                                    <span class="box-title third-color"><?php the_sub_field('title'); ?></span>
                                    <span class="margin-bottom box-subtitle third-color"><?php the_sub_field('subtitle'); ?></span>
                                    <div class="margin-bottom box-content third-color"><?php the_sub_field('content'); ?></div>
                                    <div class="button-wrapper">
                                        <?php
                                        $btnType = get_field('button_type', 'options');
                                        if ($btnType == "50") : ?>
                                            <?php $btnStyle = "round" ?>
                                        <?php elseif ($btnType == "corner") : ?>
                                            <?php $btnStyle = "corner" ?>
                                        <?php endif; ?>
                                        <span class="border-btn-wrap third-color hover-light-black <?php echo $btnStyle; ?>">
                                            <?php _e('Learn More', 'gocreations'); ?>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        <?php else : ?>
                            <div class="block-box-wrap show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s">
                                <div class="block-box-image">
                                    <?php echo wp_get_attachment_image($image['id'], 'large'); ?>
                                </div>
                                <div class="block-box-content">
                                    <span class="box-title third-color"><?php the_sub_field('title'); ?></span>
                                    <span class="margin-bottom box-subtitle third-color"><?php the_sub_field('subtitle'); ?></span>
                                    <div class="margin-bottom box-content third-color"><?php the_sub_field('content'); ?></div>
                                    <?php
                                    $featured_post = get_sub_field('link');
                                    if ($featured_post) :
                                        $permalink = get_permalink($featured_post->ID);
                                    ?>
                                        <div class="button-wrapper">
                                            <?php
                                            $btnType = get_field('button_type', 'options');
                                            if ($btnType == "50") : ?>
                                                <?php $btnStyle = "round" ?>
                                            <?php elseif ($btnType == "corner") : ?>
                                                <?php $btnStyle = "corner" ?>
                                            <?php endif; ?>
                                            <a class="border-btn-wrap third-color hover-light-black <?php echo $btnStyle; ?>" href="<?php echo esc_url($permalink); ?>">
                                                <?php _e('Learn More', 'gocreations'); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
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
                <a href="<?php the_field('button_link'); ?>" class="button">
                    <?php the_sub_field('button_text'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>