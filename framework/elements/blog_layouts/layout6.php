<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 11/3/2018 - 08:52
 * Project Name: vitextheme
 */
$post_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'post_options') : array();
if (!$zigzag) $count = 0;
$type_class = ($count % 2 == 0) ? 'bt-even' : 'bt-odd';
?>
<div class="bt-item <?php echo esc_attr($type_class); ?>">
    <div class="bt-media">
        <a href="<?php the_permalink(); ?>">
        <?php
        if (has_post_thumbnail()) {
            $media_arr = explode(',', $multi_media);
            $thumb_size = (!empty($img_size)) ? $img_size : 'full';
            $thumbnail = wpb_getImageBySize(array(
                'post_id'    => get_the_ID(),
                'attach_id'  => null,
                'thumb_size' => $thumb_size,
                'class'      => ''
            ));
            echo (!empty($thumbnail)) ? $thumbnail['thumbnail'] : '';
        }
        ?>
        </a>
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
        <h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php
		if ($excerpt_limit != 0) {
            echo '<div class="bt-excerpt">' . wp_trim_words(get_the_excerpt(), $excerpt_limit, $excerpt_more) . '</div>';
        }        ?>
    </div>
</div>