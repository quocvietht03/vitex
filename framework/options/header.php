<?php
// Header
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Header', 'vitex'),
    'id'     => 'bt_header',
    'icon'   => 'el el-credit-card',
    'fields' => array(
        array(
            'id'       => 'header_layout',
            'type'     => 'image_select',
            'title'    => esc_html__('Header Layout', 'vitex'),
            'subtitle' => esc_html__('Select a header layout default. Foreach pages, you can change the layout by page option', 'vitex'),
            'options'  => array(
                '1'             => array(
                    'alt' => 'Header layout 1',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
                ),
                'extra_1'       => array(
                    'alt' => 'Header layout 1 extra 1',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
                ),
                'extra_2'       => array(
                    'alt' => 'Header layout 1 extra 2',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
                ),
                'extra_3'       => array(
                    'alt' => 'Header layout 1 extra 3',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
                ),
                '2'             => array(
                    'alt' => 'Header layout 2',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v2.jpg'
                ),
                '3'             => array(
                    'alt' => 'Header layout 3',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v3.jpg'
                ),
                '4'             => array(
                    'alt' => 'Header layout 4',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v4.jpg'
                ),
                'onepage'       => array(
                    'alt' => 'Header layout onpage',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-onepage.jpg'
                ),
                'onepagescroll' => array(
                    'alt' => 'Header layout onepagescroll',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-onepagescroll.jpg'
                ),
                'vertical'      => array(
                    'alt' => 'Header layout vertical',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-vertical.jpg'
                ),
                'minivertical'  => array(
                    'alt' => 'Header layout mini vertical',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-minivertical.jpg'
                )
            ),
            'default'  => '-1'
        ),

    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Header Style 01', 'vitex'),
    'id'         => 'bt_header_style1',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_layout_1',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout Selected', 'vitex'),
            'subtitle' => esc_html__('This is the options you can change for header style 01', 'vitex'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Header layout 1',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
                )
            ),
            'default'  => '1'
        ),
        array(
            'id'       => 'h1_fullwidth',
            'type'     => 'switch',
            'title'    => esc_html__('Full Width (100%)', 'vitex'),
            'subtitle' => esc_html__('Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h1_header_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header absolute.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'            => 'h1_max_width',
            'type'          => 'slider',
            'title'         => esc_html__('Header Max Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the header.', 'vitex'),
            'default'       => 1170,
            'min'           => 1024,
            'step'          => 1,
            'max'           => 1920,
            'display_value' => 'text',
            'required'      => array('h1_header_absolute', '=', '1'),
        ),
        array(
            'id'       => 'h1_margin_top',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'bottom'   => false,
            'left'     => false,
            'right'    => false,
            'title'    => esc_html__('Header Margin Top', 'vitex'),
            'subtitle' => esc_html__('Control the top margin the header.', 'vitex'),
            'default'  => array(
                'margin-top' => '30px'
            ),
            'required' => array('h1_header_absolute', '=', '1'),
        ),
        array(
            'id'    => 'h1_header_desktop_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Desktop Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header desktop.', 'vitex')
        ),
        array(
            'id'       => 'h1_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h1_header_top_left',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Left', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_header_top', '=', '1')
        ),
        array(
            'id'       => 'h1_header_top_right',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Right', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_header_top', '=', '1')
        ),
        array(
            'id'       => 'h1_header_top_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Top Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header top.', 'vitex'),
            'default'  => array(
                'padding-top'    => '20px',
                'padding-right'  => '0px',
                'padding-bottom' => '20px',
                'padding-left'   => '0px'
            ),
            'required' => array('h1_header_top', '=', '1'),
            'output'   => array('.bt-header-v1 .bt-header-desktop .bt-top, .bt-header-v1 .bt-header-mobile .bt-top')
        ),
        array(
            'id'                    => 'h1_header_top_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Top Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header top.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#1a1a1a',
            ),
            'required'              => array('h1_header_top', '=', '1'),
            'output'                => array('.bt-header-v1 .bt-header-desktop .bt-top, .bt-header-v1 .bt-header-mobile .bt-top'),
        ),
        array(
            'id'             => 'h1_header_top_font',
            'type'           => 'typography',
            'title'          => esc_html__('Header Top Font', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography header top.', 'vitex'),
            'font-style'     => false,
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'color'          => '#eaeaea',
                'font-size'      => '14px',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h1_header_top', '=', '1'),
            'output'         => array('.bt-header-v1 .bt-header-desktop .bt-top, .bt-header-v1 .bt-header-mobile .bt-top')
        ),
        array(
            'id'       => 'h1_header_top_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Header Top Link Color', 'vitex'),
            'subtitle' => esc_html__('Controls the link color of header top.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#eaeaea',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h1_header_top', '=', '1'),
            'output'   => array('.bt-header-v1 .bt-header-desktop .bt-top a, .bt-header-v1 .bt-header-mobile .bt-top a')
        ),
        array(
            'id'       => 'h1_header_bottom_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Bottom Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header bottom absolute.', 'vitex'),
            'default'  => false,
            'required' => array('h1_header_absolute', '=', '0'),
        ),
        array(
            'id'                    => 'h1_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Bottom Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header bottom.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v1 .bt-header-desktop .bt-bottom'),
        ),
        array(
            'id'       => 'h1_header_bottom_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Bottom Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header bottom.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h1_logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
        ),
        array(
            'id'            => 'h1_logo_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'h1_menu_assign',
            'type'     => 'select',
            'title'    => esc_html__('Menu Assign', 'vitex'),
            'subtitle' => esc_html__('Select menu assing of header.', 'vitex'),
            'options'  => $menu_slug_opt,
            'default'  => 'auto'
        ),
        array(
            'id'       => 'h1_menu_align',
            'type'     => 'button_set',
            'title'    => esc_html__('Menu Align', 'vitex'),
            'subtitle' => esc_html__('Control align of menu.', 'vitex'),
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ),
            'default'  => 'right'
        ),
        array(
            'id'       => 'h1_menu_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'output'   => array('.bt-header-v1 .bt-header-desktop .bt-menu-desktop')
        ),
        array(
            'id'             => 'h1_menu_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '90px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu > li > a')
        ),
        array(
            'id'       => 'h1_menu_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v1 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'             => 'h1_menu_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, 
								.bt-header-v1 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a,
								.bt-header-v1 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v1 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
        ),
        array(
            'id'       => 'h1_menu_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
        ),
        array(
            'id'       => 'h1_menu_content_right',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Content Right', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable content right of menu.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'h1_menu_content_right_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Menu Content Right Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_menu_content_right', '=', '1')
        ),
        array(
            'id'       => 'h1_menu_content_right_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Content Right Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the content right of menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h1_menu_content_right', '=', '1'),
            'output'   => array('.bt-header-v1 .bt-menu-content-right')
        ),
        array(
            'id'       => 'h1_menu_canvas',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Canvas', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable menu canvas.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h1_menu_canvas_button_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Canvas Button color', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h1_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v1 .bt-menu-canvas-toggle')
        ),
        array(
            'id'       => 'h1_menu_canvas_button_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Canvas Button Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu canvas.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h1_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v1 .bt-menu-canvas-toggle')
        ),
        array(
            'id'    => 'h1_header_stick_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Stick Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header stick.', 'vitex')
        ),
        array(
            'id'       => 'h1_header_stick',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Sticky', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable sticky header.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h1_header_stick_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Stick Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header stick.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'required'              => array('h1_header_stick', '=', '1'),
            'output'                => array('.bt-header-v1 .bt-header-stick'),
        ),
        array(
            'id'       => 'h1_header_stick_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Stick Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header stick.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'required' => array('h1_header_stick', '=', '1'),
            'output'   => array('.bt-header-v1 .bt-header-stick'),
        ),
        array(
            'id'       => 'h1_logo_stick',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Stick', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header stick.', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
            'required' => array('h1_header_stick', '=', '1'),
        ),
        array(
            'id'            => 'h1_logo_stick_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Stick Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo stick.', 'vitex'),
            'default'       => 24,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text',
            'required'      => array('h1_header_stick', '=', '1'),
        ),
        array(
            'id'       => 'h1_menu_space_stick',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space Stick', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu stick.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'required' => array('h1_header_stick', '=', '1'),
            'output'   => array('.bt-header-v1 .bt-header-stick .bt-menu-desktop')
        ),
        array(
            'id'             => 'h1_menu_first_level_font_stick',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography Stick', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level of the header stick.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '70px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h1_header_stick', '=', '1'),
            'output'         => array('.bt-header-v1 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
        ),
        array(
            'id'       => 'h1_menu_first_level_color_stick',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color Stick', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level of the header stick.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'required' => array('h1_header_stick', '=', '1'),
            'output'   => array('.bt-header-v1 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v1 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'    => 'h1_header_mobile_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Mobile Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header mobile.', 'vitex')
        ),
        array(
            'id'       => 'h1_mobile_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top Mobile', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.(Please enable and config in header desktop before enable)', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h1_mobile_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v1 .bt-header-mobile .bt-bottom'),
        ),
        array(
            'id'       => 'h1_mobile_toggle_button',
            'type'     => 'link_color',
            'title'    => esc_html__('Toggle Menu Button', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
        ),
        array(
            'id'       => 'h1_logo_mobile',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Mobile', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header mobile', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            )
        ),
        array(
            'id'            => 'h1_logo_mobile_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Mobile Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo mobile.', 'vitex'),
            'default'       => 24,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'h1_logo_mobile_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Header Mobile Space', 'vitex'),
            'subtitle' => esc_html__('Control the top/bottom margin the logo mobile.', 'vitex'),
            'default'  => array(
                'margin-top'    => '10px',
                'margin-bottom' => '10px'
            ),
            'output'   => array('.bt-header-v1 .bt-header-mobile .bt-bottom .logo')
        ),
        array(
            'id'                    => 'h1_mobile_menu_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Menu Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of menu mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#f8f8f8',
            ),
            'output'                => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap'),
        ),
        array(
            'id'             => 'h1_menu_mobile_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h1_menu_mobile_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
        ),
        array(
            'id'             => 'h1_menu_mobile_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h1_menu_mobile_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
        ),

    )
));


