<?php
// enqueue the child theme scripts and stylesheets


function add_assets()
{
    wp_enqueue_style('childstyle', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'), 'all');

    // Cookies JS
    // wp_enqueue_script( 'cookies', '//cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js', array (), '1.0', true);

    // Popup JS
    wp_enqueue_script('popup', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array(), '1.0', true);

    //Popup CSS
    wp_enqueue_style('popup-style', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css',  array(), '1.0.0', 'all');

    //Slider CSS
    wp_enqueue_style('slider-css', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',  array(), '1.0.0', 'all');

    //Slider JS
    wp_enqueue_script('slider', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.0', true);

    //flatpickr Script
    wp_enqueue_script('flat-pickr', '//cdn.jsdelivr.net/npm/flatpickr', array(), null, true);

    //flatpickr CSS
    wp_enqueue_style('flat-pickr-style', '//cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css',  array(), '1.0.0', 'all');

    //Google Maps JS
    wp_enqueue_script('google-maps', '//maps.googleapis.com/maps/api/js?key=AIzaSyDi2hLgXm_UJiMb8NEowwUoFdW5tGvxKs8', array(), null, true);

    // Anime JS
    // wp_enqueue_script( 'anime', get_template_directory_uri() . '/assets/includes/anime.min.js', array ('jquery'), filemtime( get_stylesheet_directory() . '/assets/includes/anime.min.js'), true);

    // Script JS
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/js/scripts.js'), true);

    // Sliders JS
    wp_enqueue_script('sliders', get_template_directory_uri() . '/assets/js/sliders.js', array('jquery', 'slider'), filemtime(get_stylesheet_directory() . '/assets/js/sliders.js'), true);

    // Google JS
    wp_enqueue_script('google', get_template_directory_uri() . '/assets/js/google.js', array('jquery', 'google-maps'), filemtime(get_stylesheet_directory() . '/assets/js/google.js'), true);

    // Animations JS
    wp_enqueue_script('animations', get_template_directory_uri() . '/assets/js/animations.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/js/animations.js'), true);
}
add_action('wp_enqueue_scripts', 'add_assets');


//Admin Options ACF
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Admin Options',
        'menu_title'    => 'Admin Options',
        'menu_slug'        => 'admin-options',
        'capability'     => 'edit_posts',
        'parent_slug'    => '',
        'position'        => false,
        'icon_url'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'General',
        'menu_title'    => 'General',
        'menu_slug'        => 'admin-options-general',
        'capability'     => 'edit_posts',
        'parent_slug'    => 'admin-options',
        'position'        => false,
        'icon_url'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Contact',
        'menu_title'    => 'Contact',
        'menu_slug'        => 'admin-options-contact',
        'capability'     => 'edit_posts',
        'parent_slug'    => 'admin-options',
        'position'        => false,
        'icon_url'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Privacy Policy',
        'menu_title'    => 'Privacy Policy',
        'menu_slug'        => 'admin-options-policy',
        'capability'     => 'edit_posts',
        'parent_slug'    => 'admin-options',
        'position'        => false,
        'icon_url'        => false
    ));
    // acf_add_options_sub_page(array(
    // 	'page_title'	=> 'Submit Review',
    // 	'menu_title'	=> 'Submit Review',
    // 	'menu_slug'		=> 'admin-options-submit-review',
    // 	'capability' 	=> 'edit_posts',
    // 	'parent_slug'	=> 'admin-options',
    // 	'position'		=> false,
    // 	'icon_url'		=> false
    // ));

    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'        => 'theme-settings',
        'capability'     => 'edit_posts',
        'parent_slug'    => '',
        'position'        => false,
        'icon_url'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'General',
        'menu_title'    => 'General',
        'menu_slug'        => 'theme-settings-general',
        'capability'     => 'edit_posts',
        'parent_slug'    => 'theme-settings',
        'position'        => false,
        'icon_url'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Header',
        'menu_title'    => 'Header',
        'menu_slug'        => 'theme-settings-header',
        'capability'     => 'edit_posts',
        'parent_slug'    => 'theme-settings',
        'position'        => false,
        'icon_url'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer',
        'menu_title'    => 'Footer',
        'menu_slug'        => 'theme-settings-footer',
        'capability'     => 'edit_posts',
        'parent_slug'    => 'theme-settings',
        'position'        => false,
        'icon_url'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Error 404',
        'menu_title'    => 'Error 404',
        'menu_slug'        => 'theme-settings-error',
        'capability'     => 'edit_posts',
        'parent_slug'    => 'theme-settings',
        'position'        => false,
        'icon_url'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Custom Code',
        'menu_title'    => 'Custom Code',
        'menu_slug'        => 'theme-settings-code',
        'capability'     => 'edit_posts',
        'parent_slug'    => 'theme-settings',
        'position'        => false,
        'icon_url'        => false
    ));
    add_filter('acf/settings/google_api_key', function () {
        return 'AIzaSyC7JjsmbyO6y3O9NZXYo7XzdIJazXtrObs';
    });
    //Espa Banner//
    acf_add_options_sub_page(array(
        'page_title' => 'Espa',
        'menu_title' => 'Espa',
        'menu_slug' => 'admin-options-espa',
        'capability' => 'edit_posts',
        'parent_slug' => 'admin-options',
        'position' => false,
        'icon_url' => false
    ));
    //PopUp Banner//
    acf_add_options_sub_page(array(
        'page_title' => 'PopUp',
        'menu_title' => 'PopUp',
        'menu_slug' => 'admin-options-espa',
        'capability' => 'edit_posts',
        'parent_slug' => 'admin-options',
        'position' => false,
        'icon_url' => false
    ));
}

