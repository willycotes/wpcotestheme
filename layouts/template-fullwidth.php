<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Full width
 *
 * @package willydevtheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) :
				the_post();

				do_action( 'willydevtheme_loop_before' );

				get_template_part( 'template-parts/content/content', 'page' );

				/**
				 * @hooked
				 */
				do_action( 'willydevtheme_loop_after' );

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
