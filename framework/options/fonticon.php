<?php
// Icons
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Font Icons', 'vitex' ),
	'id'               => 'bt_fonticons',
	'icon'             => 'el el-info-circle',
	'fields'           => array(
		array(
			'id'       => 'font_awesome',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Awesome', 'vitex' ),
			'subtitle' => esc_html__( 'Use font awesome.', 'vitex' ),
			'default'  => true,
		),
		array(
			'id'       => 'font_pe_icon_7_stroke',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Pe Icon 7 Stroke', 'vitex' ),
			'subtitle' => esc_html__( 'Use font pe icon 7 stroke.', 'vitex' ),
			'default'  => false,
		),
		array(
			'id'       => 'flaticon',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Flaticon', 'vitex' ),
			'subtitle' => esc_html__( 'Use font flaticon.', 'vitex' ),
			'default'  => false,
		),
		array(
			'id'       => 'elegant_icon',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Elegant', 'vitex' ),
			'subtitle' => esc_html__( 'Use font Elegant.', 'vitex' ),
			'default'  => false,
		),
		array(
			'id'       => 'themify_icon',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Themify ', 'vitex' ),
			'subtitle' => esc_html__( 'Use font themify.', 'vitex' ),
			'default'  => false,
		),
	)
) );
