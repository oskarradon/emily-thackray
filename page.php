<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emily-thackray
 */

get_header();
?>

<main class="single-page">

  <h1 class="page-title"> <?php the_title() ?> </h1>

  <?php the_content() ?>

</main>

<?php get_footer(); ?>
