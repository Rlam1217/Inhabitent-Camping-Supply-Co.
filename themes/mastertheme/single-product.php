<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="product-wrapper" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="product-image-wrapper"> 
            <?php echo '<img src="' . CFS()->get( 'product_image' ) . '" alt="" />'; ?>
        </div>
        
        <div class="product-description-wrapper">
            <?php the_title( '<h1 class="product-entry-title">', '</h1>' ); ?>
            <p class="price"><?php echo CFS()->get( 'price' ); ?></p>
            <?php get_template_part( 'template-parts/content' , 'page'); ?>
            <div class="social-buttons">
                <div class="buttons-socialmedia">
                    <p><i class="fab fa-facebook-f"></i> LIKE</p>
                </div>
                <div class="buttons-socialmedia">
                    <p><i class="fab fa-twitter"></i> TWEET</p>
                </div>
                <div class="buttons-socialmedia">
                    <p><i class="fab fa-pinterest-p"></i> PIN</p>
                </div>
            </div>
        </div>
			
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
    </div><!-- #primary -->
    
    
<?php get_footer(); ?>
