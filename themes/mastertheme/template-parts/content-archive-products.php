<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="shop-entry-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
		</div><!-- .entry-meta -->
	<?php endif; ?>
	<!-- .entry-header -->

	<?php echo '<a href="' . get_post_permalink( $id ) . '">'; ?>
        <div class="product-image-wrapper">
		<?php echo '<img src="' . CFS()->get( 'product_image' ) . '" alt="" />'; ?>
		</div></a>
		<?php the_title( '<h2 class="taxonomy-title">', '</h2>' ); ?>
    	<p class="price"><?php echo CFS()->get( 'price' ); ?></p>
	
	
	
	
<!-- .entry-content -->
</article><!-- #post-## -->
</div>