<?php esc_html( get_header() ); ?>

<?php if ( have_posts() ) :
	while ( have_posts() ) : 
		the_post();
		esc_html( get_template_part( 'content', get_post_format() ) );
	endwhile;
	endif;
?>

<div class="mainWrapper">
	<div class="subWrapper">

	<?php the_tags( $after ); ?> 

	<?php comments_template(); ?>

	</div>
</div>

<?php esc_html( get_footer() ); ?>

<?php esc_html( get_sidebar() ); ?>