<?php if (get_field('show_pop_up', 'options')) : ?>
    <div class="pop-up-wrapper">
        <div class="close-sale-popup"></div>
        <div class="pop-up-second-wrapper">

            <?php if (get_field('pop_up_first_title', 'options')) : ?>
                <div class="main-title smaller">
                    <?php (the_field('pop_up_first_title', 'options')); ?>
                </div>
            <?php endif; ?>


            <?php if (get_field('pop_up_info', 'options')) : ?>
                <div class="pop-up-first-info">
                    <?php (the_field('pop_up_info', 'options')); ?>
                </div>
            <?php endif; ?>

            <?php if (get_field('pop_up_second_info', 'options')) : ?>
                <div class="pop-up-second-info">
                    <?php (the_field('pop_up_second_info', 'options')); ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('pop_up_button_link', 'options')) : ?>
                <div class="border-btn-wrapper">
                    <a href="<?php (the_field('pop_up_button_link', 'options')); ?>" target="_blank" class="border-button border-btn-wrap pop-up-button round">
                        <?php (the_field('pop_up_button_text', 'options')); ?>
                    </a>
                </div>
            <?php endif; ?>

        </div>


    </div>
<?php endif; ?>