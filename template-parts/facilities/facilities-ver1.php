<section class="facilities-outside-wrapper primary-color-bg ver1">
    <div class="facilities-wrapper ver1">
        <div class="top-center-wrapper">
            <span class="cali pretitle third-color image-text-pretitle margin-bottom-small" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                <?php the_sub_field('pretitle'); ?>
            </span>
            <?php $titleCat = get_sub_field('title_category'); ?>
            <?php if ( $titleCat == 'h1' ) : ?>
                <h1 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h1>               
            <?php elseif( $titleCat == 'h2' ): ?>
                <h2 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h2>
            <?php elseif( $titleCat == 'h3' ): ?>
                <h3 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h3>
            <?php elseif( $titleCat == 'h4' ): ?>
                <h4 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h4>
            <?php elseif( $titleCat == 'h5' ): ?>
                <h5 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h5>
            <?php elseif( $titleCat == 'h6' ): ?>
                <h6 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h6>
            <?php else: ?>
                <span class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </span>
            <?php endif; ?>
        </div>

        

        <?php if( have_rows('facilities') ): ?>
            <div class="facilities-wrap">
                <?php $time = 0.1; ?>
                <?php while( have_rows('facilities') ): the_row(); 
                    $image = get_sub_field('image');
                    ?>
                    <div class="facilities-box-wrap show-on-scroll slide-up" style="transition-delay:<?php echo $time; ?>s">
                        <div class="facilities-box-image">
                            <?php echo wp_get_attachment_image( $image['id'], 'large' ); ?>
                        </div>
                        <div class="facilities-box-content secondary-color">
                            <span class="margin-bottom-small facilities-title third-color"><?php the_sub_field('title'); ?></span>
                            <div class="facilities-content third-color"><?php the_sub_field('text'); ?></div>
                        </div>
                    </div>
                    <?php $time = $time + 0.07; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</section>