<?php /* Custom Header */ ?>

<!-- <?php if (is_active_sidebar('desktop-wpml-custom-widget')): ?>
            <div class="wpml-lang-switcher desktop">
                <?php dynamic_sidebar('desktop-wpml-custom-widget'); ?>
            </div>
        <?php endif; ?> -->


<?php $headerVer = get_field('header_desktop_version', 'options'); ?>
<?php if ($headerVer == 'version1') : ?>
    <?php echo get_template_part('template-parts/headers/header-ver1'); ?>
<?php elseif ($headerVer == 'version2') : ?>
    <?php echo get_template_part('template-parts/headers/header-ver2'); ?>
<?php elseif ($headerVer == 'version3') : ?>
    <?php echo get_template_part('template-parts/headers/header-ver3'); ?>
<?php else : ?>
    <?php echo get_template_part('template-parts/headers/header-ver4'); ?>
<?php endif; ?>