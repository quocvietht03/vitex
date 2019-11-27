<?php
// Portfolio
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Portfolio', 'vitex'),
    'id'     => 'bt_portfolio',
    'icon'   => 'el el-folder-open',
    'fields' => array(
        array(
            'id'       => 'portfolio_fullwidth',
            'type'     => 'switch',
            'title'    => esc_html__('Full Width (100%)', 'vitex'),
            'subtitle' => esc_html__('Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'portfolio_fullwidth_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Full Width Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right padding the content area display.', 'vitex'),
            'default'  => array(
                'padding-left'  => '15px',
                'padding-right' => '15px'
            ),
            'required' => array('portfolio_fullwidth', '=', '1'),
            'output'   => array('.tax-fw-portfolio-category .bt-main-content')
        ),
        array(
            'id'            => 'portfolio_columns',
            'type'          => 'slider',
            'title'         => esc_html__('Columns', 'vitex'),
            'subtitle'      => esc_html__('Controls the number columns of list items.', 'vitex'),
            'default'       => 1,
            'min'           => 1,
            'step'          => 1,
            'max'           => 4,
            'display_value' => 'text'
        ),
        array(
            'id'            => 'portfolio_sidebar_width',
            'type'          => 'slider',
            'title'         => esc_html__('Sidebar Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the left/right sidebar.', 'vitex'),
            'default'       => 3,
            'min'           => 1,
            'step'          => 1,
            'max'           => 5,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'portfolio_titlebar',
            'type'     => 'switch',
            'title'    => esc_html__('Title Bar', 'vitex'),
            'subtitle' => esc_html__('Turn on to display the title bar.', 'vitex'),
            'default'  => true
        ),
        array(
            'id'       => 'portfolio_titlebar_bg',
            'type'     => 'background',
            'title'    => esc_html__('Title Bar Background', 'vitex'),
            'subtitle' => esc_html__('Control the background of the title bar.', 'vitex'),
            'default'  => array(
                'background-color' => '#333333',
            ),
            'required' => array('portfolio_titlebar', '=', '1'),
            'output'   => array('.tax-fw-portfolio-category .bt-titlebar .bt-titlebar-inner'),
        ),
        array(
            'id'       => 'portfolio_content_sapce',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Main Content Space', 'vitex'),
            'subtitle' => esc_html__('Control the top/bottom padding the content.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-bottom' => '0px'
            ),
            'output'   => array('.tax-fw-portfolio-category .bt-main-content')
        ),
        array(
            'id'    => 'portfolio_post_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Post Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change the post on the portfolio page.', 'vitex')
        ),
        array(
            'id'       => 'portfolio_title',
            'type'     => 'switch',
            'title'    => esc_html__('Post Title', 'vitex'),
            'subtitle' => esc_html__('Turn on to display the post title.', 'vitex'),
            'default'  => true
        ),
        array(
            'id'             => 'portfolio_title_font',
            'type'           => 'typography',
            'title'          => esc_html__('Post Title Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography post title.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '28px',
                'font-family'    => 'Poppins',
                'font-weight'    => '700',
                'line-height'    => '40px',
                'letter-spacing' => '0'
            ),
            'required'       => array('portfolio_title', '=', '1'),
            'output'         => array('.tax-fw-portfolio-category .bt-post-item .bt-title')
        ),
        array(
            'id'       => 'portfolio_featured',
            'type'     => 'switch',
            'title'    => esc_html__('Featured Image / Video', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the image / video.', 'vitex'),
            'default'  => true
        ),
        array(
            'id'       => 'portfolio_image_size',
            'type'     => 'text',
            'title'    => esc_html__('Image Size', 'vitex'),
            'subtitle' => esc_html__('Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'vitex'),
            'default'  => 'full',
            'required' => array('portfolio_featured', '=', '1')
        ),
        array(
            'id'       => 'portfolio_meta',
            'type'     => 'switch',
            'title'    => esc_html__('Post Meta Field', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the meta field.', 'vitex'),
            'default'  => true
        ),
        array(
            'id'             => 'portfolio_meta_font',
            'type'           => 'typography',
            'title'          => esc_html__('Post Meta Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography post meta.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '400',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'required'       => array('portfolio_meta', '=', '1'),
            'output'         => array('.tax-fw-portfolio-category .bt-post-item .bt-meta > li')
        ),
        array(
            'id'       => 'portfolio_meta_author',
            'type'     => 'switch',
            'title'    => esc_html__('Post Meta Field Author', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the meta field author.', 'vitex'),
            'default'  => true,
            'required' => array('portfolio_meta', '=', '1'),
        ),
        array(
            'id'       => 'portfolio_meta_date',
            'type'     => 'switch',
            'title'    => esc_html__('Post Meta Field Date', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the meta field author.', 'vitex'),
            'default'  => true,
            'required' => array('portfolio_meta', '=', '1'),
        ),
        array(
            'id'       => 'portfolio_meta_category',
            'type'     => 'switch',
            'title'    => esc_html__('Post Meta Field Category', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the meta field category.', 'vitex'),
            'default'  => true,
            'required' => array('portfolio_meta', '=', '1'),
        ),
        array(
            'id'       => 'portfolio_excerpt',
            'type'     => 'switch',
            'title'    => esc_html__('Post Excerpt', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the excerpt.', 'vitex'),
            'default'  => true
        ),
        array(
            'id'       => 'portfolio_excerpt_length',
            'type'     => 'text',
            'title'    => esc_html__('Post Excerpt Length', 'vitex'),
            'subtitle' => esc_html__('Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'vitex'),
            'default'  => '55',
            'required' => array('portfolio_excerpt', '=', '1'),
        ),
        array(
            'id'       => 'portfolio_excerpt_more',
            'type'     => 'text',
            'title'    => esc_html__('Post Excerpt More', 'vitex'),
            'subtitle' => esc_html__('Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'vitex'),
            'default'  => '[...]',
            'required' => array('portfolio_excerpt', '=', '1'),
        ),
        array(
            'id'       => 'portfolio_readmore',
            'type'     => 'switch',
            'title'    => esc_html__('Read More button', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the read more button.', 'vitex'),
            'default'  => true
        ),
        array(
            'id'             => 'portfolio_readmore_font',
            'type'           => 'typography',
            'title'          => esc_html__('Post Read More Button Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography post read more button.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '14px',
                'font-family'    => 'Poppins',
                'font-weight'    => '700',
                'line-height'    => '24px',
                'letter-spacing' => '0'
            ),
            'required'       => array('portfolio_readmore', '=', '1'),
            'output'         => array('.tax-fw-portfolio-category .bt-post-item .bt-readmore')
        ),
        array(
            'id'       => 'portfolio_readmore_label',
            'type'     => 'text',
            'title'    => esc_html__('Post Meta Field Category Label', 'vitex'),
            'subtitle' => esc_html__('Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'vitex'),
            'default'  => 'Read More',
            'required' => array('portfolio_readmore', '=', '1'),
        ),
        array(
            'id'       => 'portfolio_article_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Post Space', 'vitex'),
            'subtitle' => esc_html__('Control the bottom margin the post.', 'vitex'),
            'default'  => array(
                'margin-bottom' => '40px'
            ),
            'output'   => array('.tax-fw-portfolio-category .bt-post-item')
        ),

    )
));

Redux::setSection($opt_name, array(
    'title'      => esc_html__('Single Portfolio', 'vitex'),
    'id'         => 'bt_single_portolio',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'single_portolio_fullwidth',
            'type'     => 'switch',
            'title'    => esc_html__('Full Width (100%)', 'vitex'),
            'subtitle' => esc_html__('Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'       => 'single_portolio_fullwidth_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'top'      => false,
            'bottom'   => false,
            'title'    => esc_html__('Full Width Space', 'vitex'),
            'subtitle' => esc_html__('Control the left/right padding the content area display.', 'vitex'),
            'default'  => array(
                'padding-left'  => '15px',
                'padding-right' => '15px'
            ),
            'required' => array('single_portolio_fullwidth', '=', '1'),
            'output'   => array('.single-fw-portfolio .bt-main-content')
        ),
        array(
            'id'            => 'single_portolio_sidebar_width',
            'type'          => 'slider',
            'title'         => esc_html__('Sidebar Width', 'vitex'),
            'subtitle'      => esc_html__('Controls the width of the left/right sidebar.', 'vitex'),
            'default'       => 3,
            'min'           => 1,
            'step'          => 1,
            'max'           => 5,
            'display_value' => 'text'
        ),
        array(
            'id'       => 'single_portfolio_titlebar',
            'type'     => 'switch',
            'title'    => esc_html__('Title Bar', 'vitex'),
            'subtitle' => esc_html__('Turn on to display the title bar.', 'vitex'),
            'default'  => true
        ),
        array(
            'id'       => 'single_portolio_titlebar_bg',
            'type'     => 'background',
            'title'    => esc_html__('Title Bar Background', 'vitex'),
            'subtitle' => esc_html__('Control the background of the title bar.', 'vitex'),
            'default'  => array(
                'background-color' => '#333333',
            ),
            'required' => array('single_portfolio_titlebar', '=', '1'),
            'output'   => array('.single-fw-portfolio .bt-titlebar .bt-titlebar-inner'),
        ),
        array(
            'id'       => 'single_portfolio_content_sapce',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'padding',
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Main Content Space', 'vitex'),
            'subtitle' => esc_html__('Control the top/bottom padding the content.', 'vitex'),
            'default'  => array(
                'padding-top'    => '0px',
                'padding-bottom' => '0px'
            ),
            'output'   => array('.single-fw-portfolio .bt-main-content')
        ),
        array(
            'id'    => 'single_portfolio_info',
            'type'  => 'info',
            'style' => 'info',
            'title' => esc_html__('Post Settings', 'vitex'),
            'desc'  => esc_html__('This is the options you can change the post on the blog page or archive pages.', 'vitex')
        ),
        array(
            'id'       => 'single_portfolio_title',
            'type'     => 'switch',
            'title'    => esc_html__('Post Title', 'vitex'),
            'subtitle' => esc_html__('Turn on to display the post title.', 'vitex'),
            'default'  => false
        ),
        array(
            'id'             => 'single_portfolio_title_font',
            'type'           => 'typography',
            'title'          => esc_html__('Post Title Typography', 'vitex'),
            'subtitle'       => esc_html__('These settings control the typography post title.', 'vitex'),
            'subsets'        => false,
            'letter-spacing' => true,
            'text-align'     => false,
            'text-transform' => true,
            'color'          => false,
            'fonts'          => $vitex_localfonts,
            'default'        => array(
                'font-size'      => '24px',
                'font-family'    => 'Poppins',
                'font-weight'    => '700',
                'line-height'    => '28px',
                'letter-spacing' => '0'
            ),
            'required'       => array('single_portfolio_title', '=', '1'),
            'output'         => array('.single-fw-portfolio .fw-portfolio .bt-title')
        ),
        array(
            'id'       => 'single_portfolio_image_size',
            'type'     => 'text',
            'title'    => esc_html__('Image Size', 'vitex'),
            'subtitle' => esc_html__('Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'vitex'),
            'default'  => 'full'
        ),
        array(
            'id'       => 'single_portfolio_share',
            'type'     => 'switch',
            'title'    => esc_html__('Post Shares', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the share.', 'vitex'),
            'default'  => true
        ),
        array(
            'id'       => 'single_portfolio_share_label',
            'type'     => 'text',
            'title'    => esc_html__('Post Share Label', 'vitex'),
            'subtitle' => esc_html__('Please, Enter label of the share. Leave empty to use "Share:" label.', 'vitex'),
            'default'  => 'Share',
            'required' => array('single_portfolio_share', '=', '1'),
        ),
        array(
            'id'       => 'single_portfolio_share_facebook',
            'type'     => 'switch',
            'title'    => esc_html__('Facebook', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the facebook share.', 'vitex'),
            'default'  => true,
            'required' => array('single_portfolio_share', '=', '1'),
        ),
        array(
            'id'       => 'single_portfolio_share_twitter',
            'type'     => 'switch',
            'title'    => esc_html__('Twitter', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the twitter share.', 'vitex'),
            'default'  => true,
            'required' => array('single_portfolio_share', '=', '1'),
        ),
        array(
            'id'       => 'single_portfolio_share_google_plus',
            'type'     => 'switch',
            'title'    => esc_html__('Google Plus', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the google plus share.', 'vitex'),
            'default'  => true,
            'required' => array('single_portfolio_share', '=', '1'),
        ),
        array(
            'id'       => 'single_portfolio_share_linkedin',
            'type'     => 'switch',
            'title'    => esc_html__('Linkedin', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the linkedin share.', 'vitex'),
            'default'  => true,
            'required' => array('single_portfolio_share', '=', '1'),
        ),
        array(
            'id'       => 'single_portfolio_share_pinterest',
            'type'     => 'switch',
            'title'    => esc_html__('Pinterest', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the pinterest share.', 'vitex'),
            'default'  => true,
            'required' => array('single_portfolio_share', '=', '1'),
        ),
        array(
            'id'       => 'single_portolio_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Post Space', 'vitex'),
            'subtitle' => esc_html__('Control the bottom margin the post.', 'vitex'),
            'default'  => array(
                'margin-bottom' => '30px'
            ),
            'output'   => array('.single-fw-portfolio .fw-portfolio')
        ),
        array(
            'id'       => 'single_portfolio_related_post',
            'type'     => 'switch',
            'title'    => esc_html__('Related Post', 'vitex'),
            'subtitle' => esc_html__('Turn on to show the related post.', 'vitex'),
            'default'  => true
        ),
        array(
            'id'       => 'single_portfolio_related_post_label',
            'type'     => 'text',
            'title'    => esc_html__('Related Post Label', 'vitex'),
            'subtitle' => esc_html__('Please, Enter label of the related post. Leave empty to use "Portfolio Related" label.', 'vitex'),
            'default'  => 'Portfolio Related',
            'required' => array('single_portfolio_related_post', '=', '1'),
        ),
        array(
            'id'       => 'single_portfolio_related_post_count',
            'type'     => 'text',
            'title'    => esc_html__('Related Post Count', 'vitex'),
            'subtitle' => esc_html__('Please, Enter post count of the related post. Leave empty to use "3" for post count.', 'vitex'),
            'default'  => '3',
            'required' => array('single_portfolio_related_post', '=', '1'),
        ),
        array(
            'id'            => 'single_portfolio_related_post_per_row',
            'type'          => 'slider',
            'title'         => esc_html__('Related Post Per Row', 'vitex'),
            'subtitle'      => esc_html__('Controls the post per row of the related post.', 'vitex'),
            'default'       => 3,
            'min'           => 1,
            'step'          => 1,
            'max'           => 4,
            'display_value' => 'text',
            'required'      => array('single_portfolio_related_post', '=', '1'),
        ),
        array(
            'id'       => 'single_portfolio_related_space',
            'type'     => 'spacing',
            'units'    => array('em', 'px', '%'),
            'mode'     => 'margin',
            'top'      => false,
            'right'    => false,
            'left'     => false,
            'title'    => esc_html__('Related Post Space', 'vitex'),
            'subtitle' => esc_html__('Control the bottom margin the related post.', 'vitex'),
            'default'  => array(
                'margin-bottom' => '30px'
            ),
            'output'   => array('.single-fw-portfolio .bt-related')
        ),
    )
));
