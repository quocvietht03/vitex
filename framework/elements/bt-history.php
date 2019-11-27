<?php

/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - NTCDE.COM
 * Date: 12/15/2018 - 8:37
 * Project Name: vitextheme
 */
class WPBakeryShortCode_bt_history extends WPBakeryShortCode {
    protected function content($atts, $content = null){
        extract(shortcode_atts(array(
            'css_animation' => '',
            'el_id'         => '',
            'el_class'      => '',

            'time'    => '2018',
            'title'   => 'Entrepreneurship Hall of Fame',
            'content' => 'Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur.',

            'css' => ''

        ), $atts));

        $content = wpb_js_remove_wpautop($content, true);
        $css_class = array(
            $this->getExtraClass($el_class) . $this->getCSSAnimation($css_animation),
            'bt-element',
            'bt-history-element',
            apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), $this->settings['base'], $atts)
        );

        $wrapper_attributes = array();
        if (!empty($el_id)) {
            $wrapper_attributes[] = 'id="' . esc_attr($el_id) . '"';
        }

        ob_start();
        ?>
        <div class="<?php echo esc_attr(implode(' ', $css_class)); ?>" <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
            <?php echo '<span class="bt-h-time">'.$time.'</span>'; ?>
            <div class="bt-content-wrap">
                <?php echo '<h3 class="bt-title">'.$title.'</h3>'; ?>
                <?php echo '<div class="bt-content">'.$content.'</div>'; ?>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}

vc_map(array(
    'name'     => esc_html__('History Timeline', 'vitex'),
    'base'     => 'bt_history',
    'category' => esc_html__('BT Elements', 'vitex'),
    'icon'     => 'bt-icon',
    'params'   => array(
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Time', 'vitex'),
            'param_name'  => 'time',
            'value'       => '2018',
            'description' => esc_html__('Enter your time.', 'vitex'),
            'admin_label' => true
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Title', 'vitex'),
            'param_name'  => 'title',
            'value'       => 'Entrepreneurship Hall of Fame',
            'description' => esc_html__('Enter your title.', 'vitex'),
            'admin_label' => true
        ),
        array(
            'type'        => 'textarea_html',
            'heading'     => esc_html__('Content', 'vitex'),
            'param_name'  => 'content',
            'value'       => 'Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur.',
            'description' => esc_html__('Enter your content.', 'vitex'),
            'group'      => esc_html__('Content', 'vitex'),
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
            'type'       => 'css_editor',
            'heading'    => esc_html__('CSS box', 'vitex'),
            'param_name' => 'css',
            'group'      => esc_html__('Design Options', 'vitex'),
        )
    )
));