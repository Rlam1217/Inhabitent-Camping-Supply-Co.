<?php
/**
 * Template Name: Custom Full Width
 * 
 * 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area-fullwidth">
        <div class="main-container">
		<main id="main" class="site-main-fullwidth" role="main">

        <?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail( 'featured-podcast', array( 'class' => 'main-image' ) ); 
}
?>
		

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
</div>
	</div><!-- #primary -->

    <?php get_sidebar(); ?>
<?php get_footer(); ?>