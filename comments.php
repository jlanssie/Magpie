<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>

	<ol class="commentlist">
		<?php
		wp_list_comments(
			array(
				'style'    => 'ol',
			)
		);
		?>
	</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'poppoetryplace'); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'poppoetryplace' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'poppoetryplace' ) ); ?></div>
		</nav>

		<?php endif; ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>

		<p class="nocomments"><?php _e( 'Comments are closed.', 'poppoetryplace' ); ?></p>

		<?php endif; ?>

	<?php endif; ?>

	<?php $comments_args = array(
		'label_submit' => __('Submit', 'poppoetryplace'),
	); ?>

	<?php if ( !is_user_logged_in() ) : 
		comment_form( $comments_args );
		else :  $comments_args[ 'comment_field' ] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Your comment', 'noun', 'poppoetryplace' ) . '</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>';
			comment_form( $comments_args );  
		endif
	?>
</div>