<?php
/* Register Sidebar */
if (!function_exists('vitex_register_sidebar')) {
    function vitex_register_sidebar(){
        register_sidebar(array(
            'name'          => esc_html__('Main Sidebar', 'vitex'),
            'id'            => 'main-sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="wg-title">',
            'after_title'   => '</h4>',
        ));
    }

    add_action('widgets_init', 'vitex_register_sidebar');
}

/* Register Default Fonts */
if (!function_exists('vitex_fonts_url')) {
    function vitex_fonts_url(){
        $font_url = '';
        if ('off' !== _x('on', 'Google font: on or off', 'vitex')) {
            $font_url = add_query_arg('family', urlencode('Open+Sans:400,400i,600,700|Poppins:400,400i,500,600,700'), "//fonts.googleapis.com/css");
        }
        return $font_url;
    }
}
/* Enqueue Script */
if (!function_exists('vitex_enqueue_scripts')) {
    function vitex_enqueue_scripts(){
        global $vitex_options;

        wp_enqueue_style('vitex-fonts', vitex_fonts_url(), false);
        /* Local fonts*/
        //        wp_enqueue_style('vitex-localfonts', get_template_directory_uri() . '/assets/localfonts/fonts.css', array(), false);

        /* Bootstrap */
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css', array(), false);
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.min.js', array('jquery'), '', true);

        /* Fontawesome */
        $font_awesome = isset($vitex_options['font_awesome']) ? $vitex_options['font_awesome'] : true;
        if ($font_awesome) {
            wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/iconfonts/font-awesome/css/font-awesome.min.css', array(), false);
        }

        /* Peicon7stroke */
        if (isset($vitex_options['font_pe_icon_7_stroke']) && $vitex_options['font_pe_icon_7_stroke']) {
            wp_enqueue_style('pe-icon-helper', get_template_directory_uri() . '/assets/iconfonts/pe-icon-7-stroke/css/helper.css', array(), false);
            wp_enqueue_style('pe-icon-7-stroke', get_template_directory_uri() . '/assets/iconfonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css', array(), false);
        }

        /* Flaticon */
        if (isset($vitex_options['flaticon']) && $vitex_options['flaticon']) {
            wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/iconfonts/flaticon/font/flaticon.css', array(), false);
        }

        /* Elegant icon */
        if (isset($vitex_options['elegant_icon']) && $vitex_options['elegant_icon']) {
            wp_enqueue_style('elegant-icon', get_template_directory_uri() . '/assets/iconfonts/elegant-icon-font/style.css', array(), false);
        }

        /* Themify Icons */
        if (isset($vitex_options['themify_icon']) && $vitex_options['themify_icon']) {
            wp_enqueue_style('themify-icon', get_template_directory_uri() . '/assets/iconfonts/themify-icons/themify-icons.css', array(), false);
        }

        /* Particles Effect */
        if (isset($vitex_options['particles_effect']) && $vitex_options['particles_effect']) {
            wp_enqueue_script('particles', get_template_directory_uri() . '/assets/vendors/particles/particles.min.js', array('jquery'), '', true);
            wp_enqueue_script('bears-app', get_template_directory_uri() . '/assets/vendors/particles/app.min.js', array('jquery'), '', true);
            wp_enqueue_style('particles', get_template_directory_uri() . '/assets/vendors/particles/particles.css', array(), false);
        }

        /* Smoth Scroll */
        if (isset($vitex_options['smooth_scroll']) && $vitex_options['smooth_scroll']) {
            wp_enqueue_script('SmoothScroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array('jquery'), '', true);
        }

        /* Nice Scroll Bar */
        if (isset($vitex_options['nice_scroll_bar']) && $vitex_options['nice_scroll_bar']) {
            wp_enqueue_script('NiceScrollBar', get_template_directory_uri() . '/assets/js/NiceScrollBar.js', array('jquery'), '', true);
        }

        /* Site Loading */
        if (isset($vitex_options['site_loading']) && $vitex_options['site_loading']) {
            wp_enqueue_style('vitex-loading', get_template_directory_uri() . '/assets/vendors/loading/style.css', array(), false);
            wp_enqueue_script('vitex-loading', get_template_directory_uri() . '/assets/vendors/loading/loading.js', array('jquery'), '', true);
        }

        /* Sidebar Sticky */
        if (isset($vitex_options['sticky_sidebar']) && $vitex_options['sticky_sidebar']) {
            wp_enqueue_script('vitex-sticky-sidebar', get_template_directory_uri() . '/assets/js/sticky-sidebar.min.js', array('jquery'), '', true);
         }

        /* OWl Carousel */
        wp_register_script('owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.js', array('jquery'), '', true);
        wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/assets/owl.carousel.min.css', array(), false);

        /* Slick Slider */
        wp_register_script('slick-slider', get_template_directory_uri() . '/assets/vendors/slick/slick.min.js', array('jquery'), '', true);
        wp_register_style('slick-slider', get_template_directory_uri() . '/assets/vendors/slick/slick.css', array(), false);

        /* Slick Slider */
        wp_register_script('zoom-master', get_template_directory_uri() . '/assets/vendors/zoom-master/jquery.zoom.min.js', array('jquery'), '', true);


        /* Isotope */
        wp_register_script('isotope', get_template_directory_uri() . '/assets/vendors/isotope.pkgd.min.js', array('jquery'), '', true);

        /* html5lightbox */
        wp_enqueue_script('html5lightbox', get_template_directory_uri() . '/assets/vendors/html5lightbox/html5lightbox.js', array('jquery'), '', true);

        /* map 3 */
        wp_register_script('mapv3', get_template_directory_uri() . '/assets/vendors/mapv3.js', array('jquery'), '', true);

        /* counterup */
        wp_register_script('counterup', get_template_directory_uri() . '/assets/vendors/jquery.counterup.min.js', array('jquery'), '', true);

        /* waypoints */
        wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/vendors/waypoints.min.js', array('jquery'), '', true);

        /* countdown */
        wp_register_script('plugin', get_template_directory_uri() . '/assets/vendors/countdown/jquery.plugin.min.js', array('jquery'), '', true);
        wp_register_script('countdown', get_template_directory_uri() . '/assets/vendors/countdown/jquery.countdown.min.js', array('jquery'), '', true);


        wp_enqueue_style('vitex-main_style', get_template_directory_uri() . '/assets/css/main_style.css', array(), false);
        wp_enqueue_style('vitex-style', get_template_directory_uri() . '/style.css', array(), false);
        wp_enqueue_script('vitex-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);

        /* Load extra font */
        $custom_style = '';
        if (isset($vitex_options['extra_font_1']['font-family']) && $vitex_options['extra_font_1']['font-family'] && isset($vitex_options['extra_element_1']) && $vitex_options['extra_element_1']) {
            if ($vitex_options['extra_font_1']['font-family']) $custom_style .= $vitex_options['extra_element_1'] . '{font-family: ' . $vitex_options['extra_font_1']['font-family'] . '}';
        }
        if (isset($vitex_options['extra_font_2']['font-family']) && $vitex_options['extra_font_2']['font-family'] && isset($vitex_options['extra_element_2']) && $vitex_options['extra_element_2']) {
            if ($vitex_options['extra_font_2']['font-family']) $custom_style .= $vitex_options['extra_element_2'] . '{font-family: ' . $vitex_options['extra_font_2']['font-family'] . '}';
        }
        if (isset($vitex_options['extra_font_3']['font-family']) && $vitex_options['extra_font_3']['font-family'] && isset($vitex_options['extra_element_3']) && $vitex_options['extra_element_3']) {
            if ($vitex_options['extra_font_3']['font-family']) $custom_style .= $vitex_options['extra_element_2'] . '{font-family: ' . $vitex_options['extra_font_3']['font-family'] . '}';
        }

        /* Load style page option */
        $page_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'page_options') : array();

        if (isset($page_options['page_titlebar_space']) && $page_options['page_titlebar_space']) {
            $custom_style .= '.page .bt-titlebar{padding-bottom: 0;}';
        }

        if (isset($page_options['page_titlebar_background']['url']) && $page_options['page_titlebar_background']['url']) {
            $custom_style .= '.page .bt-titlebar .bt-titlebar-inner{background-image: url(' . $page_options['page_titlebar_background']['url'] . ');}';
        }

        if (isset($page_options['page_footer_space']) && $page_options['page_footer_space']) {
            $custom_style .= '.page .bt-footer{margin-top: 0;}';
        }

        /* Load style post option */
        $post_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'post_options') : array();
        if (isset($post_options['titlebar_background']['url']) && $post_options['titlebar_background']['url']) {
            $custom_style .= '.single-post .bt-titlebar .bt-titlebar-inner{background-image: url(' . $post_options['titlebar_background']['url'] . ');}';
        }

        /* Load style portfolio option */
        $portfolio_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'portfolio_options') : array();
        if (isset($portfolio_options['titlebar_background']['url']) && $portfolio_options['titlebar_background']['url']) {
            $custom_style .= '.single-fw-portfolio .bt-titlebar .bt-titlebar-inner{background-image: url(' . $portfolio_options['titlebar_background']['url'] . ');}';
        }

        /* Load custom style */
        if (isset($vitex_options['custom_css_code']) && $vitex_options['custom_css_code']) {
            $custom_style .= $vitex_options['custom_css_code'];
        }

        if ($custom_style) {
            wp_add_inline_style('vitex-style', $custom_style);
        }

        /* Load custom script */
        $custom_script = '';
        if (isset($vitex_options['custom_js_code']) && $vitex_options['custom_js_code']) {
            $custom_script .= $vitex_options['custom_js_code'];
        }
        if ($custom_script) {
            wp_add_inline_script('vitex-main', $custom_script);
        }

        // Load options to script
        $mobile_width = (isset($vitex_options['mobile_width']) && $vitex_options['mobile_width']) ? $vitex_options['mobile_width'] : 991;
        $hvertical_width = (isset($vitex_options['hvertical_width']) && $vitex_options['hvertical_width']) ? $vitex_options['hvertical_width'] : 320;
        $hvertical_full_height = (isset($vitex_options['hvertical_full_height']) && $vitex_options['hvertical_full_height']) ? $vitex_options['hvertical_full_height'] : '';
        $hvertical_menu_height = (isset($vitex_options['hvertical_menu_height']) && $vitex_options['hvertical_menu_height']) ? $vitex_options['hvertical_menu_height'] : 570;
        $nice_scroll_bar = (isset($vitex_options['nice_scroll_bar']) && $vitex_options['nice_scroll_bar']) ? $vitex_options['nice_scroll_bar'] : '';
        $nice_scroll_bar_element = (isset($vitex_options['nice_scroll_bar_element']) && $vitex_options['nice_scroll_bar_element']) ? $vitex_options['nice_scroll_bar_element'] : '';

        $js_options = array(
            'ajaxurl'                 => admin_url('admin-ajax.php'),
            'enable_mobile'           => $mobile_width,
            'hvertical_width'         => $hvertical_width,
            'hvertical_full_height'   => $hvertical_full_height,
            'hvertical_menu_height'   => $hvertical_menu_height,
            'nice_scroll_bar'         => $nice_scroll_bar,
            'nice_scroll_bar_element' => $nice_scroll_bar_element
        );
        wp_localize_script('vitex-main', 'option_ob', $js_options);
        wp_enqueue_script('vitex-main');

    }

    add_action('wp_enqueue_scripts', 'vitex_enqueue_scripts');
}

