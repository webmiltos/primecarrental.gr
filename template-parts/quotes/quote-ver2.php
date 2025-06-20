<section class="relative">

    <div class="mid-container quotes-outside-wrapper ver2">
        <div class="quotes-outside-wrap swiper-slide">

            <div class="quote primary-color-bg"></div>
            <?php if (have_rows('quotes')) : ?>
                <div class="swiper-container quotes-wrapper">
                    <div class="swiper-wrapper center">
                        <?php while (have_rows('quotes')) : the_row(); ?>
                            <div class="swiper-slide">
                                <?php $titleCat = get_sub_field('title_category'); ?>
                                <?php if ($titleCat == 'h1') : ?>
                                    <h1 class="image-text-title third-color margin-bottom-small" style="transition-delay: 0s;<?php the_sub_field('title_custom_css'); ?>">
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
                                    <div class="text-line text-reveal">
                                        <h5 class="title" style="<?php the_sub_field('title_custom_css'); ?>">
                                            <?php the_sub_field('title'); ?>
                                        </h5>
                                    </div>
                                <?php elseif ($titleCat == 'h6') : ?>
                                    <h6 class="image-text-title third-color margin-bottom-small show-on-scroll slide-up" style="<?php the_sub_field('title_custom_css'); ?>">
                                        <?php the_sub_field('title'); ?>
                                    </h6>
                                <?php else : ?>
                                    <span class="image-text-title third-color margin-bottom-small show-on-scroll slide-up" style="<?php the_sub_field('title_custom_css'); ?>">
                                        <?php the_sub_field('title'); ?>
                                    </span>
                                <?php endif; ?>
                                <div class="text-line text-reveal">
                                    <div class="main-text center">
                                        <?php the_sub_field('text'); ?>
                                    </div>
                                </div>
                                <div class="text-line text-reveal">
                                    <div class="title subtitle" style="<?php the_sub_field('subtitle_custom_css'); ?>">
                                        <?php the_sub_field('subtitle'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- <div class="arrows-wrapper">
                        <div class="swiper-button-prev reviews third-color <?php echo $btnStyle; ?>"></div>
                        <div class="swiper-button-next reviews third-color <?php echo $btnStyle; ?>"></div>
                    </div> -->
                    <div class="swiper-pagination quote center"></div>
                </div>
            <?php endif; ?>


        </div>
    </div>
    <div class="quote-image-wrapper">
        <?php
        $image = get_sub_field('image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($image) : ?>
            <?php echo wp_get_attachment_image($image['id'], $size); ?>
        <?php endif; ?>
    </div>
</section>



<style>
    .text-line {
        opacity: 1;
        transition: opacity 1.2s ease;
        margin-bottom: 40px;
    }

    .text-line.animate {
        opacity: 1;
        overflow: hidden;
        height: auto;
        margin-bottom: 30px;
    }

    .text-line.animate .title {
        animation: reveal 1.2s ease;
        font-size: 35px;
        font-weight: 600;
    }

    .text-line.animate .title.subtitle {
        animation: reveal 1.2s ease;
        font-size: 28px;
        font-weight: 400;
    }

    .text-line.animate .main-text {
        opacity: 1;
        animation: reveal 1.2s ease;
    }

    @keyframes reveal {
        from {
            opacity: 1;
            transform: translateY(60px);
            /* Start from 20px below */
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>


<script>
    // Function to handle scroll event and add animate class for text-reveal elements
    function checkTextAnimation() {
        var elements = document.getElementsByClassName('text-reveal');
        for (var i = 0; i < elements.length; i++) {
            if (isElementNearTop(elements[i])) {
                elements[i].classList.add('animate');
            }
        }
    }

    // Function to check if an element is near the top of the viewport
    function isElementNearTop(el) {
        var rect = el.getBoundingClientRect();
        return rect.top <= (window.innerHeight || document.documentElement.clientHeight);
    }

    // Initial check when the page loads
    checkTextAnimation();

    // Event listener for scroll event for text-reveal elements
    window.addEventListener('scroll', checkTextAnimation);
</script>