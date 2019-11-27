<?php if (!defined('FW')) die('Forbidden');

$menu_slug_opt = array();
$menus_obj = get_terms('nav_menu', array('hide_empty' => true));
$menu_slug_opt['auto'] = 'Auto';
foreach ($menus_obj as $menu_obj) {
    $menu_slug_opt[$menu_obj->slug] = $menu_obj->name;
}

$options = array(
    'page_options' => array(
        'type'          => 'multi',
        'label'         => false,
        'inner-options' => array(
            'page_general_setting'  => array(
                'title'   => esc_html__('General', 'vitex'),
                'type'    => 'tab',
                'options' => array(
                    'page_titlebar' => array(
                        'type'         => 'switch',
                        'label'        => esc_html__('Disable Title Bar', 'vitex'),
                        'desc'         => esc_html__('Turn on to disable title bar in current page.', 'vitex'),
                        'value'        => '',
                        'left-choice'  => array(
                            'value' => '',
                            'label' => esc_html__('Off', 'vitex'),
                        ),
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('On', 'vitex'),
                        ),
                    ),

                    'custom_sidebar' => array(
                        'type'    => 'multi-picker',
                        'label'   => false,
                        'desc'    => false,
                        'picker'  => array(
                            'gadget' => array(
                                'type'         => 'switch',
                                'value'        => 'off',
                                'label'        => __('Custom Sidebar', 'vitex'),
                                'desc'         => __('Enable custom sidebar setting.
                                                    This option will override options widget sidebar.', 'vitex'),
                                'left-choice'  => array(
                                    'value' => 'off',
                                    'label' => __('Off', 'vitex'),
                                ),
                                'right-choice' => array(
                                    'value' => 'on',
                                    'label' => __('On', 'vitex'),
                                ),
                            )
                        ),
                        'choices' => array(
                            'on' => array(
                                'sidebar-position-picker' => array(
                                    'type'    => 'multi-picker',
                                    'label'   => false,
                                    'desc'    => false,
                                    'value'   => array(
                                        'gadget' => 'right',
                                    ),
                                    'picker'  => array(
                                        'gadget' => array(
                                            'type'    => 'select',
                                            'value'   => 'right',
                                            'label'   => __('Sidebar Layout', 'vitex'),
                                            'choices' => array(
                                                'right'      => __('Right Sidebar', 'vitex'),
                                                'left'       => __('Left Sidebar', 'vitex'),
                                                'left_right' => __('Left & Right Sidebar', 'vitex'),
                                                'no-sidebar' => __('No Sidebar', 'vitex'),
                                            ),
                                        )
                                    ),
                                    'choices' => array(
                                        'right'      => array(
                                            'right_sidebar' => array(
                                                'type'    => 'select',
                                                'label'   => __('Sidebar Right Show', 'vitex'),
                                                'choices' => vitex_get_all_sidebars(),
                                            )
                                        ),
                                        'left'       => array(
                                            'left_sidebar' => array(
                                                'type'    => 'select',
                                                'label'   => __('Sidebar Left Show', 'vitex'),
                                                'choices' => vitex_get_all_sidebars(),
                                            ),
                                        ),
                                        'left_right' => array(
                                            'two_sidebar' => array(
                                                'type'    => 'group',
                                                'options' => array(
                                                    'left_sidebar'  => array(
                                                        'type'    => 'select',
                                                        'label'   => __('Sidebar Left Show', 'vitex'),
                                                        'choices' => vitex_get_all_sidebars(),
                                                    ),
                                                    'right_sidebar' => array(
                                                        'type'    => 'select',
                                                        'label'   => __('Sidebar Right Show', 'vitex'),
                                                        'choices' => vitex_get_all_sidebars(),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'sidebar-sticky'          => array(
                                    'type'         => 'switch',
                                    'label'        => __('Sidebar Sticky', 'vitex'),
                                    'value'        => 'off',
                                    'left-choice'  => array(
                                        'value' => 'off',
                                        'label' => __('Off', 'vitex'),
                                    ),
                                    'right-choice' => array(
                                        'value' => 'on',
                                        'label' => __('On', 'vitex'),
                                    ),
                                )
                            ),
                        ),
                    ),

                    'custom_page_class' => array(
                        'type'  => 'text',
                        'value' => '',
                        'label' => esc_html__('Custom Page Class', 'vitex'),
                    ),
                ),
            ),
            'page_header_setting'   => array(
                'title'   => esc_html__('Header', 'vitex'),
                'type'    => 'tab',
                'options' => array(
                    'header_layout'            => array(
                        'type'    => 'short-select',
                        'value'   => 'default',
                        'label'   => esc_html__('Header Layout', 'vitex'),
                        'desc'    => esc_html__('Select a header layout in current page', 'vitex'),
                        'choices' => array(
                            'default'       => esc_html__('Default', 'vitex'),
                            '1'             => esc_html__('Header 1', 'vitex'),
                            'extra_1'       => esc_html__('Header 1 extra 1', 'vitex'),
                            'extra_2'       => esc_html__('Header 1 extra 2', 'vitex'),
                            'extra_3'       => esc_html__('Header 1 extra 3', 'vitex'),
                            '2'             => esc_html__('Header 2', 'vitex'),
                            '3'             => esc_html__('Header 3', 'vitex'),
                            '4'             => esc_html__('Header 4', 'vitex'),
                            'onepage'       => esc_html__('Header One Page', 'vitex'),
                            'onepagescroll' => esc_html__('Header One Page Scroll', 'vitex'),
                            'vertical'      => esc_html__('Header Vertical', 'vitex'),
                            'minivertical'  => esc_html__('Header Mini Vertical', 'vitex')
                        )
                    ),
                    'header_fullwidth'         => array(
                        'type'         => 'switch',
                        'label'        => esc_html__('Disable Full Width (100%)', 'vitex'),
                        'desc'         => esc_html__('Turn on to disable header full width (100%) in current page.', 'vitex'),
                        'value'        => '',
                        'left-choice'  => array(
                            'value' => '',
                            'label' => esc_html__('Off', 'vitex'),
                        ),
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('On', 'vitex'),
                        ),
                    ),
                    'header_absolute'          => array(
                        'type'         => 'switch',
                        'label'        => esc_html__('Disable Header Absolute', 'vitex'),
                        'desc'         => esc_html__('Turn on to disable header absolute in current page.', 'vitex'),
                        'value'        => '',
                        'left-choice'  => array(
                            'value' => '',
                            'label' => esc_html__('Off', 'vitex'),
                        ),
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('On', 'vitex'),
                        ),
                    ),
                    'header_top'               => array(
                        'type'         => 'switch',
                        'label'        => esc_html__('Disable Header Top', 'vitex'),
                        'desc'         => esc_html__('Turn on to disable header top in current page.', 'vitex'),
                        'value'        => '',
                        'left-choice'  => array(
                            'value' => '',
                            'label' => esc_html__('Off', 'vitex'),
                        ),
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('On', 'vitex'),
                        ),
                    ),
                    'header_logo'              => array(
                        'type'  => 'upload',
                        'value' => array(
                            'url' => ''
                        ),
                        'label' => esc_html__('Logo', 'vitex'),
                        'desc'  => esc_html__('Select image to change the logo in current page.', 'vitex'),
                    ),
                    'header_logo_height'       => array(
                        'type'  => 'short-text',
                        'value' => '',
                        'label' => esc_html__('Logo Height', 'vitex'),
                        'desc'  => esc_html__('Controls the height of the logo in current page. EX: 50', 'vitex')
                    ),
                    'header_menu_assign'       => array(
                        'type'    => 'select',
                        'value'   => 'default',
                        'label'   => esc_html__('Menu Assign', 'vitex'),
                        'desc'    => esc_html__('Select a menu assign of header layout in current page', 'vitex'),
                        'choices' => $menu_slug_opt
                    ),
                    'header_stick'             => array(
                        'type'         => 'switch',
                        'label'        => esc_html__('Disable Header Sticky', 'vitex'),
                        'desc'         => esc_html__('Turn on to disable header stick in current page.', 'vitex'),
                        'value'        => '',
                        'left-choice'  => array(
                            'value' => '',
                            'label' => esc_html__('Off', 'vitex'),
                        ),
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('On', 'vitex'),
                        ),
                    ),
                    'header_logo_stick'        => array(
                        'type'  => 'upload',
                        'value' => array(
                            'url' => ''
                        ),
                        'label' => esc_html__('Logo Stick', 'vitex'),
                        'desc'  => esc_html__('Select image to change the logo stick in current page.', 'vitex'),
                    ),
                    'header_logo_stick_height' => array(
                        'type'  => 'short-text',
                        'value' => '',
                        'label' => esc_html__('Logo Height', 'vitex'),
                        'desc'  => esc_html__('Controls the height of the logo stick in current page. EX: 40', 'vitex')
                    ),
                    'mobile_header_top'        => array(
                        'type'         => 'switch',
                        'label'        => esc_html__('Disable Header Top Mobile', 'vitex'),
                        'desc'         => esc_html__('Turn on to disable header top mobile in current page.', 'vitex'),
                        'value'        => '',
                        'left-choice'  => array(
                            'value' => '',
                            'label' => esc_html__('Off', 'vitex'),
                        ),
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('On', 'vitex'),
                        ),
                    ),
                    'logo_mobile'              => array(
                        'type'  => 'upload',
                        'value' => array(
                            'url' => ''
                        ),
                        'label' => esc_html__('Logo Mobile', 'vitex'),
                        'desc'  => esc_html__('Select image to change the logo mobile in current page.', 'vitex'),
                    ),
                    'logo_mobile_height'       => array(
                        'type'  => 'short-text',
                        'value' => '',
                        'label' => esc_html__('Logo Height', 'vitex'),
                        'desc'  => esc_html__('Controls the height of the logo mobile in current page. EX: 30', 'vitex')
                    ),

                ),
            ),
            'page_titlebar_setting' => array(
                'title'   => esc_html__('Title Bar', 'vitex'),
                'type'    => 'tab',
                'options' => array(
                    'titlebar_layout'          => array(
                        'type'    => 'short-select',
                        'value'   => 'default',
                        'label'   => esc_html__('Title Bar Layout', 'vitex'),
                        'desc'    => esc_html__('Select a title bar layout in current page', 'vitex'),
                        'choices' => array(
                            'default' => esc_html__('Default', 'vitex'),
                            '1'       => esc_html__('Title Bar 1', 'vitex'),
                            '2'       => esc_html__('Title Bar 2', 'vitex')
                        )
                    ),
                    'page_titlebar_space'      => array(
                        'type'         => 'switch',
                        'label'        => esc_html__('Disable Title Bar Space', 'vitex'),
                        'desc'         => esc_html__('Turn on to disable space between title bar and content in current page.', 'vitex'),
                        'value'        => '',
                        'left-choice'  => array(
                            'value' => '',
                            'label' => esc_html__('Off', 'vitex'),
                        ),
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('On', 'vitex'),
                        ),
                    ),
                    'page_titlebar_background' => array(
                        'type'  => 'upload',
                        'value' => array(
                            'url' => ''
                        ),
                        'label' => esc_html__('Title Bar Background', 'vitex'),
                        'desc'  => esc_html__('Select image to change the title bar background in current page.', 'vitex'),
                    ),
                ),
            ),
            'page_footer_setting'   => array(
                'title'   => esc_html__('Footer', 'vitex'),
                'type'    => 'tab',
                'options' => array(
                    'footer_layout'     => array(
                        'type'    => 'short-select',
                        'value'   => 'default',
                        'label'   => esc_html__('Footer Layout', 'vitex'),
                        'desc'    => esc_html__('Select a footer layout in current page', 'vitex'),
                        'choices' => array(
                            'default' => esc_html__('Default', 'vitex'),
                            '1'       => esc_html__('Footer 1', 'vitex'),
                            '2'       => esc_html__('Footer 2', 'vitex')
                        )
                    ),
                    'page_footer_space' => array(
                        'type'         => 'switch',
                        'label'        => esc_html__('Disable Footer Space', 'vitex'),
                        'desc'         => esc_html__('Turn on to disable space between footer and content in current page.', 'vitex'),
                        'value'        => '',
                        'left-choice'  => array(
                            'value' => '',
                            'label' => esc_html__('Off', 'vitex'),
                        ),
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('On', 'vitex'),
                        ),
                    ),
                    'footer_fixed'      => array(
                        'type'         => 'switch',
                        'label'        => esc_html__('Disable Fixed', 'vitex'),
                        'desc'         => esc_html__('Turn on to disable footer fixed in current page.', 'vitex'),
                        'value'        => '',
                        'left-choice'  => array(
                            'value' => '',
                            'label' => esc_html__('Off', 'vitex'),
                        ),
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('On', 'vitex'),
                        ),
                    ),
                    'footer_fullwidth'  => array(
                        'type'         => 'switch',
                        'label'        => esc_html__('Disable Full Width (100%)', 'vitex'),
                        'desc'         => esc_html__('Turn on to disable footer full width (100%) in current page.', 'vitex'),
                        'value'        => '',
                        'left-choice'  => array(
                            'value' => '',
                            'label' => esc_html__('Off', 'vitex'),
                        ),
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('On', 'vitex'),
                        ),
                    ),
                    'footer_top'        => array(
                        'type'         => 'switch',
                        'label'        => esc_html__('Disable Footer Top', 'vitex'),
                        'desc'         => esc_html__('Turn on to disable footer top in current page.', 'vitex'),
                        'value'        => '',
                        'left-choice'  => array(
                            'value' => '',
                            'label' => esc_html__('Off', 'vitex'),
                        ),
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('On', 'vitex'),
                        ),
                    ),
                ),
            ),
        ),
    ),
);