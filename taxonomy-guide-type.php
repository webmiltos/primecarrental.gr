<?php /* Template Name: Template - guide-type-taxonomy */ ?>

<?php get_header(); ?>


<main class="site-content">

    <div class="intro-wrapper small">
        <div class="intro-wrap">
            <div class="single-slider-wrapper">
                <?php
                // get the current taxonomy term
                $term = get_queried_object();
                $taxonomy = get_queried_object();
                // vars
                $image = get_field('archive_image', $term);
                ?>
                <img src="<?php echo $image['url']; ?>" />
            </div>
            <div class="intro-out-wrap-content custom-small-container">
                <h1 class="no-font"> <?php echo $taxonomy->name; ?> </h1>
                <?php
                $title = get_field('intro_title', $term);
                $text = get_field('intro_text', $term);
                ?>
                <h2 class="title white"><?php echo "$title"; ?></h2>
                <p class="text"><?php echo "$text"; ?></p>
            </div>
        </div>
    </div>


    <section class="tax-items-section paddings">
        <?php
        $tax = $wp_query->get_queried_object();

        $exclude = get_queried_object()->term_id;
        $args = array(
            'exclude' => $exclude,
            'hide_empty' => false,
            'oderby' => 'DESC'
        );
        $terms = get_terms('area_guide_type', $args);
        ?>
        <?php if (have_posts()) : ?>

            <div class="guide-type-wrapper container">

                <?php $i = 1; ?>
                <?php while (have_posts()) : the_post();

                    $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>

                    <div class="about-wrapper container<?php echo $i % 2 == 0 ? ' reverse' : ''; ?>">
                        <div class="about-details">
                            <h2 class="title">
                                <?php echo $post->post_title; ?>
                            </h2>
                            <h3 class="no-font"> <?php echo $post->post_title; ?></h3>
                            <div class="text"><?php the_field('archive_text'); ?></div>
                            <div class="buttons-wrapper">
                                <a class="border-btn-wrap extra-color third-color hover-light-black round text uppercase" href="<?php the_permalink(); ?>">Learn More</a>
                                <?php if (get_field('google_maps')) : ?>
                                    <a class="border-btn-wrap extra-color round maps text uppercase" href="<?php the_field('google_maps'); ?>" target="_blank">Google Maps</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="about-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                $image = the_post_thumbnail();
                                if (!empty($image)) : ?>
                                    <img class="cover" src="<?php echo esc_url($image['sizes']['regular']); ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>

                    <?php $i = $i + 1; ?>
                <?php endwhile; ?>
            </div>
            </div>



        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

    </section>






</main>
<?php get_footer();
