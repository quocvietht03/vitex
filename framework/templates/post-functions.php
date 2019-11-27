<?php
/* Count post view. */
function vitex_set_count_view(){
    $post_id = get_the_ID();
    if (is_single() && !empty($post_id) && !isset($_COOKIE['vitex_post_view_' . $post_id])) {

        $views = get_post_meta($post_id, '_vitex_post_views', true);

        $views = $views ? $views : 0;

        $views++;

        update_post_meta($post_id, '_vitex_post_views', $views);

        /* set cookie. */
        setcookie('vitex_post_view_' . $post_id, $post_id, time() * 20, '/');
    }
}

add_action('wp', 'vitex_set_count_view');

/* Get Post view */
function vitex_get_count_view(){
    $post_id = get_the_ID();
    $views = get_post_meta($post_id, '_vitex_post_views', true);

    $views = $views ? $views : 0;
    return $views;
}

/* Post Title */
if (!function_exists('vitex_post_title_render')) {
    function vitex_post_title_render(){
        global $vitex_options;

        ob_start();
        if (is_single()) {
            $post_title = isset($vitex_options['single_post_title']) ? $vitex_options['single_post_title'] : false;
            if ($post_title) {
                ?>
                <h3 class="bt-title"><?php the_title(); ?></h3>
                <?php
            }
        } else {
            $post_title = isset($vitex_options['post_title']) ? $vitex_options['post_title'] : true;
            if ($post_title) {
                ?>
                <h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php
            }
        }

        return ob_get_clean();
    }
}

/* Post Featured */
if (!function_exists('vitex_post_featured_render')) {
    function vitex_post_featured_render($image_size){
        ob_start();
        if (function_exists('wpb_getImageBySize')) {
            $thumbnail = wpb_getImageBySize(array(
                'post_id'    => get_the_ID(),
                'attach_id'  => null,
                'thumb_size' => $image_size,
                'class'      => ''
            ));
            echo (!empty($thumbnail)) ? $thumbnail['thumbnail'] : '';
        } else {
            if (has_post_thumbnail()) the_post_thumbnail('full');
        }
        return ob_get_clean();
    }
}

