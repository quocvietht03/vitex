<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'mega_menu_item_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label' => esc_html__( 'Type', 'vitex' ),
				'desc' => esc_html__( 'Please select menu type', 'vitex' ),
				'value' => '',
				'choices' => array(
					'default' => esc_html__('Default', 'vitex'),
					'sidebar' => esc_html__('Sidebar', 'vitex'),
				),
			),
		),
		'choices' => array(
			'sidebar' => array(
				'sidebar_id' => array(
					'type' => 'select',
					'label' => esc_html__( 'Sidebar', 'vitex' ),
					'desc' => esc_html__( 'Please select sitebar', 'vitex' ),
					'value' => '',
					'choices' => vitex_get_sidebars(),
				),
			),
		),
	),
	'badge' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'selected' => array(
				'type' => 'switch',
				'value' => 'no',
				'label' => esc_html__('Badge', 'vitex'),
				'left-choice' => array(
					'value' => 'no',
					'label' => esc_html__('No', 'vitex'),
				),
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__('Yes', 'vitex'),
				)
			),
		),
		'choices' => array(
			'yes' => array(
				'badge_group' => array(
					'type' => 'group',
					'attr' => array('class' => ''),
					'options' => array(
						'badge_text' => array(
							'type' => 'short-text',
							'html' => '',
							'value' => '',
							'label' => esc_html__('Text', 'vitex'),
						),
						'badge_background_color' => array(
							'value' => '#E23F3F',
							'type' => 'color-picker',
							'label' => esc_html__('Background Color', 'vitex'),
						),
						'badge_color' => array(
							'value' => '#FFFFFF',
							'type' => 'color-picker',
							'label' => esc_html__('Color', 'vitex'),
						),
					),
				),
			),
		),
	),
);
