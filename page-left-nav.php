<?php
/*
Template Name: Page w/ Left Nav
*/
?>

<?php get_header(); ?>

<div id="page">
	<div class="container">
		
		<?php
		$args = array(
			'container' => 'nav',
			'container_class' => 'left-nav',
		);
		wp_nav_menu($args);
		?>
		
		<div class="main-content<?php if (is_active_sidebar('right-sidebar')) { echo ' right-sidebar'; } ?>">
	
		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	
			<h1><?php the_title(); ?></h1>
	
			<p><?php the_content(); ?></p>
	
		<?php endwhile; endif; ?>
		
		</div>

		<div class="sidebar">

			<?php get_sidebar('right'); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>