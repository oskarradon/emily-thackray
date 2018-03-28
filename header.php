<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emily-thackray
 */

?>
<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

		<nav>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href=" <?php the_permalink(); ?> "><?php the_post_thumbnail(); ?></a>
			<?php endwhile; else : ?>

			<?php endif; ?>
		</nav>

		<a href="<?php echo get_page_link( get_page_by_path( 'sample-page' ) ); ?>">Map</a>
	</header>
