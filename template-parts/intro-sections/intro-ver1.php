<?php
$introHeight = false;
if (get_field('intro_height')) {
    $introHeight = true;
}
?>

<section class="intro-wrapper ver1 <?= $introHeight ? 'small' : ''; ?>">
    <div class="intro-wrap">

        <div class="single-slider-wrapper swiper-container">
            <div class="swiper-wrapper">
                <?php $items = 0; ?>
                <?php 
                $imagesdesk = get_field('intro_slider');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $imagesdesk ):?>
                    <?php foreach( $imagesdesk as $image ): ?>
                        <div class="swiper-slide">
                            <div class="filter">
                                <?php echo wp_get_attachment_image( $image['id'], $size ); ?>
                            </div>
                        </div>
                        <?php $items = $items + 1; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- extra -->
        <div class="single-slider-wrapper swiper-container mob">
            <div class="secondary-color-bg intro-bg-slider"></div>
            <div class="swiper-wrapper">
                <?php
                $items = 0;
                if ( get_field('intro_slider_mobile') ){
                    $imagesmob = get_field('intro_slider_mobile');
                } else{
                    $imagesmob = get_field('intro_slider');
                }
                if ($imagesmob) :
                    foreach ($imagesmob as $image) :
                ?>
                        <div class="swiper-slide">
                            <div class="filter">
                                <?php echo wp_get_attachment_image( $image['id'], $size ); ?>
                            </div>
                        </div>
                        <?php $items++; ?>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>


        <?php
        $show_slider = get_field('hero_fleet_slider');
        ?>

        <div class="intro-out-wrap-content custom-small-container <?php echo $show_slider ? ' fleet-slider-intro' : '' ;?>">
            <?php if ( $items > 1 ) : ?>
                <div class="swiper-button-prev intro"></div>
                <div class="swiper-button-next intro"></div>
            <?php endif; ?>
            <div class="intro-content-wrapper show-on-scroll slide-up new-addition">
                <span class="cali pretitle white small new-addition uppercase">
                    <?= the_field('intro_pretitle'); ?>
                </span>
                <h1 class="intro-title bold-weight white margin-bottom">
                    <?= the_field('intro_title'); ?>
                </h1>

                <?php if (get_field('intro_text')) : ?>
                    <p class="intro-text white max-width margin-bottom">
                        <?= the_field('intro_text'); ?>
                    </p>
                <?php endif; ?>

                <?php if ( !get_field('intro_button_hide') ) : ?>
                    <div class="intro-btns-wrapper">
                        <?php
                        $btnType = get_field('button_type', 'options');
                        $btnStyle = ($btnType == "50") ? "round" : (($btnType == "corner") ? "corner" : "");
                        if (get_field('intro_button_link')) :
                        ?>
                            <div class="border-btn-wrapper">
                                <a class="border-btn-wrap hover-black <?= $btnStyle; ?>" href="<?= the_field('intro_button_link') ?>">
                                    <?= get_field('intro_button_text') ? the_field('intro_button_text') : __('ΜΑΘΕΤΕ ΠΕΡΙΣΣΟΤΕΡΑ', 'gocreations'); ?>
                                </a>
                            </div>
                        <?php elseif (get_field('intro_first_button_link')) : ?>
                            <div class="border-btn-wrapper">
                                <a class="border-btn-wrap white hover-black <?= $btnStyle; ?>" href="<?= the_field('intro_first_button_link') ?>">
                                    <?= get_field('intro_first_button_text') ? the_field('intro_first_button_text') : __('ΜΑΘΕΤΕ ΠΕΡΙΣΣΟΤΕΡΑ', 'gocreations'); ?>
                                </a>
                            </div>
                        <?php else : ?>
                            <div class="border-btn-wrapper scroll">
                                <span class="border-btn-wrap white scroll-next main-color <?= $btnStyle; ?>">
                                    <?= get_field('intro_button_text') ? the_field('intro_button_text') : __('ΜΑΘΕΤΕ ΠΕΡΙΣΣΟΤΕΡΑ', 'gocreations'); ?>
                                </span>
                            </div>
                        <?php endif; ?>
    
                        
    
                        <?php if (get_field('intro_second_button_link')) : ?>
                            <div class="border-btn-wrapper">
                                <a class="border-btn-wrap black <?= $btnStyle; ?>" href="<?= the_field('intro_second_button_link') ?>">
                                    <?= get_field('intro_second_button_text') ? the_field('intro_second_button_text') : __('ΜΑΘΕΤΕ ΠΕΡΙΣΣΟΤΕΡΑ', 'gocreations'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                

            </div>



            

            <?php if ($show_slider) : ?>
                
            <?php $slider_data = get_field('slider_data'); ?>

                <?php if ($slider_data === 'shortcode') : ?>
                    <div class="hero-fleet-slider-wrapper">
                        <div class="swiper-container repeater heroSwiper show-on-scroll slide-down">
                            <?php echo do_shortcode(get_field('shortcode')); ?>
                            <div class="hero-button-slider-wrapper">
                                <div class="buttons-wrapper">
                                    <div class="swiper-button-next v1 swiper-button-next-hero"></div>
                                    <div class="swiper-button-prev v1 swiper-button-prev-hero"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($slider_data === 'repeater') : ?>
                    <?php if (have_rows('hero_fleet_repeater')) : ?>
                        <div class="hero-fleet-slider-wrapper">
                            <div class="swiper-container repeater heroSwiper show-on-scroll slide-down">
                                <ul class="swiper-wrapper">
                                    <?php while (have_rows('hero_fleet_repeater')) : the_row(); ?>
                                        <li class="hero-fleet fleet-single-wrap swiper-slide">
                                            <div class="title-wrap">
                                                <h4 class="vehicle-title"><?php the_sub_field('hero_fleet_title'); ?></h4>
                                                <h4 class="vehicle-price"><?php esc_html_e('from', 'gocreations'); ?> <?php the_sub_field('hero_fleet_price'); ?></h4>
                                            </div>
                                            <?php $image = get_sub_field('hero_fleet_image');
                                            if (!empty($image)) : ?>
                                                <div class="bg-image-wrap landscape">
                                                    <img src="<?php echo esc_url($image['url']); ?>" loading="lazy" class="contain" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                </div>
                                            <?php endif; ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                                <div class="hero-button-slider-wrapper">
                                    <div class="buttons-wrapper">
                                        <div class="swiper-button-next v1 swiper-button-next-hero"></div>
                                        <div class="swiper-button-prev v1 swiper-button-prev-hero"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

            <?php endif; ?>



        </div>

        <?php if (get_field('hero_search_form') && get_field('hero_search_form_shortcode')) : ?>
            <?php $shortcode = get_field('hero_search_form_shortcode'); ?>
            <div class="reservation-form-wrap container">
                <?php echo do_shortcode($shortcode); ?>
            </div>
        <?php endif; ?>

    </div>
</section>