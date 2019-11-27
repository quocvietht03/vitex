<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 11/19/2018 - 10:12
 * Project Name: vitextheme
 */
$portfolio_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'portfolio_options') : array();

?>

<div class="bt-item">
    <div class="bt-thumb">
        <a href="<?php the_permalink(); ?>">
            <?php
            $thumb_size = (!empty($img_size)) ? $img_size : 'full';
            $thumbnail = wpb_getImageBySize(array(
                'post_id'    => get_the_ID(),
                'attach_id'  => null,
                'thumb_size' => $thumb_size,
                'class'      => ''
            ));
            echo (!empty($thumbnail)) ? $thumbnail['thumbnail'] : '';
            ?>
        </a>
    </div>
    <div class="bt-content">
        <div class="content-left">
            <div class="bt-term"><?php the_terms(get_the_ID(), 'fw-portfolio-category', '', ', '); ?></div>
            <h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <div class="content-right">
            <div class="bt-readmore">
                <a href="<?php the_permalink(); ?>">
                    <?php
                    echo (!empty($icon_class) ? '<span class="' . esc_attr($icon_class) . '"></span>' : '') .
                        (!empty($readmore_text) ? esc_html($readmore_text) : ''); ?>
                </a>
            </div>
        </div>
    </div>
</div>
