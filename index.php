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

  <svg id="text-snake" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 750 1334">

    <path id="text-path" d="M75.5,377.5C50,482.66,59.84,661.15,140.44,720.16,233.05,788,254.55,793,297.5,864.5c48.17,80.2-103.19,188.55-59,305,54.68,144.08,305.36,104.65,366,3,69.59-116.66,92.79-342.19-14-442-199-186-6.25-240.55-110-404C374.5,159.5,102.24,267.24,75.5,377.5Z" stroke="fff" stroke-width="1px" fill="none"/>

    <text>

      <?php $offset = 0;  ?>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <textPath xlink:href="#text-path" startOffset="<?php echo $offset ?>"><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></textPath>

        <?php $offset += 130;  ?>

      <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

    </text>

  </svg>

</main>

<?php get_footer(); ?>
