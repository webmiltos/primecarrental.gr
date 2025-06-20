<?php /* Mobile Header */ ?>

<?php $mobheaderVer = get_field('header_mobile_version','options'); ?>
<?php if ( $mobheaderVer == 'version1' ) : ?>
    <?php echo get_template_part( 'template-parts/mobile-headers/mob-header1' ); ?>
<?php elseif($mobheaderVer == 'version2'): ?>
    <?php echo get_template_part( 'template-parts/mobile-headers/mob-header2' ); ?>
<?php else: ?>
    <?php echo get_template_part( 'template-parts/mobile-headers/mob-header3' ); ?>
<?php endif; ?>