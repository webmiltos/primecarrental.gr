<section class="useful-section ver1 paddings primary-color-bg">
    <div class="container">
        <div class="content-top center show-on-scroll slide-up" style=" transition-delay: 0.1s;">
            <h2 class="title large bold"><?php the_sub_field('useful_title'); ?></h2>
            <p class="text"><?php the_sub_field('useful_text'); ?></p>
        </div>

        <?php
        $btnType = get_field('button_type', 'options');
        if ($btnType == "50") : ?>
            <?php $btnStyle = "round" ?>
        <?php elseif ($btnType == "corner") : ?>
            <?php $btnStyle = "corner" ?>
        <?php endif; ?>

        <div class="content-middle">
            <?php if (get_sub_field('useful_repeater')) : ?>
                <ul>
                    <?php while (the_repeater_field('useful_repeater')) : ?>
                        <a class="<?php echo $btnStyle; ?>" href="<?php the_sub_field('link'); ?>">
                            <li class="repeater-item">
                                <?php $image = get_sub_field('icon');
                                if (!empty($image)) : ?>
                                    <img class="<?php echo $btnStyle; ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <p class="title"><?php the_sub_field('title'); ?></p>
                            </li>
                        </a>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>

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
                <h3 class="title large text-color">FAQs</h3>

                <div class="faqs-repeater-wrap">
                    <?php
                    if (get_field('faqs_repeater', 'options')) : ?>
                        <?php $i = 1; ?>
                        <?php while (the_repeater_field('faqs_repeater', 'options')) : ?>

                            <div class="single-faq <?php echo $i > 4 ? ' hide' : ''; ?> data-role=" collapsibleset">
                                <div data-role="main" class="ui-content">
                                    <div data-role="collapsible" class="collapse-data">

                                        <div class="faq-content show-on-scroll slide-up" style="transition-delay: 0.2s;">
                                            <h2 class="content large question">
                                                <?php the_sub_field('question', 'options'); ?>
                                                <div class="circle"></div>
                                            </h2>
                                            <h3 class="content answer <?php echo $i === 1 ? 'active' : ''; ?>">
                                                <?php the_sub_field('answer', 'options'); ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i = $i + 1; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>



                    <?php if (get_sub_field('button_link')) : ?>
                        <div class="button-wrapper">
                            <?php
                            $btnType = get_field('button_type', 'options');
                            if ($btnType == "50") : ?>
                                <?php $btnStyle = "round" ?>
                            <?php elseif ($btnType == "corner") : ?>
                                <?php $btnStyle = "corner" ?>
                            <?php endif; ?>
                            <a class="border-btn-wrap extra-color third-color hover-light-black <?php echo $btnStyle; ?>" href="<?php the_sub_field('button_link'); ?>">
                                <?php if (get_sub_field('button_text')) : ?>
                                    <?php the_sub_field('button_text'); ?>
                                <?php else : ?>
                                    <?php _e('View All', 'gocreations'); ?>
                                <?php endif; ?>
                            </a>
                        </div>
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