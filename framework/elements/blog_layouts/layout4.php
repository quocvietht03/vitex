<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 10/29/2018 - 10:51
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
        <div class="bt-term"><?php the_terms(get_the_ID(), 'category', '', ', '); ?></div>
        <h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </div>
</div>