Redux::setSection($opt_name, array(
    'title'      => esc_html__('Header Style 01 extra 1', 'vitex'),
    'id'         => 'bt_header_style1_extra_1',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_layout_1_extra_1',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout Selected', 'vitex'),
            'subtitle' => esc_html__('This is the options you can change for header style 01 extra', 'vitex'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Header layout 1 extra',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
                )
            ),
            'default'  => '1'
        ),
        array(
            'id'       => 'h1_extra_1_fullwidth',
            'type'     => 'switch',
            'title'    => esc_html__('Full Width (100%)', 'vitex'),
            'subtitle' => esc_html__('Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h1_extra_1_header_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header absolute.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'            => 'h1_extra_1_max_width',
            'type'          => 'slider',
            'title'         => esc_html__('Header Max Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the header.', 'vitex'),
            'default'       => 1170,
            'min'           => 1024,
            'step'          => 1,
            'max'           => 1920,
            'display_value' => 'text',
            'required'      => array('h1_extra_1_header_absolute', '=', '1'),
        ),
        array(
            'id'       => 'h1_extra_1_margin_top',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'bottom'   => false,
            'left'     => false,
            'right'    => false,
            'title'    => esc_html__('Header Margin Top', 'vitex'),
            'subtitle' => esc_html__('Control the top margin the header.', 'vitex'),
            'default'  => array(
                'margin-top' => '30px'
            ),
            'required' => array('h1_extra_1_header_absolute', '=', '1'),
        ),
        array(
            'id'    => 'h1_extra_1_header_desktop_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Desktop Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header desktop.', 'vitex')
        ),
        array(
            'id'       => 'h1_extra_1_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h1_extra_1_header_top_left',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Left', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_extra_1_header_top', '=', '1')
        ),
        array(
            'id'       => 'h1_extra_1_header_top_right',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Right', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_extra_1_header_top', '=', '1')
        ),
        array(
            'id'       => 'h1_extra_1_header_top_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Top Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header top.', 'vitex'),
            'default'  => array(
                'padding-top'    => '20px',
                'padding-right'  => '0px',
                'padding-bottom' => '20px',
                'padding-left'   => '0px'
            ),
            'required' => array('h1_extra_1_header_top', '=', '1'),
            'output'   => array('
            .bt-header-v1-extra-1 .bt-header-desktop .bt-top, 
            .bt-header-v1-extra-1 .bt-header-mobile .bt-top')
        ),
        array(
            'id'                    => 'h1_extra_1_header_top_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Top Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header top.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#1a1a1a',
            ),
            'required'              => array('h1_extra_1_header_top', '=', '1'),
            'output'                => array('
            .bt-header-v1-extra-1 .bt-header-desktop .bt-top, 
            .bt-header-v1-extra-1 .bt-header-mobile .bt-top'),
        ),
        array(
            'id'             => 'h1_extra_1_header_top_font',
            'type'           => 'typography',
            'title'          => esc_html__('Header Top Font', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography header top.', 'vitex'),
            'font-style'     => false,
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'color'          => '#eaeaea',
                'font-size'      => '14px',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h1_extra_1_header_top', '=', '1'),
            'output'         => array('
            .bt-header-v1-extra-1 .bt-header-desktop .bt-top, 
            .bt-header-v1-extra-1 .bt-header-mobile .bt-top')
        ),
        array(
            'id'       => 'h1_extra_1_header_top_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Header Top Link Color', 'vitex'),
            'subtitle' => esc_html__('Controls the link color of header top.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#eaeaea',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h1_extra_1_header_top', '=', '1'),
            'output'   => array('
            .bt-header-v1-extra-1 .bt-header-desktop .bt-top a, 
            .bt-header-v1-extra-1 .bt-header-mobile .bt-top a')
        ),
        array(
            'id'       => 'h1_extra_1_header_bottom_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Bottom Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header bottom absolute.', 'vitex'),
            'default'  => false,
            'required' => array('h1_extra_1_header_absolute', '=', '0'),
        ),
        array(
            'id'            => 'h1_extra_1_header_bottom_max_width',
            'type'          => 'slider',
            'title'         => esc_html__('Header Bottom Max Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the header.', 'vitex'),
            'default'       => 1170,
            'min'           => 1024,
            'step'          => 1,
            'max'           => 1920,
            'display_value' => 'text',
            'required'      => array('h1_extra_1_header_bottom_absolute', '=', '1'),
        ),
        array(
            'id'                    => 'h1_extra_1_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Bottom Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header bottom.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v1-extra-1 .bt-header-desktop .bt-bottom'),
        ),
        array(
            'id'       => 'h1_extra_1_header_bottom_margin_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'title'    => esc_html__('Header Bottom Margin Space', 'vitex'),
            'subtitle' => esc_html__('Control the margin the header bottom.', 'vitex'),
            'default'  => array(
                'margin-top'    => '0px',
                'margin-right'  => '0px',
                'margin-bottom' => '0px',
                'margin-left'   => '0px'
            ),
            'required' => array('h1_extra_1_header_bottom_absolute', '=', '1'),
            'output'   => array('.bt-header-v1-extra-1 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h1_extra_1_header_bottom_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Bottom Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header bottom.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'output'   => array('.bt-header-v1-extra-1 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h1_extra_1_logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
        ),
        array(
            'id'            => 'h1_extra_1_logo_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'h1_extra_1_menu_assign',
            'type'     => 'select',
            'title'    => esc_html__('Menu Assign', 'vitex'),
            'subtitle' => esc_html__('Select menu assing of header.', 'vitex'),
            'options'  => $menu_slug_opt,
            'default'  => 'auto'
        ),
        array(
            'id'       => 'h1_extra_1_menu_align',
            'type'     => 'button_set',
            'title'    => esc_html__('Menu Align', 'vitex'),
            'subtitle' => esc_html__('Control align of menu.', 'vitex'),
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ),
            'default'  => 'right'
        ),
        array(
            'id'       => 'h1_extra_1_menu_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'output'   => array('.bt-header-v1-extra-1 .bt-header-desktop .bt-menu-desktop')
        ),
        array(
            'id'             => 'h1_extra_1_menu_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '90px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1-extra-1 .bt-header-desktop .bt-bottom ul.menu > li > a')
        ),
        array(
            'id'       => 'h1_extra_1_menu_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('
            .bt-header-v1-extra-1 .bt-header-desktop .bt-bottom ul.menu > li > a, 
            .bt-header-v1-extra-1 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'             => 'h1_extra_1_menu_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1-extra-1 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, 
								.bt-header-v1-extra-1 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a,
								.bt-header-v1-extra-1 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v1-extra-1 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
        ),
        array(
            'id'       => 'h1_extra_1_menu_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1-extra-1 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
        ),
        array(
            'id'       => 'h1_extra_1_menu_content_right',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Content Right', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable content right of menu.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'h1_extra_1_menu_content_right_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Menu Content Right Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_extra_1_menu_content_right', '=', '1')
        ),
        array(
            'id'       => 'h1_extra_1_menu_content_right_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Content Right Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the content right of menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h1_extra_1_menu_content_right', '=', '1'),
            'output'   => array('.bt-header-v1-extra-1 .bt-menu-content-right')
        ),
        array(
            'id'       => 'h1_extra_1_menu_canvas',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Canvas', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable menu canvas.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h1_extra_1_menu_canvas_button_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Canvas Button color', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h1_extra_1_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v1-extra-1 .bt-menu-canvas-toggle')
        ),
        array(
            'id'       => 'h1_extra_1_menu_canvas_button_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Canvas Button Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu canvas.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h1_extra_1_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v1-extra-1 .bt-menu-canvas-toggle')
        ),
        array(
            'id'    => 'h1_extra_1_header_stick_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Stick Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header stick.', 'vitex')
        ),
        array(
            'id'       => 'h1_extra_1_header_stick',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Sticky', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable sticky header.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h1_extra_1_header_stick_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Stick Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header stick.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'required'              => array('h1_extra_1_header_stick', '=', '1'),
            'output'                => array('.bt-header-v1-extra-1 .bt-header-stick'),
        ),
        array(
            'id'       => 'h1_extra_1_header_stick_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Stick Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header stick.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'required' => array('h1_extra_1_header_stick', '=', '1'),
            'output'   => array('.bt-header-v1-extra-1 .bt-header-stick'),
        ),
        array(
            'id'       => 'h1_extra_1_logo_stick',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Stick', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header stick.', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
            'required' => array('h1_extra_1_header_stick', '=', '1'),
        ),
        array(
            'id'            => 'h1_extra_1_logo_stick_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Stick Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo stick.', 'vitex'),
            'default'       => 24,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text',
            'required'      => array('h1_extra_1_header_stick', '=', '1'),
        ),
        array(
            'id'       => 'h1_extra_1_menu_space_stick',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space Stick', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu stick.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'required' => array('h1_extra_1_header_stick', '=', '1'),
            'output'   => array('.bt-header-v1-extra-1 .bt-header-stick .bt-menu-desktop')
        ),
        array(
            'id'             => 'h1_extra_1_menu_first_level_font_stick',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography Stick', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level of the header stick.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '70px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h1_extra_1_header_stick', '=', '1'),
            'output'         => array('.bt-header-v1-extra-1 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
        ),
        array(
            'id'       => 'h1_extra_1_menu_first_level_color_stick',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color Stick', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level of the header stick.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'required' => array('h1_extra_1_header_stick', '=', '1'),
            'output'   => array('.bt-header-v1-extra-1 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v1-extra-1 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'    => 'h1_extra_1_header_mobile_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Mobile Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header mobile.', 'vitex')
        ),
        array(
            'id'       => 'h1_extra_1_mobile_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top Mobile', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.(Please enable and config in header desktop before enable)', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h1_extra_1_mobile_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v1-extra-1 .bt-header-mobile .bt-bottom'),
        ),
        array(
            'id'       => 'h1_extra_1_mobile_toggle_button',
            'type'     => 'link_color',
            'title'    => esc_html__('Toggle Menu Button', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
        ),
        array(
            'id'       => 'h1_extra_1_logo_mobile',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Mobile', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header mobile', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            )
        ),
        array(
            'id'            => 'h1_extra_1_logo_mobile_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Mobile Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo mobile.', 'vitex'),
            'default'       => 24,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'h1_extra_1_logo_mobile_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Header Mobile Space', 'vitex'),
            'subtitle' => esc_html__('Control the top/bottom margin the logo mobile.', 'vitex'),
            'default'  => array(
                'margin-top'    => '10px',
                'margin-bottom' => '10px'
            ),
            'output'   => array('.bt-header-v1-extra-1 .bt-header-mobile .bt-bottom .logo')
        ),
        array(
            'id'                    => 'h1_extra_1_mobile_menu_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Menu Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of menu mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#f8f8f8',
            ),
            'output'                => array('.bt-header-v1-extra-1 .bt-header-mobile .bt-menu-mobile-wrap'),
        ),
        array(
            'id'             => 'h1_extra_1_menu_mobile_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1-extra-1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v1-extra-1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v1-extra-1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h1_extra_1_menu_mobile_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1-extra-1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
        ),
        array(
            'id'             => 'h1_extra_1_menu_mobile_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1-extra-1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v1-extra-1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v1-extra-1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h1_extra_1_menu_mobile_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1-extra-1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
        ),

    )
));


