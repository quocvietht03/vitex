<?php get_header(); ?>
<?php
global $vitex_options;
$page_comment = (int)isset($vitex_options['page_comment']) ? $vitex_options['page_comment'] : 1;
$sidebar_width = (int)isset($vitex_options['sidebar_width']) ? $vitex_options['sidebar_width'] : 3;
$sidebar_width_md = $sidebar_width + 1;

$page_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'page_options') : array();
$page_titlebar = isset($page_options['page_titlebar']) && $page_options['page_titlebar'] ? $page_options['page_titlebar'] : '';

$sidebar_position = function_exists('fw_ext_sidebars_get_current_position') ? fw_ext_sidebars_get_current_position() : 'full';

$custom_sidebar = isset($page_options['custom_sidebar']) && $page_options['custom_sidebar'] ? $page_options['custom_sidebar'] : array();
$custom_sidebar_gadget = isset($custom_sidebar['gadget']) && $custom_sidebar['gadget'] ? $custom_sidebar['gadget'] : 'off';
if ($custom_sidebar_gadget == 'on') {
    $custom_sidebar_po = isset($custom_sidebar[$custom_sidebar_gadget]) &&
    $custom_sidebar[$custom_sidebar_gadget] ? $custom_sidebar[$custom_sidebar_gadget]['sidebar-position-picker']['gadget'] : '';
    $sidebar_position = $custom_sidebar_po;
}

$sidebar_class = 'col-md-' . $sidebar_width_md . ' col-lg-' . $sidebar_width;
if ($sidebar_position == 'left' || $sidebar_position == 'right') {
    $content_class = 'col-md-' . (12 - $sidebar_width_md) . ' col-lg-' . (12 - $sidebar_width);
} elseif ($sidebar_position == 'left_right') {
    $content_width = 12 - 2 * $sidebar_width;
    $content_class = 'col-md-' . (12 - 2 * $sidebar_width_md) . ' col-lg-' . (12 - 2 * $sidebar_width);
} else {
    $content_class = 'col-md-12';
}

if (!$page_titlebar) {
    vitex_titlebar();
}
?>
    <div class="bt-main-content">
        <div class="container">
            <div class="row">
                <!-- Start Left Sidebar -->
                <?php if ($sidebar_position == 'left' || $sidebar_position == 'left_right') { ?>
                    <div class="<?php echo esc_attr($sidebar_class); ?>">
                        <div class="bt-sidebar bt-left-sidebar">
                            <div class="bt-sidebar__inner">
                                <?php get_sidebar('left'); ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- End Left Sidebar -->
                <!-- Start Content -->
                <div class="bt-content <?php echo esc_attr($content_class); ?>">
                    <?php while (have_posts()) : the_post(); ?>

                        <?php
                        the_content();
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'vitex'),
                            'after'  => '</div>',
                        ));
                        ?>

                        <?php if ($page_comment) { ?>

                            <?php if (comments_open() || get_comments_number()) comments_template(); ?>

                        <?php } ?>

                    <?php endwhile; ?>
                </div>
                <!-- End Content -->
                <!-- Start Right Sidebar -->
                <?php if ($sidebar_position == 'right' || $sidebar_position == 'left_right') { ?>
                    <div class="<?php echo esc_attr($sidebar_class); ?>">
                        <div class="bt-sidebar bt-right-sidebar">
                            <div class="bt-sidebar__inner">
                                <?php get_sidebar('right'); ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- End Right Sidebar -->
            </div>
        </div>
    </div>
<?php get_footer(); ?>