/* Post Media */
if (!function_exists('vitex_post_media_render')) {
    function vitex_post_media_render(){
        global $vitex_options;

        if (is_single()) {
            $post_image_size = isset($vitex_options['single_post_image_size']) ? $vitex_options['single_post_image_size'] : 'full';
            $post_featured = isset($vitex_options['single_post_featured']) ? $vitex_options['single_post_featured'] : true;
        } else {
            $post_featured = isset($vitex_options['post_featured']) ? $vitex_options['post_featured'] : true;
            $post_image_size = isset($vitex_options['post_image_size']) ? $vitex_options['post_image_size'] : 'full';
        }

        $format = get_post_format() ? get_post_format() : 'standard';
        $post_options = function_exists("fw_get_db_post_option") ? fw_get_db_post_option(get_the_ID(), 'post_options') : array();

        ob_start();
        switch ($format) {
            case 'audio':
                if ($post_featured) {
                    $audio_type = isset($post_options['audio_type']['type']) ? $post_options['audio_type']['type'] : '';

                    ?>
                    <div class="bt-media <?php echo esc_attr($format); ?>">
                        <?php
                        if ($format == 'audio') {
                            if ($audio_type == 'html5') {
                                $audio_format = isset($post_options['audio_type']['html5']['format']) ? $post_options['audio_type']['html5']['format'] : '';
                                $audio_src = isset($post_options['audio_type']['html5']['src']) ? $post_options['audio_type']['html5']['src'] : '';
                                if ($audio_src) {
                                    echo '<audio controls>
													<source src="' . esc_url($audio_src) . '" type="' . esc_attr($audio_format) . '">
												</audio>';
                                } else {
                                    echo vitex_post_featured_render($post_image_size);
                                }
                            } else {
                                $audio_embed = isset($post_options['audio_type']['embed']['iframe']) ? $post_options['audio_type']['embed']['iframe'] : '';
                                if ($audio_embed) {
                                    echo '<div class="bt-soundcluond">' . $audio_embed . '</div>';
                                } else {
                                    echo vitex_post_featured_render($post_image_size);
                                }
                            }
                        }

                        ?>
                    </div>
                    <?php
                }
                break;
            case 'gallery':
                if ($post_featured) {
                    $gallery_images = isset($post_options['gallery_images']) ? $post_options['gallery_images'] : array();

                    ?>
                    <div class="bt-media <?php echo esc_attr($format); ?>">
                        <?php

                        if (!empty($gallery_images)) {
                            $date = time() . '_' . uniqid(true);
                            ?>
                            <div id="<?php echo esc_attr('carousel-generic' . $date) ?>" class="carousel slide"
                                 data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php
                                    foreach ($gallery_images as $key => $gallery_image) {
                                        $cl_active = ($key == 0) ? 'active' : '';
                                        echo '<img class="item bt-gallery ' . $cl_active . '" src="' . esc_url($gallery_image['url']) . '" alt="' . esc_attr__('Thumbnail', 'vitex') . '"/>';
                                    }
                                    ?>
                                </div>
                                <a class="left carousel-control"
                                   href="<?php echo esc_attr('#carousel-generic' . $date) ?>" role="button"
                                   data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right carousel-control"
                                   href="<?php echo esc_attr('#carousel-generic' . $date) ?>" role="button"
                                   data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <?php
                        } else {
                            echo vitex_post_featured_render($post_image_size);
                        }
                        ?>
                    </div>
                    <?php
                }
                break;
            case 'link':
                if ($post_featured) {
                    $url = isset($post_options['url']) ? $post_options['url'] : '';

                    ?>
                    <div class="bt-media <?php echo esc_attr($format); ?>">
                        <?php
                        if ($url) {
                            echo '<a href="' . esc_url($url) . '" target="_blank">' . $url . '</a>';
                        } else {
                            echo vitex_post_featured_render($post_image_size);
                        }
                        ?>
                    </div>
                    <?php
                }
                break;
            case 'quote':
                if ($post_featured) {
                    $quote_text = isset($post_options['quote_text']) ? $post_options['quote_text'] : '';

                    ?>
                    <div class="bt-media <?php echo esc_attr($format); ?>">
                        <?php
                        if ($quote_text) {
                            echo '<blockquote>' . $quote_text . '</blockquote>';
                        } else {
                            echo vitex_post_featured_render($post_image_size);
                        }
                        ?>
                    </div>
                    <?php
                }
                break;
            case 'video':
                if ($post_featured) {
                    $video_url = isset($post_options['video_url']) ? $post_options['video_url'] : '';
                    $video_poster = isset($post_options['video_poster']) ? $post_options['video_poster'] : array();
                    $video_caption = isset($post_options['video_caption']) ? $post_options['video_caption'] : '';

                    ?>
                    <div class="bt-media <?php echo esc_attr($format); ?>">
                        <?php
                        if (!empty($video_url)) {
                            ?>
                            <div class="bt-overlay">
                                <a href="<?php echo esc_url($video_url); ?>" class="html5lightbox" data-group=""
                                   data-thumbnail="" data-width="800" data-height="450"
                                   title="<?php echo esc_attr($video_caption); ?>"><i class="fa fa-play"></i></a>
                            </div>
                            <?php
                            if (!empty($video_poster)) {
                                echo '<img src="' . esc_url($video_poster['url']) . '" alt="' . esc_attr__('Poster Image', 'vitex') . '"/>';
                            } else {
                                echo vitex_post_featured_render($post_image_size);
                            }
                        } else {
                            echo vitex_post_featured_render($post_image_size);
                        }
                        ?>
                    </div>
                    <?php
                }
                break;
            default:
                if ($post_featured && has_post_thumbnail()) {
                    ?>
                    <div class="bt-media <?php echo esc_attr($format); ?>">
                        <?php echo vitex_post_featured_render($post_image_size); ?>
                    </div>
                    <?php
                }

        }
        return ob_get_clean();
    }
}