Redux::setSection($opt_name, array(
    'title'      => esc_html__('Header Style 01 extra 2', 'vitex'),
    'id'         => 'bt_header_style1_extra_2',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_layout_1_extra_2',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout Selected', 'vitex'),
            'subtitle' => esc_html__('This is the options you can change for header style 02 extra', 'vitex'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Header layout 1 extra 2',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
                )
            ),
            'default'  => '1'
        ),
        array(
            'id'       => 'h1_extra_2_fullwidth',
            'type'     => 'switch',
            'title'    => esc_html__('Full Width (100%)', 'vitex'),
            'subtitle' => esc_html__('Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h1_extra_2_header_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header absolute.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'            => 'h1_extra_2_max_width',
            'type'          => 'slider',
            'title'         => esc_html__('Header Max Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the header.', 'vitex'),
            'default'       => 1170,
            'min'           => 1024,
            'step'          => 1,
            'max'           => 1920,
            'display_value' => 'text',
            'required'      => array('h1_extra_2_header_absolute', '=', '1'),
        ),
        array(
            'id'       => 'h1_extra_2_margin_top',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'bottom'   => false,
            'left'     => false,
            'right'    => false,
            'title'    => esc_html__('Header Margin Top', 'vitex'),
            'subtitle' => esc_html__('Control the top margin the header.', 'vitex'),
            'default'  => array(
                'margin-top' => '30px'
            ),
            'required' => array('h1_extra_2_header_absolute', '=', '1'),
        ),
        array(
            'id'    => 'h1_extra_2_header_desktop_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Desktop Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header desktop.', 'vitex')
        ),
        array(
            'id'       => 'h1_extra_2_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h1_extra_2_header_top_left',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Left', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_extra_2_header_top', '=', '1')
        ),
        array(
            'id'       => 'h1_extra_2_header_top_right',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Right', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_extra_2_header_top', '=', '1')
        ),
        array(
            'id'       => 'h1_extra_2_header_top_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Top Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header top.', 'vitex'),
            'default'  => array(
                'padding-top'    => '20px',
                'padding-right'  => '0px',
                'padding-bottom' => '20px',
                'padding-left'   => '0px'
            ),
            'required' => array('h1_extra_2_header_top', '=', '1'),
            'output'   => array('
            .bt-header-v1-extra-2 .bt-header-desktop .bt-top, 
            .bt-header-v1-extra-2 .bt-header-mobile .bt-top')
        ),
        array(
            'id'                    => 'h1_extra_2_header_top_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Top Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header top.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#1a1a1a',
            ),
            'required'              => array('h1_extra_2_header_top', '=', '1'),
            'output'                => array('
            .bt-header-v1-extra-2 .bt-header-desktop .bt-top, 
            .bt-header-v1-extra-2 .bt-header-mobile .bt-top'),
        ),
        array(
            'id'             => 'h1_extra_2_header_top_font',
            'type'           => 'typography',
            'title'          => esc_html__('Header Top Font', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography header top.', 'vitex'),
            'font-style'     => false,
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'color'          => '#eaeaea',
                'font-size'      => '14px',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h1_extra_2_header_top', '=', '1'),
            'output'         => array('
            .bt-header-v1-extra-2 .bt-header-desktop .bt-top, 
            .bt-header-v1-extra-2 .bt-header-mobile .bt-top')
        ),
        array(
            'id'       => 'h1_extra_2_header_top_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Header Top Link Color', 'vitex'),
            'subtitle' => esc_html__('Controls the link color of header top.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#eaeaea',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h1_extra_2_header_top', '=', '1'),
            'output'   => array('
            .bt-header-v1-extra-2 .bt-header-desktop .bt-top a, 
            .bt-header-v1-extra-2 .bt-header-mobile .bt-top a')
        ),
        array(
            'id'       => 'h1_extra_2_header_bottom_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Bottom Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header bottom absolute.', 'vitex'),
            'default'  => false,
            'required' => array('h1_extra_2_header_absolute', '=', '0'),
        ),
        array(
            'id'            => 'h1_extra_2_header_bottom_max_width',
            'type'          => 'slider',
            'title'         => esc_html__('Header Bottom Max Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the header.', 'vitex'),
            'default'       => 1170,
            'min'           => 1024,
            'step'          => 1,
            'max'           => 1920,
            'display_value' => 'text',
            'required'      => array('h1_extra_2_header_bottom_absolute', '=', '1'),
        ),
        array(
            'id'                    => 'h1_extra_2_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Bottom Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header bottom.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v1-extra-2 .bt-header-desktop .bt-bottom'),
        ),
        array(
            'id'       => 'h1_extra_2_header_bottom_margin_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'title'    => esc_html__('Header Bottom Margin Space', 'vitex'),
            'subtitle' => esc_html__('Control the margin the header bottom.', 'vitex'),
            'default'  => array(
                'margin-top'    => '0px',
                'margin-right'  => '0px',
                'margin-bottom' => '0px',
                'margin-left'   => '0px'
            ),
            'required' => array('h1_extra_2_header_bottom_absolute', '=', '1'),
            'output'   => array('.bt-header-v1-extra-2 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h1_extra_2_header_bottom_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Bottom Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header bottom.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'output'   => array('.bt-header-v1-extra-2 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h1_extra_2_logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
        ),
        array(
            'id'            => 'h1_extra_2_logo_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'h1_extra_2_menu_assign',
            'type'     => 'select',
            'title'    => esc_html__('Menu Assign', 'vitex'),
            'subtitle' => esc_html__('Select menu assing of header.', 'vitex'),
            'options'  => $menu_slug_opt,
            'default'  => 'auto'
        ),
        array(
            'id'       => 'h1_extra_2_menu_align',
            'type'     => 'button_set',
            'title'    => esc_html__('Menu Align', 'vitex'),
            'subtitle' => esc_html__('Control align of menu.', 'vitex'),
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ),
            'default'  => 'right'
        ),
        array(
            'id'       => 'h1_extra_2_menu_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'output'   => array('.bt-header-v1-extra-2 .bt-header-desktop .bt-menu-desktop')
        ),
        array(
            'id'             => 'h1_extra_2_menu_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '90px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1-extra-2 .bt-header-desktop .bt-bottom ul.menu > li > a')
        ),
        array(
            'id'       => 'h1_extra_2_menu_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('
            .bt-header-v1-extra-2 .bt-header-desktop .bt-bottom ul.menu > li > a, 
            .bt-header-v1-extra-2 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'             => 'h1_extra_2_menu_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1-extra-2 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, 
								.bt-header-v1-extra-2 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a,
								.bt-header-v1-extra-2 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v1-extra-2 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
        ),
        array(
            'id'       => 'h1_extra_2_menu_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1-extra-2 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
        ),
        array(
            'id'       => 'h1_extra_2_menu_content_right',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Content Right', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable content right of menu.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'h1_extra_2_menu_content_right_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Menu Content Right Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_extra_2_menu_content_right', '=', '1')
        ),
        array(
            'id'       => 'h1_extra_2_menu_content_right_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Content Right Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the content right of menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h1_extra_2_menu_content_right', '=', '1'),
            'output'   => array('.bt-header-v1-extra-2 .bt-menu-content-right')
        ),
        array(
            'id'       => 'h1_extra_2_menu_canvas',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Canvas', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable menu canvas.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h1_extra_2_menu_canvas_button_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Canvas Button color', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h1_extra_2_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v1-extra-2 .bt-menu-canvas-toggle')
        ),
        array(
            'id'       => 'h1_extra_2_menu_canvas_button_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Canvas Button Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu canvas.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h1_extra_2_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v1-extra-2 .bt-menu-canvas-toggle')
        ),
        array(
            'id'    => 'h1_extra_2_header_stick_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Stick Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header stick.', 'vitex')
        ),
        array(
            'id'       => 'h1_extra_2_header_stick',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Sticky', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable sticky header.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h1_extra_2_header_stick_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Stick Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header stick.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'required'              => array('h1_extra_2_header_stick', '=', '1'),
            'output'                => array('.bt-header-v1-extra-2 .bt-header-stick'),
        ),
        array(
            'id'       => 'h1_extra_2_header_stick_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Stick Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header stick.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'required' => array('h1_extra_2_header_stick', '=', '1'),
            'output'   => array('.bt-header-v1-extra-2 .bt-header-stick'),
        ),
        array(
            'id'       => 'h1_extra_2_logo_stick',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Stick', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header stick.', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
            'required' => array('h1_extra_2_header_stick', '=', '1'),
        ),
        array(
            'id'            => 'h1_extra_2_logo_stick_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Stick Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo stick.', 'vitex'),
            'default'       => 24,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text',
            'required'      => array('h1_extra_2_header_stick', '=', '1'),
        ),
        array(
            'id'       => 'h1_extra_2_menu_space_stick',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space Stick', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu stick.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'required' => array('h1_extra_2_header_stick', '=', '1'),
            'output'   => array('.bt-header-v1-extra-2 .bt-header-stick .bt-menu-desktop')
        ),
        array(
            'id'             => 'h1_extra_2_menu_first_level_font_stick',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography Stick', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level of the header stick.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '70px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h1_extra_2_header_stick', '=', '1'),
            'output'         => array('.bt-header-v1-extra-2 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
        ),
        array(
            'id'       => 'h1_extra_2_menu_first_level_color_stick',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color Stick', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level of the header stick.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'required' => array('h1_extra_2_header_stick', '=', '1'),
            'output'   => array('.bt-header-v1-extra-2 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v1-extra-2 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'    => 'h1_extra_2_header_mobile_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Mobile Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header mobile.', 'vitex')
        ),
        array(
            'id'       => 'h1_extra_2_mobile_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top Mobile', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.(Please enable and config in header desktop before enable)', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h1_extra_2_mobile_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v1-extra-2 .bt-header-mobile .bt-bottom'),
        ),
        array(
            'id'       => 'h1_extra_2_mobile_toggle_button',
            'type'     => 'link_color',
            'title'    => esc_html__('Toggle Menu Button', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
        ),
        array(
            'id'       => 'h1_extra_2_logo_mobile',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Mobile', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header mobile', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            )
        ),
        array(
            'id'            => 'h1_extra_2_logo_mobile_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Mobile Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo mobile.', 'vitex'),
            'default'       => 24,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'h1_extra_2_logo_mobile_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Header Mobile Space', 'vitex'),
            'subtitle' => esc_html__('Control the top/bottom margin the logo mobile.', 'vitex'),
            'default'  => array(
                'margin-top'    => '10px',
                'margin-bottom' => '10px'
            ),
            'output'   => array('.bt-header-v1-extra-2 .bt-header-mobile .bt-bottom .logo')
        ),
        array(
            'id'                    => 'h1_extra_2_mobile_menu_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Menu Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of menu mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#f8f8f8',
            ),
            'output'                => array('.bt-header-v1-extra-2 .bt-header-mobile .bt-menu-mobile-wrap'),
        ),
        array(
            'id'             => 'h1_extra_2_menu_mobile_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1-extra-2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v1-extra-2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v1-extra-2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h1_extra_2_menu_mobile_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1-extra-2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
        ),
        array(
            'id'             => 'h1_extra_2_menu_mobile_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1-extra-2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v1-extra-2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v1-extra-2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h1_extra_2_menu_mobile_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1-extra-2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
        ),

    )
));


