<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 10/26/2018 - 11:33
 * Project Name: vitextheme
 */
$format = get_post_format() ? get_post_format() : 'standard';
$media_arr = explode(',', $multi_media);
$format = in_array($format, $media_arr) ? $format : 'standard';
$post_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'post_options') : array();

?>
<div class="bt-item">
    <div class="bt-media <?php echo esc_attr($media_type . ' ' . $format); ?>">
        <?php require get_template_directory() . '/framework/elements/blog_layouts/media.php'; ?>
    </div>
    <div class="bt-content">
        <ul class="bt-meta">
            <li class="bt-date">
                <a href="<?php the_permalink(); ?>"><?php echo get_the_date(get_option('date_format')); ?></a>
            </li>
            <li class="bt-term">
                <?php the_terms(get_the_ID(), 'category', '', ', '); ?>
            </li>
        </ul>
        <h3 class="bt-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <?php
        echo '<div class="bt-excerpt">' . wp_trim_words(get_the_excerpt(), $excerpt_limit, $excerpt_more) . '</div>';
        ?>
    </div>
</div>