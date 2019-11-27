<?php

class WPBakeryShortCode_bt_pricing_table extends WPBakeryShortCode {

    protected function content($atts, $content = null){

        extract(shortcode_atts(array(
            'layout'        => 'default',
            'css_animation' => '',
            'el_id'         => '',
            'el_class'      => '',
            'recommended'   => '',

            'icon_type'       => 'font_icon',
            'font_icon'       => '',
            'image_icon'      => '',
            'icon_font_size'  => '',
            'icon_color'      => '',
            'icon_background' => '',

            'price'                => '',
            'price_font_size'      => '',
            'price_line_height'    => '',
            'price_letter_spacing' => '',
            'price_color'          => '',
            'time'                 => '',
            'time_font_size'       => '',
            'time_line_height'     => '',
            'time_letter_spacing'  => '',
            'time_color'           => '',

            'title'                => '',
            'title_font_size'      => '',
            'title_line_height'    => '',
            'title_letter_spacing' => '',
            'title_color'          => '',

            'sub_title'                => '',
            'sub_title_font_size'      => '',
            'sub_title_line_height'    => '',
            'sub_title_letter_spacing' => '',
            'sub_title_color'          => '',

            'options_font_size'      => '',
            'options_line_height'    => '',
            'options_letter_spacing' => '',
            'options_color'          => '',

            'button_font_size'      => '',
            'button_font_weight'    => '',
            'button_line_height'    => '',
            'button_letter_spacing' => '',
            'button_color'          => '',
            'button_background'     => '',
            'button_padding'        => '',
            'button_border_style'   => '',
            'button_border_width'   => '',
            'button_border_color'   => '',
            'button_border_radius'  => '',

            'css' => ''

        ), $atts));

        $css_class = array(
            $this->getExtraClass($el_class) . $this->getCSSAnimation($css_animation),
            'bt-element',
            'bt-pricing-table-element',
            $layout,
            apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), $this->settings['base'], $atts)
        );

        $wrapper_attributes = array();

        if (!empty($el_id)) {
            $wrapper_attributes[] = 'id="' . esc_attr($el_id) . '"';
        }

        /* Icon */
        $style_icon = array();
        if ($icon_color) $style_icon[] = 'color: ' . $icon_color . ';';
        if ($icon_background) $style_icon[] = 'background: ' . $icon_background . ';';


        $icon_attributes = array();
        if (!empty($style_icon)) {
            $icon_attributes[] = 'style="' . esc_attr(implode(' ', $style_icon)) . '"';
        }

        if ($icon_type == 'font_icon') {
            $icon_size_style = $icon_font_size ? 'font-size: ' . $icon_font_size . ';' : '';
            $icon = $font_icon ? '<i class="' . esc_attr($font_icon) . '" style="' . esc_attr($icon_size_style) . '"></i>' : '';
        } else {
            $icon_size_style = $icon_font_size ? 'width: ' . $icon_font_size . '; height: auto;' : '';
            $attachment_image = wp_get_attachment_image_src($image_icon, 'full', false);
            $icon = $attachment_image[0] ? '<img src="' . esc_url($attachment_image[0]) . '" style="' . esc_attr($icon_size_style) . '" alt="' . esc_attr__('Thumbnail', 'vitex') . '"/>' : '';
        }

        /* Price & Time */
        $style_price = array();
        if ($price_font_size) $style_price[] = 'font-size: ' . $price_font_size . ';';
        if ($price_line_height) $style_price[] = 'line-height: ' . $price_line_height . ';';
        if ($price_letter_spacing) $style_price[] = 'letter-spacing: ' . $price_letter_spacing . ';';
        if ($price_color) $style_price[] = 'color: ' . $price_color . ';';

        $price_attributes = array();
        if (!empty($style_price)) {
            $price_attributes[] = 'style="' . esc_attr(implode(' ', $style_price)) . '"';
        }

        $style_time = array();
        if ($time_font_size) $style_time[] = 'font-size: ' . $time_font_size . ';';
        if ($time_line_height) $style_time[] = 'line-height: ' . $time_line_height . ';';
        if ($time_letter_spacing) $style_time[] = 'letter-spacing: ' . $time_letter_spacing . ';';
        if ($time_color) $style_time[] = 'color: ' . $time_color . ';';

        $time_attributes = array();
        if (!empty($style_time)) {
            $time_attributes[] = 'style="' . esc_attr(implode(' ', $style_time)) . '"';
        }

        /* Title */
        $style_title = array();
        if ($title_font_size) $style_title[] = 'font-size: ' . $title_font_size . ';';
        if ($title_line_height) $style_title[] = 'line-height: ' . $title_line_height . ';';
        if ($title_letter_spacing) $style_title[] = 'letter-spacing: ' . $title_letter_spacing . ';';
        if ($title_color) $style_title[] = 'color: ' . $title_color . ';';

        $title_attributes = array();
        if (!empty($style_title)) {
            $title_attributes[] = 'style="' . esc_attr(implode(' ', $style_title)) . '"';
        }

        /* Sub Title */
        $style_sub_title = array();
        if ($sub_title_font_size) $style_sub_title[] = 'font-size: ' . $sub_title_font_size . ';';
        if ($sub_title_line_height) $style_sub_title[] = 'line-height: ' . $sub_title_line_height . ';';
        if ($sub_title_letter_spacing) $style_sub_title[] = 'letter-spacing: ' . $sub_title_letter_spacing . ';';
        if ($sub_title_color) $style_sub_title[] = 'color: ' . $sub_title_color . ';';

        $sub_title_attributes = array();
        if (!empty($style_sub_title)) {
            $sub_title_attributes[] = 'style="' . esc_attr(implode(' ', $style_sub_title)) . '"';
        }

        /* Options */
        $style_options = array();
        if ($options_font_size) $style_options[] = 'font-size: ' . $options_font_size . ';';
        if ($options_line_height) $style_options[] = 'line-height: ' . $options_line_height . ';';
        if ($options_letter_spacing) $style_options[] = 'letter-spacing: ' . $options_letter_spacing . ';';
        if ($options_color) $style_options[] = 'color: ' . $options_color . ';';

        $options_attributes = array();
        if (!empty($style_options)) {
            $options_attributes[] = 'style="' . esc_attr(implode(' ', $style_options)) . '"';
        }

        $options = vc_param_group_parse_atts($atts['options']);
        $options_value = array();
        if (!empty($options)) {
            foreach ($options as $option) {
                $options_value[] = '<li class="' . esc_attr($option['status']) . '">' . $option['name'] . '</li>';
            }
        }

        /* Button */
        $link = isset($atts['link']) ? vc_build_link($atts['link']) : array();
        $button_text = '';
        $button_attributes = array();
        if (!empty($link)) {
            if (!empty($link['url'])) {
                $button_attributes[] = 'href="' . esc_attr($link['url']) . '"';
            }

            if (!empty($link['target'])) {
                $button_attributes[] = 'target="' . esc_attr($link['target']) . '"';
            }

            if (!empty($link['rel'])) {
                $button_attributes[] = 'rel="' . esc_attr($link['rel']) . '"';
            }

            $style_button = array();
            if ($button_font_size) $style_button[] = 'font-size: ' . $button_font_size . ';';
            if ($button_font_weight) $style_button[] = 'font-weight: ' . $button_font_weight . ';';
            if ($button_line_height) $style_button[] = 'line-height: ' . $button_line_height . ';';
            if ($button_letter_spacing) $style_button[] = 'letter-spacing: ' . $button_letter_spacing . ';';
            if ($button_color) $style_button[] = 'color: ' . $button_color . ';';
            if ($button_background) $style_button[] = 'background: ' . $button_background . ';';
            if ($button_padding) $style_button[] = 'padding: ' . $button_padding . ';';
            if ($button_border_style) $style_button[] = 'border-style: ' . $button_border_style . ';';
            if ($button_border_width) $style_button[] = 'border-width: ' . $button_border_width . ';';
            if ($button_border_color) $style_button[] = 'border-color: ' . $button_border_color . ';';
            if ($button_border_radius) $style_button[] = 'border-radius: ' . $button_border_radius . '; -webkit-border-radius: ' . $border_radius . ';';

            if (!empty($style_button)) {
                $button_attributes[] = 'style="' . esc_attr(implode(' ', $style_button)) . '"';
            }

            if (!empty($link['title'])) {
                $button_text = $link['title'];
            }
        }

        ob_start();
        ?>
        <div class="<?php echo esc_attr(implode(' ', $css_class)); ?>" <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
            <?php require get_template_directory() . '/framework/elements/pricing_table_layouts/' . $layout . '.php'; ?>
        </div>
        <?php
        return ob_get_clean();
    }
}