Redux::setSection($opt_name, array(
    'title'      => esc_html__('Header Style 01 extra 3', 'vitex'),
    'id'         => 'bt_header_style1_extra_3',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_layout_1_extra_3',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout Selected', 'vitex'),
            'subtitle' => esc_html__('This is the options you can change for header style 02 extra', 'vitex'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Header layout 1 extra 3',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
                )
            ),
            'default'  => '1'
        ),
        array(
            'id'       => 'h1_extra_3_fullwidth',
            'type'     => 'switch',
            'title'    => esc_html__('Full Width (100%)', 'vitex'),
            'subtitle' => esc_html__('Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h1_extra_3_header_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header absolute.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'            => 'h1_extra_3_max_width',
            'type'          => 'slider',
            'title'         => esc_html__('Header Max Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the header.', 'vitex'),
            'default'       => 1170,
            'min'           => 1024,
            'step'          => 1,
            'max'           => 1920,
            'display_value' => 'text',
            'required'      => array('h1_extra_3_header_absolute', '=', '1'),
        ),
        array(
            'id'       => 'h1_extra_3_margin_top',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'bottom'   => false,
            'left'     => false,
            'right'    => false,
            'title'    => esc_html__('Header Margin Top', 'vitex'),
            'subtitle' => esc_html__('Control the top margin the header.', 'vitex'),
            'default'  => array(
                'margin-top' => '30px'
            ),
            'required' => array('h1_extra_3_header_absolute', '=', '1'),
        ),
        array(
            'id'    => 'h1_extra_3_header_desktop_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Desktop Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header desktop.', 'vitex')
        ),
        array(
            'id'       => 'h1_extra_3_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h1_extra_3_header_top_left',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Left', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_extra_3_header_top', '=', '1')
        ),
        array(
            'id'       => 'h1_extra_3_header_top_right',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Right', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_extra_3_header_top', '=', '1')
        ),
        array(
            'id'       => 'h1_extra_3_header_top_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Top Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header top.', 'vitex'),
            'default'  => array(
                'padding-top'    => '20px',
                'padding-right'  => '0px',
                'padding-bottom' => '20px',
                'padding-left'   => '0px'
            ),
            'required' => array('h1_extra_3_header_top', '=', '1'),
            'output'   => array('
            .bt-header-v1-extra-3 .bt-header-desktop .bt-top, 
            .bt-header-v1-extra-3 .bt-header-mobile .bt-top')
        ),
        array(
            'id'                    => 'h1_extra_3_header_top_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Top Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header top.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#1a1a1a',
            ),
            'required'              => array('h1_extra_3_header_top', '=', '1'),
            'output'                => array('
            .bt-header-v1-extra-3 .bt-header-desktop .bt-top, 
            .bt-header-v1-extra-3 .bt-header-mobile .bt-top'),
        ),
        array(
            'id'             => 'h1_extra_3_header_top_font',
            'type'           => 'typography',
            'title'          => esc_html__('Header Top Font', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography header top.', 'vitex'),
            'font-style'     => false,
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'color'          => '#eaeaea',
                'font-size'      => '14px',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h1_extra_3_header_top', '=', '1'),
            'output'         => array('
            .bt-header-v1-extra-3 .bt-header-desktop .bt-top, 
            .bt-header-v1-extra-3 .bt-header-mobile .bt-top')
        ),
        array(
            'id'       => 'h1_extra_3_header_top_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Header Top Link Color', 'vitex'),
            'subtitle' => esc_html__('Controls the link color of header top.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#eaeaea',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h1_extra_3_header_top', '=', '1'),
            'output'   => array('
            .bt-header-v1-extra-3 .bt-header-desktop .bt-top a, 
            .bt-header-v1-extra-3 .bt-header-mobile .bt-top a')
        ),
        array(
            'id'       => 'h1_extra_3_header_bottom_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Bottom Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header bottom absolute.', 'vitex'),
            'default'  => false,
            'required' => array('h1_extra_3_header_absolute', '=', '0'),
        ),
        array(
            'id'            => 'h1_extra_3_header_bottom_max_width',
            'type'          => 'slider',
            'title'         => esc_html__('Header Bottom Max Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the header.', 'vitex'),
            'default'       => 1170,
            'min'           => 1024,
            'step'          => 1,
            'max'           => 1920,
            'display_value' => 'text',
            'required'      => array('h1_extra_3_header_bottom_absolute', '=', '1'),
        ),
        array(
            'id'                    => 'h1_extra_3_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Bottom Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header bottom.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v1-extra-3 .bt-header-desktop .bt-bottom'),
        ),
        array(
            'id'       => 'h1_extra_3_header_bottom_margin_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'title'    => esc_html__('Header Bottom Margin Space', 'vitex'),
            'subtitle' => esc_html__('Control the margin the header bottom.', 'vitex'),
            'default'  => array(
                'margin-top'    => '0px',
                'margin-right'  => '0px',
                'margin-bottom' => '0px',
                'margin-left'   => '0px'
            ),
            'required' => array('h1_extra_3_header_bottom_absolute', '=', '1'),
            'output'   => array('.bt-header-v1-extra-3 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h1_extra_3_header_bottom_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Bottom Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header bottom.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'output'   => array('.bt-header-v1-extra-3 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h1_extra_3_logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
        ),
        array(
            'id'            => 'h1_extra_3_logo_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'h1_extra_3_menu_assign',
            'type'     => 'select',
            'title'    => esc_html__('Menu Assign', 'vitex'),
            'subtitle' => esc_html__('Select menu assing of header.', 'vitex'),
            'options'  => $menu_slug_opt,
            'default'  => 'auto'
        ),
        array(
            'id'       => 'h1_extra_3_menu_align',
            'type'     => 'button_set',
            'title'    => esc_html__('Menu Align', 'vitex'),
            'subtitle' => esc_html__('Control align of menu.', 'vitex'),
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ),
            'default'  => 'right'
        ),
        array(
            'id'       => 'h1_extra_3_menu_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'output'   => array('.bt-header-v1-extra-3 .bt-header-desktop .bt-menu-desktop')
        ),
        array(
            'id'             => 'h1_extra_3_menu_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '90px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1-extra-3 .bt-header-desktop .bt-bottom ul.menu > li > a')
        ),
        array(
            'id'       => 'h1_extra_3_menu_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('
            .bt-header-v1-extra-3 .bt-header-desktop .bt-bottom ul.menu > li > a, 
            .bt-header-v1-extra-3 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'             => 'h1_extra_3_menu_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1-extra-3 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, 
								.bt-header-v1-extra-3 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a,
								.bt-header-v1-extra-3 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v1-extra-3 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
        ),
        array(
            'id'       => 'h1_extra_3_menu_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1-extra-3 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
        ),
        array(
            'id'       => 'h1_extra_3_menu_content_right',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Content Right', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable content right of menu.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'h1_extra_3_menu_content_right_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Menu Content Right Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_extra_3_menu_content_right', '=', '1')
        ),
        array(
            'id'       => 'h1_extra_3_menu_content_right_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Content Right Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the content right of menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h1_extra_3_menu_content_right', '=', '1'),
            'output'   => array('.bt-header-v1-extra-3 .bt-menu-content-right')
        ),
        array(
            'id'       => 'h1_extra_3_menu_canvas',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Canvas', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable menu canvas.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h1_extra_3_menu_canvas_button_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Canvas Button color', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h1_extra_3_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v1-extra-3 .bt-menu-canvas-toggle')
        ),
        array(
            'id'       => 'h1_extra_3_menu_canvas_button_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Canvas Button Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu canvas.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h1_extra_3_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v1-extra-3 .bt-menu-canvas-toggle')
        ),
        array(
            'id'    => 'h1_extra_3_header_stick_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Stick Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header stick.', 'vitex')
        ),
        array(
            'id'       => 'h1_extra_3_header_stick',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Sticky', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable sticky header.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h1_extra_3_header_stick_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Stick Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header stick.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'required'              => array('h1_extra_3_header_stick', '=', '1'),
            'output'                => array('.bt-header-v1-extra-3 .bt-header-stick'),
        ),
        array(
            'id'       => 'h1_extra_3_header_stick_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Stick Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header stick.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'required' => array('h1_extra_3_header_stick', '=', '1'),
            'output'   => array('.bt-header-v1-extra-3 .bt-header-stick'),
        ),
        array(
            'id'       => 'h1_extra_3_logo_stick',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Stick', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header stick.', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
            'required' => array('h1_extra_3_header_stick', '=', '1'),
        ),
        array(
            'id'            => 'h1_extra_3_logo_stick_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Stick Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo stick.', 'vitex'),
            'default'       => 24,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text',
            'required'      => array('h1_extra_3_header_stick', '=', '1'),
        ),
        array(
            'id'       => 'h1_extra_3_menu_space_stick',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space Stick', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu stick.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'required' => array('h1_extra_3_header_stick', '=', '1'),
            'output'   => array('.bt-header-v1-extra-3 .bt-header-stick .bt-menu-desktop')
        ),
        array(
            'id'             => 'h1_extra_3_menu_first_level_font_stick',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography Stick', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level of the header stick.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '70px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h1_extra_3_header_stick', '=', '1'),
            'output'         => array('.bt-header-v1-extra-3 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
        ),
        array(
            'id'       => 'h1_extra_3_menu_first_level_color_stick',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color Stick', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level of the header stick.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'required' => array('h1_extra_3_header_stick', '=', '1'),
            'output'   => array('.bt-header-v1-extra-3 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v1-extra-3 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'    => 'h1_extra_3_header_mobile_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Mobile Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header mobile.', 'vitex')
        ),
        array(
            'id'       => 'h1_extra_3_mobile_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top Mobile', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.(Please enable and config in header desktop before enable)', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h1_extra_3_mobile_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v1-extra-3 .bt-header-mobile .bt-bottom'),
        ),
        array(
            'id'       => 'h1_extra_3_mobile_toggle_button',
            'type'     => 'link_color',
            'title'    => esc_html__('Toggle Menu Button', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
        ),
        array(
            'id'       => 'h1_extra_3_logo_mobile',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Mobile', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header mobile', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            )
        ),
        array(
            'id'            => 'h1_extra_3_logo_mobile_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Mobile Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo mobile.', 'vitex'),
            'default'       => 24,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'h1_extra_3_logo_mobile_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Header Mobile Space', 'vitex'),
            'subtitle' => esc_html__('Control the top/bottom margin the logo mobile.', 'vitex'),
            'default'  => array(
                'margin-top'    => '10px',
                'margin-bottom' => '10px'
            ),
            'output'   => array('.bt-header-v1-extra-3 .bt-header-mobile .bt-bottom .logo')
        ),
        array(
            'id'                    => 'h1_extra_3_mobile_menu_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Menu Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of menu mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#f8f8f8',
            ),
            'output'                => array('.bt-header-v1-extra-3 .bt-header-mobile .bt-menu-mobile-wrap'),
        ),
        array(
            'id'             => 'h1_extra_3_menu_mobile_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1-extra-3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v1-extra-3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v1-extra-3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h1_extra_3_menu_mobile_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1-extra-3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
        ),
        array(
            'id'             => 'h1_extra_3_menu_mobile_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v1-extra-3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v1-extra-3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v1-extra-3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h1_extra_3_menu_mobile_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v1-extra-3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
        ),

    )
));


