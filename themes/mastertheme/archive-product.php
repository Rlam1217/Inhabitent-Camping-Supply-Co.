<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			
			<h1 class="page-title">Shop Stuff</h1>
			</header>

			<div class="product-categories"> 
			<?php   $terms = get_terms( 'Product-taxonomy' ); // returns an array of posts
                		?>
                    	<?php foreach ( $terms as $term ) { ?>
                    	<a href="<?php echo get_term_link($term)?>" class="taxonomy-title"><?php echo $term ->name; ?></a>
                  		<?php }?>
                	</div>
			<!-- .page-header -->
			

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-archive' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
