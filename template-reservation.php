<?php /* Template Name: Reservation-Template */ ?>

<?php get_header(); ?>

<main class="site-content">
<section class="contact-outside-wrapper ver1">
    <div class="contact-wrapper ver1">
        <?php if ( get_sub_field('pretitle') ||  get_sub_field('title') ) : ?>           
            <div class="top-center-wrapper">
                <span class="cali pretitle secondary-color image-text-pretitle margin-bottom-small" style="<?php the_sub_field('pretitle_custom_css'); ?>">
                    <?php the_sub_field('pretitle'); ?>
                </span>
                <?php $titleCat = get_sub_field('title_category'); ?>
                <?php if ( $titleCat == 'h1' ) : ?>
                    <h1 class="image-text-title secondary-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h1>               
                <?php elseif( $titleCat == 'h2' ): ?>
                    <h2 class="image-text-title secondary-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h2>
                <?php elseif( $titleCat == 'h3' ): ?>
                    <h3 class="image-text-title secondary-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h3>
                <?php elseif( $titleCat == 'h4' ): ?>
                    <h4 class="image-text-title secondary-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h4>
                <?php elseif( $titleCat == 'h5' ): ?>
                    <h5 class="image-text-title secondary-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h5>
                <?php elseif( $titleCat == 'h6' ): ?>
                    <h6 class="image-text-title secondary-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </h6>
                <?php else: ?>
                    <span class="image-text-title secondary-color margin-bottom-small" style="<?php the_sub_field('title_custom_css'); ?>">
                        <?php the_sub_field('title'); ?>
                    </span>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="contact-content-wrapper">

            <div class="faqs-left-wrapper secondary-color-bg">
                <span class="image-text-title white margin-bottom-small show-on-scroll secondary-font">
                    <?php _e('Reservations','gocreations'); ?>
                </span>              
                
                <span class="text medium address white">
                    <?php the_field('reservetion_text'); ?>                  
                </span>
                <?php
                $btnType = get_field('button_type','options');
                if ( $btnType == "50" ) : ?>
                    <?php $btnStyle = "round" ?>
                <?php elseif($btnType == "corner"): ?>
                    <?php $btnStyle = "corner" ?>
                <?php endif; ?>
                <?php if ( get_field('button_link') && get_field('button_text') ) : ?>
                    <div class="border-btn-wrapper margin-top">
                        <a class="border-btn-wrap white hover-black <?php echo $btnStyle; ?>" href="<?php the_field('button_link') ?>">
                            <?php the_field('button_text');?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="contact-form-wrap primary-light-color-bg">
                <div class="cf7-form-wrap floating-labels-form" data-id="<?php echo $_REQUEST['title']; ?>">
                    <?php echo do_shortcode('[contact-form-7 id="f244946" title="Reservations"]'); ?>
                </div>
            </div>

        </div>


    </div>
</section>


    <div class="mid-container">
        <!-- <div class="intro-fleet"> -->
            <!-- <span class="main-text text-color image-text-text show-on-scroll"><?php _e('TAKE A LOOK AT','gocreations'); ?></span>
            <h2 class="image-text-title text-color margin-bottom-small show-on-scroll"><?php _e('Our Fleet','gocreations'); ?></h2>
            <a class="btn-fleet" href="<?php the_field('fleet_button');?>">SEE ALL</a> -->
        <!-- </div> -->

    
        <div class="fleet-home-wrapper fleet-slider swiper-container ">
            <?php
            $type = 'fleet';
            $args=array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'order' => 'ASC'
            );
            $my_query = null;
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
            ?>
            
                <div class="fleet-home-wrap swiper-wrapper">
                
                    <?php
                    while ($my_query->have_posts()) : $my_query->the_post();
                        ?>


                        <div class="fleet-single-wrap swiper-slide">
                            <div class="single-fleet">
                                <div class="fleet-image-wrapper">
                                

                                    <?php $image = get_field('image');
                                    if ( !empty($image) ): ?>
                                        <img class="fleet-image" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="single-bike-wrapper">        
                                    <div class="single-fleet-info">
                                        <!-- <span class="title"><?php the_field('title');?></span> -->
                                        <span class="title"><?php the_title();?></span>
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) {
                                            $category_name = $categories[0]->name;
                                            ?>
                                            <span class="group"><?php echo $category_name; ?></span>
                                        <?php } ?>
                                        <?php if(get_field('licences')):?>
                                            <span class="license"><?php the_field('licences');?></span>
                                        <?php endif ?>
                                        <?php if(get_field('cc')):?>
                                            <span class="main-text text-color image-text-text show-on-scroll"><?php the_field('cc');?>cc</span>
                                        <?php endif ?>
                                    </div>
                                        <div class="bottom-wrapper">
                                            <a href="<?php the_field('request_link','options');?>" class="border-btn-wrap extra-color third-color hover-light-black round"><?php _e('Book Now');?></a>
                                        
                                        </div>
                                </div>
                            </div>
                        </div>
                        
                    <?php endwhile; ?>
                </div>
                <div class="swiper-buttons-wrapper"> 
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            <?php }
            wp_reset_query();  // Restore global post data stomped by the_post().
            ?>
        </div>

        
    </div>

           

</main>

<script>
    var id = jQuery('.cf7-form-wrap.floating-labels-form').attr('data-id');
    console.log(id);
    if (jQuery('#your-fleet option[value="' + id + '"]').val() == id) {
        jQuery('#your-fleet option[value="' + id + '"]').attr('selected', true);
    }
</script>

<?php get_footer(); ?>


