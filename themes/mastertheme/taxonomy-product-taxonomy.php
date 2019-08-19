<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */


get_header(); ?>

		<main id="main" class="site-main" role="main">
			<header class="page-header">
				<?php $taxonomy = get_queried_object(); ?>
				<h1 class="page-title"><?php echo $taxonomy->name; ?></h1>
			</header>
			<p class="product-description"><?php echo $taxonomy->description; ?></p>
		
		<div id="primary" class="taxonomy-content-container">
			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/taxonomy-content' ); ?>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
		</div>
		</main><!-- #main -->
		</div><!-- #primary -->
	
<?php get_footer(); ?>
