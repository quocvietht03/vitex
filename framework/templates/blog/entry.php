<article <?php post_class(); ?>>
	<div class="bt-post-item">
		<?php
			echo vitex_post_title_render();
			echo vitex_post_media_render();
			echo vitex_post_meta_render();
			echo vitex_post_content_render();
		?>
	</div>
</article>
