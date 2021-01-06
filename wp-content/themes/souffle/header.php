<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package souffle
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'souffle'); ?></a>

		<header id="masthead" class="site-header">
			<?php $container_html_class = 'container'; ?>

			<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="navbar-main">

				<?php if ('container' === $container_html_class) : ?>
					<div class="container">
					<?php endif; ?>

					<?php the_custom_logo(); ?>

					<?php if (!has_custom_logo()) : ?>
						<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>
					<?php endif; ?>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-navigation" aria-controls="site-navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<?php
					wp_nav_menu([
						'theme_location' => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'site-navigation',
						'menu_class' => 'navbar-nav ml-auto', // ml-auto
						'fallback_cb' => '',
						'menu_id' => 'primary-menu',
						'depth' => 2,
						'walker' => new Souffle_WP_Bootstrap_Navwalker(),

					]);
					?>
					<?php if ($container_html_class === 'container') : ?>
					</div>
				<?php endif; ?>

			</nav>
		</header><!-- #masthead -->