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
 * @package emily-thackray
 */

get_header();
?>

<?php

function echoSpaces () {
  $post_count = wp_count_posts();
  $spaces = "&nbsp;";
  if ( $post_count <= 8 ) {
    echo str_repeat($spaces, 6);
  } elseif ( $post_count <= 10 ) {
    echo str_repeat($spaces, 4);
  } elseif ( $post_count <= 12 ) {
    echo str_repeat($spaces, 2);
  }
}

?>
<main class="undulating-text">

  <svg class="text-snake" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 809 1215">

    <path id="text-path" d=M170.2,152.07C64.67,291,67.65,419.22,141.14,471.73c84.81,60.6,184.4,104,223.4,168.91,43.75,72.84-157,136.56-182,246.86-62,273,348,386.82,482,133C722.08,911.4,713.15,774.89,618.36,682,440.89,508,1005.5,354.5,507.12,95.77,389.55,34.74,241.94,57.63,170.2,152.07Z" stroke="fff" stroke-width="1px" fill="none"/>

    <text>



      <textPath class="text1" xlink:href="#text-path" startOffset="0">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a><?php echoSpaces() ?>
        <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </textPath>

      <textPath class="text2" xlink:href="#text-path" startOffset="-100%">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a><?php echoSpaces() ?>
        <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </textPath>
    </text>

  </svg>

</main>

<?php get_footer(); ?>
