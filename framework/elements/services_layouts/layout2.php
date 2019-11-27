<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 10/24/2018 - 16:31
 * Project Name: vitextheme
 */
$post_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'services_options') : array();

$icon_font = isset($post_options['icon_font']) ? $post_options['icon_font'] : '';
$icon_image = isset($post_options['icon_image']) ? $post_options['icon_image'] : '';

?>
<div class="bt-item">
    <div class="bt-icon">
        <?php
        if (!empty($icon_image['url'])) {
            echo '<img src="' . esc_url($icon_image['url']) . '" alt="' . esc_attr__('Icon', 'vitex') . '"/>';
        } else {
            echo '<i class="' . esc_attr($icon_font) . '"></i>';
        }
        ?>
    </div>
    <div class="bt-content">
        <h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php
        if ($excerpt_limit != 0) {
            echo '<div class="bt-excerpt">' . wp_trim_words(get_the_excerpt(), $excerpt_limit, $excerpt_more) . '</div>';
        }

        if (!empty($readmore_text) && !empty($icon_readmore_text)) {
            echo '<a class="bt-readmore" href="' . get_the_permalink() . '">' . $readmore_text . ' <span class="' . $icon_readmore_text . '"></span></a>';
        } elseif (!empty($icon_readmore_text)) {
            echo '<a class="bt-readmore" href="' . get_the_permalink() . '"><span class="' . $icon_readmore_text . '"></span></a>';
        } elseif (!empty($readmore_text)) {
            $arr = array(
                'span'   => array('class' => array()),
                'i'      => array('class' => array()),
                'strong' => array()
            );
            echo '<a class="bt-readmore" href="' . get_the_permalink() . '">' . wp_kses($readmore_text, $arr) . '</a>';
        }
        ?>
    </div>
</div>
