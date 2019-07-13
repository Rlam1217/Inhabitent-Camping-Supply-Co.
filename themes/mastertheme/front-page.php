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


<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC' , 'showposts' => 4);  // loops posts
   $posts = new WP_Query( $args ); // instantiate our object
?>

<?php if ( $posts->have_posts() ) : ?>
   <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
      <?php /* Content of the queried post results goes here */ ?>
	  <?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?> 
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>

   <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>