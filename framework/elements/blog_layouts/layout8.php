<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - https://ntcde.com
 * Date: 1/21/2019 - 10:34 AM
 * Project Name: insulttheme
 */
$format = get_post_format() ? get_post_format() : 'standard';
$media_arr = explode(',', $multi_media);
$format = in_array($format, $media_arr) ? $format : 'standard';
$post_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'post_options') : array();

?>
<div class="bt-item">
    <div class="bt-media <?php echo esc_attr($format); ?>">
        <a href="<?php the_permalink(); ?>">
        <?php require get_template_directory() . '/framework/elements/blog_layouts/media.php'; ?>
        </a>
        <div class="bt-term">
            <?php the_terms(get_the_ID(), 'category', '', ' '); ?>
        </div>
    </div>
    <div class="bt-content">
        <div class="bt-date">
            <a href="<?php the_permalink(); ?>"><?php echo get_the_date(get_option('date_format')); ?></a>
        </div>
        <h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php
        if ($excerpt_limit != 0) {
            echo '<div class="bt-excerpt">' . wp_trim_words(get_the_excerpt(), $excerpt_limit, $excerpt_more) . '</div>';
        }
        ?>
    </div>
</div>