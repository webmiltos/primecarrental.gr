<?php /* Template Name: Gallery-Template */ ?>

<?php get_header(); ?>

<div class="site-content">

    <section class="gallery-wrapper-page">

        
        <?php if ( have_rows('gallery_repeater') ) : ?>
            
            <main class="gallery-content-wrapper">
                
                <div class="top-center-wrapper">
                    <h1 class="image-text-title third-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_field('gallery_title'); ?>
                    </h1>              
                    <div class="gallery-tab-links">
                        <div class="custom-grid flex-wrap">
                            <?php while( have_rows('gallery_repeater') ) : the_row(); ?>
                                <?php if(!get_sub_field('gallery_title')) continue; ?>
    
                                <span class="tab-link gallery-tab-link<?php echo(get_row_index() === 1) ? ' active' : null;?>" data-id="<?php echo get_row_index();?>">
                                    <?php the_sub_field('gallery_title'); ?>
                                </span>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                

                <div class="gallery-tabs-wrapper">
                    <div class="custom-grid">

                        <?php while( have_rows('gallery_repeater') ) : the_row(); ?>

                            <div class="gallery-wrap-page<?php echo(get_row_index() === 1) ? ' active' : null;?>" data-id="<?php echo get_row_index();?>">
                                <?php
                                $images = get_sub_field('gallery_images');
                                if( $images ): ?>
                                    <ul>
                                        <?php foreach( $images as $image ): ?>
                                            <li>
                                                <div data-fancybox="gallery-image-odysseus" class="gallery-image" href="<?php echo $image['url']; ?>" style="background-image:url('<?php echo $image['sizes']['medium_large']; ?>'); background-size: cover; background-position: center center;">
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                            </div> <?php // single-tab ?>

                        <?php endwhile; ?>

                    </div>
                </div>
            </main>

        <?php endif; ?>

    </section>
    


</div>

<?php get_footer(); ?>
