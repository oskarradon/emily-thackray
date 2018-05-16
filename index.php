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
  <div class="inner">
    <svg class="text-snake" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 717.33 304.67">

      <path id="text-path" d="M55.8,201.6c33.07,1.93,246.6-104.26,278.29-98.47S352,199.67,376.8,201.6,627.53,99.27,664.72,103.13s24.8,49.05,24.8,49.05-46.16,121.28-83.35,121.28S479.42,47.56,443.6,39.84,357.27,149.3,357.27,149.3,314.11,265,276.91,265,150.17,39.13,114.35,31.41s-78.9,90.47-85,116.71S22.74,199.67,55.8,201.6Z" stroke="fff" stroke-width="1px" fill="none"/>

      <text>
        <textPath class="text1" xlink:href="#text-path" startOffset="0">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a xlink:href=" <?php the_permalink(); ?> " href=" <?php the_permalink(); ?> "><?php the_title(); ?></a><?php echoSpaces() ?>
          <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        </textPath>

        <textPath class="text2" xlink:href="#text-path" startOffset="-100%">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a xlink:href=" <?php the_permalink(); ?> " href=" <?php the_permalink(); ?> "><?php the_title(); ?></a><?php echoSpaces() ?>
          <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        </textPath>
      </text>

    </svg>
  </div>

</main>

<?php get_footer(); ?>
