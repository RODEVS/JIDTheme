<?php
	if (post_password_required()) {
		return;
	}
?>

	<div id="comments" class="comments-area">
		<?php if (have_comments()) : ?>
			<ol class="comment-list">
				<?php 
					wp_list_comments( array(
						'style' 	 => 'ol',
						'short_ping' => true,
						'avatar' 	 => 74,));
				?>
			</ol> <!-- Comment list -->

			<?php //Are there comments to navigate through
				if (get_comment_pages_count() > 1 && get_option('page_comments')) :
			?>
					<nav class="navigation comment-navigation" role="navigation">
						<h1 class="screen-reader-text section-heading">
						<?php _e('Comment navigation', 'JIDTheme'); ?>
						</h1>
						<div class="nav-previous">
						<?php previous_comments_link(__('&larr; Comentarios antiguos.', 'JIDTheme')); ?>
						</div>
						<div class="nav-next">
						<?php next_comments_link(__('Comentarios nuevos &rarr;', 'JIDTheme')); ?>
						</div>
					</nav> <!-- .comment-navigation -->
				<?php endif; //Check for comments navigation. ?>
			<?php if (!comments_open() && get_comments_number()) : ?>
				<p class="no-comments"><?php _e('Los comentarios están deshabilitados.', 'JIDTheme'); ?></p>
			<?php endif; ?>
		<?php endif; //Have comments ?>
		<?php comment_form() ?>
	</div>
