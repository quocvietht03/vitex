<?php

class vitex_Widget_Mini_Search extends vitex_Widget {

    function __construct(){
        parent::__construct(
            'bt_widget_mini_search', // Base ID
            esc_html__('Mini Search', 'vitex'), // Name
            array('description' => esc_html__('Display the mini search in the menu right sidebar.', 'vitex'),) // Args
        );

        $this->settings = array(
            'type'     => array(
                'type'    => 'select',
                'std'     => 'mini',
                'label'   => esc_html__('Type', 'vitex'),
                'options' => array(
                    'mini'   => esc_html__('Mini', 'vitex'),
                    'inline' => esc_html__('Inline', 'vitex'),
                    'popup'  => esc_html__('Popup', 'vitex')
                )
            ),
            'el_class' => array(
                'type'  => 'text',
                'std'   => '',
                'label' => esc_html__('Extra Class', 'vitex')
            )
        );
    }

    function widget($args, $instance){
        extract($args);
        $type = sanitize_title($instance['type']);
        $el_class = sanitize_title($instance['el_class']);

        $wg_class = 'widget bt-mini-search ' . $type;

        if (!empty($instance['el_class'])) {
            $wg_class .= ' ' . $instance['el_class'];
        }

        ob_start();
        ?>
        <div class="<?php echo esc_attr($wg_class); ?>">
            <?php if ($type == 'inline') {
                echo '<div class="bt-search-form-inline">' . get_search_form(false) . '</div>';
            } else {
                echo '<a class="bt-toggle-btn" href="#"><i class="fa fa-search"></i></a>';
                if ($type == 'mini') echo '<div class="bt-search-form">' . get_search_form(false) . '</div>';
            } ?>
        </div>

        <?php
        echo ob_get_clean();
    }
}

/**
 * Class vitex_Widget_Mini_Search
 */
function register_vitex_widget_mini_search(){
    register_widget('vitex_Widget_Mini_Search');
}

add_action('widgets_init', 'register_vitex_widget_mini_search');
