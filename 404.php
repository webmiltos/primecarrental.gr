<?php /* 404 */ ?>

<?php get_header(); ?>

<main class="site-content">

        <?php $errorVer = get_field('404_design','options'); ?>
        <?php if ( $errorVer == 'design1' ) : ?>
            <?php echo get_template_part( 'template-parts/404/error-ver1' ); ?>
        <?php elseif($errorVer == 'design2'): ?>
            <?php echo get_template_part( 'template-parts/404/error-ver2' ); ?>
        <?php else: ?>
            <?php echo get_template_part( 'template-parts/404/error-ver3' ); ?>
        <?php endif; ?>

</main>

<?php get_footer(); ?>
