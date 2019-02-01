<h1 class="sansSerif beforeAfter"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

<?php the_content(); ?>

<p class="metaContent sansSerif">Door <?php the_author(); ?> 
	<?php if(the_date()) : ?>
		<?php echo ", published" + the_date('F j, Y'); ?>
	<?php else : ?>
		<?php echo "&nbsp;"; ?>
	<?php endif; ?>
</p>

<div class="separator"></div>