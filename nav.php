<?php
	// Arguments for requesting nav
	$args = array(
		'theme_location'  => 'primary',
		'menu'            => 'primary',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);
?>

<nav>
	<?php //wp_nav_menu($args); ?>
	<img src="http://placehold.it/1500x50/cc0000" class="img-responsive" />
</nav>