<?php get_header(); ?>
<div class="container">

	<div class="main-content right-sidebar">
		<?php
		    //get thumbnails for the featured items 
			if (have_posts()) :
				$no_featured_post = 3;
			    $max_post_title_length = 27;
			    $max_post_content_length = 90;
			    $i = 0;
			    echo '<div class="featured_posts">';
			    // Specify location of Javascript file
			    $javascript_path=get_template_directory_uri().'/js/feature_item.js';
			    echo '<script type="text/javascript" src="'.$javascript_path.'"></script>';
			    echo '<h3>Featured Posts</h3>';
				while ( $no_featured_post > 0 && have_posts() ) :
					the_post();
					if ( has_post_thumbnail() ) {
						if($i == 0) :
							echo '<ul id="featured_container">';
						endif;
						echo '<li class="featured_item">';
						echo '<a href="' . get_the_permalink() . '">';
						$title = get_the_title();
						if( strlen($title) > $max_post_title_length) :
							$title = substr(get_the_title(), 0, $max_post_title_length) . "...";
						endif;
						echo '<h3>' . $title . '</h3>';
				    	the_post_thumbnail();
				    	// Filters out only text content.
				    	// Removes images(if present) from the content
				    	// Trims long text to fit the box
			            $content = get_the_content();
                        $content = preg_replace('/(<)([img])(\w+)([^>]*>)/', '', $content);
                        $content = '<br>'.$content;
                        if ( strlen($content) > $max_post_content_length ) :
                        	$content = substr($content, 0, $max_post_content_length + $max_post_post_length - 2*strlen($title) )."...";
                        endif;
                        echo $content;
				    	echo '</a></li>';
				    	$i++;
				    }
				endwhile;
				if($i == 0) :
					echo '<h4>No Featured Posts at this time.</h4>';
				    echo '<script type="text/javascript"> disable_feature_list() </script>';
				else :
					echo '<ul>';
				endif;
				echo '</div><hr>';
			endif;
		?>
		<?php 
            // set the result iterator to starting point
            rewind_posts();
        ?>
		<?php
		    // retrieve all posts
			if (have_posts()) :
				$no_featured_post = 5;
				while ( have_posts() ) :
					the_post();
					echo '<h2><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
				  	echo '<p>' . get_the_content() . '</p>';
				endwhile;
			endif;
		?>

	</div>

	<?php get_sidebar('right'); ?>

</div>

<?php get_footer(); ?>