<?php /* Template Name: Our Fleet-Template */ ?>



<?php get_header(); ?>


<main class="site-content fleet-page">

    <h3 class="no-font">Our Fleet</h3>
    <?php $introVer = get_field('intro_design'); ?>
    <?php if ($introVer == 'nointro') : ?>
    <?php elseif ($introVer == 'design1') : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver1'); ?>
    <?php elseif ($introVer == 'design2') : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver2'); ?>
    <?php else : ?>
        <?php echo get_template_part('template-parts/intro-sections/intro-ver3'); ?>
    <?php endif; ?>


    <?php if (have_rows('flexible_content')) : ?>
        <?php while (have_rows('flexible_content')) : the_row(); ?>
            <?php if (get_row_layout() == 'image_text_1') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/image-text1/image-text1-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/image-text1/image-text1-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/image-text1/image-text1-ver3'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'image_text_2') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/image-text2/image-text2-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/image-text2/image-text2-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/image-text2/image-text2-ver3'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'blocks') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/blocks/block-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/blocks/block-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/blocks/block-ver3'); ?>
                <?php endif; ?>


            <?php elseif (get_row_layout() == 'plain_text') : ?>
                <?php echo get_template_part('template-parts/plain-text/plain-text-ver1'); ?>

            <?php elseif (get_row_layout() == 'facilities') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/facilities/facilities-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/facilities/facilities-ver2'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/facilities/facilities-ver3'); ?>
                <?php elseif ($designVer == 'design4') : ?>
                    <?php echo get_template_part('template-parts/facilities/facilities-slider'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/facilities/facilities-ver5'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'product_categories') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/product-categories/product-categories-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/product-categories/product-categories-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/product-categories/product-categories-ver1'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'product_slider') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/product-slider/product-slider-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/product-slider/product-slider-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/product-slider/product-slider-ver1'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'product_slider') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/product-slider/product-slider-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/product-slider/product-slider-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/product-slider/product-slider-ver1'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'gallery') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/gallery/gallery-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/gallery/gallery-ver2'); ?>
                <?php elseif ($designVer == 'design3') : ?>
                    <?php echo get_template_part('template-parts/gallery/gallery-ver3'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/gallery/gallery-ver4'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'quote') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/quotes/quote-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/quotes/quote-ver2'); ?>
                <?php elseif ($designVer == 'design3') : ?>
                    <?php echo get_template_part('template-parts/quotes/quote-ver3'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/quotes/quote-ver4'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'faqs') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/faqs/faqs-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/faqs/faqs-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/faqs/faqs-ver3'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'contact') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/contact/contact-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/contact/contact-ver2'); ?>
                <?php else : ?>
                    <?php echo get_template_part('template-parts/contact/contact-ver3'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'map') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/map/map-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/map/map-ver2'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'simple_content') : ?>
                <?php echo get_template_part('template-parts/simple-content/simple-ver1'); ?>

            <?php elseif (get_row_layout() == 'archive') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/archive/archive-locations'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/archive/archive-accommodation'); ?>
                <?php endif; ?>


            <?php elseif (get_row_layout() == 'useful_info') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/useful-info/useful-info-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/useful-info/useful-info-ver2'); ?>
                <?php endif; ?>

            <?php elseif (get_row_layout() == 'offices') : ?>
                <?php $designVer = get_sub_field('design'); ?>
                <?php if ($designVer == 'design1') : ?>
                    <?php echo get_template_part('template-parts/offices/offices-ver1'); ?>
                <?php elseif ($designVer == 'design2') : ?>
                    <?php echo get_template_part('template-parts/offices/offices-ver2'); ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all buttons generated by the shortcode
        var buttons = document.querySelectorAll('.inner-wrapper-content-4 .gc-car_button'); // Replace with the actual selector for your buttons

        // Loop through each button
        buttons.forEach(function(button) {
            // Get the button type from options for each button
            var btnType = '<?php echo get_field('button_type', 'options'); ?>';

            // Add the appropriate class based on the button type
            if (btnType === '50') {
                button.classList.add('round');
            } else if (btnType === 'corner') {
                button.classList.add('corner');
            }
        });
    });

    window.addEventListener('load', () => {
        setTimeout(() => {
            // Select all <li> elements with class 'single-fleet-wrap'
            const fleetItems = document.querySelectorAll('li.single-fleet-wrap');

            // Loop through each <li> element
            fleetItems.forEach(item => {
            // Check if the <div> with class 'price' exists inside the <li>
            if (!item.querySelector('.gc-car_price')) {
                // If not, add the class 'no-price' to the <li>
                item.classList.add('no-price');
            }
            });
        }, 100); // 1000ms = 1 second
    });
</script>

<?php get_footer(); ?>