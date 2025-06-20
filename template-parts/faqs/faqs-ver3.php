<section class="faqs-outside-wrapper mid-container ver3">
    <div class="faqs-wrapper ver3">

        <div class="faqs-content-wrapper">

            <div class="faqs-left-wrapper secondary-color-bg">
                <?php $titleCat = get_sub_field('title_category'); ?>
                <?php if ($titleCat == 'h1') : ?>
                    <h1 class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h1>
                <?php elseif ($titleCat == 'h2') : ?>
                    <h2 class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h2>
                <?php elseif ($titleCat == 'h3') : ?>
                    <h3 class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h3>
                <?php elseif ($titleCat == 'h4') : ?>
                    <h4 class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h4>
                <?php elseif ($titleCat == 'h5') : ?>
                    <h5 class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h5>
                <?php elseif ($titleCat == 'h6') : ?>
                    <h6 class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h6>
                <?php else : ?>
                    <span class="image-text-title white margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </span>
                <?php endif; ?>
                <span class="subtitle white image-text margin-bottom-small" style="<?php the_sub_field('subtitle_custom_css'); ?>">
                    <?php the_sub_field('subtitle'); ?>
                </span>
                <?php if (get_field('text')) : ?>
                    <?php the_sub_field('text'); ?>
                <?php endif; ?>
            </div>

            <?php if (have_rows('faq')) : ?>
                <div class="faqs-wrap">
                    <?php $time = 0.1; ?>
                    <?php while (have_rows('faq')) : the_row(); ?>
                        <div class="single-faq show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s">
                            <span class="question-faq third-color"><?php the_sub_field('title'); ?></span>
                            <div class="panel">
                                <?php the_sub_field('text'); ?>
                            </div>
                        </div>
                        <?php $time = $time + 0.07; ?>
                    <?php endwhile; ?>
                    <?php if (get_sub_field('text_last')) : ?>
                        <?php the_sub_field('text_last'); ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>


    </div>
</section>