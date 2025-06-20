<section class="contact-outside-wrapper ver2 paddings">
    <div class="contact-wrapper ver2">
        <div class="contact-content-wrapper">

            <div class="contact-form-wrap primary-light-color-bg">
                <div class="cf7-form-wrap floating-labels-form">
                    <?php if ( get_sub_field('pretitle') ) : ?>
                        <span class="cali pretitle third-color image-text-pretitle margin-bottom-small" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                            <?php the_sub_field('pretitle'); ?>
                        </span>
                    <?php endif; ?>
                    
                    <?php $titleCat = get_sub_field('title_category'); ?>
                    <?php if ( get_sub_field('title') ) : ?>
                        <?php if ($titleCat == 'h1') : ?>
                            <h1 class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                                <?php the_sub_field('title'); ?>
                            </h1>
                        <?php elseif ($titleCat == 'h2'): ?>
                            <h2 class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                                <?php the_sub_field('title'); ?>
                            </h2>
                        <?php elseif ($titleCat == 'h3'): ?>
                            <h3 class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                                <?php the_sub_field('title'); ?>
                            </h3>
                        <?php elseif ($titleCat == 'h4'): ?>
                            <h4 class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                                <?php the_sub_field('title'); ?>
                            </h4>
                        <?php elseif ($titleCat == 'h5'): ?>
                            <h5 class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                                <?php the_sub_field('title'); ?>
                            </h5>
                        <?php elseif ($titleCat == 'h6'): ?>
                            <h6 class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                                <?php the_sub_field('title'); ?>
                            </h6>
                        <?php else: ?>
                            <span class="third-color contact-title small margin-bottom bold-weight" style="<?php the_sub_field('title_custom_css'); ?>">
                                <?php the_sub_field('title'); ?>
                            </span>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php echo do_shortcode(get_sub_field('form_shortcode')); ?>

                </div>
            </div>
        </div>
    </div>
</section>