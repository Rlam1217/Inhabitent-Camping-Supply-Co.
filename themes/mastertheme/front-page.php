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

				 <?php //get_template_part( 'template-parts/content', 'page' ); ?> 
				 <?php the_content() ?>

			<?php endwhile; // End of the loop. ?>

</div>


<h2>Shop Stuff</h2>
<div class="product-info-container">
	<?php
   		$args = array( 'post_type' => 'post', 'order' => 'ASC' );  // loops posts
	?>
	<?php   $terms = get_terms( 'Product-taxonomy', $args ); ?> 
	<?php foreach ( $terms as $term ) { ?>
						<div class="product-type-wrapper">
							<div class="product-icon">
								<?php echo '<img src="' . get_template_directory_uri() . '/' . 'images/product-type-icons/' . $term->slug . '.svg' . '" alt="" />'; ?>
							</div>
							<div class="product-description">
						  		<p><?php echo $term->description; ?></p>
						  	</div>
						  	<div class="product-button-wrapper">
						  		<div class="shop-button">
						  			<a href="<?php echo get_term_link($term);?> "><?php echo $term->name ;?> Stuff</a>
						  		</div>
							</div>					
						</div>
	<?php } ;?>
</div>
							
                    	
<h2>Inhabitent Journal</h2>
<div class="journal-container">

<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC' , 'showposts' => 3);  // loops posts
   $posts = new WP_Query( $args ); // instantiate our object
?>


<?php if ( $posts->have_posts() ) : ?>

   <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

   
   <div class="journal-thumbnail-wrapper">
	  
      <?php /* Content of the queried post results goes here */ ?>
	  <?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?> 
		<?php endif; ?>
		

		<div class="frontpage-entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
			<?php echo '<a href="' . get_post_permalink( $id ) . '">'; ?> <?php the_title( '<h3 class="frontpage-entry-title">', '</h3>' ); ?></a>
		
			
	
			
			
			<?php // echo get_post_permalink( $id ); ?>
			
			
			<div class="read-button"><?php echo '<a href="' . get_post_permalink( $id ) . '">'; ?>Read Entry</a>
			</div>
			
			
		
			
		</div><!-- .entry-meta -->


		</div>
		
		
   <?php endwhile; ?>
  
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>


</div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>