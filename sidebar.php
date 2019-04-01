<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

	<div class="sidebarWrapper">
		<div class="mainWrapper">
			<div class="subWrapper">
				<div id="sidebar">
					<?php dynamic_sidebar( 'sidebar' ); ?>
				</div>
			</div>
		</div>
	</div>

<?php endif; ?>