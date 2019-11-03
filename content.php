<div class="postWrapper">
	<div class="mainWrapper">
		<div class="subWrapper">
			<h1 class="sansSerif beforeAfter"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php esc_url( wp_link_pages( $linkPages ) ); ?>

			</article>
			<p class="metaContent sansSerif"><?php echo __('By ', 'poetry-laboetry'); the_author(); ?></p>
		</div>
	</div>
</div>

<div class="separator"></div>