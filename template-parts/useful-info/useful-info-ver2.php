<section class="useful-section ver2 paddings primary-color-bg">
    <div class="container">


        <div class="content-bottom show-on-scroll slide-up" style=" transition-delay: 0.2s;">



            <?php
            $btnType = get_field('button_type', 'options');
            if ($btnType == "50") : ?>
                <?php $btnStyle = "round" ?>
            <?php elseif ($btnType == "corner") : ?>
                <?php $btnStyle = "corner" ?>
            <?php endif; ?>
            <div class="content-left <?php echo $btnStyle; ?>">
                <?php $image = get_sub_field('useful_image');
                if (!empty($image)) : ?>
                    <img class="<?php echo $btnStyle; ?>" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="content-right">
                <h2 class="title large bold margin-bottom-small"><?php the_sub_field('useful_title'); ?></h2>
                <p class="text"><?php the_sub_field('useful_text'); ?></p>

                <?php
                $btnType = get_field('button_type', 'options');
                if ($btnType == "50") : ?>
                    <?php $btnStyle = "round" ?>
                <?php elseif ($btnType == "corner") : ?>
                    <?php $btnStyle = "corner" ?>
                <?php endif; ?>

                <div class="content-links">
                    <?php if (get_sub_field('useful_repeater')) : ?>

                        <?php while (the_repeater_field('useful_repeater')) : ?>
                            <a class="<?php echo $btnStyle; ?>" href="<?php the_sub_field('link'); ?>" style="<?php the_sub_field('title_css'); ?>">

                                <!-- <?php $image = get_sub_field('icon');
                                        if (!empty($image)) : ?>
                                            <img class="<?php echo $btnStyle; ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?> -->
                                <p class="title"><?php the_sub_field('title'); ?></p>
                                <div class="arrow"></div>
                            </a>
                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    jQuery(".question").click(function() {
        var faqItem = jQuery(this).closest('.single-faq');
        var allFaqItems = jQuery('.single-faq');

        // Toggle 'active' class for the clicked item
        faqItem.find(".faq-content").toggleClass('active');
        faqItem.find(".answer").toggleClass('active');

        // Remove 'active' class from other items
        allFaqItems.not(faqItem).find('.faq-content.active').removeClass('active');
        allFaqItems.not(faqItem).find('.answer.active').removeClass('active');
    });
</script>