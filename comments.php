<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<!--<h2 class="comments-title">Bullshit</h2>-->

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
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation'); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentytwelve' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;' ) ); ?></div>
		</nav>
		<?php endif; ?>

		<?php

		if ( ! comments_open() && get_comments_number() ) :
			?>
		<p class="nocomments"><?php _e( 'Comments are closed.' ); ?></p>
		<?php endif; ?>

	<?php endif; ?>

	<?php $comments_args = array('label_submit'=>'Versturen'); ?>

	<?php if ( !is_user_logged_in() ) : ?>

		<?php comment_form( $comments_args ); ?>         

	<?php else : ?>

		<?php $comments_args[ 'comment_field' ] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Je bullshit', 'noun', 'textdomain' ) . '</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>'; ?>

	    <?php comment_form( $comments_args ); ?> 

	<?php endif ?>

</div>