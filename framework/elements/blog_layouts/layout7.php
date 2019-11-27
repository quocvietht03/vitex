<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 11/13/2018 - 11:25
 * Project Name: vitextheme
 */

$format = get_post_format() ? get_post_format() : 'standard';
$media_arr = explode(',', $multi_media);
$format = in_array($format, $media_arr) ? $format : 'standard';
$post_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'post_options') : array();

?>
<div class="bt-item">
    <div class="bt-media <?php echo esc_attr($format); ?>">
        <?php require get_template_directory() . '/framework/elements/blog_layouts/media.php'; ?>
    </div>
    <div class="bt-content">
        <h4 class="bt-date">
            <a href="<?php the_permalink(); ?>">
                <span class="icon_calendar"></span>
                <?php echo get_the_date(get_option('date_format')); ?>
            </a>
        </h4>
        <h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <h4 class="bt-author"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <span class="icon_profile"></span>
                <?php echo esc_html__('Posted By', 'vitex') . ' <span class="name_author">' . get_the_author() . '</span>'; ?>
            </a>
        </h4>
        <?php
        if (!empty($readmore_text)) echo '<a class="bt-readmore" href="' . get_the_permalink() . '">' . $readmore_text . '</a>';
        ?>
    </div>
</div>