/* Post Meta */
if (!function_exists('vitex_post_meta_render')) {
    function vitex_post_meta_render(){
        global $vitex_options;

        if (is_single()) {
            $post_meta = isset($vitex_options['single_post_meta']) ? $vitex_options['single_post_meta'] : true;
            $post_meta_author = isset($vitex_options['single_post_meta_author']) ? $vitex_options['single_post_meta_author'] : true;
            $post_meta_date = isset($vitex_options['single_post_meta_date']) ? $vitex_options['single_post_meta_date'] : true;
            $post_meta_comment = isset($vitex_options['single_post_meta_comment']) ? $vitex_options['single_post_meta_comment'] : true;
            $post_meta_category = isset($vitex_options['single_post_meta_category']) ? $vitex_options['single_post_meta_category'] : true;
        } else {
            $post_meta = isset($vitex_options['post_meta']) ? $vitex_options['post_meta'] : true;
            $post_meta_author = isset($vitex_options['post_meta_author']) ? $vitex_options['post_meta_author'] : true;
            $post_meta_date = isset($vitex_options['post_meta_date']) ? $vitex_options['post_meta_date'] : true;
            $post_meta_comment = isset($vitex_options['post_meta_comment']) ? $vitex_options['post_meta_comment'] : true;
            $post_meta_category = isset($vitex_options['post_meta_category']) ? $vitex_options['post_meta_category'] : true;
        }
        ob_start();
        if ($post_meta) {
            ?>
            <ul class="bt-meta">
                <?php if ($post_meta_author) { ?>
                    <li><?php echo '<i class="fa fa-user"></i> ' . esc_html__('by ', 'vitex'); ?><a
                                href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a>
                    </li>
                <?php } ?>
                <?php if ($post_meta_date) { ?>
                    <li><?php echo '<i class="fa fa-calendar"></i> ' . esc_html__('Posted on ', 'vitex'); ?><a
                                href="<?php the_permalink(); ?>"><?php echo get_the_date(get_option('date_format')); ?></a>
                    </li>
                <?php } ?>
                <?php if ($post_meta_comment && comments_open()) { ?>
                    <li><i class="fa fa-comment"></i> <a
                                href="<?php comments_link(); ?>"><?php comments_number(esc_html__('0 Comments', 'vitex'), esc_html__('1 Comment', 'vitex'), esc_html__('% Comments', 'vitex')); ?></a>
                    </li>
                <?php } ?>
                <?php if ($post_meta_category) { ?>
                    <?php the_terms(get_the_ID(), 'category', '<li class="bt-term"><i class="fa fa-folder"></i> ' . esc_html__('in ', 'vitex'), ', ', '</li>'); ?>
                <?php } ?>
            </ul>
            <?php
        }
        return ob_get_clean();
    }
}

/* Tag & Share */
if (!function_exists('vitex_tag_share_render')) {
    function vitex_tag_share_render(){
        global $vitex_options;

        $post_tag = isset($vitex_options['single_post_tag']) ? $vitex_options['single_post_tag'] : true;
        $post_tag_label = isset($vitex_options['single_post_tag_label']) && $vitex_options['single_post_tag_label'] ? $vitex_options['single_post_tag_label'] : esc_html__('Tags:', 'vitex');
        $post_share = isset($vitex_options['single_post_share']) ? $vitex_options['single_post_share'] : false;
        $post_share_label = isset($vitex_options['single_post_share_label']) && $vitex_options['single_post_share_label'] ? $vitex_options['single_post_share_label'] : esc_html__('Share:', 'vitex');

        $social_item = array();
        $share_facebook = isset($vitex_options['single_post_share_facebook']) ? $vitex_options['single_post_share_facebook'] : true;
        if ($share_facebook) {
            $social_item[] = '<li><a target="_blank" data-icon-social="fa fa-facebook" title="' . esc_attr__('Facebook', 'vitex') . '" href="https://www.facebook.com/sharer/sharer.php?u=' . get_the_permalink() . '"><i class="fa fa-facebook"></i></a></li>';
        }
        $share_twitter = isset($vitex_options['single_post_share_twitter']) ? $vitex_options['single_post_share_twitter'] : true;
        if ($share_twitter) {
            $social_item[] = '<li><a target="_blank" data-icon-social="fa fa-twitter" title="' . esc_attr__('Twitter', 'vitex') . '" href="https://twitter.com/share?url=' . get_the_permalink() . '"><i class="fa fa-twitter"></i></a></li>';
        }
        $share_google_plus = isset($vitex_options['single_post_share_google_plus']) ? $vitex_options['single_post_share_google_plus'] : true;
        if ($share_google_plus) {
            $social_item[] = '<li><a target="_blank" data-icon-social="fa fa-google-plus" title="' . esc_attr__('Google Plus', 'vitex') . '" href="https://plus.google.com/share?url=' . get_the_permalink() . '"><i class="fa fa-google-plus"></i></a></li>';
        }
        $share_linkedin = isset($vitex_options['single_post_share_linkedin']) ? $vitex_options['single_post_share_linkedin'] : true;
        if ($share_linkedin) {
            $social_item[] = '<li><a target="_blank" data-icon-social="fa fa-linkedin" title="' . esc_attr__('Linkedin', 'vitex') . '" href="https://www.linkedin.com/shareArticle?url=' . get_the_permalink() . '"><i class="fa fa-linkedin"></i></a></li>';
        }
        $share_pinterest = isset($vitex_options['single_post_share_pinterest']) ? $vitex_options['single_post_share_pinterest'] : true;
        if ($share_pinterest) {
            $social_item[] = '<li><a target="_blank" data-icon-social="fa fa-pinterest" title="' . esc_attr__('Pinterest', 'vitex') . '" href="https://pinterest.com/pin/create/button/?url=' . get_the_permalink() . '"><i class="fa fa-pinterest"></i></a></li>';
        }

        ob_start();
        if (has_tag() && $post_tag || $post_share) {
            ?>
            <div class="bt-tag-share">
                <?php if ($post_tag) { ?>
                    <div class="bt-tag">
                        <?php
                        if (has_tag()) {
                            the_tags('<h4>' . $post_tag_label . '</h4>', ', ', '');
                        }
                        ?>
                    </div>
                <?php } ?>
                <?php if ($post_share) { ?>
                    <div class="bt-share">
                        <?php
                        if (!empty($social_item)) {
                            echo '<h4>' . $post_share_label . '</h4><ul>' . implode(' ', $social_item) . '</ul>';
                        }
                        ?>
                    </div>
                <?php } ?>
            </div>
            <?php
        }
        return ob_get_clean();
    }
}

