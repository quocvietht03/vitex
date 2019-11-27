<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 11/24/2018 - 9:32
 * Project Name: vitextheme
 */
global $vitex_options;
$page_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'page_options') : array();

$container_class = (isset($vitex_options['h1_extra_1_fullwidth']) && $vitex_options['h1_extra_1_fullwidth']) ? 'fullwidth' : 'container';
if (isset($page_options['header_fullwidth']) && $page_options['header_fullwidth']) {
    $container_class = 'container';
}

$header_class = 'bt-header bt-header-v1-extra-1';
$header_ab_style = array();
if (!(isset($page_options['header_absolute']) && $page_options['header_absolute'])) {
    if (isset($vitex_options['h1_extra_1_header_absolute']) && $vitex_options['h1_extra_1_header_absolute']) {
        $header_class .= ' bt-header-absolute';
        if (isset($vitex_options['h1_extra_1_max_width']) && $vitex_options['h1_extra_1_max_width']) {
            $header_ab_style[] = 'max-width: ' . $vitex_options['h1_extra_1_max_width'] . 'px';
        };
        if (isset($vitex_options['h1_extra_1_margin_top']['margin-top']) && $vitex_options['h1_extra_1_margin_top']['margin-top']) {
            $header_ab_style[] = 'margin-top: ' . $vitex_options['h1_extra_1_margin_top']['margin-top'];
        };
    }
}

$header_bottom_ab_style = array();
if (!(isset($page_options['header_absolute']) && $page_options['header_absolute'])) {
    if (isset($vitex_options['h1_extra_1_header_bottom_absolute']) && $vitex_options['h1_extra_1_header_bottom_absolute']) {
        if (isset($vitex_options['h1_extra_1_header_bottom_max_width']) && $vitex_options['h1_extra_1_header_bottom_max_width']) {
            $header_bottom_ab_style[] = 'max-width: ' . $vitex_options['h1_extra_1_header_bottom_max_width'] . 'px';
            $header_bottom_ab_style[] = 'margin-left: auto; margin-right: auto; left: 0; right: 0;';
        };
    }
}

$header_top = (isset($vitex_options['h1_extra_1_header_top']) && $vitex_options['h1_extra_1_header_top']) ? $vitex_options['h1_extra_1_header_top'] : '';
if (isset($page_options['header_top']) && $page_options['header_top']) {
    $header_top = '';
}

if (isset($vitex_options['h1_extra_1_header_bottom_absolute']) && $vitex_options['h1_extra_1_header_bottom_absolute']) {
    $header_class .= ' bt-absolute';
}

$menu_assign = isset($vitex_options['h1_extra_1_menu_assign']) && ($vitex_options['h1_extra_1_menu_assign'] != 'auto') ? $vitex_options['h1_extra_1_menu_assign'] : '';
if (isset($page_options['header_menu_assign']) && $page_options['header_menu_assign'] != 'auto') {
    $menu_assign = $page_options['header_menu_assign'];
}

$header_stick = (isset($vitex_options['h1_extra_1_header_stick']) && $vitex_options['h1_extra_1_header_stick']) ? $vitex_options['h1_extra_1_header_stick'] : '';
if (isset($page_options['header_stick']) && $page_options['header_stick']) {
    $header_stick = '';
}
if ($header_stick) {
    $header_class .= ' bt-stick';
}

