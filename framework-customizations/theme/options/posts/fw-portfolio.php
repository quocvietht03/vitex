<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'portfolio_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'portfolio-layout' => array(
				'title' => esc_html__('Layout Settings', 'vitex'),
				'type' => 'tab',
				'options' => array(
					'titlebar_background' => array(
						'label' => esc_html__( 'Title Bar Background', 'vitex' ),
						'desc'  => esc_html__( 'Upload title bar background image.', 'vitex' ),
						'type'  => 'upload',
					),
					'layout' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => esc_html__('Layout', 'vitex'),
						'desc'  => esc_html__('Select a layout of project', 'vitex'),
						'choices' => array(
							'default' => esc_html__('Default(Image Left)', 'vitex'),
							'layout1' => esc_html__('Layout 1(Image Top)', 'vitex'),
							'layout2' => esc_html__('Layout 2(Image Bottom)', 'vitex')
						)
					),
					'gallery-column' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Select Gallery Columns', 'vitex'),
						'desc'  => esc_html__('Select gallery columns of project', 'vitex'),
						'choices' => array(
							'col-md-12' => esc_html__('1 Column', 'vitex'),
							'col-md-6' => esc_html__('2 Columns', 'vitex'),
							'col-md-4' => esc_html__('3 Columns', 'vitex'),
							'col-md-3' => esc_html__('4 Columns', 'vitex')
						)
					),
					'gallery-space' => array(
						'type'  => 'short-text',
						'value' => '30',
						'label' => esc_html__('Gallery Space', 'vitex'),
						'desc'  => esc_html__('Please, enter gallery space of project.', 'vitex'),
					),
				),
			),
			'portfolio-meta' => array(
				'title' => esc_html__('Meta Fields', 'vitex'),
				'type' => 'tab',
				'options' => array(
					'infor-title' =>  array( 
						'type' => 'text',
						'value' => 'Infomation',
						'label' => esc_html__('Info Title', 'vitex'),
						'desc'  => esc_html__('Please, enter info title of project.', 'vitex'),
					),
					'info-option' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Client:',
								'value' => 'Bearsthemes'
							),
							array(
								'title' => 'Date:',
								'value' => 'May 14, 2018'
							),
							array(
								'title' => 'Tags:',
								'value' => 'photography, agency, creative'
							),
							array(
								'title' => 'Project Type:',
								'value' => 'Multipurpose Template'
							)
						),
						'label' => esc_html__('Info Option', 'vitex'),
						'desc'  => esc_html__('Please configs info option of project', 'vitex'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Title', 'vitex'),
								'desc'  => esc_html__('Please, enter title of project item.', 'vitex'),
							),
							'value' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Value', 'vitex'),
								'desc'  => esc_html__('Please, enter value of project item.', 'vitex'),
							)
						),
						'template' => '{{- title }}',
						'add-button-text' => esc_html__('Add', 'vitex'),
						'sortable' => true,
					)
					
				),
			),
			
		)
	)
	
);