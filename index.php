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

  <svg class="text-snake" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 750 1334">

    <path id="text-path" d="M139.2,286.07C33.67,425,36.65,553.22,110.14,605.73c84.81,60.6,184.4,104,223.4,168.91,43.75,72.84-157,136.56-182,246.86-62,273,348.05,386.82,482,133,57.58-109.1,48.65-245.61-46.14-338.54C409.89,642,974.5,488.5,476.12,229.77,358.55,168.74,210.94,191.63,139.2,286.07Z" stroke="fff" stroke-width="1px" fill="none"/>

    <text>

      <?php $offset = 0;  ?>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <textPath xlink:href="#text-path" startOffset="<?php echo $offset ?>"><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></textPath>

        <?php $offset += 380;  ?>

      <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

    </text>

  </svg>

</main>

<?php get_footer(); ?>