Redux::setSection($opt_name, array(
    'title'      => esc_html__('Header Style 02', 'vitex'),
    'id'         => 'bt_header_style2',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_layout_2',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout Selected', 'vitex'),
            'subtitle' => esc_html__('This is the options you can change for header style 02', 'vitex'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Header layout 2',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v2.jpg'
                )
            ),
            'default'  => '1'
        ),
        array(
            'id'       => 'h2_fullwidth',
            'type'     => 'switch',
            'title'    => esc_html__('Full Width (100%)', 'vitex'),
            'subtitle' => esc_html__('Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h2_header_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header absolute.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'            => 'h2_max_width',
            'type'          => 'slider',
            'title'         => esc_html__('Header Max Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the header.', 'vitex'),
            'default'       => 1170,
            'min'           => 1024,
            'step'          => 1,
            'max'           => 1920,
            'display_value' => 'text',
            'required'      => array('h2_header_absolute', '=', '1'),
        ),
        array(
            'id'       => 'h2_margin_top',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'bottom'   => false,
            'left'     => false,
            'right'    => false,
            'title'    => esc_html__('Header Margin Top', 'vitex'),
            'subtitle' => esc_html__('Control the top margin the header.', 'vitex'),
            'default'  => array(
                'margin-top' => '30px'
            ),
            'required' => array('h2_header_absolute', '=', '1'),
        ),
        array(
            'id'    => 'h2_header_desktop_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Desktop Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header desktop.', 'vitex')
        ),
        array(
            'id'       => 'h2_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h2_header_top_left',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Left', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h2_header_top', '=', '1')
        ),
        array(
            'id'       => 'h2_header_top_right',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Right', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h2_header_top', '=', '1')
        ),
        array(
            'id'       => 'h2_header_top_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Top Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header top.', 'vitex'),
            'default'  => array(
                'padding-top'    => '20px',
                'padding-right'  => '0px',
                'padding-bottom' => '20px',
                'padding-left'   => '0px'
            ),
            'required' => array('h2_header_top', '=', '1'),
            'output'   => array('.bt-header-v2 .bt-header-desktop .bt-top, .bt-header-v2 .bt-header-mobile .bt-top')
        ),
        array(
            'id'                    => 'h2_header_top_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Top Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header top.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#1a1a1a',
            ),
            'required'              => array('h2_header_top', '=', '1'),
            'output'                => array('.bt-header-v2 .bt-header-desktop .bt-top, .bt-header-v2 .bt-header-mobile .bt-top'),
        ),
        array(
            'id'             => 'h2_header_top_font',
            'type'           => 'typography',
            'title'          => esc_html__('Header Top Font', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography header top.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'color'          => '#eaeaea',
                'font-size'      => '14px',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h2_header_top', '=', '1'),
            'output'         => array('.bt-header-v2 .bt-header-desktop .bt-top')
        ),
        array(
            'id'       => 'h2_header_top_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Header Top Link Color', 'vitex'),
            'subtitle' => esc_html__('Controls the link color of header top.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#fafafa',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h2_header_top', '=', '1'),
            'output'   => array('.bt-header-v2 .bt-header-desktop .bt-top a')
        ),
        array(
            'id'       => 'h2_header_middle_left',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Middle Content Left', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header middle left.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => ''
        ),
        array(
            'id'       => 'h2_logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            )
        ),
        array(
            'id'            => 'h2_logo_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'h2_header_middle_right',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Middle Content Right', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header middle right.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => ''
        ),
        array(
            'id'       => 'h2_header_middle_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Middle Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header middle.', 'vitex'),
            'default'  => array(
                'padding-top'    => '15px',
                'padding-right'  => '0px',
                'padding-bottom' => '15px',
                'padding-left'   => '0px'
            ),
            'output'   => array('.bt-header-v2 .bt-header-desktop .bt-middle')
        ),
        array(
            'id'                    => 'h2_header_middle_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Middle Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header middle.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#f8f8f8',
            ),
            'output'                => array('.bt-header-v2 .bt-header-desktop .bt-middle'),
        ),
        array(
            'id'             => 'h2_header_middle_font',
            'type'           => 'typography',
            'title'          => esc_html__('Header Middle Font', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography header middle.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'color'          => '#555555',
                'font-size'      => '14px',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v2 .bt-header-desktop .bt-middle')
        ),
        array(
            'id'       => 'h2_header_middle_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Header Middle Link Color', 'vitex'),
            'subtitle' => esc_html__('Controls the link color of header middle.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
            'output'   => array('.bt-header-v2 .bt-header-desktop .bt-middle a')
        ),
        array(
            'id'       => 'h2_header_bottom_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Bottom Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header bottom absolute.', 'vitex'),
            'default'  => false,
            'required' => array('h2_header_absolute', '=', '0'),
        ),
        array(
            'id'                    => 'h2_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Bottom Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header bottom.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v2 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h2_header_bottom_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Bottom Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header bottom.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h2_menu_assign',
            'type'     => 'select',
            'title'    => esc_html__('Menu Assign', 'vitex'),
            'subtitle' => esc_html__('Select menu assing of header.', 'vitex'),
            'options'  => $menu_slug_opt,
            'default'  => 'auto'
        ),
        array(
            'id'       => 'h2_menu_align',
            'type'     => 'button_set',
            'title'    => esc_html__('Menu Align', 'vitex'),
            'subtitle' => esc_html__('Control align of menu.', 'vitex'),
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ),
            'default'  => 'center'
        ),
        array(
            'id'       => 'h2_menu_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '0px'
            ),
            'output'   => array('.bt-header-v1 .bt-header-desktop .bt-menu-desktop')
        ),
        array(
            'id'             => 'h2_menu_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '70px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu > li > a')
        ),
        array(
            'id'       => 'h2_menu_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v2 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'             => 'h2_menu_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, 
								.bt-header-v2 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a,
								.bt-header-v2 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v2 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
        ),
        array(
            'id'       => 'h2_menu_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
        ),

        array(
            'id'       => 'h2_menu_content_right',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Content Right', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable content right of menu.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h2_menu_content_right_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Menu Content Right Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h2_menu_content_right', '=', '1')
        ),
        array(
            'id'       => 'h2_menu_content_right_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Content Right Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the content right of menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h2_menu_content_right', '=', '1'),
            'output'   => array('.bt-header-v2 .bt-menu-content-right')
        ),
        array(
            'id'       => 'h2_menu_canvas',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Canvas', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable menu canvas.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'h2_menu_canvas_button_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Canvas Button color', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h2_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v2 .bt-menu-canvas-toggle')
        ),
        array(
            'id'       => 'h2_menu_canvas_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Canvas Button Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu canvas.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h2_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v2 .bt-menu-canvas-toggle')
        ),
        array(
            'id'       => 'h2_menu_after_content_auto',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu After Content Auto', 'vitex'),
            'subtitle' => esc_html__('Turn on to menu content right and menu canvas align after menu.', 'vitex'),
            'default'  => true
        ),
        array(
            'id'    => 'h2_header_stick_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Stick Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header stick.', 'vitex')
        ),
        array(
            'id'       => 'h2_header_stick',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Sticky', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable sticky header.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h2_header_stick_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Stick Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header stick.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'required'              => array('h2_header_stick', '=', '1'),
            'output'                => array('.bt-header-v2 .bt-header-stick'),
        ),
        array(
            'id'       => 'h2_header_stick_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Stick Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header stick.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'required' => array('h2_header_stick', '=', '1'),
            'output'   => array('.bt-header-v2 .bt-header-stick'),
        ),
        array(
            'id'       => 'h2_logo_stick',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Stick', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header stick.', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
            'required' => array('h2_header_stick', '=', '1'),
        ),
        array(
            'id'            => 'h2_logo_stick_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Stick Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo stick.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text',
            'required'      => array('h2_header_stick', '=', '1'),
        ),

        array(
            'id'       => 'h2_menu_align_stick',
            'type'     => 'button_set',
            'title'    => esc_html__('Menu Align Stick', 'vitex'),
            'subtitle' => esc_html__('Control align of menu stick.', 'vitex'),
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ),
            'default'  => 'right',
            'required' => array('h2_header_stick', '=', '1'),
        ),
        array(
            'id'       => 'h2_menu_space_stick',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space Stick', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu stick.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'required' => array('h2_header_stick', '=', '1'),
            'output'   => array('.bt-header-v2 .bt-header-stick .bt-menu-desktop')
        ),
        array(
            'id'             => 'h2_menu_first_level_font_stick',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography Stick', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level of the header stick.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '70px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h2_header_stick', '=', '1'),
            'output'         => array('.bt-header-v2 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
        ),
        array(
            'id'       => 'h2_menu_first_level_color_stick',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color Stick', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level of the header stick.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'required' => array('h2_header_stick', '=', '1'),
            'output'   => array('.bt-header-v2 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v2 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'    => 'h2_header_mobile_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Mobile Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header mobile.', 'vitex')
        ),
        array(
            'id'       => 'h2_mobile_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top Mobile', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.(Please enable and config in header desktop before enable)', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h2_mobile_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v2 .bt-header-mobile .bt-bottom'),
        ),
        array(
            'id'       => 'h2_mobile_header_bottom_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Header Mobile Space', 'vitex'),
            'subtitle' => esc_html__('Control the top/bottom padding the header mobile.', 'vitex'),
            'default'  => array(
                'padding-top'    => '10px',
                'padding-bottom' => '10px'
            ),
            'output'   => array('.bt-header-v2 .bt-header-mobile .bt-bottom')
        ),
        array(
            'id'       => 'h2_mobile_toggle_button',
            'type'     => 'link_color',
            'title'    => esc_html__('Toggle Menu Button', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
        ),
        array(
            'id'       => 'h2_logo_mobile',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Mobile', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header mobile', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            )
        ),
        array(
            'id'            => 'h2_logo_mobile_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Mobile Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo mobile.', 'vitex'),
            'default'       => 24,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'                    => 'h2_mobile_menu_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Menu Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of menu mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#f8f8f8',
            ),
            'output'                => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap'),
        ),
        array(
            'id'             => 'h2_menu_mobile_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a,
								.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h2_menu_mobile_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
        ),
        array(
            'id'             => 'h2_menu_mobile_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h2_menu_mobile_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
        ),

    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Header Style 03', 'vitex'),
    'id'         => 'bt_header_style3',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_layout_3',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout Selected', 'vitex'),
            'subtitle' => esc_html__('This is the options you can change for header style 03', 'vitex'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Header layout 3',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v3.jpg'
                )
            ),
            'default'  => '1'
        ),
        array(
            'id'       => 'h3_fullwidth',
            'type'     => 'switch',
            'title'    => esc_html__('Full Width (100%)', 'vitex'),
            'subtitle' => esc_html__('Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h3_header_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header absolute.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'            => 'h3_max_width',
            'type'          => 'slider',
            'title'         => esc_html__('Header Max Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the header.', 'vitex'),
            'default'       => 1170,
            'min'           => 1024,
            'step'          => 1,
            'max'           => 1920,
            'display_value' => 'text',
            'required'      => array('h3_header_absolute', '=', '1'),
        ),
        array(
            'id'       => 'h3_margin_top',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'bottom'   => false,
            'left'     => false,
            'right'    => false,
            'title'    => esc_html__('Header Margin Top', 'vitex'),
            'subtitle' => esc_html__('Control the top margin the header.', 'vitex'),
            'default'  => array(
                'margin-top' => '30px'
            ),
            'required' => array('h3_header_absolute', '=', '1'),
        ),
        array(
            'id'    => 'h3_header_desktop_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Desktop Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header desktop.', 'vitex')
        ),
        array(
            'id'       => 'h3_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h3_header_top_left',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Left', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h3_header_top', '=', '1')
        ),
        array(
            'id'       => 'h3_header_top_right',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Right', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h3_header_top', '=', '1')
        ),
        array(
            'id'       => 'h3_header_top_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Top Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header top.', 'vitex'),
            'default'  => array(
                'padding-top'    => '20px',
                'padding-right'  => '0px',
                'padding-bottom' => '20px',
                'padding-left'   => '0px'
            ),
            'required' => array('h3_header_top', '=', '1'),
            'output'   => array('.bt-header-v3 .bt-header-desktop .bt-top, .bt-header-v3 .bt-header-mobile .bt-top')
        ),
        array(
            'id'                    => 'h3_header_top_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Top Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header top.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#1a1a1a',
            ),
            'required'              => array('h3_header_top', '=', '1'),
            'output'                => array('.bt-header-v3 .bt-header-desktop .bt-top, .bt-header-v3 .bt-header-mobile .bt-top'),
        ),
        array(
            'id'             => 'h3_header_top_font',
            'type'           => 'typography',
            'title'          => esc_html__('Header Top Font', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography header top.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'color'          => '#eaeaea',
                'font-size'      => '14px',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h3_header_top', '=', '1'),
            'output'         => array('.bt-header-v3 .bt-header-desktop .bt-top')
        ),
        array(
            'id'       => 'h3_header_top_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Header Top Link Color', 'vitex'),
            'subtitle' => esc_html__('Controls the link color of header top.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#eaeaea',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h3_header_top', '=', '1'),
            'output'   => array('.bt-header-v3 .bt-header-desktop .bt-top a,.bt-header-v3 .bt-header-mobile .bt-top a')
        ),
        array(
            'id'       => 'h3_logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            )
        ),
        array(
            'id'            => 'h3_logo_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'h3_header_middle_right',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Middle Content Right', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header middle right.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => ''
        ),
        array(
            'id'       => 'h3_header_middle_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Middle Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header middle.', 'vitex'),
            'default'  => array(
                'padding-top'    => '15px',
                'padding-right'  => '0px',
                'padding-bottom' => '15px',
                'padding-left'   => '0px'
            ),
            'output'   => array('.bt-header-v3 .bt-header-desktop .bt-middle')
        ),
        array(
            'id'                    => 'h3_header_middle_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Middle Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header middle.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#f8f8f8',
            ),
            'output'                => array('.bt-header-v3 .bt-header-desktop .bt-middle'),
        ),
        array(
            'id'             => 'h3_header_middle_font',
            'type'           => 'typography',
            'title'          => esc_html__('Header Middle Font', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography header middle.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'color'          => '#555555',
                'font-size'      => '14px',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v3 .bt-header-desktop .bt-middle')
        ),
        array(
            'id'       => 'h3_header_middle_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Header Middle Link Color', 'vitex'),
            'subtitle' => esc_html__('Controls the link color of header middle.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
            'output'   => array('.bt-header-v3 .bt-header-desktop .bt-middle a')
        ),
        array(
            'id'       => 'h3_header_bottom_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Bottom Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header bottom absolute.', 'vitex'),
            'default'  => false,
            'required' => array('h3_header_absolute', '=', '0'),
        ),
        array(
            'id'                    => 'h3_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Bottom Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header bottom.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v3 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h3_header_bottom_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Bottom Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header bottom.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'output'   => array('.bt-header-v3 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h3_menu_assign',
            'type'     => 'select',
            'title'    => esc_html__('Menu Assign', 'vitex'),
            'subtitle' => esc_html__('Select menu assing of header.', 'vitex'),
            'options'  => $menu_slug_opt,
            'default'  => 'auto'
        ),
        array(
            'id'       => 'h3_menu_align',
            'type'     => 'button_set',
            'title'    => esc_html__('Menu Align', 'vitex'),
            'subtitle' => esc_html__('Control align of menu.', 'vitex'),
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ),
            'default'  => 'left'
        ),
        array(
            'id'       => 'h3_menu_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '0px'
            ),
            'output'   => array('.bt-header-v3 .bt-header-desktop .bt-menu-desktop')
        ),
        array(
            'id'             => 'h3_menu_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '70px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v3 .bt-header-desktop .bt-bottom ul.menu > li > a')
        ),
        array(
            'id'       => 'h3_menu_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v3 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v3 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'             => 'h3_menu_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v3 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, 
								.bt-header-v3 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a,
								.bt-header-v3 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v3 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
        ),
        array(
            'id'       => 'h3_menu_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v3 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
        ),

        array(
            'id'       => 'h3_menu_content_right',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Content Right', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable content right of menu.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h3_menu_content_right_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Menu Content Right Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h3_menu_content_right', '=', '1')
        ),
        array(
            'id'       => 'h3_menu_content_right_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Content Right Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the content right of menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h3_menu_content_right', '=', '1'),
            'output'   => array('.bt-header-v3 .bt-menu-content-right')
        ),
        array(
            'id'       => 'h3_menu_canvas',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Canvas', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable menu canvas.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'h3_menu_canvas_button_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Canvas Button color', 'vitex'),
            'subtitle' => esc_html__('Controls the color button toggle menu canvas.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h3_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v3 .bt-menu-canvas-toggle')
        ),
        array(
            'id'       => 'h3_menu_canvas_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Canvas Button Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu canvas.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h3_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v3 .bt-menu-canvas-toggle')
        ),
        array(
            'id'       => 'h3_menu_after_content_auto',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu After Content Auto', 'vitex'),
            'subtitle' => esc_html__('Turn on to menu content right and menu canvas align after menu.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'    => 'h3_header_stick_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Stick Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header stick.', 'vitex')
        ),
        array(
            'id'       => 'h3_header_stick',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Sticky', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable sticky header.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h3_header_stick_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Stick Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header stick.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'required'              => array('h3_header_stick', '=', '1'),
            'output'                => array('.bt-header-v3 .bt-header-stick'),
        ),
        array(
            'id'       => 'h3_header_stick_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Stick Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header stick.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'required' => array('h3_header_stick', '=', '1'),
            'output'   => array('.bt-header-v3 .bt-header-stick'),
        ),
        array(
            'id'       => 'h3_logo_stick',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Stick', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header stick.', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
            'required' => array('h3_header_stick', '=', '1'),
        ),
        array(
            'id'            => 'h3_logo_stick_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Stick Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo stick.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text',
            'required'      => array('h3_header_stick', '=', '1'),
        ),

        array(
            'id'       => 'h3_menu_align_stick',
            'type'     => 'button_set',
            'title'    => esc_html__('Menu Align Stick', 'vitex'),
            'subtitle' => esc_html__('Control align of menu stick.', 'vitex'),
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ),
            'default'  => 'right',
            'required' => array('h3_header_stick', '=', '1'),
        ),
        array(
            'id'       => 'h3_menu_space_stick',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space Stick', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu stick.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'required' => array('h3_header_stick', '=', '1'),
            'output'   => array('.bt-header-v3 .bt-header-stick .bt-menu-desktop')
        ),
        array(
            'id'             => 'h3_menu_first_level_font_stick',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography Stick', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level of the header stick.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '70px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h3_header_stick', '=', '1'),
            'output'         => array('.bt-header-v3 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
        ),
        array(
            'id'       => 'h3_menu_first_level_color_stick',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color Stick', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level of the header stick.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'required' => array('h3_header_stick', '=', '1'),
            'output'   => array('.bt-header-v3 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v3 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'    => 'h3_header_mobile_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Mobile Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header mobile.', 'vitex')
        ),
        array(
            'id'       => 'h3_mobile_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top Mobile', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.(Please enable and config in header desktop before enable)', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h3_mobile_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v3 .bt-header-mobile .bt-bottom'),
        ),
        array(
            'id'       => 'h3_mobile_header_bottom_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Header Mobile Space', 'vitex'),
            'subtitle' => esc_html__('Control the top/bottom padding the header mobile.', 'vitex'),
            'default'  => array(
                'padding-top'    => '10px',
                'padding-bottom' => '10px'
            ),
            'output'   => array('.bt-header-v3 .bt-header-mobile .bt-bottom')
        ),
        array(
            'id'       => 'h3_mobile_toggle_button',
            'type'     => 'link_color',
            'title'    => esc_html__('Toggle Menu Button', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
        ),
        array(
            'id'       => 'h3_logo_mobile',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Mobile', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header mobile', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            )
        ),
        array(
            'id'            => 'h3_logo_mobile_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Mobile Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo mobile.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'                    => 'h3_mobile_menu_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Menu Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of menu mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#f8f8f8',
            ),
            'output'                => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap'),
        ),
        array(
            'id'             => 'h3_menu_mobile_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a,
								.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h3_menu_mobile_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
        ),
        array(
            'id'             => 'h3_menu_mobile_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h3_menu_mobile_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
        ),

    )
));


