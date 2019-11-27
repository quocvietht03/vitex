<?php
global $vitex_options;
$page_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'page_options') : array();

$footer_class = 'bt-footer bt-footer-v2';

$f2_fixed = (isset($vitex_options['f2_fixed']) && $vitex_options['f2_fixed']) ? $vitex_options['f2_fixed'] : '';
if (isset($page_options['footer_fixed']) && $page_options['footer_fixed']) {
    $f2_fixed = '';
}
if ($f2_fixed) {
    $footer_class .= ' bt-stick';
}

$f2_space = (isset($vitex_options['f2_footer_margin_space']['margin-top']) && $vitex_options['f2_footer_margin_space']['margin-top']) ? str_replace('px', '', $vitex_options['f2_footer_margin_space']['margin-top']) : 0;
$f2_space = (isset($page_options['page_footer_space']) && $page_options['page_footer_space']) ? 0 : $f2_space;

$container_class = (isset($vitex_options['f2_fullwidth']) && $vitex_options['f2_fullwidth']) ? 'fullwidth' : 'container';
if (isset($page_options['footer_fullwidth']) && $page_options['footer_fullwidth']) {
    $container_class = 'container';
}

$f2_footer_top = (isset($vitex_options['f2_footer_top']) && $vitex_options['f2_footer_top']) ? $vitex_options['f2_footer_top'] : '';
if (isset($page_options['footer_top']) && $page_options['footer_top']) {
    $f2_footer_top = '';
}

$f2_footer_top_columns = (isset($vitex_options['f2_footer_top_columns']) && $vitex_options['f2_footer_top_columns']) ? $vitex_options['f2_footer_top_columns'] : 4;
switch ($f2_footer_top_columns) {
    case 4:
        $f2_footer_top_col_1_class = $f2_footer_top_col_2_class = $f2_footer_top_col_3_class = $f2_footer_top_col_4_class = 'col-sm-6 col-md-3';
        break;
    case 3:
        $f2_footer_top_col_1_class = $f2_footer_top_col_2_class = $f2_footer_top_col_3_class = $f2_footer_top_col_4_class = 'col-md-4';
        break;
    case 2:
        $f2_footer_top_col_1_class = $f2_footer_top_col_2_class = $f2_footer_top_col_3_class = $f2_footer_top_col_4_class = 'col-md-6';
        break;
    case 1:
        $f2_footer_top_col_1_class = $f2_footer_top_col_2_class = $f2_footer_top_col_3_class = $f2_footer_top_col_4_class = 'col-md-12';
        break;
    default :
        $f2_footer_top_col_1_class = $f2_footer_top_col_2_class = $f2_footer_top_col_3_class = $f2_footer_top_col_4_class = 'col-sm-6 col-md-3';
        break;
}
if ((isset($vitex_options['f2_footer_top_columns_class']) && $vitex_options['f2_footer_top_columns_class'])) {
    $f2_footer_top_col_1_class = (isset($vitex_options['f2_footer_top_col_1_class']) && $vitex_options['f2_footer_top_col_1_class']) ? $vitex_options['f2_footer_top_col_1_class'] : 'col-sm-6 col-md-3';
    $f2_footer_top_col_2_class = (isset($vitex_options['f2_footer_top_col_2_class']) && $vitex_options['f2_footer_top_col_2_class']) ? $vitex_options['f2_footer_top_col_2_class'] : 'col-sm-6 col-md-3';
    $f2_footer_top_col_3_class = (isset($vitex_options['f2_footer_top_col_3_class']) && $vitex_options['f2_footer_top_col_3_class']) ? $vitex_options['f2_footer_top_col_3_class'] : 'col-sm-6 col-md-3';
    $f2_footer_top_col_4_class = (isset($vitex_options['f2_footer_top_col_4_class']) && $vitex_options['f2_footer_top_col_4_class']) ? $vitex_options['f2_footer_top_col_4_class'] : 'col-sm-6 col-md-3';
}

