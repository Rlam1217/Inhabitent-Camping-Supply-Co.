<div class="green-header">
<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<main id="main" class="site-main" role="main">

<header class="page-header">
			
			<h1 class="shop-page-title">Shop Stuff</h1>
			</header><!-- .page-header -->

			<div class="product-categories"> 
				<?php   $terms = get_terms( 'Product-taxonomy' ); // returns an array of posts
                		?>
                    	<?php foreach ( $terms as $term ) { ?>
                    	<a href="<?php echo get_term_link($term)?>" class="taxonomy-title"><?php echo $term ->name; ?></a>
                  		<?php }?>
                	</div>

			<div id="primary" class="shop-content-container">
				<?php if ( have_posts() ) : ?>

			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					get_template_part( 'template-parts/content-archive-products' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
</div>
