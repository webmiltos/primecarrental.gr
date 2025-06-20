<section class="faqs-outside-wrapper mid-container ver4">
    <div class="faqs-wrapper ver4">


        <div class="faqs-content-wrapper">
            <div class="faq-sidebar">
                <?php if (get_sub_field('sidebar_repeater')) : ?>
                    <?php while (the_repeater_field('sidebar_repeater')) : ?>

                        <a href="<?php the_sub_field('link'); ?>">
                            <?php $image = get_sub_field('icon');
                            if (!empty($image)) : ?>
                                <img class="icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                            <h4><?php the_sub_field('text'); ?></h4>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>


            <div class="right-content">
                <div class="top">
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


                <div class="mobile-sidebar-menu <?php echo $btnStyle; ?>">
                    <div class="mobile-info-tab">
                        <?php echo __('FAQs', 'gocreations'); ?>
                    </div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'sidebar-menu',
                        'container' => 'nav',
                        'container_class' => 'sidebar-menu',
                    ));
                    ?>
                </div>


                <?php if (have_rows('faq')) : ?>
                    <?php $time = 0.1; ?>
                    <div class="faqs-wrap">
                        <?php while (have_rows('faq')) : the_row(); ?>
                            <div class="single-faq show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s">
                                <span class="question-faq secondary-color"><?php the_sub_field('title'); ?><div class="circle"></div></span>
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

                <a href="<?php the_field('faqs_link', 'options'); ?>" class="border-btn-wrap scrolled-black hover-black round">
                    View All
                </a>

            </div>
        </div>


    </div>
</section>