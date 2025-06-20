<section class="locations-section">


    <div class="content-bottom">
        <?php if (get_field('offices_repeater', 'options')) : ?>

            <?php while (the_repeater_field('offices_repeater', 'options')) : ?>
                <div class="box">
                    <div class="display_grid">
                        <div class="address-wrap">
                            <?php if (get_sub_field('address', 'options')) : ?>
                                <span class="map-icon"></span>
                                <p class="text"><?php the_sub_field('address', 'options'); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="info-wrap">
                            <?php if (get_sub_field('email', 'options')) : ?>
                                <a class="text" href="mailto:<?php the_sub_field('email', 'options'); ?>"><?php the_sub_field('email', 'options'); ?></a>
                            <?php endif; ?>

                            <div class="phones-wrap">
                                <?php if (get_sub_field('mobile', 'options')) : ?>
                                    <a class="text" href="tel:<?php the_sub_field('mobile', 'options'); ?>"><?php the_sub_field('mobile', 'options'); ?></a>
                                <?php endif; ?>
                                ,
                                <?php if (get_sub_field('phone', 'options')) : ?>
                                    <a class="text" href="tel:<?php the_sub_field('phone', 'options'); ?>"><?php the_sub_field('phone', 'options'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="iframe-wrapper">
                            <?php echo get_sub_field('google_maps_iframe', 'options'); ?>
                        </div>
                    </div>

                </div>
            <?php endwhile; ?>

    </div>
<?php endif; ?>
</div>
</section>