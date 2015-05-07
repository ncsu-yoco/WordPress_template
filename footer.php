</div>
	<footer>
		<div class="container">
			<?php for($i=1; $i<=4; $i++): ?>
				<?php dynamic_sidebar('footer-' . $i); ?>
			<?php endfor; ?>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>