<?php
/**
 * Template Name: Single Column
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail( 'featured-podcast', array( 'class' => 'about-image' ) ); 
	
 }

?>



			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>