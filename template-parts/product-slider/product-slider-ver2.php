<section class="product-slider-section v2">
    <div class="intro-fleet margin-top-big">
        <h2 class="image-text-title third-color margin-bottom-small show-on-scroll margin-top-big bold inter"><?php the_sub_field('title'); ?></h2>
        <span class="main-text text-color image-text-text medium-width show-on-scroll"><?php the_sub_field('text'); ?></span>

        <div class="top-buttons-wrapper">

            <?php
            $btnType = get_field('button_type', 'options');
            if ($btnType == "50") : ?>
                <?php $btnStyle = "round" ?>
            <?php elseif ($btnType == "corner") : ?>
                <?php $btnStyle = "corner" ?>
            <?php endif; ?>

            <div class="fleet-btns-wrapper">
                <span class="fleet-arrow-btn prev-car-btn <?php echo $btnStyle; ?>"></span>
                <span class="fleet-arrow-btn next-car-btn <?php echo $btnStyle; ?>"></span>
            </div>

            <div class="inner-wrapper inner-wrapper-content">
                <div class="border-btn-wrapper">
                    <?php if (get_sub_field('button_link')) : ?>

                        <a class="gc-car_button button border-btn-wrap extra-color center third-color hover-light-black <?php echo $btnStyle; ?>" href="<?php the_sub_field('button_link'); ?>">
                            <?php if (get_sub_field('button_text')) : ?>
                                <?php the_sub_field('button_text'); ?>
                            <?php else : ?>
                                <?php _e('View our fleet', 'gocreations'); ?>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>


    </div>

    <?php
    $btnType = get_field('button_type', 'options');
    if ($btnType == "50") : ?>
        <?php $btnStyle = "round" ?>
    <?php elseif ($btnType == "corner") : ?>
        <?php $btnStyle = "corner" ?>
    <?php endif; ?>
    <div class="fleet-home-wrapper fleet-slider container swiper-container three-per-view <?php echo $btnStyle; ?>">
        <?php echo do_shortcode(get_sub_field('shortcode')); ?>
        <div class="swiper-buttons-wrapper">
            <div class="swiper-button-next car-fleet-btn third-color"></div>
            <div class="swiper-button-prev car-fleet-btn third-color"></div>
        </div>
    </div>
</section>

<script>
    jQuery(".fleet-arrow-btn.prev-car-btn").click(function() {
        jQuery(".swiper-button-prev.car-fleet-btn").click();
    });
    jQuery(".fleet-arrow-btn.next-car-btn").click(function() {
        jQuery(".swiper-button-next.car-fleet-btn").click();
    });



    document.addEventListener("DOMContentLoaded", function() {
        // Function to check conditions and apply/remove styles
        function checkFleetConditions() {
            const fleetCollection = document.querySelector('.fleet-collection-wrap');
            const liElements = fleetCollection ? fleetCollection.querySelectorAll('li') : [];
            const buttonDiv = document.querySelector('.fleet-btns-wrapper');
            
            if (liElements.length <= 3) {
                if (window.innerWidth > 1000) {
                    // If the window width is greater than 1000px, add 'low-car-amount' class
                    if (buttonDiv && !buttonDiv.classList.contains('low-car-amount')) {
                        buttonDiv.classList.add('low-car-amount');
                    }
                } else {
                    // If the window width is less than or equal to 1000px, remove 'low-car-amount' class
                    if (buttonDiv && buttonDiv.classList.contains('low-car-amount')) {
                        buttonDiv.classList.remove('low-car-amount');
                    }
                }
            }
        }

        // Run the function on page load
        checkFleetConditions();

        // Also run the function when the window is resized
        window.addEventListener('resize', checkFleetConditions);
    });
</script>