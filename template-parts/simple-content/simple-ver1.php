<section class="simple-content-wrapper center">
    <?php if ( get_sub_field('title') || get_sub_field('pretitle') || get_sub_field('text') ) : ?>
            <div class="top-center-wrapper">

                <?php if ( get_sub_field('pretitle') ) : ?>
                    <span class="cali pretitle third-color image-text-pretitle margin-bottom-small" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                        <?php the_sub_field('pretitle'); ?>
                    </span>
                <?php endif; ?>

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

                <?php if ( get_sub_field('text') ) : ?>
                    <div class="main-text text-color image-text-text show-on-scroll slide-right margin-bottom-big" style="<?php the_sub_field('text_custom_css'); ?>">
                        <?php the_sub_field('text'); ?>
                    </div>
                <?php endif; ?>
                
            </div>
        <?php endif; ?>
</section>