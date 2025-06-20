<section class="relative">
    <div class="mid-container quotes-outside-wrapper ver3">

        <div class="quote-main-image-wrapper">
            <?php
            $image = get_sub_field('image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ):?>
                <?php echo wp_get_attachment_image( $image['id'], $size ); ?>
            <?php endif; ?>
        </div>

        <div class="quotes-title-wrap ">
            <div class="quote-icon-wrapper margin-bottom">
                <?php
                $image = get_sub_field('icon');
                $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                if( $image ):?>
                    <?php echo wp_get_attachment_image( $image['id'], $size ); ?>
                <?php endif; ?>
            </div>
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

    </div>
    
</section>