//Featured image
function gocreations_theme_support()
{

    // Add theme Custom Logo
    add_theme_support('custom-logo');

    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');

    // Set post thumbnail size.
    set_post_thumbnail_size(1200, 9999);

    // Custom image sizes
    add_image_size('very_large', 1400, 9999); // 1400 pixels wide (and unlimited height)
    add_image_size('regular', 600, 9999); // 600 pixels wide (and unlimited height)
    add_image_size('optimize', 450, 9999); // 450 pixels wide (and unlimited height)
    add_image_size('small', 200, 200); // 200x200 & no crop

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        )
    );
}

add_action('after_setup_theme', 'gocreations_theme_support');




add_filter('wpcf7_autop_or_not', '__return_false');



//Menus
function register_my_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'main-menu-right' => __('Main Menu Right'),
            'mobile-menu' => __('Mobile Menu'),
            'sidebar-menu' => __('Sidebar Menu'),
            'footer-menu' => __('Footer Menu'),
            'footer-menu-right' => __('Footer Menu Right'),
        )
    );
}
add_action('init', 'register_my_menus');


// WPML CUSTOM WIDGET
function wpml_custom_widget()
{

    $args = array(
        'id' => 'wpml-custom-widget',
        'name' => __('Wpml Widget', 'text_domain'),
        'description' => __('Add custom switcher.', 'text_domain'),
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        'before_widget' => '<section id="%1$s" class="header_wpml_widget widget %2$s">',
        'after_widget' => '</section>',
    );
    register_sidebar($args);
}
add_action('widgets_init', 'wpml_custom_widget');



function wpml_custom_widget_mobile()
{

    $args = array(
        'id' => 'wpml-custom-widget-mobile',
        'name' => __('Wpml Widget Mobile', 'text_domain'),
        'description' => __('Add custom switcher.', 'text_domain'),
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        'before_widget' => '<section id="%1$s" class="header_wpml_widget widget %2$s">',
        'after_widget' => '</section>',
    );
    register_sidebar($args);
}
add_action('widgets_init', 'wpml_custom_widget_mobile');



