<div class="no-results">
	<h3 class="page-title"><?php esc_html_e( 'Nothing Found', 'vitex' ); ?></h3>
	
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ){ ?>
		<p><?php echo esc_html__('Ready to publish your first post?', 'vitex').' <a href="'.esc_url( admin_url( 'post-new.php' ) ).'">'.esc_html__('Get started here', 'vitex').'</a>.'; ?></p>
	<?php }elseif ( is_search() ){ ?>

		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'vitex' ); ?></p>
		<?php get_search_form(); ?>

	<?php }else{ ?>

		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'vitex' ); ?></p>
		<?php get_search_form(); ?>

	<?php } ?>
</div>