?>
<header id="bt_header" class="<?php echo esc_attr($header_class); ?>">
    <div class="bt-header-desktop" style="<?php echo esc_attr(implode('; ', $header_ab_style)); ?>">
        <?php if ($header_top) { ?>
            <div class="bt-subheader bt-top">
                <div class="bt-subheader-inner <?php echo esc_attr($container_class); ?>">
                    <div class="bt-subheader-cell bt-left">
                        <div class="bt-content text-left">
                            <?php
                            if (isset($vitex_options['h1_extra_1_header_top_left']) && $vitex_options['h1_extra_1_header_top_left']) {
                                foreach ($vitex_options['h1_extra_1_header_top_left'] as $sidebar_id) {
                                    ?>
                                    <div class="<?php echo 'bt-' . esc_attr(strtolower($sidebar_id)); ?>">
                                        <?php dynamic_sidebar($sidebar_id); ?>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="bt-subheader-cell bt-right">
                        <div class="bt-content text-right">
                            <?php
                            if (isset($vitex_options['h1_extra_1_header_top_right']) && $vitex_options['h1_extra_1_header_top_right']) {
                                foreach ($vitex_options['h1_extra_1_header_top_right'] as $sidebar_id) {
                                    ?>
                                    <div class="<?php echo 'bt-' . esc_attr(strtolower($sidebar_id)); ?>">
                                        <?php dynamic_sidebar($sidebar_id); ?>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="bt-subheader bt-bottom" style="<?php echo esc_attr(implode('; ', $header_bottom_ab_style)); ?>">
            <div class="bt-subheader-inner <?php echo esc_attr($container_class); ?>">
                <div class="bt-subheader-cell bt-left">
                    <div class="bt-content text-left">
                        <?php
                        $logo = isset($vitex_options['h1_extra_1_logo']['url']) ? $vitex_options['h1_extra_1_logo']['url'] : '';
                        if (isset($page_options['header_logo']['url']) && $page_options['header_logo']['url']) {
                            $logo = $page_options['header_logo']['url'];
                        }

                        $logo_height = (isset($vitex_options['h1_extra_1_logo_height']) && $vitex_options['h1_extra_1_logo_height']) ? $vitex_options['h1_extra_1_logo_height'] : '30';
                        if (isset($page_options['header_logo_height']) && $page_options['header_logo_height']) {
                            $logo_height = $page_options['header_logo_height'];
                        }

                        vitex_logo($logo, $logo_height);

                        if (isset($vitex_options['h1_extra_1_menu_align']) && $vitex_options['h1_extra_1_menu_align'] == 'left') {
                            vitex_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
                        }
                        ?>
                    </div>
                </div>
                <div class="bt-subheader-cell bt-center">
                    <div class="bt-content text-center">
                        <?php
                        if (isset($vitex_options['h1_extra_1_menu_align']) && $vitex_options['h1_extra_1_menu_align'] == 'center') {
                            vitex_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
                        }
                        ?>
                    </div>
                </div>
                <div class="bt-subheader-cell bt-right">
                    <div class="bt-content text-right">
                        <?php
                        if (isset($vitex_options['h1_extra_1_menu_align']) && $vitex_options['h1_extra_1_menu_align'] == 'right' || !isset($vitex_options['h1_extra_1_menu_align'])) {
                            vitex_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
                        }

                        if (isset($vitex_options['h1_extra_1_menu_content_right']) && $vitex_options['h1_extra_1_menu_content_right'] && isset($vitex_options['h1_extra_1_menu_content_right_element']) && $vitex_options['h1_extra_1_menu_content_right_element']) {
                            echo '<div class="bt-menu-content-right">';
                            foreach ($vitex_options['h1_extra_1_menu_content_right_element'] as $sidebar_id) {
                                dynamic_sidebar($sidebar_id);
                            }
                            echo '</div>';
                        }

                        if (isset($vitex_options['h1_extra_1_menu_canvas']) && $vitex_options['h1_extra_1_menu_canvas']) {
                            echo '<a href="#" class="bt-menu-canvas-toggle"><i class="fa fa-bars"></i></a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php if($header_stick): ?>
    <div class="bt-header-stick">

        <div class="bt-subheader">
            <div class="bt-subheader-inner <?php echo esc_attr($container_class); ?>">
                <div class="bt-subheader-cell bt-left">
                    <div class="bt-content text-left">
                        <?php
                        $logo_stick = isset($vitex_options['h1_extra_1_logo_stick']['url']) ? $vitex_options['h1_extra_1_logo_stick']['url'] : '';
                        if (isset($page_options['header_logo_stick']['url']) && $page_options['header_logo_stick']['url']) {
                            $logo_stick = $page_options['header_logo_stick']['url'];
                        }

                        $logo_stick_height = isset($vitex_options['h1_extra_1_logo_stick_height']) ? $vitex_options['h1_extra_1_logo_stick_height'] : '24';
                        if (isset($page_options['header_logo_stick_height']) && $page_options['header_logo_stick_height']) {
                            $logo_stick_height = $page_options['header_logo_stick_height'];
                        }

                        vitex_logo($logo_stick, $logo_stick_height);

                        if (isset($vitex_options['h1_extra_1_menu_align']) && $vitex_options['h1_extra_1_menu_align'] == 'left') {
                            vitex_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
                        }
                        ?>
                    </div>
                </div>
                <div class="bt-subheader-cell bt-center">
                    <div class="bt-content text-center">
                        <?php
                        if (isset($vitex_options['h1_extra_1_menu_align']) && $vitex_options['h1_extra_1_menu_align'] == 'center') {
                            vitex_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
                        }
                        ?>
                    </div>
                </div>
                <div class="bt-subheader-cell bt-right">
                    <div class="bt-content text-right">
                        <?php
                        if (isset($vitex_options['h1_extra_1_menu_align']) && $vitex_options['h1_extra_1_menu_align'] == 'right') {
                            vitex_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
                        }

                        if (isset($vitex_options['h1_extra_1_menu_content_right']) && $vitex_options['h1_extra_1_menu_content_right'] && isset($vitex_options['h1_extra_1_menu_content_right_element']) && $vitex_options['h1_extra_1_menu_content_right_element']) {
                            echo '<div class="bt-menu-content-right">';
                            foreach ($vitex_options['h1_extra_1_menu_content_right_element'] as $sidebar_id) {
                                dynamic_sidebar($sidebar_id);
                            }
                            echo '</div>';
                        }

                        if (isset($vitex_options['h1_extra_1_menu_canvas']) && $vitex_options['h1_extra_1_menu_canvas']) {
                            echo '<a href="#" class="bt-menu-canvas-toggle"><i class="fa fa-bars"></i></a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php endif;?>

    <div class="bt-header-mobile">
        <?php
        $mobile_header_top = (isset($vitex_options['h1_extra_1_mobile_header_top']) && $vitex_options['h1_extra_1_mobile_header_top']) ? $vitex_options['h1_extra_1_mobile_header_top'] : '';
        if (isset($page_options['mobile_header_top']) && $page_options['mobile_header_top']) {
            $mobile_header_top = '';
        }

        if ($mobile_header_top) {
            ?>
            <div class="bt-top">
                <div class="container">
                    <div class="bt-left">
                        <div class="bt-content text-center">
                            <?php
                            if (isset($vitex_options['h1_extra_1_header_top_left']) && $vitex_options['h1_extra_1_header_top_left']) {
                                foreach ($vitex_options['h1_extra_1_header_top_left'] as $sidebar_id) {
                                    dynamic_sidebar($sidebar_id);
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="bt-right">
                        <div class="bt-content text-center">
                            <?php
                            if (isset($vitex_options['h1_extra_1_header_top_right']) && $vitex_options['h1_extra_1_header_top_right']) {
                                foreach ($vitex_options['h1_extra_1_header_top_right'] as $sidebar_id) {
                                    dynamic_sidebar($sidebar_id);
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="bt-subheader bt-bottom">
            <div class="bt-subheader-inner container">
                <div class="bt-subheader-cell bt-left">
                    <div class="bt-content text-left">
                        <?php
                        $logo_mobile = isset($vitex_options['h1_extra_1_logo_mobile']['url']) ? $vitex_options['h1_extra_1_logo_mobile']['url'] : '';
                        if (isset($page_options['logo_mobile']['url']) && $page_options['logo_mobile']['url']) {
                            $logo_mobile = $page_options['logo_mobile']['url'];
                        }

                        $logo_mobile_height = isset($vitex_options['h1_extra_1_logo_mobile_height']) ? $vitex_options['h1_extra_1_logo_mobile_height'] : '24';
                        if (isset($page_options['logo_mobile_height']) && $page_options['logo_mobile_height']) {
                            $logo_mobile_height = $page_options['logo_mobile_height'];
                        }

                        vitex_logo($logo_mobile, $logo_mobile_height);
                        ?>
                    </div>
                </div>
                <div class="bt-subheader-cell bt-right">
                    <div class="bt-content text-right">
                        <?php
                        if (isset($vitex_options['h1_extra_1_menu_content_right']) && $vitex_options['h1_extra_1_menu_content_right'] && isset($vitex_options['h1_extra_1_menu_content_right_element']) && $vitex_options['h1_extra_1_menu_content_right_element']) {
                            echo '<div class="bt-menu-content-right">';
                            foreach ($vitex_options['h1_extra_1_menu_content_right_element'] as $sidebar_id) {
                                dynamic_sidebar($sidebar_id);
                            }
                            echo '</div>';
                        }

                        if (isset($vitex_options['h1_extra_1_menu_canvas']) && $vitex_options['h1_extra_1_menu_canvas']) {
                            echo '<a href="#" class="bt-menu-canvas-toggle"><i class="fa fa-bars"></i></a>';
                        }
                        ?>
                        <div class="bt-menu-toggle">
                            <div class="bt-menu-toggle-content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bt-menu-mobile-wrap">
            <div class="container">
                <?php vitex_nav_menu('', 'mobile_navigation', 'bt-menu-mobile'); ?>
            </div>
        </div>
    </div>
</header>
