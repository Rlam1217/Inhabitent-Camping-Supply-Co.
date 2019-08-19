<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
?>

<div class="taxonomy-entry-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( 'post' === get_post_type() ) : ?>
		<?php endif; ?>
		
    <div class="product-image-wrapper">
	<?php echo '<a href="' . get_post_permalink( $id ) . '">'; ?> <?php echo '<img src="' . CFS()->get( 'product_image' ) . '" alt="" />'; ?>
	</a></div>
	<div class="product-info">
		<?php the_title( '<h2 class="taxonomy-title">', '</h2>' ); ?>
    		<p class="price"><?php echo CFS()->get( 'price' ); ?></p>
	</div>	
	</article>
</div><!-- .entry-content -->


