<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package souffle
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>
					<?php echo apply_filters('the_title', get_the_title(get_option('page_for_posts'))); ?>
				</h1>
			</div>
		</div>
		<div class="row">


			<?php
			if (have_posts()) :


				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

					get_template_part('template-parts/content', get_post_type());

				endwhile;

				//the_posts_navigation();
				souffle_pagination();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
			?>
		</div>
	</div>
</main><!-- #main -->

<div class="widgets-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php

get_footer();
