<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package emily-thackray
 */

get_header();
?>

<main>
	<h1 class="page-title"> <?php the_title() ?> </h1>

	<?php the_content() ?>

	<a href="/" class="more-projects-link">More projects...</a>
</main>

<?php get_footer(); ?>
