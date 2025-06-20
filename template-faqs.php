<?php /* Template Name: Faq's-Template */ ?>

<?php get_header(); ?>

<main class="site-content info-page faqs-page">

    <section class="terms-section blue-bg paddings">
        <div class="container flex reverse">
            <div class="content-left">
                <div class="content-left-wrap">
                    <h1 class="title large bold margin-bottom show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_title(); ?></h1>
                    <?php if (get_field('intro_text')) : ?>
                        <p class="intro-text"><?php the_field('intro_text'); ?></p>
                    <?php endif; ?>
                    <div class="faqs-repeater-wrap">
                        <?php
                        if (get_field('faqs_repeater', 'options')) : ?>
                            <?php while (the_repeater_field('faqs_repeater', 'options')) : ?>

                                <div class="single-faq data-role=" collapsibleset">
                                    <div data-role="main" class="ui-content">
                                        <div data-role="collapsible" class="collapse-data">

                                            <div class="faq-content show-on-scroll slide-up" style="transition-delay: 0.3s;">
                                                <h2 class="content large question">
                                                    <?php the_sub_field('question', 'options'); ?>
                                                    <div class="circle"></div>
                                                </h2>
                                                <h3 class="content answer">
                                                    <?php the_sub_field('answer', 'options'); ?>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
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
</main>

<?php get_footer(); ?>