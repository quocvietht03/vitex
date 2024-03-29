<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 11/16/2018 - 08:27
 * Project Name: vitextheme
 */

$team_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'team_options') : array();

$positon = isset($team_options['position']) ? $team_options['position'] : '';
$email = isset($team_options['email']) ? $team_options['email'] : '';
$phone = isset($team_options['phone']) ? $team_options['phone'] : '';
$social = isset($team_options['social']) ? $team_options['social'] : array();

$social_item = array();
if (!empty($social)) {
    foreach ($social as $item) {
        $social_item[] = '<li><a data-icon-social="' . esc_attr($item['icon']) . '" href="' . esc_url($item['link']) . '"><i class="' . esc_attr($item['icon']) . '"></i></a></li>';
    }
}
?>

<div class="bt-item">
    <div class="bt-thumb">
        <?php
        $thumb_size = (!empty($img_size)) ? $img_size : 'thumbnail';
        $thumbnail = wpb_getImageBySize(array(
            'post_id'    => get_the_ID(),
            'attach_id'  => null,
            'thumb_size' => $thumb_size,
            'class'      => ''
        ));
        echo (!empty($thumbnail)) ? '<a href="' . get_the_permalink() . '">' . $thumbnail['thumbnail'] . '</a>' : '';
        ?>
        <div class="bt-overlay">
            <div class="bt-info">
                <?php if (!empty($social_item)) echo '<ul class="bt-socials">' . implode(' ', $social_item) . '</ul>'; ?>
            </div>
        </div>
    </div>
    <div class="bt-content">
        <h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php
        if ($positon) echo '<div class="bt-position">' . $positon . '</div>';
        echo '<span></span>';
        if ($phone) echo '<div class="bt-phone">' . esc_html__('Phone:', 'vitex') . ' <a href="tel:' . esc_attr($phone) . '" title="' . esc_html__('Call now!', 'vitex') . '">' . $phone . '</a></div>';

        ?>
    </div>
</div>
