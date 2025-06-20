<section class="mid-container gallery-outside-wrapper ver4" id="gallery-ver3">
    <div class="gallery-outside-wrap">

        <div class="image-text-content-wrapper center margin-bottom">
            <!-- <span class="cali pretitle third-color image-text-pretitle margin-bottom-small" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                <?php the_sub_field('pretitle'); ?>
            </span> -->
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

            <?php if (get_sub_field('text')) : ?>
                <div class="main-text text-color image-text-text margin-bottom" style="<?php the_sub_field('text_custom_css'); ?>">
                    <?php the_sub_field('text'); ?>
                </div>
            <?php endif; ?>
        </div>

        <section class="gallery-wrapper-page">
            <?php if (have_rows('gallery_repeater_v4')) : ?>
                <main class="gallery-content-wrapper">
                    <div class="top-center-wrapper">
                        <h1 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                            <?php the_field('gallery_title'); ?>
                        </h1>
                        <div class="gallery-tab-links">
                            <div class="custom-grid flex-wrap">
                                <?php while (have_rows('gallery_repeater_v4')) : the_row(); ?>
                                    <?php if (!get_sub_field('title')) continue; ?>

                                    <span class="tab-link gallery-tab-link<?php echo (get_row_index() === 1) ? ' active' : null; ?>" data-id="<?php echo get_row_index(); ?>">
                                        <h3> <?php the_sub_field('title'); ?></h3>
                                    </span>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-tabs-wrapper">
                        <div class="custom-grid">
                            <?php while (have_rows('gallery_repeater_v4')) : the_row(); ?>

                                <div class="gallery-wrap-page<?php echo (get_row_index() === 1) ? ' active' : null; ?>" data-id="<?php echo get_row_index(); ?>">
                                    <?php
                                    $images = get_sub_field('images');
                                    if ($images) : ?>
                                        <ul>
                                            <?php foreach ($images as $image) : ?>
                                                <li>
                                                    <div data-fancybox="gallery-image-odysseus" class="gallery-image" href="<?php echo $image['url']; ?>" style="background-image:url('<?php echo $image['sizes']['medium_large']; ?>'); background-size: cover; background-position: center center;">
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                </div> <?php // single-tab 
                                        ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </main>

            <?php endif; ?>

        </section>

    </div>
    <div class="container flex center margin-top">
        <?php if (get_sub_field('button_text')) : ?>
            <a href="<?php the_field('button_link'); ?>" class="button">
                <?php the_sub_field('button_text'); ?>
            </a>
        <?php endif; ?>
    </div>
</section>