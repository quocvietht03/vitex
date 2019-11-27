<?php
$page_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'page_options') : array();

$custom_sidebar = isset($page_options['custom_sidebar']) && $page_options['custom_sidebar'] ? $page_options['custom_sidebar'] : array();
$custom_sidebar_gadget = isset($custom_sidebar['gadget']) && $custom_sidebar['gadget'] ? $custom_sidebar['gadget'] : 'off';
$custom_sidebar_po = 'full';
$sidebar_use = '';

/* Right Sidebar */
if (function_exists('fw_ext_sidebars_get_current_position')) {
    if ($custom_sidebar_gadget == 'on') {
        if (isset($custom_sidebar[$custom_sidebar_gadget]) && $custom_sidebar[$custom_sidebar_gadget]) {
            $custom_sidebar_po = $custom_sidebar[$custom_sidebar_gadget]['sidebar-position-picker']['gadget'];
            $sidebar_use = $custom_sidebar[$custom_sidebar_gadget]['sidebar-position-picker'][$custom_sidebar_po]['right_sidebar'];
        }
        if ($custom_sidebar_po == 'no-sidebar') {
            return;
        } elseif (($custom_sidebar_po == 'right' && empty($sidebar_use)) || ($custom_sidebar_po == 'left_right'
                && fw_ext_sidebars_get_current_position() == 'right'
                && empty($sidebar_use) && empty(fw_ext_sidebars_show('yellow')))) {
            echo fw_ext_sidebars_show('blue');
        } elseif ($custom_sidebar_po == 'left_right' && empty($sidebar_use)) {
            echo fw_ext_sidebars_show('yellow');
        } else {
            dynamic_sidebar($sidebar_use);
        }
    } else {
        $sidebar_position = fw_ext_sidebars_get_current_position();
        if ($sidebar_position == 'right') {
            echo fw_ext_sidebars_show('blue');
        }
        if ($sidebar_position == 'left_right') {
            echo fw_ext_sidebars_show('yellow');
        }
    }
} else {
    if (is_active_sidebar('main-sidebar')) {
        dynamic_sidebar('main-sidebar');
    }
}


