<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package souffle
 */

?>

<footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="site-info">

					<!--<span class="sep"> | </span> -->
					<?php
					echo '© ' . date('Y') . ' ' . get_bloginfo('name') . ' ' . __('All right reserved.', 'souffle')
					?>
				</div><!-- .site-info -->
			</div>
			<div class="col-md-8">
				<?php
				wp_nav_menu([
					'theme_location' => 'footer',
					'container_class' => null,
					'container_id' => null,
					'menu_class' => 'footer-menu', // ml-auto
					'fallback_cb' => null,
					'menu_id' => 'footer-menu',
					'depth' => 2,
					//'walker' => '',
				]);
				
				?>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>