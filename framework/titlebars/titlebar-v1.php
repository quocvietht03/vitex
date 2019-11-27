<?php
	global $vitex_options;
	$fullwidth = isset($vitex_options['titlebar_fullwidth'])&&$vitex_options['titlebar_fullwidth'] ? 'fullwidth': 'container';
	$titlebar_align = isset($vitex_options['titlebar_align']) ? $vitex_options['titlebar_align']: 'text-center';
?>
<div class="bt-titlebar bt-titlebar-v1">
	<div class="bt-titlebar-inner">
		<div class="bt-overlay"></div>
		<div class="bt-subheader">
			<div class="bt-subheader-inner <?php echo esc_attr($fullwidth); ?>">
				<div class="bt-subheader-cell bt-center">
					<div class="bt-content <?php echo esc_attr($titlebar_align); ?>">
						<div class="bt-page-title">
							<?php
								if(isset($vitex_options['titlebar_page_title_before'])&&$vitex_options['titlebar_page_title_before']&&isset($vitex_options['titlebar_page_title_before_content'])&&$vitex_options['titlebar_page_title_before_content']){
									echo '<div class="bt-before">'.$vitex_options['titlebar_page_title_before_content'].'</div>';
								}
							?>
							<h2><?php echo vitex_page_title(); ?></h2>
							<?php
								if(isset($vitex_options['titlebar_page_title_after'])&&$vitex_options['titlebar_page_title_after']&&isset($vitex_options['titlebar_page_title_after_content'])&&$vitex_options['titlebar_page_title_after_content']){
									echo '<div class="bt-after">'.$vitex_options['titlebar_page_title_after_content'].'</div>';
								}
							?>
						</div>
						<div class="bt-breadcrumb">
							<?php
								if(isset($vitex_options['titlebar_breadcrumb_before'])&&$vitex_options['titlebar_breadcrumb_before']&&isset($vitex_options['titlebar_breadcrumb_before_content'])&&$vitex_options['titlebar_breadcrumb_before_content']){
									echo '<div class="bt-before">'.$vitex_options['titlebar_breadcrumb_before_content'].'</div>';
								}
							?>
							<div class="bt-path">
								<?php
									$home_text = (isset($vitex_options['titlebar_breadcrumb_home_text'])&&$vitex_options['titlebar_breadcrumb_home_text'])?$vitex_options['titlebar_breadcrumb_home_text']: 'Home';
									$delimiter = (isset($vitex_options['titlebar_breadcrumb_delimiter'])&&$vitex_options['titlebar_breadcrumb_delimiter'])?$vitex_options['titlebar_breadcrumb_delimiter']: '-';
									
									echo vitex_page_breadcrumb($home_text, $delimiter);
								?>
							</div>
							<?php
								if(isset($vitex_options['titlebar_breadcrumb_after'])&&$vitex_options['titlebar_breadcrumb_after']&&isset($vitex_options['titlebar_breadcrumb_after_content'])&&$vitex_options['titlebar_breadcrumb_after_content']){
									echo '<div class="bt-after">'.$vitex_options['titlebar_breadcrumb_after_content'].'</div>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>