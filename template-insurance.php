<?php /* Template Name: Insurance-Template */ ?>

<?php get_header(); ?>

<main class="site-content info-page insurance-page">

    <section class="terms-section blue-bg paddings">
        <div class="container flex reverse">
            <div class="content-left">
                <div class="content-left-wrap">
                    <h1 class="title large bold show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_title(); ?></h1>
                    <p class="text subtext margin-bottom show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_field('insurance_text'); ?></p>
                    <h2 class="no-font"><?php the_title(); ?></h2>
                    <div class="content-bottom faqs-section show-on-scroll slide-up" style="transition-delay: 0.3s;">

                        <?php
                        $table = get_field('insurance_table');

                        if (!empty($table)) :
                        ?>
                            <table border="0">

                                <?php if (!empty($table['caption'])) : ?>
                                    <caption><?php echo $table['caption']; ?></caption>
                                <?php endif; ?>

                                <?php if (!empty($table['header'])) : ?>
                                    <thead>
                                        <tr>
                                            <?php foreach ($table['header'] as $th) : ?>
                                                <th class="text"><?php echo $th['c']; ?></th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                <?php endif; ?>

                                <tbody>
                                    <?php foreach ($table['body'] as $tr) : ?>
                                        <tr>
                                            <?php foreach ($tr as $td) : ?>
                                                <td class="text"><?php echo $td['c']; ?></td>
                                            <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        <?php endif; ?>






                        <div class="content-wrap">
                            <?php the_field('texts'); ?>
                        </div>




                        <div class="insurance-repeater">
                            <p class="title">
                                Insurance Price
                            </p>
                            <div class="row">
                                <?php if (get_field('price_table_repeater')) : ?>
                                    <?php while (the_repeater_field('price_table_repeater')) : ?>
                                        <div class="display_flex">
                                            <p class="text first"><?php the_sub_field('text'); ?></p>
                                            <p class="text"><?php the_sub_field('details'); ?></p>
                                            <p class="text"><?php the_sub_field('price'); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="insurance-repeater">
                            <p class="title">
                                Deposit
                            </p>
                            <div class="row">
                                <?php if (get_field('deposit_table_repeater')) : ?>
                                    <?php while (the_repeater_field('deposit_table_repeater')) : ?>
                                        <div class="display_flex">
                                            <p class="text first"><?php the_sub_field('text'); ?></p>
                                            <p class="text"><?php the_sub_field('details'); ?></p>
                                            <p class="text"><?php the_sub_field('price'); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="insurance-repeater">
                            <p class="title">
                                Insurance Price
                            </p>
                            <div class="row">
                                <?php if (get_field('excess_table_repeater')) : ?>
                                    <?php while (the_repeater_field('excess_table_repeater')) : ?>
                                        <div class="display_flex">
                                            <p class="text first"><?php the_sub_field('text'); ?></p>
                                            <p class="text"><?php the_sub_field('details'); ?></p>
                                            <p class="text"><?php the_sub_field('price'); ?></p>
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

                    <div class="mobile-sidebar-menu">
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