<?php
//vc_section
vc_add_params( 'vc_section', array(
	array(
		'type' => 'dropdown',
		'heading' => esc_html__('Particles Effect', 'vitex'),
		'param_name' => 'particles_effect',
		'value' => array(
			esc_html__('None', 'vitex') => 'none',
			esc_html__('Default', 'vitex') => 'default',
			esc_html__('Nasa', 'vitex') => 'nasa',
			esc_html__('Bubble', 'vitex') => 'bubble',
			esc_html__('Snow', 'vitex') => 'snow',
			esc_html__('Nyan', 'vitex') => 'nyan',
			esc_html__('Custom', 'vitex') => 'custom'
		),
		'group' => esc_html__('Particles', 'vitex'),
		'description' => esc_html__('Select particles effect in this section.', 'vitex')
	),
	array(
		'type' => 'textarea',
		'heading' => esc_html__('Particles Json', 'vitex'),
		'param_name' => 'particles_json',
		'value' => '',
		'group' => esc_html__('Particles', 'vitex'),
		'dependency' => array(
			'element'=>'particles_effect',
			'value'=> 'custom'
		),
		'description' => esc_html__('Enter text json config particles effect.', 'vitex')
	),
	array(
		'type' => 'dropdown',
		'heading' => esc_html__('Disable Background Image', 'vitex'),
		'param_name' => 'disable_bg_image',
		'value' => array(
			esc_html__('None', 'vitex') => 'none',
			esc_html__('Screen less than 1200', 'vitex') => 'md',
			esc_html__('Screen less than 992', 'vitex') => 'sm',
			esc_html__('Screen less than 768', 'vitex') => 'xs'
		),
		'group' => esc_html__('Design Options', 'vitex'),
		'description' => esc_html__('Disable background image in this section.', 'vitex')
	),
) );

//vc_row
vc_add_params( 'vc_row', array(
	array(
		'type' => 'dropdown',
		'heading' => esc_html__('Row Style', 'vitex'),
		'param_name' => 'row_container',
		'value' => array(
			esc_html__('Full Width', 'vitex') => 'fullwidth',
			esc_html__('Container', 'vitex') => 'container'
		),
		'weight' => 1,
		'description' => esc_html__('Select row style.', 'vitex')
	),
	array(
		'type' => 'textfield',
		'heading' => esc_html__('Content Max Width', 'vitex'),
		'param_name' => 'row_content_max_width',
		'value' => '',
		'weight' => 1,
		'dependency' => array(
			'element'=>'row_container',
			'value'=> 'fullwidth'
		),
		'description' => esc_html__('Enter number with px to set content max with. Ex: 1240px', 'vitex')
	),
	array(
		'type' => 'checkbox',
		'heading' => esc_html__('Columns no gap', 'vitex'),
		'param_name' => 'columns_no_gap',
		'value' => '',
		'weight' => 1,
		'description' => esc_html__('Enable no gap between columns in row.', 'vitex')
	),
	array(
        'type' => 'textfield',
        'heading' => esc_html__('Animate Delay', 'vitex'),
        'param_name' => 'animate_delay',
        'value' => '0.3',
		'group' => esc_html__('Animation', 'vitex'),
        'description' => esc_html__('Animate delay (s). Example: 0.5', 'vitex')
    ),
	array(
        'type' => 'textfield',
        'heading' => esc_html__('Animate Duration', 'vitex'),
        'param_name' => 'animate_duration',
        'value' => '1.2',
		'group' => esc_html__('Animation', 'vitex'),
        'description' => esc_html__('Animate duration (s). Example: 0.6', 'vitex')
    ),
	array(
		'type' => 'dropdown',
		'heading' => esc_html__('Particles Effect', 'vitex'),
		'param_name' => 'particles_effect',
		'value' => array(
			esc_html__('None', 'vitex') => 'none',
			esc_html__('Default', 'vitex') => 'default',
			esc_html__('Nasa', 'vitex') => 'nasa',
			esc_html__('Bubble', 'vitex') => 'bubble',
			esc_html__('Snow', 'vitex') => 'snow',
			esc_html__('Nyan', 'vitex') => 'nyan',
			esc_html__('Custom', 'vitex') => 'custom'
		),
		'group' => esc_html__('Particles', 'vitex'),
		'description' => esc_html__('Enable particles effect in this section.', 'vitex')
	),
	array(
		'type' => 'textarea',
		'heading' => esc_html__('Particles Json', 'vitex'),
		'param_name' => 'particles_json',
		'value' => '',
		'group' => esc_html__('Particles', 'vitex'),
		'dependency' => array(
			'element'=>'particles_effect',
			'value'=> 'custom'
		),
		'description' => esc_html__('Enter text json config particles effect.', 'vitex')
	)
) );

vc_remove_param( "vc_row", "full_width" );
vc_remove_param( "vc_row", "gap" );

//vc_column
vc_add_params( 'vc_column', array(
	array(
        'type' => 'textfield',
        'heading' => esc_html__('Animate Delay', 'vitex'),
        'param_name' => 'animate_delay',
        'value' => '0.3',
		'group' => esc_html__('Animation', 'vitex'),
        'description' => esc_html__('Animate delay (s). Example: 0.5', 'vitex')
    ),
	array(
        'type' => 'textfield',
        'heading' => esc_html__('Animate Duration', 'vitex'),
        'param_name' => 'animate_duration',
        'value' => '1.2',
		'group' => esc_html__('Animation', 'vitex'),
        'description' => esc_html__('Animate duration (s). Example: 0.6', 'vitex')
    )
) );

//vc_custom_heading
vc_add_param( 'vc_custom_heading', array(
    'type' => 'textarea',
    'heading' => esc_html__('Custom Style', 'vitex'),
    'param_name' => 'custom_style',
    'value' => '',
    'description' => esc_html__('Enter custom style for heading element', 'vitex'),
	'group' => esc_html__('Extra Options', 'vitex')
) );

// vc_hoverbox
vc_add_param( 'vc_hoverbox', array(
    'type' => 'textfield',
    'heading' => esc_html__('Oder Number', 'vitex'),
    'param_name' => 'oder_number',
    'value' => '',
	'weight' => 1,
    'description' => esc_html__('Enter oder number.', 'vitex')
) );
