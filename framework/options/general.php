<?php
// General
Redux::setSection($opt_name, array(
    'title'  => esc_html__('General', 'vitex'),
    'id'     => 'bt_general',
    'icon'   => 'el el-adjust-alt',
    'fields' => array(
        array(
            'id'       => 'less_design',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Less Design', 'vitex'),
            'subtitle' => esc_html__('Enable less design to generate css over time...', 'vitex'),
            'default'  => true,
        ),
        array(
            'id'       => 'site_layout',
            'type'     => 'button_set',
            'title'    => esc_html__('Site Layout', 'vitex'),
            'subtitle' => esc_html__('Control the site layout.', 'vitex'),
            'options'  => array(
                'wide'  => esc_html__('Wide', 'vitex'),
                'boxed' => esc_html__('Boxed', 'vitex'),
            ),
            'default'  => 'wide'
        ),
        array(
            'id'            => 'site_width',
            'type'          => 'slider',
            'title'         => esc_html__('Site Width', 'vitex'),
            'subtitle'      => esc_html__('Control the overall site width.', 'vitex'),
            'default'       => 1200,
            'min'           => 1200,
            'step'          => 1,
            'max'           => 1600,
            'display_value' => 'text',
            'required'      => array('site_layout', '=', 'boxed')
        ),
        array(
            'id'                    => 'boxed_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Boxed Background', 'vitex'),
            'subtitle'              => esc_html__('Control the background color of the boxed.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#FFFFFF',
            ),
            'required'              => array('site_layout', '=', 'boxed'),
            'output'                => array('.boxed #bt-main')
        ),
        array(
            'id'       => 'boxed_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Boxed Space', 'vitex'),
            'subtitle' => esc_html__('Control the space top and bottom of boxed.', 'vitex'),
            'default'  => array(
                'margin-top'    => '10px',
                'margin-bottom' => '10px'
            ),
            'required' => array('site_layout', '=', 'boxed'),
            'output'   => array('.boxed #bt-main')
        ),
        array(
            'id'       => 'body_bg',
            'type'     => 'background',
            'title'    => esc_html__('Body Background', 'vitex'),
            'subtitle' => esc_html__('Control the background of the body.', 'vitex'),
            'default'  => array(
                'background-color' => '#F8F8F8',
            ),
            'output'   => array('body'),
        ),
        array(
            'id'            => 'mobile_width',
            'type'          => 'slider',
            'title'         => esc_html__('Mobile Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width to enable mobile.', 'vitex'),
            'default'       => 991,
            'min'           => 540,
            'step'          => 1,
            'max'           => 1199,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'particles_effect',
            'type'     => 'switch',
            'title'    => esc_html__('Particles Effect', 'vitex'),
            'subtitle' => esc_html__('Use particles effect.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'sticky_sidebar',
            'type'     => 'switch',
            'title'    => esc_html__('Sticky Sidebar', 'vitex'),
            'subtitle' => esc_html__('Use sticky sidebar.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'smooth_scroll',
            'type'     => 'switch',
            'title'    => esc_html__('Smooth Scroll', 'vitex'),
            'subtitle' => esc_html__('Use smooth scroll.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'nice_scroll_bar',
            'type'     => 'switch',
            'title'    => esc_html__('Nice Scroll Bar', 'vitex'),
            'subtitle' => esc_html__('Use nice scroll bar.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'nice_scroll_bar_element',
            'type'     => 'textarea',
            'title'    => esc_html__('Nice Scroll Bar Elements', 'vitex'),
            'subtitle' => esc_html__('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'vitex'),
            'default'  => 'html, .bt-header-vertical .bt-vertical-menu-wrap',
            'required' => array('nice_scroll_bar', '=', '1')
        ),
        array(
            'id'       => 'back_to_top',
            'type'     => 'switch',
            'title'    => esc_html__('Back To Top', 'vitex'),
            'subtitle' => esc_html__('Control button back to top.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'back_to_top_style',
            'type'     => 'select',
            'title'    => esc_html__('Back To Top Style', 'vitex'),
            'subtitle' => esc_html__('Select style button back to top.', 'vitex'),
            'options'  => array(
                'square'  => esc_html__('Square', 'vitex'),
                'rounded' => esc_html__('Rounded', 'vitex'),
                'circle'  => esc_html__('Circle', 'vitex')
            ),
            'default'  => 'square',
            'required' => array('back_to_top', '=', '1')
        ),
        array(
            'id'       => 'site_loading',
            'type'     => 'switch',
            'title'    => esc_html__('Site Loading', 'vitex'),
            'subtitle' => esc_html__('Control animation before site load complete.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'site_loading_spinner',
            'type'     => 'select',
            'title'    => esc_html__('Spinner Style', 'vitex'),
            'subtitle' => esc_html__('Select style spinner.', 'vitex'),
            'options'  => array(
                'spinner0'     => esc_html__('Default', 'vitex'),
                'spinner1'     => esc_html__('Style 1', 'vitex'),
                'spinner2'     => esc_html__('Style 2', 'vitex'),
                'spinner3'     => esc_html__('Style 3', 'vitex'),
                'spinner4'     => esc_html__('Style 4', 'vitex'),
                'spinner5'     => esc_html__('Style 5', 'vitex'),
                'spinner-text' => esc_html__('Style text', 'vitex')
            ),
            'default'  => 'spinner0',
            'required' => array('site_loading', '=', '1')
        ),

        array(
            'id'       => 'site_loading_text_welcome',
            'type'     => 'text',
            'title'    => esc_html__('Text welcome', 'vitex'),
            'subtitle' => esc_html__('Enter text of site loading.', 'vitex'),
            'default'  => 'woohooo!',
            'required' => array('site_loading_spinner', '=', 'spinner-text')
        ),
        array(
            'id'       => 'site_loading_bg',
            'type'     => 'background',
            'title'    => esc_html__('Site Loading Background', 'vitex'),
            'subtitle' => esc_html__('Control the background of site loading.', 'vitex'),
            'default'  => array(
                'background-color' => '#fb5c71',
            ),
            'required' => array('site_loading', '=', '1'),
            'output'   => array('#site_loading')
        ),
        array(
            'id'       => 'nav_dots_style',
            'type'     => 'image_select',
            'title'    => esc_html__('Nav & Dots Style', 'vitex'),
            'subtitle' => esc_html__('Select a navigaiton & dots style for carousel.', 'vitex'),
            'options'  => array(
                '0' => array(
                    'alt' => 'Nav & Dots Default',
                    'img' => get_template_directory_uri() . '/assets/images/button/nav-dots-default.jpg'
                ),
                '1' => array(
                    'alt' => 'Nav & Dots Style 1',
                    'img' => get_template_directory_uri() . '/assets/images/button/nav-dots-style1.jpg'
                ),
                '2' => array(
                    'alt' => 'Nav & Dots Style 2',
                    'img' => get_template_directory_uri() . '/assets/images/button/nav-dots-style2.jpg'
                )
            ),
            'default'  => '0'
        ),
        array(
            'id'       => 'pagination_style',
            'type'     => 'image_select',
            'title'    => esc_html__('Pagination Style', 'vitex'),
            'subtitle' => esc_html__('Select a pagination style.', 'vitex'),
            'options'  => array(
                '0' => array(
                    'alt' => 'Pagination Style default',
                    'img' => get_template_directory_uri() . '/assets/images/button/pagination-default.jpg'
                ),
                '1' => array(
                    'alt' => 'Pagination Style 1',
                    'img' => get_template_directory_uri() . '/assets/images/button/pagination-style1.jpg'
                )
            ),
            'default'  => '0'
        ),
        array(
            'id'       => 'pagination_prev_text',
            'type'     => 'text',
            'title'    => esc_html__('Previous Text', 'vitex'),
            'subtitle' => esc_html__('Enter previous text of pagination.', 'vitex'),
            'default'  => 'Previous'
        ),
        array(
            'id'       => 'pagination_next_text',
            'type'     => 'text',
            'title'    => esc_html__('Next Text', 'vitex'),
            'subtitle' => esc_html__('Enter next text of pagination.', 'vitex'),
            'default'  => 'Next'
        ),
    )
));
