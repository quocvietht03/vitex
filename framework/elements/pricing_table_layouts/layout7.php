<?php
/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 11/2/2018 - 11:31
 * Project Name: vitextheme
 */

?>
<div class="bt-item">
    <?php if ($recommended):
        echo '<span class="bt-recommended">' . esc_html($recommended) . '</span>';
    endif; ?>
    <div class="bt-content">
        <?php
        if ($price || $time) {
            ?>
            <h4 class="bt-price-time">
                <?php
                if ($price) echo '<span class="bt-price" ' . implode(' ', $price_attributes) . '>' . $price . '</span>';
                if ($time) echo '<span class="bt-time" ' . implode(' ', $time_attributes) . '>' . $time . '</span>';
                ?>
            </h4>
            <?php
        }
        if ($title) echo '<h3 class="bt-title" ' . implode(' ', $title_attributes) . '>' . $title . '</h3>';
        if ($sub_title) echo '<div class="bt-subtitle" ' . implode(' ', $sub_title_attributes) . '>' . $sub_title . '</div>';

        if (!empty($options_value)) {
            echo '<ul class="bt-options" ' . implode(' ', $options_attributes) . '>' . implode(' ', $options_value) . '</ul>';
        }
        ?>
    </div>
    <?php
    if ($icon) {
        $link_attributes = array();
        if (!empty($link)) {
            $link_attributes[] = (!empty($link['url'])) ? 'href="' . esc_attr($link['url']) . '"' : 'href="#!"';
            if (!empty($link['target'])) {
                $link_attributes[] = 'target="' . esc_attr($link['target']) . '"';
            }
            if (!empty($link['rel'])) {
                $link_attributes[] = 'rel="' . esc_attr($link['rel']) . '"';
            }
        }

        echo '<a  class="bt-order bt-icon" ' . implode(' ', $icon_attributes) . ' ' . implode(' ', $link_attributes) . '> ' . $icon . ' </a>';
    } elseif ($button_text) {
        echo '<a class="bt-order bt-btn-order" ' . implode(' ', $button_attributes) . '>' . $button_text . '</a>';
    }
    ?>
</div>