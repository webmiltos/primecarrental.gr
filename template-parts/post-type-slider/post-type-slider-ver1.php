<section class="guide-page use-at-home padding">
    <section class="intro-row paddings container  show-on-scroll slide-up">
        <h2 class="title large center main-color"><?php the_sub_field('top_title'); ?></h2>
        <p class="text max-width center"><?php the_sub_field('top_text'); ?></p>
        <a class="button round text" href="<?php the_sub_field('guide_link', 'options'); ?>"><?php the_sub_field('button_text'); ?></a>
    </section>

    <section class="container items">
        <?php
        $value = get_sub_field('custom_post_type_or_taxonomy');

        if ($value) {
            if (post_type_exists($value)) {
                $args = array(
                    'post_type'      => $value,
                    'posts_per_page' => -1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) : ?>
                    <ul>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <li><?php echo esc_html(get_the_title()); ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php wp_reset_postdata();
                else : ?>
                    <p>No posts found for this custom post type.</p>
                <?php endif;
            } elseif (taxonomy_exists($value)) {
                $terms = get_terms(array(
                    'taxonomy'   => $value,
                    'hide_empty' => false,
                    'order'      => 'DESC',
                ));

                if (!is_wp_error($terms) && !empty($terms)) : ?>
                    <div class="guide-type-wrapper swiper-container guide-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($terms as $term) : ?>
                                <div class="full-container swiper-slide">
                                    <div class="about-image">
                                        <a class="image" href="<?php echo esc_url(get_term_link($term)); ?>">
                                            <?php
                                            $image = get_field('archive_image', $term); // Assuming you have this field for the image
                                            if (!empty($image)) : ?>
                                                <img class="archive-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </a>

                                        <div class="about-wrapper">
                                            <div class="about-details">
                                                <a href="<?php echo esc_url(get_term_link($term)); ?>">
                                                    <h2 class="title white large margin-bottom"><?php echo esc_html($term->name); ?></h2>
                                                </a>
                                                <p class="text white"><?php echo esc_html($term->description); ?></p>
                                                <div class="tax-list">
                                                    <?php
                                                    $args = array(
                                                        'post_status'    => 'publish',
                                                        'posts_per_page' => -1,
                                                        'tax_query'      => array(
                                                            array(
                                                                'taxonomy' => $value,
                                                                'field'    => 'term_id',
                                                                'terms'    => $term->term_id,
                                                            ),
                                                        ),
                                                    );
                                                    $my_query = new WP_Query($args); ?>
                                                    <?php if ($my_query->have_posts()) : ?>
                                                        <ul>
                                                            <?php $i = 1; ?>
                                                            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                                                <li class="<?php echo $i > 4 ? ' hide' : ''; ?>">
                                                                    <a class="text white" href="<?php echo esc_url(get_permalink()); ?>">
                                                                        <?php the_title(); ?>
                                                                    </a>
                                                                </li>
                                                                <?php $i++; ?>
                                                            <?php endwhile; ?>
                                                        </ul>
                                                        <?php wp_reset_postdata(); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <?php
                                                $button_text = get_field('button_text', $term);
                                                if ($button_text) : ?>
                                                    <a class="button round text white" href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($button_text); ?></a>
                                                <?php else : ?>
                                                    <a class="button round text white" href="<?php echo esc_url(get_term_link($term)); ?>">Read More</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a class="button round text mobile" href="<?php echo esc_url(get_field('guide_link', 'options')); ?>">View Guide</a>
                    </div>
                <?php else : ?>
                    <p>No terms found for this taxonomy.</p>
        <?php endif;
            } else {
                echo '<p>Invalid custom post type or taxonomy.</p>';
            }
        }
        ?>
    </section>
</section>