Redux::setSection($opt_name, array(
    'title'      => esc_html__('Header Style 04', 'vitex'),
    'id'         => 'bt_header_style4',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_layout_4',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout Selected', 'vitex'),
            'subtitle' => esc_html__('This is the options you can change for header style 04', 'vitex'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Header layout 3',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-v4.jpg'
                )
            ),
            'default'  => '1'
        ),
        array(
            'id'       => 'h4_fullwidth',
            'type'     => 'switch',
            'title'    => esc_html__('Full Width (100%)', 'vitex'),
            'subtitle' => esc_html__('Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h4_header_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header absolute.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'            => 'h4_max_width',
            'type'          => 'slider',
            'title'         => esc_html__('Header Max Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the header.', 'vitex'),
            'default'       => 1170,
            'min'           => 1024,
            'step'          => 1,
            'max'           => 1920,
            'display_value' => 'text',
            'required'      => array('h4_header_absolute', '=', '1'),
        ),
        array(
            'id'       => 'h4_margin_top',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'bottom'   => false,
            'left'     => false,
            'right'    => false,
            'title'    => esc_html__('Header Margin Top', 'vitex'),
            'subtitle' => esc_html__('Control the top margin the header.', 'vitex'),
            'default'  => array(
                'margin-top' => '30px'
            ),
            'required' => array('h4_header_absolute', '=', '1'),
        ),
        array(
            'id'    => 'h4_header_desktop_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Desktop Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header desktop.', 'vitex')
        ),
        array(
            'id'       => 'h4_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h4_header_top_left',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Left', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h4_header_top', '=', '1')
        ),
        array(
            'id'       => 'h4_header_top_right',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Right', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h4_header_top', '=', '1')
        ),
        array(
            'id'       => 'h4_header_top_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Top Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header top.', 'vitex'),
            'default'  => array(
                'padding-top'    => '20px',
                'padding-right'  => '0px',
                'padding-bottom' => '20px',
                'padding-left'   => '0px'
            ),
            'required' => array('h4_header_top', '=', '1'),
            'output'   => array('.bt-header-v4 .bt-header-desktop .bt-top, .bt-header-v4 .bt-header-mobile .bt-top')
        ),
        array(
            'id'                    => 'h4_header_top_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Top Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header top.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#1a1a1a',
            ),
            'required'              => array('h4_header_top', '=', '1'),
            'output'                => array('.bt-header-v4 .bt-header-desktop .bt-top, .bt-header-v4 .bt-header-mobile .bt-top'),
        ),
        array(
            'id'             => 'h4_header_top_font',
            'type'           => 'typography',
            'title'          => esc_html__('Header Top Font', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography header top.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'color'          => '#eaeaea',
                'font-size'      => '14px',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h4_header_top', '=', '1'),
            'output'         => array('.bt-header-v4 .bt-header-desktop .bt-top')
        ),
        array(
            'id'       => 'h4_header_top_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Header Top Link Color', 'vitex'),
            'subtitle' => esc_html__('Controls the link color of header top.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#eaeaea',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h4_header_top', '=', '1'),
            'output'   => array('.bt-header-v4 .bt-header-desktop .bt-top a')
        ),
        array(
            'id'       => 'h4_logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            )
        ),
        array(
            'id'            => 'h4_logo_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'h4_header_middle_right',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Middle Content Right', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header middle right.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => ''
        ),
        array(
            'id'       => 'h4_header_middle_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Middle Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header middle.', 'vitex'),
            'default'  => array(
                'padding-top'    => '15px',
                'padding-right'  => '0px',
                'padding-bottom' => '15px',
                'padding-left'   => '0px'
            ),
            'output'   => array('.bt-header-v4 .bt-header-desktop .bt-middle')
        ),
        array(
            'id'                    => 'h4_header_middle_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Middle Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header middle.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#f8f8f8',
            ),
            'output'                => array('.bt-header-v4 .bt-header-desktop .bt-middle'),
        ),
        array(
            'id'             => 'h4_header_middle_font',
            'type'           => 'typography',
            'title'          => esc_html__('Header Middle Font', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography header middle.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'color'          => '#555555',
                'font-size'      => '14px',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v4 .bt-header-desktop .bt-middle')
        ),
        array(
            'id'       => 'h4_header_middle_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Header Middle Link Color', 'vitex'),
            'subtitle' => esc_html__('Controls the link color of header middle.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
            'output'   => array('.bt-header-v4 .bt-header-desktop .bt-middle a')
        ),
        array(
            'id'       => 'h4_header_bottom_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Bottom Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header bottom absolute.', 'vitex'),
            'default'  => false,
            'required' => array('h4_header_absolute', '=', '0'),
        ),
        array(
            'id'                    => 'h4_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Bottom Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header bottom.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v4 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h4_header_bottom_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Bottom Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header bottom.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'output'   => array('.bt-header-v4 .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'h4_menu_assign',
            'type'     => 'select',
            'title'    => esc_html__('Menu Assign', 'vitex'),
            'subtitle' => esc_html__('Select menu assing of header.', 'vitex'),
            'options'  => $menu_slug_opt,
            'default'  => 'auto'
        ),
        array(
            'id'       => 'h4_menu_align',
            'type'     => 'button_set',
            'title'    => esc_html__('Menu Align', 'vitex'),
            'subtitle' => esc_html__('Control align of menu.', 'vitex'),
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ),
            'default'  => 'left'
        ),
        array(
            'id'       => 'h4_menu_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '0px'
            ),
            'output'   => array('.bt-header-v4 .bt-header-desktop .bt-menu-desktop')
        ),
        array(
            'id'             => 'h4_menu_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '70px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v4 .bt-header-desktop .bt-bottom ul.menu > li > a')
        ),
        array(
            'id'       => 'h4_menu_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v4 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v4 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'             => 'h4_menu_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v4 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, 
								.bt-header-v4 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a,
								.bt-header-v4 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v4 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
        ),
        array(
            'id'       => 'h4_menu_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v4 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
        ),

        array(
            'id'       => 'h4_menu_content_right',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Content Right', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable content right of menu.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'h4_menu_content_right_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Menu Content Right Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h4_menu_content_right', '=', '1')
        ),
        array(
            'id'       => 'h4_menu_content_right_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Content Right Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the content right of menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h4_menu_content_right', '=', '1'),
            'output'   => array('.bt-header-v4 .bt-menu-content-right')
        ),
        array(
            'id'       => 'h4_menu_canvas',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Canvas', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable menu canvas.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'h4_menu_canvas_button_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Canvas Button color', 'vitex'),
            'subtitle' => esc_html__('Controls the color button toggle menu canvas.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
            'required' => array('h4_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v4 .bt-menu-canvas-toggle')
        ),
        array(
            'id'       => 'h4_menu_canvas_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Canvas Button Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu canvas.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('h4_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-v4 .bt-menu-canvas-toggle')
        ),
        array(
            'id'       => 'h4_menu_after_content_auto',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu After Content Auto', 'vitex'),
            'subtitle' => esc_html__('Turn on to menu content right and menu canvas align after menu.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'    => 'h4_header_stick_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Stick Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header stick.', 'vitex')
        ),
        array(
            'id'       => 'h4_header_stick',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Sticky', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable sticky header.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h4_header_stick_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Stick Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header stick.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'required'              => array('h4_header_stick', '=', '1'),
            'output'                => array('.bt-header-v4 .bt-header-stick'),
        ),
        array(
            'id'       => 'h4_header_stick_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Stick Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header stick.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'required' => array('h4_header_stick', '=', '1'),
            'output'   => array('.bt-header-v4 .bt-header-stick'),
        ),
        array(
            'id'       => 'h4_logo_stick',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Stick', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header stick.', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
            'required' => array('h4_header_stick', '=', '1'),
        ),
        array(
            'id'            => 'h4_logo_stick_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Stick Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo stick.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text',
            'required'      => array('h4_header_stick', '=', '1'),
        ),

        array(
            'id'       => 'h4_menu_align_stick',
            'type'     => 'button_set',
            'title'    => esc_html__('Menu Align Stick', 'vitex'),
            'subtitle' => esc_html__('Control align of menu stick.', 'vitex'),
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ),
            'default'  => 'right',
            'required' => array('h4_header_stick', '=', '1'),
        ),
        array(
            'id'       => 'h4_menu_space_stick',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space Stick', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu stick.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'required' => array('h4_header_stick', '=', '1'),
            'output'   => array('.bt-header-v4 .bt-header-stick .bt-menu-desktop')
        ),
        array(
            'id'             => 'h4_menu_first_level_font_stick',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography Stick', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level of the header stick.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '70px',
                'letter-spacing' => '0'
            ),
            'required'       => array('h4_header_stick', '=', '1'),
            'output'         => array('.bt-header-v4 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
        ),
        array(
            'id'       => 'h4_menu_first_level_color_stick',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color Stick', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level of the header stick.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'required' => array('h4_header_stick', '=', '1'),
            'output'   => array('.bt-header-v4 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v4 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'    => 'h4_header_mobile_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Mobile Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header mobile.', 'vitex')
        ),
        array(
            'id'       => 'h4_mobile_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top Mobile', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.(Please enable and config in header desktop before enable)', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'h4_mobile_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-v4 .bt-header-mobile .bt-bottom'),
        ),
        array(
            'id'       => 'h4_mobile_header_bottom_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Header Mobile Space', 'vitex'),
            'subtitle' => esc_html__('Control the top/bottom padding the header mobile.', 'vitex'),
            'default'  => array(
                'padding-top'    => '10px',
                'padding-bottom' => '10px'
            ),
            'output'   => array('.bt-header-v4 .bt-header-mobile .bt-bottom')
        ),
        array(
            'id'       => 'h4_mobile_toggle_button',
            'type'     => 'link_color',
            'title'    => esc_html__('Toggle Menu Button', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
        ),
        array(
            'id'       => 'h4_logo_mobile',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Mobile', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header mobile', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            )
        ),
        array(
            'id'            => 'h4_logo_mobile_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Mobile Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo mobile.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'                    => 'h4_mobile_menu_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Menu Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of menu mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#f8f8f8',
            ),
            'output'                => array('.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap'),
        ),
        array(
            'id'             => 'h4_menu_mobile_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a,
								.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h4_menu_mobile_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
        ),
        array(
            'id'             => 'h4_menu_mobile_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'h4_menu_mobile_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
        ),

    )
));


