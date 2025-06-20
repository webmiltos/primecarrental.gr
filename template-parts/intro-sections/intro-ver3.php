<?php $introHeight = false; ?>
<?php if (get_field('intro_height')) : ?>
    <?php $introHeight = true; ?>
<?php endif; ?>
<section class="intro-wrapper ver3 <?php echo $introHeight ? ' small' : ''; ?>">
    <div class="intro-wrap show-on-scroll slide-down">

        <div class="single-slider-wrapper swiper-container">
            <div class="swiper-wrapper">
                <?php
                $images = get_field('intro_slider');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($images) : ?>
                    <?php foreach ($images as $image) : ?>
                        <div class="swiper-slide">
                            <div class="filter">
                                <?php echo wp_get_attachment_image($image['id'], $size); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- extra -->
        <div class="single-slider-wrapper swiper-container mob">
            <div class="secondary-color-bg intro-bg-slider"></div>
            <div class="swiper-wrapper">
                <?php $items = 0; ?>
                <?php 
                $images = get_field('intro_slider_mobile');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $images ):?>
                    <?php foreach( $images as $image ): ?>
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


        <div class="intro-out-wrap-content center">

            <div class="intro-content-wrapper small-container show-on-scroll slide-up">
                <h1 class="intro-title bold-weight white margin-bottom center">
                    <?php the_field('intro_title'); ?>
                </h1>
                <!-- extra subtitle field-->
                <span class="cali title small white image-text-pretitle margin-bottom-big padding-bottom show-on-scroll">
                    <?php the_field('intro_subtitle'); ?>
                </span>

                <?php if ( get_field('show_intro_button') ) : ?>
                    
                    <div class="intro-btns-wrapper">
    
                        <?php if (get_field('intro_button_link')) : ?>
                            <?php
                            $btnType = get_field('button_type', 'options');
                            if ($btnType == "50") : ?>
                                <?php $btnStyle = "round" ?>
                            <?php elseif ($btnType == "corner") : ?>
                                <?php $btnStyle = "corner" ?>
                            <?php endif; ?>
                            <div class="border-btn-wrapper">
                                <a class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>" href="<?php the_field('intro_button_link') ?>">
                                    <?php if (get_field('intro_button_text')) : ?>
                                        <?php the_field('intro_button_text') ?>
                                    <?php else : ?>
                                        <?php _e('Learn More', 'gocreations'); ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('intro_first_button_link')) : ?>
                            <?php
                            $btnType = get_field('button_type', 'options');
                            if ($btnType == "50") : ?>
                                <?php $btnStyle = "round" ?>
                            <?php elseif ($btnType == "corner") : ?>
                                <?php $btnStyle = "corner" ?>
                            <?php endif; ?>
                            <div class="border-btn-wrapper">
                                <a class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>" href="<?php the_field('intro_first_button_link') ?>">
                                    <?php if (get_field('intro_first_button_text')) : ?>
                                        <?php the_field('intro_first_button_text') ?>
                                    <?php else : ?>
                                        <?php _e('Learn More', 'gocreations'); ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('intro_second_button_link')) : ?>
                            <?php
                            $btnType = get_field('button_type', 'options');
                            if ($btnType == "50") : ?>
                                <?php $btnStyle = "round" ?>
                            <?php elseif ($btnType == "corner") : ?>
                                <?php $btnStyle = "corner" ?>
                            <?php endif; ?>
                            <div class="border-btn-wrapper">
                                <a class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>" href="<?php the_field('intro_second_button_link') ?>">
                                    <?php if (get_field('intro_second_button_text')) : ?>
                                        <?php the_field('intro_second_button_text') ?>
                                    <?php else : ?>
                                        <?php _e('Learn More', 'gocreations'); ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>

                <?php endif; ?>
                


                <div class="swiper-pagination intro-bot center"></div>
            </div>
            <div class="scroll-down white">
                <?php _e('Scroll Down', 'gocreations'); ?>
                <div class="scroll-animation-bar"></div>
            </div>
        </div>

    </div>
</section>