/* Add Stylesheet And Script Backend */
if (!function_exists('vitex_enqueue_admin_scripts')) {
    function vitex_enqueue_admin_scripts(){
        wp_enqueue_style('vitex-style_admin', get_template_directory_uri() . '/assets/css/style_admin.css', array(), false);
    }

    add_action('admin_enqueue_scripts', 'vitex_enqueue_admin_scripts');
}

/* Add Support Upload Image Type SVG */
function vitex_mime_types($mimes){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'vitex_mime_types');

/* Visual Composer Post Grid Compatibility Issue With 3rd party Plugin */
add_filter('vc_grid_get_grid_data_access', '__return_true');

/* Template functions */
require_once get_template_directory() . '/framework/theme-functions.php';

/* Less compile functions */
require_once get_template_directory() . '/framework/inc/less-compile.php';

/* Post Functions */
require_once get_template_directory() . '/framework/templates/post-functions.php';

/* Function framework */
require_once get_template_directory() . '/framework/includes.php';

/* Widgets */
require_once get_template_directory() . '/framework/widgets/abstract-widget.php';
require_once get_template_directory() . '/framework/widgets/widgets.php';

/* Woocommerce functions */
if (class_exists('Woocommerce')) {
    require_once get_template_directory() . '/woocommerce/wc-template-functions.php';
    require_once get_template_directory() . '/woocommerce/wc-template-hooks.php';
}