$f2_footer_bottom_columns = (isset($vitex_options['f2_footer_bottom_columns']) && $vitex_options['f2_footer_bottom_columns']) ? $vitex_options['f2_footer_bottom_columns'] : 2;
switch ($f2_footer_bottom_columns) {
    case 2:
        $f2_footer_bottom_col_1_class = $f2_footer_bottom_col_2_class = 'col-md-6';
        break;
    case 1:
        $f2_footer_bottom_col_1_class = $f2_footer_bottom_col_2_class = 'col-md-12';
        break;
    default :
        $f2_footer_bottom_col_1_class = $f2_footer_bottom_col_2_class = 'col-md-6';
        break;
}
if ((isset($vitex_options['f2_footer_bottom_columns_class']) && $vitex_options['f2_footer_bottom_columns_class'])) {
    $f2_footer_bottom_col_1_class = (isset($vitex_options['f2_footer_bottom_col_1_class']) && $vitex_options['f2_footer_bottom_col_1_class']) ? $vitex_options['f2_footer_bottom_col_1_class'] : 'col-md-6';
    $f2_footer_bottom_col_2_class = (isset($vitex_options['f2_footer_bottom_col_2_class']) && $vitex_options['f2_footer_bottom_col_2_class']) ? $vitex_options['f2_footer_bottom_col_2_class'] : 'col-md-6';
}

?>
<footer id="bt_footer" class="<?php echo esc_attr($footer_class); ?>" data-space="<?php echo esc_attr($f2_space); ?>">
    <!-- Start Footer Top -->
    <?php if ($f2_footer_top) { ?>
        <div class="bt-footer-top">
            <div class="bt-overlay"></div>
            <div class="<?php echo esc_attr($container_class); ?>">
                <div class="row">
                    <div class="<?php echo esc_attr($f2_footer_top_col_1_class); ?>">
                        <div class="bt-content">
                            <?php
                            if (isset($vitex_options['f2_footer_top_col_1']) && $vitex_options['f2_footer_top_col_1']) {
                                foreach ($vitex_options['f2_footer_top_col_1'] as $sidebar_id) {
                                    dynamic_sidebar($sidebar_id);
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php if ($f2_footer_top_columns > 1) { ?>
                        <div class="<?php echo esc_attr($f2_footer_top_col_2_class); ?>">
                            <div class="bt-content">
                                <?php
                                if (isset($vitex_options['f2_footer_top_col_2']) && $vitex_options['f2_footer_top_col_2']) {
                                    foreach ($vitex_options['f2_footer_top_col_2'] as $sidebar_id) {
                                        dynamic_sidebar($sidebar_id);
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($f2_footer_top_columns > 2) { ?>
                        <div class="<?php echo esc_attr($f2_footer_top_col_3_class); ?>">
                            <div class="bt-content">
                                <?php
                                if (isset($vitex_options['f2_footer_top_col_3']) && $vitex_options['f2_footer_top_col_3']) {
                                    foreach ($vitex_options['f2_footer_top_col_3'] as $sidebar_id) {
                                        dynamic_sidebar($sidebar_id);
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($f2_footer_top_columns > 3) { ?>
                        <div class="<?php echo esc_attr($f2_footer_top_col_4_class); ?>">
                            <div class="bt-content">
                                <?php
                                if (isset($vitex_options['f2_footer_top_col_4']) && $vitex_options['f2_footer_top_col_4']) {
                                    foreach ($vitex_options['f2_footer_top_col_4'] as $sidebar_id) {
                                        dynamic_sidebar($sidebar_id);
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Footer Top -->
    <!-- Start Footer Bottom -->
    <div class="bt-footer-bottom">
        <div class="<?php echo esc_attr($container_class); ?>">
            <div class="row">
                <div class="<?php echo esc_attr($f2_footer_bottom_col_1_class); ?>">
                    <div class="bt-content">
                        <?php
                        if (isset($vitex_options['f2_footer_bottom_col_1']) && $vitex_options['f2_footer_bottom_col_1']) {
                            foreach ($vitex_options['f2_footer_bottom_col_1'] as $sidebar_id) {
                                dynamic_sidebar($sidebar_id);
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php if ($f2_footer_bottom_columns > 1) { ?>
                    <div class="<?php echo esc_attr($f2_footer_bottom_col_2_class); ?>">
                        <div class="bt-content">
                            <?php
                            if (isset($vitex_options['f2_footer_bottom_col_2']) && $vitex_options['f2_footer_bottom_col_2']) {
                                foreach ($vitex_options['f2_footer_bottom_col_2'] as $sidebar_id) {
                                    dynamic_sidebar($sidebar_id);
                                }
                            }
                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