vc_map(array(
    'name'     => esc_html__('Pricing Table', 'vitex'),
    'base'     => 'bt_pricing_table',
    'category' => esc_html__('BT Elements', 'vitex'),
    'icon'     => 'bt-icon',
    'params'   => array(
        array(
            'type'        => 'bt_layout',
            'folder'      => 'pricing_table',
            'heading'     => esc_html__('Layout', 'vitex'),
            'param_name'  => 'layout',
            'value'       => array(
                esc_html__('Default', 'vitex')  => 'default',
                esc_html__('Layout 1', 'vitex') => 'layout1',
                esc_html__('Layout 2', 'vitex') => 'layout2',
                esc_html__('Layout 3', 'vitex') => 'layout3',
                esc_html__('Layout 4', 'vitex') => 'layout4',
                esc_html__('Layout 5', 'vitex') => 'layout5',
                esc_html__('Layout 6', 'vitex') => 'layout6',
                esc_html__('Layout 7', 'vitex') => 'layout7',
                esc_html__('Layout 8', 'vitex') => 'layout8',
            ),
            'description' => esc_html__('Select layout style in this element.', 'vitex')
        ),
        vc_map_add_css_animation(),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Element ID', 'vitex'),
            'param_name'  => 'el_id',
            'value'       => '',
            'description' => esc_html__('Enter element ID (Note: make sure it is unique and valid).', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Extra Class', 'vitex'),
            'param_name'  => 'el_class',
            'value'       => '',
            'description' => esc_html__('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'vitex')
        ),
        array(
            'type'        => 'dropdown',
            'heading'     => esc_html__('Icon Type', 'vitex'),
            'param_name'  => 'icon_type',
            'value'       => array(
                esc_html__('Font Icon', 'vitex')  => 'font_icon',
                esc_html__('Image Icon', 'vitex') => 'image_icon'
            ),
            'group'       => esc_html__('Icon', 'vitex'),
            'description' => esc_html__('Select type icon in this elment.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Font Icon', 'vitex'),
            'param_name'  => 'font_icon',
            'value'       => '',
            'group'       => esc_html__('Icon', 'vitex'),
            'dependency'  => array(
                'element' => 'icon_type',
                'value'   => 'font_icon'
            ),
            'description' => esc_html__('Please, enter class font icon from https://fontawesome.com/v4.7.0/cheatsheet/ in this element.Ex: fa fa-twitter', 'vitex')
        ),
        array(
            'type'        => 'attach_image',
            'heading'     => esc_html__('Image Icon', 'vitex'),
            'param_name'  => 'image_icon',
            'value'       => '',
            'group'       => esc_html__('Icon', 'vitex'),
            'dependency'  => array(
                'element' => 'icon_type',
                'value'   => 'image_icon'
            ),
            'description' => esc_html__('Select box image icon in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Font Size', 'vitex'),
            'param_name'  => 'icon_font_size',
            'value'       => '',
            'group'       => esc_html__('Icon', 'vitex'),
            'description' => esc_html__('Please, enter number with px font size icon in this element. Ex: 30px', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Color', 'vitex'),
            'param_name'  => 'icon_color',
            'value'       => '',
            'group'       => esc_html__('Icon', 'vitex'),
            'description' => esc_html__('Select color icon in this element.', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Background', 'vitex'),
            'param_name'  => 'icon_background',
            'value'       => '',
            'group'       => esc_html__('Icon', 'vitex'),
            'description' => esc_html__('Select background color icon in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Price', 'vitex'),
            'param_name'  => 'price',
            'value'       => '',
            'group'       => esc_html__('Price & Time', 'vitex'),
            'description' => esc_html__('Please, enter price in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Price Font Size', 'vitex'),
            'param_name'  => 'price_font_size',
            'value'       => '',
            'group'       => esc_html__('Price & Time', 'vitex'),
            'description' => esc_html__('Please, enter number  with px font size price in this element. Ex: 20px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Price Line Height', 'vitex'),
            'param_name'  => 'price_line_height',
            'value'       => '',
            'group'       => esc_html__('Price & Time', 'vitex'),
            'description' => esc_html__('Please, enter number with px line height price in this element. Ex: 24px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Price Letter Spacing', 'vitex'),
            'param_name'  => 'price_letter_spacing',
            'value'       => '',
            'group'       => esc_html__('Price & Time', 'vitex'),
            'description' => esc_html__('Please, enter number with px letter spacing price in this element. Ex: 1.2px', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Price Color', 'vitex'),
            'param_name'  => 'price_color',
            'value'       => '',
            'group'       => esc_html__('Price & Time', 'vitex'),
            'description' => esc_html__('Select color price in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Time', 'vitex'),
            'param_name'  => 'time',
            'value'       => '',
            'group'       => esc_html__('Price & Time', 'vitex'),
            'description' => esc_html__('Please, enter time in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Time Font Size', 'vitex'),
            'param_name'  => 'time_font_size',
            'value'       => '',
            'group'       => esc_html__('Price & Time', 'vitex'),
            'description' => esc_html__('Please, enter number  with px font size time in this element. Ex: 14px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Time Line Height', 'vitex'),
            'param_name'  => 'time_line_height',
            'value'       => '',
            'group'       => esc_html__('Price & Time', 'vitex'),
            'description' => esc_html__('Please, enter number with px line height time in this element. Ex: 24px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Time Letter Spacing', 'vitex'),
            'param_name'  => 'time_letter_spacing',
            'value'       => '',
            'group'       => esc_html__('Price & Time', 'vitex'),
            'description' => esc_html__('Please, enter number with px letter spacing time in this element. Ex: 1.2px', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Time Color', 'vitex'),
            'param_name'  => 'time_color',
            'value'       => '',
            'group'       => esc_html__('Price & Time', 'vitex'),
            'description' => esc_html__('Select color time in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Title', 'vitex'),
            'param_name'  => 'title',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'admin_label' => true,
            'description' => esc_html__('Please, enter title in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Title Font Size', 'vitex'),
            'param_name'  => 'title_font_size',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Please, enter number  with px font size title in this element. Ex: 20px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Title Line Height', 'vitex'),
            'param_name'  => 'title_line_height',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Please, enter number with px line height title in this element. Ex: 24px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Title Letter Spacing', 'vitex'),
            'param_name'  => 'title_letter_spacing',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Please, enter number with px letter spacing title in this element. Ex: 1.2px', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Title Color', 'vitex'),
            'param_name'  => 'title_color',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Select color title in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Sub Title', 'vitex'),
            'param_name'  => 'sub_title',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'admin_label' => true,
            'dependency'  => array(
                'element'            => 'layout',
                'value_not_equal_to' => array('layout7'),
            ),
            'description' => esc_html__('Please, enter sub title in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Sub Title Font Size', 'vitex'),
            'param_name'  => 'sub_title_font_size',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'dependency'  => array(
                'element'            => 'layout',
                'value_not_equal_to' => array('layout7'),
            ),
            'description' => esc_html__('Please, enter number with px font size sub title in this element. Ex: 20px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Sub Title Line Height', 'vitex'),
            'param_name'  => 'sub_title_line_height',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'dependency'  => array(
                'element'            => 'layout',
                'value_not_equal_to' => array('layout7'),
            ),
            'description' => esc_html__('Please, enter number with px line height sub title in this element. Ex: 24px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Sub Title Letter Spacing', 'vitex'),
            'param_name'  => 'sub_title_letter_spacing',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'dependency'  => array(
                'element'            => 'layout',
                'value_not_equal_to' => array('layout7'),
            ),
            'description' => esc_html__('Please, enter number with px letter spacing sub title in this element. Ex: 1.2px', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Sub Title Color', 'vitex'),
            'param_name'  => 'sub_title_color',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'dependency'  => array(
                'element'            => 'layout',
                'value_not_equal_to' => array('layout7'),
            ),
            'description' => esc_html__('Select color sub title in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Recommended', 'vitex'),
            'param_name'  => 'recommended',
            'value'       => '',
            'group'       => esc_html__('Options', 'vitex'),
            'dependency'  => array(
                'element' => 'layout',
                'value'   => array('layout7'),
            ),
            'description' => esc_html__('Recommended highlights', 'vitex')
        ),
        array(
            'type'        => 'param_group',
            'heading'     => esc_html__('Options', 'vitex'),
            'param_name'  => 'options',
            'value'       => '',
            'group'       => esc_html__('Options', 'vitex'),
            'description' => esc_html__('Please, enter values for option - value.', 'vitex'),
            'params'      => array(
                array(
                    'type'        => 'textfield',
                    'heading'     => esc_html__('Option', 'vitex'),
                    'param_name'  => 'name',
                    'value'       => 'Options name',
                    'description' => esc_html__('Enter text used as name of option.', 'vitex'),
                    'admin_label' => true,
                ),
                array(
                    'type'        => 'dropdown',
                    'heading'     => esc_html__('Status', 'vitex'),
                    'param_name'  => 'status',
                    'value'       => array(
                        esc_html__('Enable', 'vitex')  => 'enable',
                        esc_html__('Disable', 'vitex') => 'disable',
                    ),
                    'description' => esc_html__('Select status of option.', 'vitex'),
                    'admin_label' => true,
                )
            )
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Font Size', 'vitex'),
            'param_name'  => 'options_font_size',
            'value'       => '',
            'group'       => esc_html__('Options', 'vitex'),
            'description' => esc_html__('Please, enter number with px font size for options. Ex: 14px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Line Height', 'vitex'),
            'param_name'  => 'options_line_height',
            'value'       => '',
            'group'       => esc_html__('Options', 'vitex'),
            'description' => esc_html__('Please, enter number with px line height for options. Ex: 28px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Letter Spacing', 'vitex'),
            'param_name'  => 'options_letter_spacing',
            'value'       => '',
            'group'       => esc_html__('Options', 'vitex'),
            'description' => esc_html__('Please, enter number with px letter spacing for options. Ex: 1px', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Color', 'vitex'),
            'param_name'  => 'options_color',
            'value'       => '',
            'group'       => esc_html__('Options', 'vitex'),
            'description' => esc_html__('Select color for options.', 'vitex')
        ),
        array(
            'type'        => 'vc_link',
            'heading'     => esc_html__('URL (Link)', 'vitex'),
            'param_name'  => 'link',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Add link of button in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Font Size', 'vitex'),
            'param_name'  => 'button_font_size',
            'value'       => '',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Please, enter number with px font size text of button. Ex: 14px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Font Weight', 'vitex'),
            'param_name'  => 'button_font_weight',
            'value'       => '',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Please, enter number font weight text of button. Ex: 400', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Line Height', 'vitex'),
            'param_name'  => 'button_line_height',
            'value'       => '',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Please, enter number with px line height text of button. Ex: 24px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Letter Spacing', 'vitex'),
            'param_name'  => 'button_letter_spacing',
            'value'       => '',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Please, enter number with px letter spacing text of button. Ex: 1.2px', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Color', 'vitex'),
            'param_name'  => 'button_color',
            'value'       => '',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Select color text of button.', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Background', 'vitex'),
            'param_name'  => 'button_background',
            'value'       => '',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Select background color of button.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Padding', 'vitex'),
            'param_name'  => 'button_padding',
            'value'       => '',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Please, enter number with px padding top/right/bottom/left of button. Ex: 10px 30px', 'vitex')
        ),
        array(
            'type'        => 'dropdown',
            'heading'     => esc_html__('Border Style', 'vitex'),
            'param_name'  => 'button_border_style',
            'value'       => array(
                esc_html__('None', 'vitex')   => '',
                esc_html__('Solid', 'vitex')  => 'solid',
                esc_html__('Dashed', 'vitex') => 'dashed',
                esc_html__('Dotted', 'vitex') => 'dotted'
            ),
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Select border style of button.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Border Width', 'vitex'),
            'param_name'  => 'button_border_width',
            'value'       => '',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Please, enter number with px border width of button. Ex: 2px', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Border Color', 'vitex'),
            'param_name'  => 'button_border_color',
            'value'       => '',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Select border color of button.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Border Radius', 'vitex'),
            'param_name'  => 'button_border_radius',
            'value'       => '',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Please, enter number with px border radius of button. Ex: 5px', 'vitex')
        ),
        array(
            'type'       => 'css_editor',
            'heading'    => esc_html__('CSS box', 'vitex'),
            'param_name' => 'css',
            'group'      => esc_html__('Design Options', 'vitex'),
        )
    )
));
