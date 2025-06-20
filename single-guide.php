<?php /* Template Name: Single-Location-Template */ ?>

<?php get_header(); ?>

<main class="site-content single-guide">


    <section class="intro-wrapper location-intro-wrap <?php echo $introHeight ? ' small' : ''; ?>">
        <div class="intro-wrap">

            <div class="single-slider-wrapper swiper-container">
                <div class="swiper-wrapper">
                    <?php $items = 0; ?>
                    <?php
                    $images = get_field('slider');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($images) : ?>
                        <?php foreach ($images as $image) : ?>
                            <?php $items = $items + 1; ?>
                            <div class="swiper-slide">
                                <?php echo wp_get_attachment_image($image['id'], $size); ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <?php if ($items > 1) : ?>
                    <?php
                    $btnType = get_field('button_type', 'options');
                    if ($btnType == "50") : ?>
                        <?php $btnStyle = "round" ?>
                    <?php elseif ($btnType == "corner") : ?>
                        <?php $btnStyle = "corner" ?>
                    <?php endif; ?>
                    <div class="intro-single-ver1-btns">
                        <div class="swiper-button-prev intro <?php echo $btnStyle; ?>"></div>
                        <div class="swiper-button-next intro <?php echo $btnStyle; ?>"></div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="intro-out-wrap-content">

                <div class="intro-content-wrapper small-container show-on-scroll slide-up">
                    <span class="cali pretitle white">
                        <?php the_field('intro_pretitle'); ?>
                    </span>
                    <h1 class="title large semi-bold white">
                        <?php the_title(); ?>
                    </h1>
                    <h2 class="no-font"> <?php the_title(); ?></h2>
                    <h3 class="no-font"> <?php the_title(); ?></h3>
                    <div class="intro-text text white">
                        <?php the_field('intro_text'); ?>
                    </div>

                </div>
            </div>

        </div>
    </section>



    <section class="main-content-section container">
        <div class="content-left">
            <div class="intro-text text">
                <?php the_field('content'); ?>
            </div>
        </div>
        <div class="content-right">
            <div class="intro-text text">
                <?php the_field('sidebar_content'); ?>

                <?php if (get_field('google_maps')) : ?>
                    <a class="border-btn-wrap extra-color round maps text uppercase" href="<?php the_field('google_maps'); ?>" target="_blank">Google Maps</a>
                <?php endif; ?>
            </div>
        </div>
    </section>



</main>

<?php get_footer(); ?>