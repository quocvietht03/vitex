<?php

class WPBakeryShortCode_bt_counter extends WPBakeryShortCode {

    protected function content($atts, $content = null){

        extract(shortcode_atts(array(
            'css_animation' => '',
            'el_id'         => '',
            'el_class'      => '',

            'icon_type'  => 'type_class',
            'image_icon' => '',

            'icon_class'          => '',
            'icon_font_size'      => '',
            'icon_line_height'    => '',
            'icon_letter_spacing' => '',
            'icon_color'          => '',

            'before_number'            => '',
            'after_number'             => '',
            'number'                   => '',
            'number_font_size'         => '',
            'number_font_weight'       => '',
            'number_line_height'       => '',
            'number_letter_spacing'    => '',
            'number_color'             => '',
            'title'                    => '',
            'title_font_size'          => '',
            'title_font_weight'        => '',
            'title_line_height'        => '',
            'title_letter_spacing'     => '',
            'title_color'              => '',
            'sub_title'                => '',
            'sub_title_font_size'      => '',
            'sub_title_font_weight'    => '',
            'sub_title_line_height'    => '',
            'sub_title_letter_spacing' => '',
            'sub_title_color'          => '',

            'css' => ''

        ), $atts));

        $css_class = array(
            $this->getExtraClass($el_class) . $this->getCSSAnimation($css_animation),
            'bt-element',
            'bt-counter-element',
            apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), $this->settings['base'], $atts)
        );

        $wrapper_attributes = array();
        if (!empty($el_id)) {
            $wrapper_attributes[] = 'id="' . esc_attr($el_id) . '"';
        }

        /* Number */
        $number_attributes = $style_number = array();
        if ($number_font_size) $style_number[] = 'font-size: ' . $number_font_size . ';';
        if ($number_font_weight) $style_number[] = 'font-weight: ' . $number_font_weight . ';';
        if ($number_line_height) $style_number[] = 'line-height: ' . $number_line_height . ';';
        if ($number_letter_spacing) $style_number[] = 'letter-spacing: ' . $number_letter_spacing . ';';
        if ($number_color) $style_number[] = 'color: ' . $number_color . ';';

        if (!empty($style_number)) {
            $number_attributes[] = 'style="' . esc_attr(implode(' ', $style_number)) . '"';
        }

        //Icon
        $style_icon = $icon_attributes = array();
        $image_url = '';
        if ($icon_font_size) $style_icon[] = 'font-size: ' . $icon_font_size . ';';
        if ($icon_line_height) $style_icon[] = 'line-height: ' . $icon_line_height . ';';
        if ($icon_letter_spacing) $style_icon[] = 'letter-spacing: ' . $icon_letter_spacing . ';';
        if ($icon_color) $style_icon[] = 'color: ' . $icon_color . ';';

        if (!empty($style_icon)) {
            $icon_attributes[] = 'style="' . esc_attr(implode(' ', $style_icon)) . '"';
        }
        if ($image_icon) {
            $image_attributes = wp_get_attachment_image_src($image_icon, 'full');
            if ($image_attributes):
                $image_url = $image_attributes[0];
            endif;
        }

        /* Title */
        $title_attributes = $style_title = array();
        if ($title_font_size) $style_title[] = 'font-size: ' . $title_font_size . ';';
        if ($title_font_weight) $style_title[] = 'font-weight: ' . $title_font_weight . ';';
        if ($title_line_height) $style_title[] = 'line-height: ' . $title_line_height . ';';
        if ($title_letter_spacing) $style_title[] = 'letter-spacing: ' . $title_letter_spacing . ';';
        if ($title_color) $style_title[] = 'color: ' . $title_color . ';';

        if (!empty($style_title)) {
            $title_attributes[] = 'style="' . esc_attr(implode(' ', $style_title)) . '"';
        }

        /* Sub Title */
        $sub_title_attributes = $style_sub_title = array();
        if ($sub_title_font_size) $style_sub_title[] = 'font-size: ' . $sub_title_font_size . ';';
        if ($sub_title_font_weight) $style_sub_title[] = 'font-weight: ' . $sub_title_font_weight . ';';
        if ($sub_title_line_height) $style_sub_title[] = 'line-height: ' . $sub_title_line_height . ';';
        if ($sub_title_letter_spacing) $style_sub_title[] = 'letter-spacing: ' . $sub_title_letter_spacing . ';';
        if ($sub_title_color) $style_sub_title[] = 'color: ' . $sub_title_color . ';';

        if (!empty($style_sub_title)) {
            $sub_title_attributes[] = 'style="' . esc_attr(implode(' ', $style_sub_title)) . '"';
        }

        wp_enqueue_script('counterup');

        ob_start();
        ?>
        <div class="<?php echo esc_attr(implode(' ', $css_class)); ?>" <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
            <div class="bt-counter-inner-wrap">
                <?php
                if (!empty($image_url)) echo '<img class="bt-icon-image" src="' . esc_url($image_url) . '"/>';
                if ($icon_class) echo '<span class="bt-icon ' . $icon_class . '" ' . implode(' ', $icon_attributes) . '></span>';
                //            echo ($before_number) ? '<span class="bt-before-number">' . esc_html($before_number) . '</span>' : '';
                if ($number) {
                    echo implode('', array(
                        '<div class="bt-number-wrap"  ' . implode(' ', $number_attributes) . '>',
                        ($before_number) ? '<span class="bt-before-number">' . esc_html($before_number) . '</span>' : '',
                        '<span class="bt-number">' . number_format($number) . '</span>',
                        ($after_number) ? '<span class="bt-after-number">' . esc_html($after_number) . '</span>' : '',
                        '</div>'
                    ));
                    //                echo '<span class="bt-number" ' . implode(' ', $number_attributes) . '>' . number_format($number) . '</span>';
                }
                //            echo ($after_number) ? '<span class="bt-after-number">' . esc_html($after_number) . '</span>' : '';
                if ($title) echo '<h4 class="bt-title" ' . implode(' ', $title_attributes) . '>' . $title . '</h4>';
                if ($sub_title) echo '<div class="bt-subtitle" ' . implode(' ', $sub_title_attributes) . '>' . $sub_title . '</div>';
                ?>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}