Redux::setSection($opt_name, array(
    'title'      => esc_html__('Header One Page', 'vitex'),
    'id'         => 'bt_header_onepage',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_layout_onepage',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout Selected', 'vitex'),
            'subtitle' => esc_html__('This is the options you can change for header one page.', 'vitex'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Header layout onepage',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-onepage.jpg'
                )
            ),
            'default'  => '1'
        ),
        array(
            'id'       => 'honepage_fullwidth',
            'type'     => 'switch',
            'title'    => esc_html__('Full Width (100%)', 'vitex'),
            'subtitle' => esc_html__('Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'    => 'honepage_header_desktop_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Desktop Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header desktop.', 'vitex')
        ),
        array(
            'id'       => 'honepage_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'honepage_header_top_left',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Left', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('honepage_header_top', '=', '1')
        ),
        array(
            'id'       => 'honepage_header_top_center',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Center', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top center.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('honepage_header_top', '=', '1')
        ),
        array(
            'id'       => 'honepage_header_top_right',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Top Content Right', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('honepage_header_top', '=', '1')
        ),
        array(
            'id'       => 'honepage_header_top_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Top Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header top.', 'vitex'),
            'default'  => array(
                'padding-top'    => '10px',
                'padding-right'  => '0px',
                'padding-bottom' => '10px',
                'padding-left'   => '0px'
            ),
            'required' => array('honepage_header_top', '=', '1'),
            'output'   => array('.bt-header-onepage .bt-header-desktop .bt-top, .bt-header-onepage .bt-header-mobile .bt-top')
        ),
        array(
            'id'                    => 'honepage_header_top_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Top Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header top.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#1ab7ea',
            ),
            'required'              => array('honepage_header_top', '=', '1'),
            'output'                => array('.bt-header-onepage .bt-header-desktop .bt-top, .bt-header-onepage .bt-header-mobile .bt-top'),
        ),
        array(
            'id'             => 'honepage_header_top_font',
            'type'           => 'typography',
            'title'          => esc_html__('Header Top Font', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography header top.', 'vitex'),
            'font-style'     => false,
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'color'          => '#eaeaea',
                'font-size'      => '14px',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'required'       => array('honepage_header_top', '=', '1'),
            'output'         => array('.bt-header-onepage .bt-header-desktop .bt-top')
        ),
        array(
            'id'       => 'honepage_header_top_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Header Top Link Color', 'vitex'),
            'subtitle' => esc_html__('Controls the link color of header top.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#fafafa',
                'hover'   => '#fb5c71',
            ),
            'required' => array('honepage_header_top', '=', '1'),
            'output'   => array('.bt-header-onepage .bt-header-desktop .bt-top a')
        ),
        array(
            'id'       => 'honepage_header_bottom_absolute',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Bottom Absolute', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header bottom absolute.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'honepage_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Bottom Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header bottom.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-onepage .bt-header-desktop .bt-bottom'),
        ),
        array(
            'id'       => 'honepage_header_bottom_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Bottom Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header bottom.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'output'   => array('.bt-header-onepage .bt-header-desktop .bt-bottom')
        ),
        array(
            'id'       => 'honepage_logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
        ),
        array(
            'id'            => 'honepage_logo_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'honepage_menu_assign',
            'type'     => 'select',
            'title'    => esc_html__('Menu Assign', 'vitex'),
            'subtitle' => esc_html__('Select menu assing of header.', 'vitex'),
            'options'  => $menu_slug_opt,
            'default'  => 'auto'
        ),
        array(
            'id'       => 'honepage_menu_align',
            'type'     => 'button_set',
            'title'    => esc_html__('Menu Align', 'vitex'),
            'subtitle' => esc_html__('Control align of menu.', 'vitex'),
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ),
            'default'  => 'right'
        ),
        array(
            'id'       => 'honepage_menu_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'output'   => array('.bt-header-onepage .bt-header-desktop .bt-menu-desktop')
        ),
        array(
            'id'             => 'honepage_menu_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '90px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-onepage .bt-header-desktop .bt-bottom ul.menu > li > a')
        ),
        array(
            'id'       => 'honepage_menu_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-onepage .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-onepage .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'             => 'honepage_menu_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-onepage .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, 
								.bt-header-onepage .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a,
								.bt-header-onepage .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-onepage .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
        ),
        array(
            'id'       => 'honepage_menu_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-onepage .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
        ),
        array(
            'id'       => 'honepage_menu_content_right',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Content Right', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable content right of menu.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'       => 'honepage_menu_content_right_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Menu Content Right Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('honepage_menu_content_right', '=', '1')
        ),
        array(
            'id'       => 'honepage_menu_content_right_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Content Right Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the content right of menu.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('honepage_menu_content_right', '=', '1'),
            'output'   => array('.bt-header-onepage .bt-menu-content-right')
        ),
        array(
            'id'       => 'honepage_menu_canvas',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Menu Canvas', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable menu canvas.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'honepage_menu_canvas_button_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Canvas Button color', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
            'required' => array('honepage_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-onepage .bt-menu-canvas-toggle')
        ),
        array(
            'id'       => 'honepage_menu_canvas_button_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Canvas Button Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu canvas.', 'vitex'),
            'default'  => array(
                'margin-left'  => '15px',
                'margin-right' => '0'
            ),
            'required' => array('honepage_menu_canvas', '=', '1'),
            'output'   => array('.bt-header-onepage .bt-menu-canvas-toggle')
        ),
        array(
            'id'    => 'honepage_header_stick_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Stick Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header stick.', 'vitex')
        ),
        array(
            'id'       => 'honepage_header_stick',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Sticky', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable sticky header.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'honepage_header_stick_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Stick Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header stick.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'required'              => array('honepage_header_stick', '=', '1'),
            'output'                => array('.bt-header-onepage .bt-header-stick'),
        ),
        array(
            'id'       => 'honepage_header_stick_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Stick Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header stick.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-right'  => '0px',
                'padding-bottom' => '0px',
                'padding-left'   => '0px'
            ),
            'required' => array('honepage_header_stick', '=', '1'),
            'output'   => array('.bt-header-onepage .bt-header-stick'),
        ),
        array(
            'id'       => 'honepage_logo_stick',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Stick', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header stick.', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
            'required' => array('honepage_header_stick', '=', '1'),
        ),
        array(
            'id'            => 'honepage_logo_stick_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Stick Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo stick.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text',
            'required'      => array('honepage_header_stick', '=', '1'),
        ),
        array(
            'id'       => 'honepage_menu_space_stick',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Menu Space Stick', 'vitex'),
            'subtitle' => esc_html__('Control the left/right margin the menu stick.', 'vitex'),
            'default'  => array(
                'margin-left'  => '0px',
                'margin-right' => '10px'
            ),
            'required' => array('honepage_header_stick', '=', '1'),
            'output'   => array('.bt-header-onepage .bt-header-stick .bt-menu-desktop')
        ),
        array(
            'id'             => 'honepage_menu_first_level_font_stick',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography Stick', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level of the header stick.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '70px',
                'letter-spacing' => '0'
            ),
            'required'       => array('honepage_header_stick', '=', '1'),
            'output'         => array('.bt-header-onepage .bt-header-stick .bt-menu-desktop ul.menu > li > a')
        ),
        array(
            'id'       => 'honepage_menu_first_level_color_stick',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color Stick', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level of the header stick.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'required' => array('honepage_header_stick', '=', '1'),
            'output'   => array('.bt-header-onepage .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-onepage .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
        ),
        array(
            'id'    => 'honepage_header_mobile_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Mobile Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header mobile.', 'vitex')
        ),
        array(
            'id'       => 'honepage_mobile_header_top',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Top Mobile', 'vitex'),
            'subtitle' => esc_html__('Turn on to enable header top.(Please enable and config in header desktop before enable)', 'vitex'),
            'default'  => false
        ),
        array(
            'id'                    => 'honepage_mobile_header_bottom_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-onepage .bt-header-mobile .bt-bottom'),
        ),
        array(
            'id'       => 'honepage_mobile_toggle_button',
            'type'     => 'link_color',
            'title'    => esc_html__('Toggle Menu Button', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
        ),
        array(
            'id'       => 'honepage_logo_mobile',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Mobile', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header mobile', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            )
        ),
        array(
            'id'            => 'honepage_logo_mobile_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Mobile Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo mobile.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'honepage_logo_mobile_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Header Mobile Space', 'vitex'),
            'subtitle' => esc_html__('Control the top/bottom margin the logo mobile.', 'vitex'),
            'default'  => array(
                'margin-top'    => '10px',
                'margin-bottom' => '10px'
            ),
            'output'   => array('.bt-header-onepage .bt-header-mobile .bt-bottom .logo')
        ),
        array(
            'id'                    => 'honepage_mobile_menu_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Menu Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of menu mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#f8f8f8',
            ),
            'output'                => array('.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap'),
        ),
        array(
            'id'             => 'honepage_menu_mobile_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'text-align'     => false,
            'color'          => false,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'honepage_menu_mobile_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
        ),
        array(
            'id'             => 'honepage_menu_mobile_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'honepage_menu_mobile_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-onepage .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
        ),

    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Header One Page Scroll', 'vitex'),
    'id'         => 'bt_header_onepage_scroll',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_layout_onepagescroll',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout Selected', 'vitex'),
            'subtitle' => esc_html__('This is the options you can change for header one page style', 'vitex'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Header layout one page',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-onepagescroll.jpg'
                )
            ),
            'default'  => '1'
        ),
        array(
            'id'       => 'honepage1_fullwidth',
            'type'     => 'switch',
            'title'    => esc_html__('Full Width (100%)', 'vitex'),
            'subtitle' => esc_html__('Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'vitex'),
            'default'  => true
        ),
        array(
            'id'                    => 'honepage1_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => 'transparent',
            ),
            'output'                => array('.bt-header-onepagev1 .bt-header-inner'),
        ),
        array(
            'id'       => 'honepage1_padding_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Padding Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding the header.', 'vitex'),
            'default'  => array(
                'padding-top'    => '40px',
                'padding-right'  => '60px',
                'padding-bottom' => '40px',
                'padding-left'   => '60px'
            ),
            'output'   => array('.bt-header-onepagev1 .bt-header-inner')
        ),
        array(
            'id'       => 'honepage1_logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo-white.png'
            ),
        ),
        array(
            'id'            => 'honepage1_logo_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'honepage1_menu_assign',
            'type'     => 'select',
            'title'    => esc_html__('Menu Assign', 'vitex'),
            'subtitle' => esc_html__('Select menu assing of header.', 'vitex'),
            'options'  => $menu_slug_opt,
            'default'  => 'auto'
        ),
        array(
            'id'       => 'honepage1_content_right_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Content Right Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in content right of header.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
        ),

    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Header Vertical', 'vitex'),
    'id'         => 'bt_header_vertical',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_layout_vertical',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout Selected', 'vitex'),
            'subtitle' => esc_html__('This is the options you can change for header one page style', 'vitex'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Header layout vertical',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-vertical.jpg'
                )
            ),
            'default'  => '1'
        ),
        array(
            'id'            => 'hvertical_width',
            'type'          => 'slider',
            'title'         => esc_html__('Header Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the header.', 'vitex'),
            'default'       => 320,
            'min'           => 240,
            'step'          => 1,
            'max'           => 450,
            'display_value' => 'text'
        ),
        array(
            'id'                    => 'hvertical_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.header-vertical .bt-header-vertical'),
        ),
        array(
            'id'       => 'hvertical_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'title'    => esc_html__('Header Space', 'vitex'),
            'subtitle' => esc_html__('Control the padding of the header.', 'vitex'),
            'default'  => array(
                'padding-top'    => '60px',
                'padding-right'  => '50px',
                'padding-bottom' => '60px',
                'padding-left'   => '50px'
            ),
            'output'   => array('.header-vertical .bt-header-vertical .bt-header-inner')
        ),
        array(
            'id'       => 'hvertical_logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
        ),
        array(
            'id'            => 'hvertical_logo_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'hvertical_logo_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Logo Space', 'vitex'),
            'subtitle' => esc_html__('Control the margin-bottom of the logo.', 'vitex'),
            'default'  => array(
                'margin-bottom' => '40px'
            ),
            'output'   => array('.header-vertical .bt-header-vertical .bt-header-inner .bt-logo')
        ),
        array(
            'id'       => 'hvertical_menu_assign',
            'type'     => 'select',
            'title'    => esc_html__('Menu Assign', 'vitex'),
            'subtitle' => esc_html__('Select menu assing of header.', 'vitex'),
            'options'  => $menu_slug_opt,
            'default'  => 'auto'
        ),
        array(
            'id'       => 'hvertical_full_height',
            'type'     => 'switch',
            'title'    => esc_html__('Full height(100%)', 'vitex'),
            'subtitle' => esc_html__('Turn on to have the header area display at 100% height according to the window size. Turn off to follow inner content.', 'vitex'),
            'default'  => false,
        ),
        array(
            'id'            => 'hvertical_menu_height',
            'type'          => 'slider',
            'title'         => esc_html__('Menu Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the menu on screen 1920x900.', 'vitex'),
            'default'       => 540,
            'min'           => 120,
            'step'          => 10,
            'max'           => 720,
            'display_value' => 'text',
            'required'      => array('hvertical_full_height', '=', '1')
        ),
        array(
            'id'       => 'hvertical_menu_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Menu Space', 'vitex'),
            'subtitle' => esc_html__('Control the margin-bottom of the menu.', 'vitex'),
            'default'  => array(
                'margin-bottom' => '40px'
            ),
            'output'   => array('.header-vertical .bt-header-vertical .bt-header-inner .bt-vertical-menu-wrap')
        ),
        array(
            'id'             => 'hvertical_menu_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '40px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.header-vertical .bt-header-vertical .bt-header-inner .bt-vertical-menu-wrap .bt-menu-list ul.menu > li > a,
								.header-vertical .bt-header-vertical .bt-header-inner .bt-vertical-menu-wrap .bt-menu-list > ul.menu > li.menu-item-has-children > .menu-toggle, 
								.header-vertical .bt-header-vertical .bt-header-inner .bt-vertical-menu-wrap .bt-menu-list > ul.menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'hvertical_menu_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.header-vertical .bt-header-vertical .bt-header-inner .bt-vertical-menu-wrap .bt-menu-list ul.menu > li > a')
        ),
        array(
            'id'             => 'hvertical_menu_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.header-vertical .bt-header-vertical .bt-header-inner .bt-vertical-menu-wrap .bt-menu-list ul.menu li ul.sub-menu > li > a, 
								.header-vertical .bt-header-vertical .bt-header-inner .bt-vertical-menu-wrap .bt-menu-list ul.menu li ul.sub-menu > li.menu-item-has-children > .menu-toggle, 
								.header-vertical .bt-header-vertical .bt-header-inner .bt-vertical-menu-wrap .bt-menu-list ul.menu li ul.sub-menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'hvertical_menu_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.header-vertical .bt-header-vertical .bt-header-inner .bt-vertical-menu-wrap .bt-menu-list ul.menu li ul.sub-menu > li > a')
        ),
        array(
            'id'       => 'hvertical_content_bottom_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Content Bottom Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in content bottom of header.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
        ),
        array(
            'id'       => 'hvertical_mobile_toggle_button',
            'type'     => 'link_color',
            'title'    => esc_html__('Toggle Menu Button', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
        ),

    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Header Mini Vertical', 'vitex'),
    'id'         => 'bt_header_minivertical',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'header_layout_minivertical',
            'type'     => 'image_select',
            'title'    => esc_html__('Layout Selected', 'vitex'),
            'subtitle' => esc_html__('This is the options you can change for header one page style', 'vitex'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Header layout vertical',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header-minivertical.jpg'
                )
            ),
            'default'  => '1'
        ),
        array(
            'id'                    => 'hminivertical_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.header-minivertical .bt-header-minivertical .bt-header-desktop'),
        ),
        array(
            'id'       => 'hminivertical_mini_logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Mini Logo', 'vitex'),
            'subtitle' => esc_html__('Upload the mini logo of header', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/mini-logo.png'
            ),
        ),
        array(
            'id'            => 'hminivertical_mini_logo_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the mini logo.', 'vitex'),
            'default'       => 40,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'hminivertical_logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            ),
        ),
        array(
            'id'            => 'hminivertical_logo_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'hminivertical_menu_assign',
            'type'     => 'select',
            'title'    => esc_html__('Menu Assign', 'vitex'),
            'subtitle' => esc_html__('Select menu assing of header.', 'vitex'),
            'options'  => $menu_slug_opt,
            'default'  => 'auto'
        ),
        array(
            'id'             => 'hminivertical_menu_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '50px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.header-minivertical .bt-header-minivertical .bt-header-desktop .bt-header-inner .bt-vertical-menu-wrap .bt-menu-list ul.menu > li > a')
        ),
        array(
            'id'       => 'hminivertical_menu_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.header-minivertical .bt-header-minivertical .bt-header-desktop .bt-header-inner .bt-vertical-menu-wrap .bt-menu-list ul.menu > li > a')
        ),
        array(
            'id'             => 'hminivertical_menu_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.header-minivertical .bt-header-minivertical .bt-header-desktop .bt-header-inner .bt-vertical-menu-wrap .bt-menu-list ul.menu li ul.sub-menu > li > a')
        ),
        array(
            'id'       => 'hminivertical_menu_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.header-minivertical .bt-header-minivertical .bt-header-desktop .bt-header-inner .bt-vertical-menu-wrap .bt-menu-list ul.menu li ul.sub-menu > li > a')
        ),
        array(
            'id'       => 'hminivertical_toggle_button',
            'type'     => 'link_color',
            'title'    => esc_html__('Toggle Menu Button', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
        ),
        array(
            'id'       => 'hminivertical_content_mini_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Content Mini Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in content mini bar of header.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
        ),
        array(
            'id'       => 'hminivertical_content_bottom_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Header Content Bottom Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in content bottom of header.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
        ),
        array(
            'id'    => 'hminivertical_mobile_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Header Mobile Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change for header mobile.', 'vitex')
        ),
        array(
            'id'                    => 'hminivertical_mobile_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Header Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of header mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('.bt-header-minivertical .bt-header-mobile'),
        ),
        array(
            'id'       => 'hminivertical_mobile_toggle_button',
            'type'     => 'link_color',
            'title'    => esc_html__('Toggle Menu Button', 'vitex'),
            'subtitle' => esc_html__('Controls the color toggle menu button of the header mobile.', 'vitex'),
            'active'   => false,
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
            ),
        ),
        array(
            'id'       => 'hminivertical_logo_mobile',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__('Logo Mobile', 'vitex'),
            'subtitle' => esc_html__('Upload the logo of header mobile', 'vitex'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png'
            )
        ),
        array(
            'id'            => 'hminivertical_logo_mobile_height',
            'type'          => 'slider',
            'title'         => esc_html__('Logo Mobile Height', 'vitex'),
            'subtitle'      => esc_html__('Controls the height of the logo mobile.', 'vitex'),
            'default'       => 30,
            'min'           => 20,
            'step'          => 1,
            'max'           => 80,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'hminivertical_logo_mobile_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Header Mobile Space', 'vitex'),
            'subtitle' => esc_html__('Control the top/bottom margin the logo mobile.', 'vitex'),
            'default'  => array(
                'margin-top'    => '10px',
                'margin-bottom' => '10px'
            ),
            'output'   => array('.bt-header-minivertical .bt-header-mobile .bt-bottom .logo')
        ),
        array(
            'id'                    => 'hminivertical_mobile_menu_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Menu Mobile Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of menu mobile.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#f8f8f8',
            ),
            'output'                => array('.bt-header-minivertical .bt-header-mobile .bt-menu-mobile-wrap'),
        ),
        array(
            'id'             => 'hminivertical_menu_mobile_first_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile First Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile first level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'default'        => array(
                'font-size'      => '15px',
                'font-family'    => 'Poppins',
                'font-weight'    => '500',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-minivertical .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-minivertical .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-minivertical .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'hminivertical_menu_mobile_first_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile First Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile first level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-minivertical .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
        ),
        array(
            'id'             => 'hminivertical_menu_mobile_sub_level_font',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Mobile Sub Level Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography menu mobile sub level.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'color'          => false,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '48px',
                'letter-spacing' => '0'
            ),
            'output'         => array('.bt-header-minivertical .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-minivertical .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.menu-item-has-children > .menu-toggle, 
								.bt-header-minivertical .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li.page_item_has_children > .menu-toggle')
        ),
        array(
            'id'       => 'hminivertical_menu_mobile_sub_level_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Menu Mobile Sub Level Color', 'vitex'),
            'subtitle' => esc_html__('Controls the color menu mobile sub level.', 'vitex'),
            'default'  => array(
                'regular' => '#333333',
                'hover'   => '#fb5c71',
                'active'  => '#fb5c71',
            ),
            'output'   => array('.bt-header-minivertical .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
        ),

    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Menu Canvas', 'vitex'),
    'id'         => 'bt_menu_canvas',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'menu_canvas_element',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__('Menu Canvas Content Element', 'vitex'),
            'subtitle' => esc_html__('Controls the content that displays in menu canvas.', 'vitex'),
            'options'  => vitex_get_sidebars(),
            'default'  => '',
            'required' => array('h1_menu_canvas', '=', '1')
        ),
        array(
            'id'                    => 'menu_canvas_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Menu Canvas Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of menu canvas.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => 'transparent',
            ),
            'output'                => array('#bt_menu_canvas'),
        ),
        array(
            'id'                    => 'menu_canvas_sidebar_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Menu Canvas Sidebar Background', 'vitex'),
            'subtitle'              => esc_html__('Control background color of menu canvas sidebar.', 'vitex'),
            'background-repeat'     => false,
            'background-attachment' => false,
            'background-position'   => false,
            'background-image'      => false,
            'background-size'       => false,
            'preview'               => false,
            'default'               => array(
                'background-color' => '#ffffff',
            ),
            'output'                => array('#bt_menu_canvas .bt-menu-canvas'),
        ),

    )
));

