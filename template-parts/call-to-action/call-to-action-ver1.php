<section class="call-to mid-container ver-1">

    <div class="call-to-wrapper main-text-center">
        <div class="call-to-title">
            <?php the_sub_field('call_to_action_title'); ?>
        </div>
        <div class="call-to-wrap">
            <div class="call-buttons-wrap">
                <a class="dark-btn" href="<?php the_sub_field('dark_button_link'); ?>"><?php the_sub_field('dark_button_text'); ?></a>
                <a class="light-btn" href="tel:<?php the_sub_field('light_button_link'); ?>"><?php the_sub_field('light_button_text'); ?></a>
            </div>
        </div>
    </div>

</section>