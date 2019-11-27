<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - NTCDE.COM
 * Date: 12/8/2018 - 11:08
 * Project Name: vitextheme
 */

class WPBakeryShortCode_bt_careers_box extends WPBakeryShortCode {

    protected function content($atts, $content = null){
        extract(shortcode_atts(array(
            'css_animation' => '',
            'el_id'         => '',
            'el_class'      => '',

            'title'        => 'Management',
            'title_link'   => 'url:%23!|title:Management|target:%20_blank|rel:nofollow',
            'content'      => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'working_time' => 'Fulltime',
            'date_des'     => 'Submission Date:',
            'date_exp'     => '30th Mar 2019',
            'career_btn'   => 'Apply Now!',
            'btn_link'     => 'url:%23!|title:Apply%20Now|target:%20_blank|rel:nofollow',

            'css' => ''

        ), $atts));

        $content = wpb_js_remove_wpautop($content, true);

        $css_class = array(
            $this->getExtraClass($el_class) . $this->getCSSAnimation($css_animation),
            'bt-element',
            'bt-careers-box-element',
            apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), $this->settings['base'], $atts)
        );

        $wrapper_attributes = array();
        if (!empty($el_id)) {
            $wrapper_attributes[] = 'id="' . esc_attr($el_id) . '"';
        }

        /* Job Title */
        $title_link = isset($title_link) ? vc_build_link($title_link) : array();

        $title_link_attributes = array();
        if (!empty($title_link)) {
            if (!empty($title_link['url'])) {
                $title_link_attributes[] = 'href="' . esc_attr($title_link['url']) . '"';
            }

            if (!empty($title_link['target'])) {
                $title_link_attributes[] = 'target="' . esc_attr($title_link['target']) . '"';
            }

            if (!empty($title_link['rel'])) {
                $title_link_attributes[] = 'rel="' . esc_attr($title_link['rel']) . '"';
            }

            if (!empty($title_link['title'])) {
                $title_link_attributes[] = 'title ="' . esc_attr($title_link['title']) . '"';
            }
        }

        $btn_link = isset($btn_link) ? vc_build_link($btn_link) : array();

        $btn_link_attributes = array();
        if (!empty($btn_link)) {
            if (!empty($btn_link['url'])) {
                $btn_link_attributes[] = 'href="' . esc_attr($btn_link['url']) . '"';
            }

            if (!empty($btn_link['target'])) {
                $btn_link_attributes[] = 'target="' . esc_attr($btn_link['target']) . '"';
            }

            if (!empty($btn_link['rel'])) {
                $btn_link_attributes[] = 'rel="' . esc_attr($btn_link['rel']) . '"';
            }

            if (!empty($btn_link['title'])) {
                $btn_link_attributes[] = 'title ="' . esc_attr($btn_link['title']) . '"';
            }
        }

        ob_start();
        ?>
        <div class="<?php echo esc_attr(implode(' ', $css_class)); ?>" <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
            <div class="bt-content">
                <div class="title-wrap">
                    <?php
                    if ($title) {
                        if (!empty($title_link_attributes)) {
                            echo '<h3 class="bt-title"><a ' . implode(' ', $title_link_attributes) . '>' . $title . '</a></h3>';
                        } else {
                            echo '<h3 class="bt-title">' . $title . '</h3>';
                        }
                    }
                    if ($working_time) echo '<span class="wk-time">' . $working_time . '</span>';
                    ?>
                </div>
                <?php
                if ($content) echo '<div class="bt-careers-desc">' . $content . '</div>';
                if ($date_des || $date_exp) echo '<div class="bt-careers-date">' . $date_des . ' <strong>' . $date_exp . '</strong></div>';
                if (!empty($btn_link_attributes)) echo '<a class="bt-careers-btn" ' . implode(' ', $btn_link_attributes) . '>' . $career_btn . '</strong></a>';
                ?>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}

vc_map(array(
    'name'     => esc_html__('Careers Box', 'vitex'),
    'base'     => 'bt_careers_box',
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

        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Job Title', 'vitex'),
            'param_name'  => 'title',
            'value'       => 'Management',
            'group'       => esc_html__('Job Title', 'vitex'),
            'admin_label' => true,
            'description' => esc_html__('Please, enter title in this element.', 'vitex')
        ),
        array(
            'type'        => 'vc_link',
            'heading'     => esc_html__('URL (Link)', 'vitex'),
            'param_name'  => 'title_link',
            'value'       => 'url:%23!|title:Management|target:%20_blank|rel:nofollow',
            'group'       => esc_html__('Job Title', 'vitex'),
            'description' => esc_html__('Add custom link of the title in this element.', 'vitex')
        ),

        array(
            'type'        => 'textarea_html',
            'heading'     => esc_html__('Description', 'vitex'),
            'param_name'  => 'content',
            'value'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'group'       => esc_html__('Job Info', 'vitex'),
            'description' => esc_html__('Please, enter description in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Working time', 'vitex'),
            'param_name'  => 'working_time',
            'value'       => 'Fulltime',
            'group'       => esc_html__('Job Info', 'vitex'),
            'description' => esc_html__('Please, enter working time in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Date Description', 'vitex'),
            'param_name'  => 'date_des',
            'value'       => 'Submission Date:',
            'group'       => esc_html__('Job Info', 'vitex'),
            'description' => esc_html__('Please, enter Date Description in this element.', 'vitex')
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Date expiry', 'vitex'),
            'param_name'  => 'date_exp',
            'value'       => '30th Mar 2019',
            'group'       => esc_html__('Job Info', 'vitex'),
            'description' => esc_html__('Please, enter Date expiry in this element.', 'vitex')
        ),

        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Button text', 'vitex'),
            'param_name'  => 'career_btn',
            'value'       => 'Apply Now!',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Please, enter Button text in this element.', 'vitex')
        ),
        array(
            'type'        => 'vc_link',
            'heading'     => esc_html__('URL (Link)', 'vitex'),
            'param_name'  => 'btn_link',
            'value'       => 'url:%23!|title:Apply%20Now|target:%20_blank|rel:nofollow',
            'group'       => esc_html__('Button', 'vitex'),
            'description' => esc_html__('Add custom link of the button in this element.', 'vitex')
        ),

        array(
            'type'       => 'css_editor',
            'heading'    => esc_html__('CSS box', 'vitex'),
            'param_name' => 'css',
            'group'      => esc_html__('Design Options', 'vitex'),
        )
    )
));
