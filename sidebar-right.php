<?php if ( is_active_sidebar('right-sidebar') ) : ?>
	<div class="sidebar">
		<aside id="right-sidebar" class="sidebar" role="complementary">
			<?php dynamic_sidebar('right-sidebar'); ?>
		</aside>
	</div>
<?php endif; ?>