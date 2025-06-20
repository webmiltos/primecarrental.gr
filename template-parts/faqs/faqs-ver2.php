<section class="faqs-outside-wrapper mid-container ver2">
    <div class="faqs-wrapper ver2">
        <div class="top-center-wrapper">
            <span class="cali pretitle third-color image-text-pretitle margin-bottom-small" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                <?php the_sub_field('pretitle'); ?>
            </span>
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
                    <div class="last-text"> <?php the_sub_field('text_last'); ?></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>


    </div>
</section>