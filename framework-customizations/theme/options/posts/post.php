<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'post_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'post_general' => array(
				'title' => esc_html__('General', 'vitex'),
				'type' => 'tab',
				'options' => array(
					'titlebar_background' => array(
						'label' => esc_html__( 'Title Bar Background', 'vitex' ),
						'desc'  => esc_html__( 'Upload title bar background image.', 'vitex' ),
						'type'  => 'upload',
					),
				),
			),
			'post_gallery' => array(
				'title' => esc_html__('Gallery', 'vitex'),
				'type' => 'tab',
				'options' => array(
					'gallery_images' => array(
						'label' => esc_html__( 'Add Images', 'vitex' ),
						'desc'  => esc_html__( 'Upload gallery images.', 'vitex' ),
						'type'  => 'multi-upload',
					),
				),
			),
			'post_video' => array(
				'title' => esc_html__('Video', 'vitex'),
				'type' => 'tab',
				'options' => array(
					'video_url' => array(
						'label' => esc_html__( 'Video Url', 'vitex' ),
						'desc'  => esc_html__( 'Please video url(vimeo/youtube/mp4). Ex: https://www.youtube.com/embed/YE7VzlLtp-4?rel=0', 'vitex' ),
						'type'  => 'text',
					),
					'video_poster' => array(
						'label' => esc_html__( 'Add Image', 'vitex' ),
						'desc'  => esc_html__( 'Upload video poster image.', 'vitex' ),
						'type'  => 'upload',
					),
					'video_caption' => array(
						'label' => esc_html__( 'Video Caption', 'vitex' ),
						'desc'  => esc_html__( 'Please video caption.', 'vitex' ),
						'type'  => 'text',
					),
				),
			),
			'post_audio' => array(
				'title' => esc_html__('Audio', 'vitex'),
				'type' => 'tab',
				'options' => array(
					'audio_type' => array(
						'type' => 'multi-picker',
						'label' => false,
						'desc' => false,
						'picker' => array(
							'type' => array(
								'type' => 'short-select',
								'label' => esc_html__('Audio Types', 'vitex'),
								'desc' => esc_html__('Choose the audio type.', 'vitex'),
								'value' => 'html5',
								'choices' => array(
									'html5' => esc_html__('HTML5', 'vitex'),
									'embed' => esc_html__('Embed', 'vitex')
								),
							),
						),
						'choices' => array(
							'html5' => array(
								'format' => array(
									'type'  => 'short-select',
									'value' => 'mp3',
									'label' => esc_html__('Format', 'vitex'),
									'desc'  => esc_html__('Choose the audio format.', 'vitex'),
									'choices' => array(
										'audio/mpeg' => esc_html__('MP3', 'vitex'),
										'audio/ogg' => esc_html__('Ogg', 'vitex'),
										'audio/wav' => esc_html__('Wav', 'vitex')
									)
								),
								'src' => array(
									'label' => esc_html__('Src', 'vitex'),
									'desc' => esc_html__('Enter url audio (Ex: http://yourdomain.com/audio.mp3)', 'vitex'),
									'type' => 'text',
									'value' => ''
								),
							),
							'embed' => array(
								'iframe' => array(
									'label' => esc_html__('Embed', 'vitex'),
									'desc' => esc_html__('Please enter embed code(SoundCloud, ...)', 'vitex'),
									'type' => 'textarea',
									'value' => '',
								),
							),
							
						),
					),
				),
			) ,
			'post_quote' => array(
				'title' => esc_html__('Quote', 'vitex'),
				'type' => 'tab',
				'options' => array(
					'quote_text' => array(
						'label' => esc_html__( 'Quote Text', 'vitex' ),
						'desc'  => esc_html__( 'Please enter quote.', 'vitex' ),
						'type'  => 'textarea',
					),
				),
			),
			'post_link' => array(
				'title' => esc_html__('Link', 'vitex'),
				'type' => 'tab',
				'options' => array(
					'url' => array(
						'label' => esc_html__( 'Url', 'vitex' ),
						'desc'  => esc_html__( 'Please enter url.', 'vitex' ),
						'type'  => 'text',
					),
				),
			),
			
		),
	),
	
);
