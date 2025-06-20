<?php /* Template Name: Price Included-Template */ ?>

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

                        <?php
                        $lang = 1;
                        $shortcode_id = 294;
                        $locations_arr = getGcLocations($lang, $shortcode_id);

                        // echo '<pre>';
                        // var_dump($locations_arr);
                        // echo '</pre>';

                        // Arrays to hold locations with and without location_fee
                        $locations_with_fee = [];
                        $locations_without_fee = [];

                        // Separate locations based on location_fee
                        foreach ($locations_arr as $location) {
                            if (isset($location->location_fee) && !empty($location->location_fee)) {
                                $locations_with_fee[] = $location;
                            } else {
                                $locations_without_fee[] = $location;
                            }
                        }
                        ?>

                        <div class="content-wrapper fee-wrapper">
                            <!-- Table for locations without a fee -->
                            <h2>Free Pick-Up & Drop-off Locations:</h2>
                            <table border="0" cellpadding="20">
                                <tbody class="zero-fee">
                                    <?php if (!empty($locations_without_fee)) : ?>
                                        <?php foreach ($locations_without_fee as $location) : ?>
                                            <tr>
                                                <td><?php echo esc_html($location->location_name); ?></td>
                                                <td>0<span class="small">€</span></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="2">No locations without a fee available.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>


                            <!-- Table for locations with a fee -->
                            <h2>Paid Pick-Up & Drop-off Locations:</h2>
                            <table border="0" cellpadding="20">
                                <tbody>
                                    <?php if (!empty($locations_with_fee)) : ?>
                                        <?php foreach ($locations_with_fee as $location) : ?>
                                            <tr>
                                                <td><?php echo esc_html($location->location_name); ?></td>
                                                <td><?php echo esc_html($location->location_fee); ?><span class="small">€</span></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="2">No locations with a fee available.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
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

        </div>
    </section>
    <h3 class="no-font">Terms</h3>
</main>

<?php get_footer(); ?>