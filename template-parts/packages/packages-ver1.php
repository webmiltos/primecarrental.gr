<section class="packages main-grid ver1">

    <div class="top-center-wrapper">
        <span class="main-text text-color image-text-text show-on-scroll"><?php the_sub_field('packages_pre_title'); ?></span>
        <h1 class="image-text-title text-color margin-bottom-small show-on-scroll"><?php the_sub_field('packages_title'); ?></h1>
        <?php if (get_field('packages_intro')) : ?>
            <span class="main-text text-color image-text-text show-on-scroll"><?php the_sub_field('packages_intro'); ?></span>
        <?php endif; ?>
    </div>

    <div class="mid-container">
        <div class="packages-wrapper">
            <?php while (have_rows('packages_reapeter')) : the_row(); ?>

                <div class="packages-single-wrapper">

                    <div class="packages-title-wrapper">
                        <div class="title">
                            <?php the_sub_field('package_title'); ?>
                        </div>
                        <div class="packages-offer">
                            <?php the_sub_field('package_percent'); ?>
                        </div>
                    </div>

                    <div class="packages-info-wrapper">
                        <?php the_sub_field('package_info'); ?>
                    </div>

                </div>

            <?php endwhile; ?>
        </div>
    </div>

</section>