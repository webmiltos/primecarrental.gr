<section id="map" class="map-outside-wrapper ver1">
    <div class="map-wrapper ver1">
        <?php if (get_field('google_maps_iframe', 'options')) : ?>
            <?php echo get_field('google_maps_iframe', 'options'); ?>
        <?php else : ?>
            <?php
            $location = get_field('location', 'options');
            if ($location) : ?>
                <div class="acf-map">
                    <div class="marker"></div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>