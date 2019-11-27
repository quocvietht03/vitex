<?php
class WPBakeryShortCode_bt_page_breadcrumb extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'align' => 'left',
			'home_text' => 'Home',
			'delimiter' => '-',
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'css' => ''
			
		), $atts));
		
		$content = wpb_js_remove_wpautop($content, true);
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-page-breadcrumb-element',
			$align,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		ob_start();
		?>
			<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>"  <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
				<?php vitex_page_breadcrumb($home_text, $delimiter); ?>
			</div>
		<?php
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => esc_html__('Page Breadcrumb', 'vitex'),
	'base' => 'bt_page_breadcrumb',
	'category' => esc_html__('BT Elements', 'vitex'),
	'icon' => 'bt-icon',
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Align', 'vitex'),
			'param_name' => 'align',
			'value' => array(
				esc_html__('Left', 'vitex') => 'text-left',
				esc_html__('Center', 'vitex') => 'text-center',
				esc_html__('Right', 'vitex') => 'text-right',
			),
			'description' => esc_html__('Select text align in this elment.', 'vitex')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Home Text', 'vitex'),
			'param_name' => 'home_text',
			'value' => 'Home',
			'description' => esc_html__('Please, enter home text in this element.', 'vitex')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Delimiter', 'vitex'),
			'param_name' => 'delimiter',
			'value' => '-',
			'description' => esc_html__('Please, enter delimiter in this element.', 'vitex')
		),
		vc_map_add_css_animation(),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Element ID', 'vitex'),
			'param_name' => 'el_id',
			'value' => '',
			'description' => esc_html__('Enter element ID (Note: make sure it is unique and valid).', 'vitex')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Extra Class', 'vitex'),
			'param_name' => 'el_class',
			'value' => '',
			'description' => esc_html__('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'vitex')
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__('CSS box', 'vitex'),
			'param_name' => 'css',
			'group' => esc_html__('Design Options', 'vitex'),
		)
	)
));
