<?php esc_html( get_header() ); ?>

<?php if ( have_posts() ) :
	while ( have_posts() ) : 
		the_post();
		esc_html( get_template_part( 'content', get_post_format() ) );
	endwhile;
	endif;
?>

<?php the_tags( $sep, $after ); ?> 

<?php comments_template(); ?>

<?php esc_html( get_footer() ); ?>

<?php esc_html( get_sidebar() ); ?>