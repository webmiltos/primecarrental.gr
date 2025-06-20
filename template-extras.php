<?php /* Template Name: Extras-Template */ ?>

<?php get_header(); ?>

<main class="site-content info-page extras-page">

    <section class="terms-section blue-bg paddings">
        <div class="container flex reverse">
            <div class="content-left">
                <div class="content-left-wrap">
                    <h1 class="title large bold show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_title(); ?></h1>
                    <h2 class="text subtext margin-bottom show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_field('extras_text'); ?></h2>

                    <div class="content-bottom show-on-scroll slide-up" style="transition-delay: 0.3s;">

                        <div class="insurance-repeater">
                            <p class="title">
                                <?php the_field('extras_title'); ?>
                            </p>
                            <div class="row">
                                <?php if (get_field('extras_repeater')) : ?>
                                    <?php while (the_repeater_field('extras_repeater')) : ?>
                                        <div class="display_flex">
                                            <?php $image = get_sub_field('icon');
                                            if (!empty($image)) : ?>
                                                <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>" alt="<?php echo $image['alt']; ?>" />
                                            <?php endif; ?>

                                            <div class="texts-wrap">
                                                <p class="title main-color"><?php the_sub_field('title'); ?></p>
                                                <p class="text"><?php the_sub_field('text'); ?></p>
                                                <p class="text main-color price"><?php the_sub_field('price'); ?></p>
                                            </div>


                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="insurance-repeater">
                            <p class="title white">
                                <?php the_field('price_title'); ?>
                            </p>
                            <div class="row">
                                <?php if (get_field('price_repeater')) : ?>
                                    <?php while (the_repeater_field('price_repeater')) : ?>
                                        <div class="display_flex">
                                            <p class="text first white"><?php the_sub_field('text'); ?></p>
                                            <p class="text white"><?php the_sub_field('basic'); ?></p>
                                            <p class="text white"><?php the_sub_field('premiun'); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="content-right">
                <div class="content-right-wrap show-on-scroll slide-up" style="transition-delay: 0.1s;">

                    <?php
                    $btnType = get_field('button_type', 'options');
                    if ($btnType == "50") : ?>
                        <?php $btnStyle = "round" ?>
                    <?php elseif ($btnType == "corner") : ?>
                        <?php $btnStyle = "corner" ?>
                    <?php endif; ?>

                    <div class="desktop-sidebar-menu <?php echo $btnStyle; ?>">
                        <div data-role="collapsible" class="collapse-data">
                            <div class="desktop-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'sidebar-menu',
                                    'container' => 'nav',
                                    'container_class' => 'sidebar-menu',
                                ));
                                ?>
                            </div>
                        </div>
                    </div>


                    <?php
                    $btnType = get_field('button_type', 'options');
                    if ($btnType == "50") : ?>
                        <?php $btnStyle = "round" ?>
                    <?php elseif ($btnType == "corner") : ?>
                        <?php $btnStyle = "corner" ?>
                    <?php endif; ?>
                    <div class="mobile-sidebar-menu <?php echo $btnStyle; ?>">
                        <div class="mobile-info-tab">
                            <?php echo __('Useful Info', 'gocreations'); ?>
                        </div>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'sidebar-menu',
                            'container' => 'nav',
                            'container_class' => 'sidebar-menu',
                        ));
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <h3 class="no-font">Our Fleet</h3>


</main>



<?php get_footer(); ?>