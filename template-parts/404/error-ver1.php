<section class="error-page-wrapper ver1">
    <?php
    $image = get_field('404_image','options');
    $size = 'full';
    ?>
    <?php echo wp_get_attachment_image( $image['id'], $size ); ?>
    <div class="error-page-content-wrap">
        <?php if (get_field('404_title','options')): ?>
            <h1 class="hero-title error white">
                <?php the_field('404_title','options'); ?>
            </h1>
        <?php endif; ?>
        <?php if (get_field('404_subtitle','options')): ?>
            <span class="main-section-subtitle error white">
                <?php the_field('404_subtitle','options'); ?>
            </span>
        <?php endif; ?>
        <?php if (get_field('404_content','options')): ?>
            <span class="main-section-text error white margin-bottom-big">
                <?php the_field('404_content','options'); ?>
            </span>
        <?php endif; ?>
        <?php if (get_field('404_button_link','options') && get_field('404_button_text','options')): ?>
            <?php
            $btnType = get_field('button_type','options');
            if ( $btnType == "50" ) : ?>
                <?php $btnStyle = "round" ?>
            <?php elseif($btnType == "corner"): ?>
                <?php $btnStyle = "corner" ?>
            <?php endif; ?>
            <div class="button-wrapper">
                <a class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>" href="<?php the_field('404_button_link','options') ?>">
                    <?php the_field('404_button_text','options'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>