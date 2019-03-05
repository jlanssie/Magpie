<?php get_header(); ?>

<?php if ( have_posts() ) :
	while ( have_posts() ) : 
		the_post();
		get_template_part( 'content', get_post_format() );
	endwhile;
?> 

	<nav>
		<ul class="pager">
			<?php
			    if($link = get_previous_posts_link()) {
			        echo '<li class="previous">'.get_previous_posts_link( '<p>Vorige</p>' ).'</li>';}
			?>
			<?php
				if($link = get_next_posts_link()) {
			        echo '<li class="next">'.get_next_posts_link( '<p>Volgende</p>' ).'</li>';}
			?>
		</ul>
	</nav>

<?php endif; ?>

<?php get_footer(); ?>

<?php get_sidebar(); ?>