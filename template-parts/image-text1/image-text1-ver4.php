<?php
$reverted = get_sub_field('reverted');
?>
<section class="mid-container first-image-text-wrapper image-text-ver4 <?php echo $reverted ? ' reverted' : ''; ?>">
    <div class="first-image-text-wrap">

        <div class="image-wrap">
            <?php
            $image = get_sub_field('main_image');
            $size = 'large'; // (thumbnail, medium, large, full or custom size)
            if ($image) : ?>
                <?php echo wp_get_attachment_image($image['id'], $size); ?>
            <?php endif; ?>
        </div>

        <div class="image-text-content-wrapper small-container">
            <span class="cali pretitle third-color image-text-pretitle margin-bottom-small show-on-scroll slide-right" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                <?php the_sub_field('pretitle'); ?>
            </span>
            <?php $titleCat = get_sub_field('title_category'); ?>
            <?php if ($titleCat == 'h1') : ?>
                <h1 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h1>
            <?php elseif ($titleCat == 'h2') : ?>
                <h2 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h2>
            <?php elseif ($titleCat == 'h3') : ?>
                <h3 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h3>
            <?php elseif ($titleCat == 'h4') : ?>
                <h4 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h4>
            <?php elseif ($titleCat == 'h5') : ?>
                <h5 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h5>
            <?php elseif ($titleCat == 'h6') : ?>
                <h6 class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </h6>
            <?php else : ?>
                <span class="image-text-title third-color margin-bottom-small bold-weight show-on-scroll slide-right" style="<?php the_sub_field('title_custom_css'); ?>">
                    <?php the_sub_field('title'); ?>
                </span>
            <?php endif; ?>

            <?php if (get_sub_field('subtitle')) : ?>
                <span class="image-text-subtitle third-color subtitle medium-weight margin-bottom show-on-scroll slide-right" style="<?php the_sub_field('subtitle_custom_css'); ?>">
                    <?php the_sub_field('subtitle'); ?>
                </span>
            <?php endif; ?>
            <div class="main-text text-color image-text-text show-on-scroll slide-right margin-bottom-big" style="<?php the_sub_field('text_custom_css'); ?>">
                <?php the_sub_field('text'); ?>
            </div>
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
                            <?php _e('Learn More', 'gocreations'); ?>
                        <?php endif; ?>
                    </a>
                </div>
            <?php endif; ?>

        </div>

    </div>
</section>