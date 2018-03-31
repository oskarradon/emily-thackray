<?php
/**
 * The template for the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
 *
 * @package emily-thackray
 */

get_header();
?>

<main class="undulating-text">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <p><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></p>
  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
