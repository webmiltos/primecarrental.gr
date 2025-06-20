<?php /* Template Name: Guide Page Template */ ?>

<?php get_header(); ?>
<main class="site-content guide-page">




    <section id="intro" class="intro-row paddings container">
        <p class="pretitle center uppercase"><?php the_field('intro_pre_title'); ?></p>
        <h1 class="title large center main-color"><?php the_field('intro_title'); ?></h1>
        <p class="text max-width center"><?php the_field('intro_text'); ?></p>
    </section>

    <section class="container items">
        <?php
        $terms = get_terms(
            array(
                'taxonomy'   => 'guide-type',
                'hide_empty' => false,
                'order'  => 'DESC',
            )
        );
        if (!empty($terms) && is_array($terms)) { ?>
            <div class="guide-type-wrapper">
                <?php $i = 1; ?>
                <?php foreach ($terms as $term) : ?>

                    <div class="full-container">


                        <div class="about-image">
                            <a href="<?php echo esc_url(get_term_link($term)) ?>">
                                <?php
                                $image = get_field('archive_image', $term); //onomasia mikrhs eikonas field
                                if (!empty($image)) : ?>
                                    <img class="archive-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </a>

                            <div class="about-wrapper<?php echo $i % 2 == 0 ? ' reverse' : ''; ?>">
                                <div class="about-details">
                                    <a href="<?php echo esc_url(get_term_link($term)) ?>">
                                        <h2 class="title white large margin-bottom"><?php echo $term->name; ?> </h2>
                                    </a>
                                    <h3 class="text white semi-bold">
                                        <?php echo $term->description; ?>
                                    </h3>
                                    <div class="tax-list">
                                        <?php
                                        $type = 'guide'; //edw vazeis to onoma tou post type(oxi to taxonomy)
                                        $args = array(
                                            'post_type' => $type,
                                            'post_status' => 'publish',
                                            'posts_per_page' => -1,
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'guide-type', // edw vazeis to onoma tou taxonomy
                                                    'field' => 'term_id',
                                                    'terms' => $term->term_id,
                                                )
                                            )
                                        );
                                        $my_query = null;
                                        $my_query = new WP_Query($args); ?>
                                        <?php if ($my_query->have_posts()) : ?>
                                            <ul>
                                                <?php
                                                while ($my_query->have_posts()) : $my_query->the_post();
                                                    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), false, '');
                                                    $thumbnail_id = get_post_thumbnail_id($post->ID);
                                                    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                                    $title = get_post(get_post_thumbnail_id())->post_title; ?>
                                                    <li>
                                                        <a class="text white" href="<?php echo the_permalink(); ?>">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                    <?php
                                    $button_text = get_field('button_text', $term);
                                    if ($button_text) :
                                    ?>
                                        <a class="button round text white" href="<?php echo esc_url(get_term_link($term)) ?>"><?php echo esc_html($button_text); ?></a>
                                    <?php else : ?>
                                        <a class="button round text white" href="<?php echo esc_url(get_term_link($term)) ?>">Read More</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>





                    <?php $i = $i + 1; ?>
                <?php endforeach; ?>
            </div>
        <?php } ?>
        <?php wp_reset_query(); ?>

    </section>





</main>

<?php get_footer();