//Custom Style On Dashboard
add_action('admin_head', 'custom_dashboard_items');
function custom_dashboard_items()
{
    echo '<style>
        .admin-item {
            background: #6A6A6A;
            transition: ease-in-out all 0.3s;
        }
        .admin-item:hover {
            background:rgb(70, 70, 70) !important;
            transition: ease-in-out all 0.3s;
            color:#fff !important;
        }
        .admin-item:hover .wp-menu-image:before {
            color:#f3efe4 !important;
        }
        #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu {
            background: #6A6A6A;
            color: #F7F5E8;
        }
        #adminmenu li a:focus div.wp-menu-image::before, #adminmenu li.opensub div.wp-menu-image::before, #adminmenu li:hover div.wp-menu-image::before {
            color: #F7F5E8;
        }
        #adminmenu li.menu-top:hover, #adminmenu li.opensub > a.menu-top, #adminmenu li > a.menu-top:focus {
            color: #F7F5E8;
        }
        .admin-item .wp-menu-name {
            color:f7f5e8;
        }

        // add header layouts images on hover
        #acf-field_649ab382af9cc-version1 { 
            position: relative;
        }
        #acf-field_649ab382af9cc-version1:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/header-version1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        #acf-field_649ab382af9cc-version2{
            position: relative;
        }
        #acf-field_649ab382af9cc-version2:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/header-version2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        #acf-field_649ab382af9cc-version3{
            position: relative;
        }
        #acf-field_649ab382af9cc-version3:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/header-version3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        #acf-field_649ab48b76c6f-version1{
            position: relative;
        }
        #acf-field_649ab48b76c6f-version1:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/mobheader-version1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 440px; 
            height: 280px;
            z-index: 9999;
        }

        #acf-field_649ab48b76c6f-version2{
            position: relative;
        }
        #acf-field_649ab48b76c6f-version2:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/mobheader-version2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 440px; 
            height: 280px;
            z-index: 9999;
        }

        #acf-field_649ab48b76c6f-version3{
            position: relative;
        }
        #acf-field_649ab48b76c6f-version3:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/mobheader-version3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 440px; 
            height: 280px;
            z-index: 9999;
        }


        #acf-field_649ae7dcc92d3-version1{
            position: relative;
        }
        #acf-field_649ae7dcc92d3-version1:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/footer-version1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        #acf-field_649ae7dcc92d3-version2{
            position: relative;
        }
        #acf-field_649ae7dcc92d3-version2:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/footer-version2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        #acf-field_649ae7dcc92d3-version3{
            position: relative;
        }
        #acf-field_649ae7dcc92d3-version3:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/footer-version3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }


           input[id^="acf-field_64ba4d5912053"][id$="field_64ba4d5912053-design1"]{
            position: relative;
        }
        input[id^="acf-field_64ba4d5912053"][id$="field_64ba4d5912053-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/intro-v1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 400px; 
            height: 180px;
            z-index: 9999;
        }

           input[id^="acf-field_64ba4d5912053"][id$="field_64ba4d5912053-design2"]{
            position: relative;
        }
        input[id^="acf-field_64ba4d5912053"][id$="field_64ba4d5912053-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/intro-v2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 400px; 
            height: 180px;
            z-index: 9999;
        }


           input[id^="acf-field_64ba4d5912053"][id$="field_64ba4d5912053-design3"]{
            position: relative;
        }
        input[id^="acf-field_64ba4d5912053"][id$="field_64ba4d5912053-design3"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/intro-v3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 400px; 
            height: 180px;
            z-index: 9999;
        }


            input[id^="acf-field_64ba4d5912053"][id$="field_64ba4d5912053-design4"]{
                        position: relative;
                    }
                    input[id^="acf-field_64ba4d5912053"][id$="field_64ba4d5912053-design4"]:hover:after {
                        content: "";
                        position: absolute;
                        background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/intro-v4.png);
                        background-repeat: no-repeat;
                        background-size: contain;
                        left: 100%;
                        bottom: 110%;
                        width: 400px; 
                        height: 180px;
                        z-index: 9999;
                    }




        input[id^="acf-field_64be350cc00a1"][id$="field_64be3543c00a4-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64be3543c00a4-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/image-text-ver1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        input[id^="acf-field_64be350cc00a1"][id$="field_64be3543c00a4-design2"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64be3543c00a4-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/image-text-ver2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }
        
        input[id^="acf-field_64be350cc00a1"][id$="field_64be3543c00a4-design3"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64be3543c00a4-design3"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/image-text-ver3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }




        #acf-field_64c7998331cb4-design1{
            position: relative;
        }
        #acf-field_64c7998331cb4-design1:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/error-design1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        #acf-field_64c7998331cb4-design2{
            position: relative;
        }
        #acf-field_64c7998331cb4-design2:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/error-design2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        #acf-field_64c7998331cb4-design3{
            position: relative;
        }
        #acf-field_64c7998331cb4-design3:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/error-design3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }




        input[id^="acf-field_64be350cc00a1"][id$="field_64c8b87aba643-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64c8b87aba643-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/image-text2-ver1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        input[id^="acf-field_64be350cc00a1"][id$="field_64c8b87aba643-design2"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64c8b87aba643-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/image-text2-ver2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }
        
        input[id^="acf-field_64be350cc00a1"][id$="field_64c8b87aba643-design3"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64c8b87aba643-design3"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/image-text2-ver3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }



        input[id^="acf-field_64be350cc00a1"][id$="field_64ca07d9b6bac-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca07d9b6bac-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/blocks-ver1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        input[id^="acf-field_64be350cc00a1"][id$="field_64ca07d9b6bac-design2"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca07d9b6bac-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/blocks-ver2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        input[id^="acf-field_64be350cc00a1"][id$="field_64ca07d9b6bac-design3"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca07d9b6bac-design3"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/blocks-ver3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }




        input[id^="acf-field_64be350cc00a1"][id$="field_64ca42504ace1-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca42504ace1-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/facilities-ver1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }
        
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca42504ace1-design2"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca42504ace1-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/facilities-ver2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }
        
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca42504ace1-design3"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca42504ace1-design3"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/facilities-ver3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }


        input[id^="acf-field_64be350cc00a1"][id$="field_64ca42504ace1-design4"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca42504ace1-design4"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/facilities-ver4.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 400px; 
            height: 150px;
            z-index: 9999;
        }


        input[id^="acf-field_64be350cc00a1"][id$="field_64ca42504ace1-design5"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca42504ace1-design5"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/facilities-ver5.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 400px; 
            height: 150px;
            z-index: 9999;
        }



        input[id^="acf-field_64be350cc00a1"][id$="field_6660212ded9ff-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_6660212ded9ff-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/productcategories-v1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 400px; 
            height: 150px;
            z-index: 9999;
        }

        
        input[id^="acf-field_64be350cc00a1"][id$="field_6660212ded9ff-design2"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_6660212ded9ff-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/productcategories-v2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 400px; 
            height: 150px;
            z-index: 9999;
        }


        input[id^="acf-field_64be350cc00a1"][id$="field_666050f1dec8c-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_666050f1dec8c-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/product-slider-v1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 220px;
            z-index: 9999;
        }

        
        input[id^="acf-field_64be350cc00a1"][id$="field_666050f1dec8c-design2"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_666050f1dec8c-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/product-slider-v2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 220px;
            z-index: 9999;
        }



         input[id^="acf-field_64be350cc00a1"][id$="field_66a22f95673f8-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_66a22f95673f8-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/post-type-slider-ver1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 220px;
            z-index: 9999;
        }


        input[id^="acf-field_64be350cc00a1"][id$="field_64ca6101807ee-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca6101807ee-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/gallery-ver1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        input[id^="acf-field_64be350cc00a1"][id$="field_64ca6101807ee-design2"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca6101807ee-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/gallery-ver2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }
        
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca6101807ee-design3"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca6101807ee-design3"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/gallery-ver3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }



           input[id^="acf-field_64be350cc00a1"][id$="field_64ca6101807ee-design4"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ca6101807ee-design4"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/gallery-ver4.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 170px;
            z-index: 9999;
        }


        input[id^="acf-field_64be350cc00a1"][id$="field_64ccc82e00f50-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ccc82e00f50-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/quote-ver1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        input[id^="acf-field_64be350cc00a1"][id$="field_64ccc82e00f50-design2"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ccc82e00f50-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/quote-ver2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }
        
        input[id^="acf-field_64be350cc00a1"][id$="field_64ccc82e00f50-design3"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ccc82e00f50-design3"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/quote-ver3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }


            
        input[id^="acf-field_64be350cc00a1"][id$="field_64ccc82e00f50-design4"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ccc82e00f50-design4"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/quote-ver4.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }


         input[id^="acf-field_64be350cc00a1"][id$="field_64ccc82e00f50-design5"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64ccc82e00f50-design5"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/quote-ver5.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }



        input[id^="acf-field_64be350cc00a1"][id$="field_64d22654b2899-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64d22654b2899-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/faqs-ver1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        input[id^="acf-field_64be350cc00a1"][id$="field_64d22654b2899-design2"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64d22654b2899-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/faqs-ver2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }
        
        input[id^="acf-field_64be350cc00a1"][id$="field_64d22654b2899-design3"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64d22654b2899-design3"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/faqs-ver3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }




        input[id^="acf-field_64be350cc00a1"][id$="field_64e607e5912a7-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64e607e5912a7-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/map-ver1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64e607e5912a7-design2"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="field_64e607e5912a7-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/map-ver2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }



           input[id^="acf-field_64be350cc00a1"][id$="_6571d1a24427b-design5"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="_6571d1a24427b-design5"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/cards-slider.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }




        input[id^="acf-field_64be350cc00a1"][id$="_64d4beaaabac8-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="_64d4beaaabac8-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/contact-ver1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }

        input[id^="acf-field_64be350cc00a1"][id$="_64d4beaaabac8-design2"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="_64d4beaaabac8-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/contact-ver2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }
        
        input[id^="acf-field_64be350cc00a1"][id$="_64d4beaaabac8-design3"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="_64d4beaaabac8-design3"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/contact-ver3.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 150px;
            z-index: 9999;
        }


        
        input[id^="acf-field_64be350cc00a1"][id$="_665db09442edd-design1"]{
            position: relative;
        }
        input[id^="acf-field_64be350cc00a1"][id$="_665db09442edd-design1"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/useful-v1.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 500px; 
            height: 200px;
            z-index: 9999;
        }

        input[id^="acf-field_64be350cc00a1"][id$="_665db09442edd-design2"]{
            position: relative;
           
        }
        input[id^="acf-field_64be350cc00a1"][id$="_665db09442edd-design2"]:hover:after {
            content: "";
            position: absolute;
            background-image: url(' . get_template_directory_uri() . '/assets/images/admin-images/useful-v2.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 100%;
            bottom: 110%;
            width: 300px; 
            height: 200px;
            z-index: 9999;
        }

    </style>';
}

// Remove Admin bar items
add_action('wp_before_admin_bar_render', 'wpse200296_before_admin_bar_render');

function wpse200296_before_admin_bar_render()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('customize');
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('new-content');
    $wp_admin_bar->remove_menu('wp-logo');
}




// Change WP Admin Logo
function gocreations_custom_login_logo()
{
    // Get logo URL from WordPress options (e.g., using ACF's get_field on options page)
    $logo_url = get_field('header_scrolled_logo', 'options'); // 'option' specifies it's from the options page
    if (!$logo_url) {
        // Fallback logo if none is set in options
        $logo_url = get_stylesheet_directory_uri() . '/assets/images/logo.png';
    }
    ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url('<?php echo $logo_url['sizes']['regular']; ?>');
            height: 105px;
            width: 130px;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'gocreations_custom_login_logo');



// Change WP Admin Logo URL
add_filter('login_headerurl', 'gocreations_custom_login_url');
function gocreations_custom_login_url($url)
{
    return esc_url(home_url('/'));
}



// function pine_dynamic_select_field_values ( $scanned_tag, $replace ) {
//
//     if ( $scanned_tag['name'] != 'service-select' )
//         return $scanned_tag;
//
//
//     if( have_rows('services_repeater',75) ) {
//         while( have_rows('services_repeater',75) ) {
//             the_row();
//
//            $scanned_tag['raw_values'][] = get_sub_field('title') . '|' . get_sub_field('title');
//         }
//     }
//
//     $pipes = new WPCF7_Pipes($scanned_tag['raw_values']);
//
//     $scanned_tag['values'] = $pipes->collect_befores();
//     $scanned_tag['labels'] = $pipes->collect_afters();
//     $scanned_tag['pipes'] = $pipes;
//
//     return $scanned_tag;
// }
//
// add_filter( 'wpcf7_form_tag', 'pine_dynamic_select_field_values', 10, 2);



// autofill select destination uncomment if needed
// function dynamic_field_tour ( $tag, $unused ) {

//     if ( $tag['name'] != 'your-fleet' )
//         return $tag;

//     $args = array (
//         'numberposts'   => -1,
//         'post_type'     => 'fleet',
//         // 'orderby'       => 'title',
//         'order'         => 'ASC',
//     );
//     $custom_posts = get_posts($args);

//     if ( ! $custom_posts )
//         return $tag;

//     foreach ( $custom_posts as $custom_post ) {
//         if ($custom_post->ID == get_queried_object_id()) {

//         }
//         $tag['raw_values'][] = $custom_post->post_title;
//         $tag['values'][] = $custom_post->ID;
//         $tag['labels'][] = $custom_post->post_title;
//     }
//     return $tag;
// }
// add_filter( 'wpcf7_form_tag', 'dynamic_field_tour', 10, 2);


//language switcher
function mobile_wpml_custom_widget()
{

    $args = array(
        'id' => 'mobile-wpml-custom-widget',
        'name' => __('Mobile Wpml Widget', 'text_domain'),
        'description' => __('Add custom switcher.', 'text_domain'),
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        'before_widget' => '<div id="%1$s" class="mobile_wpml_widget widget %2$s">',
        'after_widget' => '</div>',
    );
    register_sidebar($args);
}
add_action('widgets_init', 'mobile_wpml_custom_widget');


function desktop_wpml_custom_widget()
{

    $args = array(
        'id' => 'desktop-wpml-custom-widget',
        'name' => __('Desktop Wpml Widget', 'text_domain'),
        'description' => __('Add custom switcher.', 'text_domain'),
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        'before_widget' => '<div id="%1$s" class="desktop_wpml_widget widget %2$s">',
        'after_widget' => '</div>',
    );
    register_sidebar($args);
}
add_action('widgets_init', 'desktop_wpml_custom_widget');

// WPML DISABLE DEFAULT SWITCHER CSS
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);



// function my_custom_cf7_dropdown_pickup($content)
// {
//     $lang = 1;
//     $domain = 'portohelicars';
//     $locations_arr = getGcLocations($lang, $domain);

//     if (empty($locations_arr)) {
//         return $content;
//     }

//     $dropdown_html = '<select name="your-pickup" id="your-pickup">';
//     $dropdown_html .= '<option value=""></option>';

//     foreach ($locations_arr as $location) {
//         $dropdown_html .= '<option value="' . esc_attr($location->location_name) . '">' . esc_html($location->location_name) . '</option>';
//     }

//     $dropdown_html .= '</select>';

//     $content = preg_replace('/\[pickup_locations\]/', $dropdown_html, $content);

//     return $content;
// }

// add_filter('wpcf7_form_elements', 'my_custom_cf7_dropdown_pickup');




// function my_custom_cf7_dropdown_dropoff($content)
// {
//     // Εδώ καλούμε τη συνάρτηση που φέρνει τις τοποθεσίες
//     $lang = 1;
//     $domain = 'portohelicars';
//     $locations_arr = getGcLocations($lang, $domain);

//     // Αν δεν υπάρχουν τοποθεσίες, επιστρέφουμε το αρχικό περιεχόμενο
//     if (empty($locations_arr)) {
//         return $content;
//     }

//     // Δημιουργούμε το dropdown HTML για το "your-dropoff"
//     $dropdown_html = '<select name="your-dropoff" id="your-dropoff">';
//     $dropdown_html .= '<option value=""></option>';

//     foreach ($locations_arr as $location) {
//         $dropdown_html .= '<option value="' . esc_attr($location->location_name) . '">' . esc_html($location->location_name) . '</option>';
//     }

//     $dropdown_html .= '</select>';

//     // Αντικαθιστούμε το shortcode με το dropdown HTML
//     $content = preg_replace('/\[dropoff_locations\]/', $dropdown_html, $content);

//     return $content;
// }

// add_filter('wpcf7_form_elements', 'my_custom_cf7_dropdown_dropoff');




/* add_action('wp_footer', function () {
    $lang = 1;
    $domain = 'portohelicars';

    $locations_arr = getGcLocations($lang, $domain);

    echo '<pre>';
    foreach ($locations_arr as $location) {
        echo esc_html($location->location_name) . '<br>';
    }
    echo '</pre>';
}); */
