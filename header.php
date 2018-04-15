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
	<link href="https://fonts.googleapis.com/css?family=Galdeano|Kavivanar|Macondo" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<header>
			<a class="blog-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

			<nav class="page-nav">
				<?php $pages = new WP_Query( array( 'post_type' => 'page','posts_per_page' => 10, 'no_found_rows'  => true,) );

					if ( $pages->have_posts() ) : while ( $pages->have_posts() ) : $pages->the_post(); ?>
						<a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</nav>

			<nav class="project-nav">
				<?php
				$the_query = new WP_Query( array(
				    'post_type' => 'post',
				    'posts_per_page'=>-1
				) );

				if ( $the_query->have_posts() ) {
			    while ( $the_query->have_posts() ) {
		        $the_query->the_post();

		        echo '<a href="'.get_permalink( get_the_id() ).'">';
		        echo get_the_post_thumbnail( get_the_id() );
		        echo '</a>';
			    }
				}
				wp_reset_postdata();
				?>
			</nav>
		</header>
