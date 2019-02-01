<?php get_header(); ?>

<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		get_template_part( 'content', get_post_format() );
	endwhile;
endif; ?>

<?php comments_template(); ?>

<?php get_footer(); ?>