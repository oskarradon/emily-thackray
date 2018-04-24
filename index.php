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

<main class="undulating-text">

  <svg class="text-snake" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 647 1118">

    <path id="text-path" d="M87.2,100.07C-18.33,239-15.35,367.22,58.14,419.73c84.81,60.6,184.4,104,223.4,168.91,43.75,72.84-157,136.56-182,246.86-62,273,348.05,386.82,482,133C639.08,859.4,630.15,722.89,535.36,630,357.89,456,922.5,302.5,424.12,43.77,306.55-17.26,158.94,5.63,87.2,100.07Z" stroke="fff" stroke-width="1px" fill="none"/>

    <text>
      <textPath class="text1" xlink:href="#text-path" startOffset="0">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </textPath>

      <textPath class="text2" xlink:href="#text-path" startOffset="-100%">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </textPath>
    </text>

  </svg>

</main>

<?php get_footer(); ?>
