<?php /* Template Name: Terms-Template */ ?>

<?php get_header(); ?>



<main class="site-content info-page terms-page">

    <section class="terms-section blue-bg paddings">
        <div class="container flex reverse">
            <div class="content-left">
                <div class="content-left-wrap">
                    <h1 class="title large bold show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_title(); ?></h1>
                    <h2 class="no-font"><?php the_title(); ?></h2>
                    <p class="text subtext margin-bottom"><?php the_field('extras_text'); ?></p>

                    <div class="content-bottom show-on-scroll slide-up" style="transition-delay: 0.3s;">
                        <?php the_content(); ?>
                    </div>

                </div>
            </div>


            <?php if (get_field('display_sidebar')) : ?>
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

                        <div class="mobile-sidebar-menu">
                            <div class="mobile-info-tab">
                                <?php echo __('Useful Information', 'gocreations'); ?>
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
            <?php endif; ?>

        </div>
    </section>
    <h3 class="no-font">Terms</h3>
</main>

<?php get_footer(); ?>