vc_map(array(
    'name'     => esc_html__('Counter', 'vitex'),
    'base'     => 'bt_counter',
    'category' => esc_html__('BT Elements', 'vitex'),
    'icon'     => 'bt-icon',
    'params'   => array(
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

        //Icon
        array(
            'type'        => 'dropdown',
            'heading'     => esc_html__('Icon type', 'vitex'),
            'param_name'  => 'icon_type',
            'value'       => array(
                esc_html__('Icon class', 'vitex') => 'type_class',
                esc_html__('Icon image', 'vitex') => 'type_image',
            ),
            'std'         => 'type_class',
            'group'       => esc_html__('Icon', 'vitex'),
            'admin_label' => true,
            'description' => esc_html__('Please, select icon type element.', 'vitex')
        ),
        array(
            'type'        => 'attach_image',
            'heading'     => esc_html__('Image Icon', 'vitex'),
            'param_name'  => 'image_icon',
            'value'       => '',
            'group'       => esc_html__('Icon', 'vitex'),
            'dependency'  => array(
                'element' => 'icon_type',
                'value'   => 'type_image'
            ),
            'description' => esc_html__('Select box image icon in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Icon class', 'vitex'),
            'param_name'  => 'icon_class',
            'value'       => '',
            'dependency'  => array(
                'element' => 'icon_type',
                'value'   => 'type_class'
            ),
            'group'       => esc_html__('Icon', 'vitex'),
            'admin_label' => true,
            'description' => esc_html__('Please, enter icon class element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Font Size', 'vitex'),
            'param_name'  => 'icon_font_size',
            'value'       => '',
            'dependency'  => array(
                'element' => 'icon_type',
                'value'   => 'type_class'
            ),
            'group'       => esc_html__('Icon', 'vitex'),
            'description' => esc_html__('Please, enter icon with px font size number in this element. Ex: 45px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Line Height', 'vitex'),
            'param_name'  => 'icon_line_height',
            'value'       => '',
            'dependency'  => array(
                'element' => 'icon_type',
                'value'   => 'type_class'
            ),
            'group'       => esc_html__('Icon', 'vitex'),
            'description' => esc_html__('Please, enter icon with px line height number in this element. Ex: 50px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Letter Spacing', 'vitex'),
            'param_name'  => 'icon_letter_spacing',
            'value'       => '',
            'dependency'  => array(
                'element' => 'icon_type',
                'value'   => 'type_class'
            ),
            'group'       => esc_html__('Icon', 'vitex'),
            'description' => esc_html__('Please, enter icon with px letter spacing number in this element. Ex: 1.2px', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Color', 'vitex'),
            'param_name'  => 'icon_color',
            'value'       => '',
            'dependency'  => array(
                'element' => 'icon_type',
                'value'   => 'type_class'
            ),
            'group'       => esc_html__('Icon', 'vitex'),
            'description' => esc_html__('Select color icon in this element.', 'vitex')
        ),

        //Number
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Before Number', 'vitex'),
            'param_name'  => 'before_number',
            'value'       => '',
            'group'       => esc_html__('Number', 'vitex'),
            'admin_label' => true,
            'description' => esc_html__('Please, enter before number in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('After Number', 'vitex'),
            'param_name'  => 'after_number',
            'value'       => '',
            'group'       => esc_html__('Number', 'vitex'),
            'admin_label' => true,
            'description' => esc_html__('Please, enter after number in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Number', 'vitex'),
            'param_name'  => 'number',
            'value'       => '',
            'group'       => esc_html__('Number', 'vitex'),
            'admin_label' => true,
            'description' => esc_html__('Please, enter number in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Font Size', 'vitex'),
            'param_name'  => 'number_font_size',
            'value'       => '',
            'group'       => esc_html__('Number', 'vitex'),
            'description' => esc_html__('Please, enter number with px font size number in this element. Ex: 45px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Font Weight', 'vitex'),
            'param_name'  => 'number_font_weight',
            'value'       => '',
            'group'       => esc_html__('Number', 'vitex'),
            'description' => esc_html__('Please, enter number font weight number in this element. Ex: 700', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Line Height', 'vitex'),
            'param_name'  => 'number_line_height',
            'value'       => '',
            'group'       => esc_html__('Number', 'vitex'),
            'description' => esc_html__('Please, enter number with px line height number in this element. Ex: 50px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Letter Spacing', 'vitex'),
            'param_name'  => 'number_letter_spacing',
            'value'       => '',
            'group'       => esc_html__('Number', 'vitex'),
            'description' => esc_html__('Please, enter number with px letter spacing number in this element. Ex: 1.2px', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Color', 'vitex'),
            'param_name'  => 'number_color',
            'value'       => '',
            'group'       => esc_html__('Number', 'vitex'),
            'description' => esc_html__('Select color number in this element.', 'vitex')
        ),
        //Title
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Title', 'vitex'),
            'param_name'  => 'title',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Please, enter title in this element.', 'vitex'),
            'admin_label' => true,
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Font Size', 'vitex'),
            'param_name'  => 'title_font_size',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Please, enter number with px font size title in this element. Ex: 20px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Font Weight', 'vitex'),
            'param_name'  => 'title_font_weight',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Please, enter number font weight title in this element. Ex: 400', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Line Height', 'vitex'),
            'param_name'  => 'title_line_height',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Please, enter number with px line height title in this element. Ex: 24px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Letter Spacing', 'vitex'),
            'param_name'  => 'title_letter_spacing',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Please, enter number with px letter spacing title in this element. Ex: 1.2px', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Color', 'vitex'),
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
            'description' => esc_html__('Please, enter sub title in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Font Size', 'vitex'),
            'param_name'  => 'sub_title_font_size',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Please, enter number with px font size sub title in this element. Ex: 14px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Font Weight', 'vitex'),
            'param_name'  => 'sub_title_font_weight',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Please, enter number font weight sub title in this element. Ex: 400', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Line Height', 'vitex'),
            'param_name'  => 'sub_title_line_height',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Please, enter number with px line height sub title in this element. Ex: 24px', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Letter Spacing', 'vitex'),
            'param_name'  => 'sub_title_letter_spacing',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Please, enter number with px letter spacing sub title in this element. Ex: 1.2px', 'vitex')
        ),
        array(
            'type'        => 'colorpicker',
            'heading'     => esc_html__('Color', 'vitex'),
            'param_name'  => 'sub_title_color',
            'value'       => '',
            'group'       => esc_html__('Title', 'vitex'),
            'description' => esc_html__('Select color sub title in this element.', 'vitex')
        ),
        array(
            'type'       => 'css_editor',
            'heading'    => esc_html__('CSS box', 'vitex'),
            'param_name' => 'css',
            'group'      => esc_html__('Design Options', 'vitex'),
        )
    )
));
