<?php 
	global $vitex_options;
	
?>
<div class="bt-menu-toggle"></div>
<header id="bt_header" class="bt-header bt-header-vertical">
	
	<div class="bt-header-inner">
		<div class="bt-logo">
			<?php
				$logo = isset($vitex_options['hvertical_logo']['url'])?$vitex_options['hvertical_logo']['url']:'';
				
				$logo_height = (isset($vitex_options['hvertical_logo_height'])&&$vitex_options['hvertical_logo_height'])?$vitex_options['hvertical_logo_height']:'24';
				
				vitex_logo($logo, $logo_height); 
			?>
		</div>
		
		<div class="bt-vertical-menu-wrap">
			<?php
				$menu_assign = isset($vitex_options['hvertical_menu_assign'])&&($vitex_options['hvertical_menu_assign'] != 'auto')?$vitex_options['hvertical_menu_assign']:'';
				vitex_nav_menu($menu_assign, 'main_navigation', 'bt-menu-list');
			?>
		</div>
		
		<div class="bt-sidebar">
			<?php
				if(isset($vitex_options['hvertical_content_bottom_element'])&&$vitex_options['hvertical_content_bottom_element']&&isset($vitex_options['hvertical_content_bottom_element'])&&$vitex_options['hvertical_content_bottom_element']){
					echo '<div class="bt-menu-content-right">';
						foreach($vitex_options['hvertical_content_bottom_element'] as $sidebar_id){
							dynamic_sidebar( $sidebar_id );
						}
					echo '</div>'; 
				}
			?>
		</div>
		
	</div>
		
</header>