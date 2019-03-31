<?php esc_html( get_header() ); ?>

<?php if ( have_posts() ) :
	while ( have_posts() ) : 
		the_post();
		esc_html( get_template_part( 'content', get_post_format() ) );
	endwhile;
?>
 
	<nav>
		<ul class="pager">
			<?php
			    if($link = get_previous_posts_link()) {
			        echo previous_posts_link( __('Previous', 'poppoetryplace'));
			    }
			?>
			<?php
				if($link = get_next_posts_link()) {
			        echo next_posts_link( __('Next', 'poppoetryplace'));
			    }
			?>
		</ul>
	</nav>

<?php endif; ?>

<?php esc_html( get_footer() ); ?>