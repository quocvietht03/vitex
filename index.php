<?php get_header(); ?>
<?php
global $vitex_options;
$fullwidth = isset($vitex_options['blog_fullwidth']) && $vitex_options['blog_fullwidth'] ? 'fullwidth' : 'container';
$sidebar_width = (int)isset($vitex_options['blog_sidebar_width']) ? $vitex_options['blog_sidebar_width'] : 3;
$sidebar_width_md = $sidebar_width + 1;

$sidebar_class = 'col-md-' . $sidebar_width_md . ' col-lg-' . $sidebar_width;
$content_class = 'col-md-' . (12 - $sidebar_width_md) . ' col-lg-' . (12 - $sidebar_width);

vitex_titlebar();
?>
<div class="bt-main-content">
    <div class="<?php echo esc_attr($fullwidth); ?>">
        <div class="row">
            <div class="bt-content <?php echo esc_attr($content_class); ?>">
                <?php
                if (have_posts()) {
                    while (have_posts()) : the_post();
                        get_template_part('framework/templates/blog/entry');
                    endwhile;

                    vitex_paging_nav();
                } else {
                    get_template_part('framework/templates/entry', 'none');
                }
                ?>
            </div>
            <div class="<?php echo esc_attr($sidebar_class); ?>">
                <div class="bt-sidebar bt-right-sidebar">
                    <div class="bt-sidebar__inner">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
