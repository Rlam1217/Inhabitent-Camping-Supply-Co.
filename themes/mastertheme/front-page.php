<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>




	
		<main id="main" class="site-main" role="main">
		<div id="primary" class="fullwidth-content-area">
	<?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail( 'featured-podcast', array( 'class' => 'main-image' ) ); 
}
?></div>

        

		<div class= "main-content">
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>