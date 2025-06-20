<!DOCTYPE html>
<html <?php language_attributes(); ?> class="html-wrapper">

<head>
	<?php echo get_field("google_tag_manager_head", "options"); ?>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<?php
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
		echo ('<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">');
	} ?>

	<title><?php wp_title(''); ?></title>

	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>" /> -->

	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> -->

	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.0/swiper-bundle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.0/swiper-bundle.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.0/swiper-bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.0/swiper-bundle.min.js"></script> -->
	<link rel="stylesheet/less" type="text/css" href="variables.php">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	<?php echo get_field("google_tag_manager_body", "options"); ?>

	<!-- Google Analytics end -->
	<?php
	$btnType = get_field('button_type', 'options');
	if ($btnType == "50") : ?>
		<?php $btnStyle = "round" ?>
	<?php elseif ($btnType == "corner") : ?>
		<?php $btnStyle = "corner" ?>
	<?php endif; ?>
	<style>
		<?php the_field("primary_font", "options"); ?><?php the_field("secondary_font", "options"); ?><?php the_field("cali_font", "options"); ?>h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-weight: 600;
		}


		.main-color {
			color: <?php the_field('primary_color', 'options'); ?>;
		}


		.main-color-bg {
			background: <?php the_field('primary_color', 'options'); ?>;
		}

		.dark-color-bg {
			background: <?php the_field('secondary_color_hover', 'options'); ?>;
		}

		<?php if (get_field('primary_font_select', 'options')) :
			$font = get_field('primary_font_select', 'options');
		?>a,
		li,
		table,
		input,
		select,
		button,
		textarea,
		p,
		span,
		div {
			<?php if ($font == 'cera') : ?>font-family: 'Cera Pro';
			<?php elseif ($font == 'cfasty') : ?>font-family: 'CF Asty Std';
			<?php elseif ($font == 'lovelace') : ?>font-family: 'Lovelace';
			<?php elseif ($font == 'moneta') : ?>font-family: 'Moneta';
			<?php elseif ($font == 'pftransport') : ?>font-family: 'PF Transport';
			<?php elseif ($font == 'opensans') : ?>font-family: 'Open Sans';
			<?php endif; ?><?php the_field("primary_font_custom_css", "options"); ?>;
		}

		<?php else : ?>.primary-font {
			<?php the_field("primary_font_css", "options"); ?>;
		}

		a,
		li,
		table,
		input,
		select,
		button,
		textarea,
		p,
		span,
		div {
			<?php the_field("primary_font_css", "options"); ?>;
		}

		<?php endif; ?><?php if (get_field('secondary_font_select', 'options')) :
							$font = get_field('secondary_font_select', 'options');
						?>h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			<?php if ($font == 'cera') : ?>font-family: 'Cera Pro';
			<?php elseif ($font == 'cfasty') : ?>font-family: 'CF Asty Std';
			<?php elseif ($font == 'lovelace') : ?>font-family: 'Lovelace';
			<?php elseif ($font == 'moneta') : ?>font-family: 'Moneta';
			<?php elseif ($font == 'pftransport') : ?>font-family: 'PF Transport';
			<?php endif; ?><?php the_field("secondary_font_custom_css", "options"); ?>;
		}

		<?php else : ?>.secondary-font {
			<?php the_field("secondary_font_css", "options"); ?>;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			<?php the_field("secondary_font_css", "options"); ?>;
		}

		<?php endif; ?>body {
			background: <?php the_field("body_background_color", "options"); ?>;
			<?php the_field("primary_font_css", "options"); ?>;
		}

		<?php if (get_field('cali_font_select', 'options')) :
			$font = get_field('cali_font_select', 'options');
		?>.cali {
			<?php if ($font == 'cera') : ?>font-family: 'Cera Pro';
			<?php elseif ($font == 'cfasty') : ?>font-family: 'CF Asty Std';
			<?php elseif ($font == 'lovelace') : ?>font-family: 'Lovelace';
			<?php elseif ($font == 'moneta') : ?>font-family: 'Moneta';
			<?php elseif ($font == 'pftransport') : ?>font-family: 'PF Transport';
			<?php elseif ($font == 'opensans') : ?>font-family: 'Open Sans';
			<?php endif; ?><?php the_field("cali_font_custom_css", "options"); ?>;
		}

		<?php else : ?>.cali {
			<?php the_field("cali_font_css", "options"); ?>;
		}

		.third-font {
			<?php the_field("cali_font_css", "options"); ?>;
		}

		<?php endif; ?>.primary-color p {
			color: <?php the_field('primary_color', 'options'); ?>;
		}

		.primary-color p span {
			color: <?php the_field('primary_color', 'options'); ?>;
		}

		.primary-color p a {
			color: <?php the_field('primary_color', 'options'); ?>;
		}

		.primary-color {
			color: <?php the_field('primary_color', 'options'); ?>;
			transition: all .3s ease-in-out;
		}

		.primary-color.hover:hover {
			color: <?php the_field('primary_color_hover', 'options'); ?>;
		}

		.border-primary-color {
			border-color: <?php the_field('primary_color', 'options'); ?>;
		}

		.primary-color-bg {
			background: <?php the_field('primary_color', 'options'); ?>;
			transition: all .3s ease-in-out;
		}

		.primary-color-bg-hover:hover {
			background: <?php the_field('primary_color', 'options'); ?>;
		}

		.scrolled .scrolled-primary-color {
			color: <?php the_field('primary_color', 'options'); ?>;
			border-color: <?php the_field('primary_color', 'options'); ?>;
		}



		.primary-light-color p {
			color: <?php the_field('primary_light_color', 'options'); ?>;
		}

		.primary-light-color p span {
			color: <?php the_field('primary_light_color', 'options'); ?>;
		}

		.primary-light-color p a {
			color: <?php the_field('primary_light_color', 'options'); ?>;
		}

		.primary-light-color {
			color: <?php the_field('primary_light_color', 'options'); ?>;
			transition: all .3s ease-in-out;
		}

		.primary-light-color.hover:hover {
			color: <?php the_field('primary_light_color_hover', 'options'); ?>;
		}

		.border-primary-light-color {
			border-color: <?php the_field('primary_light_color', 'options'); ?>;
		}

		.primary-light-color-bg {
			background: <?php the_field('primary_light_color', 'options'); ?>;
			transition: all .3s ease-in-out;
		}

		.primary-light-color-bg-hover:hover {
			background: <?php the_field('primary_light_color', 'options'); ?>;
		}

		.scrolled .scrolled-primary-light-color {
			color: <?php the_field('primary_light_color', 'options'); ?>;
			border-color: <?php the_field('primary_light_color', 'options'); ?>;
		}



		.secondary-color p {
			color: <?php the_field('secondary_color', 'options'); ?>;
		}

		.secondary-color p span {
			color: <?php the_field('secondary_color', 'options'); ?>;
		}

		.secondary-color p a {
			color: <?php the_field('secondary_color', 'options'); ?>;
		}

		.secondary-color {
			color: <?php the_field('secondary_color', 'options'); ?>;
			transition: all .3s ease-in-out;
		}

		.secondary-color.hover:hover {
			color: <?php the_field('secondary_color_hover', 'options'); ?>;
		}

		.border-secondary-color {
			border-color: <?php the_field('secondary_color', 'options'); ?>;
		}

		.secondary-color-bg {
			background: <?php the_field('secondary_color', 'options'); ?>;
			transition: all .3s ease-in-out;
		}

		.secondary-color-bg-hover:hover {
			background: <?php the_field('secondary_color', 'options'); ?>;
		}

		.scrolled .scrolled-secondary-color {
			color: <?php the_field('secondary_color', 'options'); ?>;
			border-color: <?php the_field('secondary_color', 'options'); ?>;
		}

		.third-color p {
			color: <?php the_field('third_color', 'options'); ?>;
		}

		.third-color p span {
			color: <?php the_field('third_color', 'options'); ?>;
		}

		.third-color p a {
			color: <?php the_field('third_color', 'options'); ?>;
		}

		.third-color {
			color: <?php the_field('third_color', 'options'); ?>;
			transition: all .3s ease-in-out;
		}

		.third-color.hover:hover {
			color: <?php the_field('third_color_hover', 'options'); ?>;
		}

		.border-third-color {
			border-color: <?php the_field('third_color', 'options'); ?>;
		}

		.burger-third-color::before {
			background-color: <?php the_field('third_color', 'options'); ?>;
		}

		.burger-third-color::after {
			background-color: <?php the_field('third_color', 'options'); ?>;
		}

		.burger-third-color div {
			background-color: <?php the_field('third_color', 'options'); ?>;
		}

		.third-color-bg {
			background: <?php the_field('third_color', 'options'); ?>;
			transition: all .3s ease-in-out;
		}

		.third-color-bg-hover:hover {
			background: <?php the_field('third_color', 'options'); ?>;
		}

		.text-color {
			color: <?php the_field('text_color', 'options'); ?>;
		}

		.scrolled .scrolled-third-color {
			color: <?php the_field('third_color', 'options'); ?>;
			border-color: <?php the_field('third_color', 'options'); ?>;
		}

		/* extra */
		.custom-header.scrolled {
			background: <?php the_field('header_scrolled_color', 'options'); ?>;
		}


		/* extra */
		.flatpickr-day.selected,
		.flatpickr-day.startRange,
		.flatpickr-day.endRange,
		.flatpickr-day.selected.inRange,
		.flatpickr-day.startRange.inRange,
		.flatpickr-day.endRange.inRange,
		.flatpickr-day.selected:focus,
		.flatpickr-day.startRange:focus,
		.flatpickr-day.endRange:focus,
		.flatpickr-day.selected:hover,
		.flatpickr-day.startRange:hover,
		.flatpickr-day.endRange:hover,
		.flatpickr-day.selected.prevMonthDay,
		.flatpickr-day.startRange.prevMonthDay,
		.flatpickr-day.endRange.prevMonthDay,
		.flatpickr-day.selected.nextMonthDay,
		.flatpickr-day.startRange.nextMonthDay,
		.flatpickr-day.endRange.nextMonthDay {
			background: <?php the_field('secondary_color', 'options'); ?> !important;
			box-shadow: <?php the_field('secondary_color', 'options'); ?> !important;
			color: #fff;
			border-color: <?php the_field('secondary_color', 'options'); ?> !important;
		}

		/* extra */
		.flatpickr-day:hover {
			color: <?php the_field('primary_color', 'options'); ?>;
			background: <?php the_field('third_color', 'options'); ?> !important;
			border-color: <?php the_field('third_color', 'options'); ?> !important;
		}


		/* location swipper */
		.location-intro-wrap .swiper-button-next {
			color: #fff !important;
		}

		.location-intro-wrap .swiper-button-prev {
			color: #fff !important;
		}

		.location-intro-wrap .swiper-button-next.intro:hover {
			color: <?php the_field('secondary_color', 'options'); ?> !important;
		}

		.location-intro-wrap .swiper-button-prev.intro:hover:after {
			color: <?php the_field('secondary_color', 'options'); ?> !important;
		}

		.location-intro-wrap .swiper-button-next.intro:hover:after {
			color: <?php the_field('secondary_color', 'options'); ?> !important;
		}

		.intro-ver2 .border-btn-wrap.white.hover-black.new.round:hover {
			background: <?php the_field('secondary_color', 'options'); ?> !important;
			border: 1px solid <?php the_field('secondary_color', 'options'); ?> !important;
		}

		.footer-socials-wrap-bot a:hover span::before {
			color: <?php the_field('secondary_color', 'options'); ?>;
		}

		.mob-header.ver2 .menu-mob-wrap ul li a:hover {
			color: <?php the_field('third_color', 'options'); ?>;
			transition: 0 all ease;
		}

		.header a span::before {
			color: <?php the_field('third_color', 'options'); ?>;
		}


		.plain-text-wrap ul li {
			<?php the_field("primary_font_css", "options"); ?>;
		}

		.plain-text-content {
			<?php the_field("primary_font_css", "options"); ?>;
		}

		.plain-text-wrap strong {
			<?php the_field("primary_font_css", "options"); ?>;
		}

		.plain-text-wrap a {
			<?php the_field("primary_font_css", "options"); ?>;
		}

		.plain-text-wrap a:hover {
			color: <?php the_field('secondary_color', 'options'); ?>;
		}

		.footer-signature a:hover {
			color: <?php the_field('primary_color_hover', 'options'); ?> !important;
		}

		.footer-socials-wrap-bot a:hover {
			color: <?php the_field('primary_color_hover', 'options'); ?> !important;
		}

		.footer-socials-wrap-bot a:hover span::before {
			color: <?php the_field('primary_color_hover', 'options'); ?> !important;
		}

		.single-field.full-width.label_f:before {
			border-left: 1px solid <?php the_field('secondary_color', 'options'); ?>;
			border-bottom: 1px solid <?php the_field('secondary_color', 'options'); ?>;
		}

		.btn-fleet {
			color: <?php the_field('third_color', 'options'); ?>;
		}

		.btn-fleet:hover {
			background: <?php the_field('secondary_color', 'options'); ?>;
		}

		.single-fleet .border-btn-wrap {
			color: <?php the_field('third_color', 'options'); ?>;
		}

		.intro-fleet {
			color: <?php the_field('third_color', 'options'); ?>;
		}

		/* .menu-item.menu-item-type-post_type.menu-item-object-page.page_item a:hover{
		color: <?php the_field('third_color', 'options'); ?>;
	} */
		.footer-ver2-info-wrapper .contact-footer-items-wrapper .contact-item.footer:hover {
			cursor: pointer;
		}
	</style>

	<style>
		<?php if (get_field('custom_website_style', 'options')) : ?><?php echo get_field('custom_website_style', 'options'); ?><?php endif; ?>
	</style>

	<script>
		<?php if (get_field('custom_website_scripts', 'options')) : ?>
			<?php echo get_field('custom_website_scripts', 'options'); ?>
		<?php endif; ?>
	</script>

	<?php get_template_part('custom-header'); ?>

	<?php get_template_part('mobile-header'); ?>