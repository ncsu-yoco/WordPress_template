<?php get_header(); ?>

<div id="single">
	<div class="container">
		<div class="main-content right-sidebar">	
			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part('entry', 'title'); ?>
				
				<?php get_template_part('entry', 'meta'); ?>
	
				<?php get_template_part('entry', 'content'); ?>
			
				<?php get_template_part('entry', 'comments'); ?>
	
			<?php endwhile; endif; ?>
		</div>

		<?php get_sidebar('right'); ?>
		
	</div>
</div>

<?php get_footer(); ?>