/* Post Content */
if (!function_exists('vitex_post_content_render')) {
    function vitex_post_content_render(){
        global $vitex_options;

        ob_start();
        if (is_single()) {
            $post_content = isset($vitex_options['single_post_content']) ? $vitex_options['single_post_content'] : true;
            if ($post_content) {
                ?>
                <div class="bt-content">
                    <?php
                    the_content();
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'vitex'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
                <?php
            }
            echo vitex_tag_share_render();
        } else {
            $post_excerpt = isset($vitex_options['post_excerpt']) ? $vitex_options['post_excerpt'] : true;
            $post_excerpt_length = (int)isset($vitex_options['post_excerpt_length']) ? $vitex_options['post_excerpt_length'] : 55;
            $post_excerpt_more = isset($vitex_options['post_excerpt_more']) ? $vitex_options['post_excerpt_more'] : '[...]';
            $post_readmore = isset($vitex_options['post_readmore']) ? $vitex_options['post_readmore'] : true;
            $post_readmore_label = isset($vitex_options['post_readmore_label']) && $vitex_options['post_readmore_label'] ? $vitex_options['post_readmore_label'] : esc_html__('Read More', 'vitex');
            if ($post_excerpt) {
                ?>
                <div class="bt-excerpt">
                    <?php echo wp_trim_words(get_the_excerpt(), $post_excerpt_length, $post_excerpt_more); ?>
                </div>
                <?php
            }
            if ($post_readmore) {
                ?>
                <a class="bt-readmore"
                   href="<?php the_permalink(); ?>"><?php echo esc_html($post_readmore_label); ?></a>
                <?php
            }

        }

        return ob_get_clean();
    }
}

/* Author */
if (!function_exists('vitex_author_render')) {
    function vitex_author_render(){
        ob_start();
        ?>
        <?php if (is_sticky() && is_home() && !is_paged()) { ?>
            <span class="featured-post"> <?php esc_html_e('Sticky', 'vitex'); ?></span>
        <?php } ?>
        <div class="bt-about-author clearfix">
            <div class="bt-author-avatar"><?php echo get_avatar(get_the_author_meta('ID'), 170); ?></div>
            <div class="bt-author-info">
                <h4 class="bt-title"><?php esc_html_e('About The Author', 'vitex'); ?></h4>
                <h6 class="bt-name"><?php the_author(); ?></h6>
                <?php the_author_meta('description'); ?>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}

/* Custom comment list */
function vitex_custom_comment($comment, $args, $depth){
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ('div' == $args['style']) {
        $tag = 'div ';
        $add_below = 'comment';
    } else {
        $tag = 'li ';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo esc_html($tag); ?><?php comment_class(empty($args['has_children']) ? 'bt-comment-item clearfix' : 'bt-comment-item parent clearfix') ?> id="comment-<?php comment_ID() ?>">
    <div class="bt-avatar">
        <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size']); ?>
    </div>
    <div class="bt-comment">
        <h5 class="bt-name">
            <?php echo '<span class="name">' . get_comment_author(get_comment_ID()) . '</span><span class="bt-time"> / ' . get_comment_date() . '</span>'; ?>
        </h5>
        <?php if ($comment->comment_approved == '0') : ?>
            <em class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'vitex'); ?></em>
        <?php endif; ?>
        <?php comment_text(); ?>
        <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth,
                                                          'max_depth' => $args['max_depth']))); ?>
    </div>
    <?php
}
