<?php /* Custom Footer */ ?>

<script>
	// HIDE ESPA banner
	jQuery(window).scroll(function() {
		var scroll = jQuery(window).scrollTop();
		if (scroll >= 1000) {
			jQuery(".espa-section").addClass("hide-espa");
		} else {
			jQuery(".espa-section").removeClass("hide-espa");
		}
	});
</script>



<!-- <section class="instagram-section show-on-scroll slide-right">
	<div class="top-center-wrapper container">
		<h3 class="image-text-title third-color margin-bottom bold-weight">
			<?php the_field('instagram_title', 'options'); ?>
		</h3>
		<?php echo do_shortcode('[instagram-feed feed=1]'); ?>


		<div class="button-wrapper center">
			<a href="<?php the_field('instagram', 'options'); ?>" target="_blank">
				<button class="border-btn-wrap black hover-black"><?php the_field('instagram_button', 'options'); ?></button>
			</a>
		</div>
	</div>
</section> -->



<?php $footerVer = get_field('footer_version', 'options'); ?>
<?php if ($footerVer == 'version1') : ?>
	<?php echo get_template_part('template-parts/footers/footer-ver1'); ?>
<?php elseif ($footerVer == 'version2') : ?>
	<?php echo get_template_part('template-parts/footers/footer-ver2'); ?>
<?php else : ?>
	<?php echo get_template_part('template-parts/footers/footer-ver3'); ?>
<?php endif; ?>

<div class="espa-section">
	<div class="espa-banner">
		<?php if (get_field('display_espa_banner', 'options')) : ?>
			<?php
			$link = get_field('espa_pdf', 'options');
			if ($link) : ?>
				<a href="<?php echo esc_url($link['url']); ?>" target="_blank">
					<?php
					$image = get_field('espa_image', 'options');
					if (!empty($image)) : ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?></a>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</div>