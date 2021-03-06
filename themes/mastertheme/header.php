<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<?php if (! is_front_page() && ! is_page('about')) { 
		$green_header = array( 'green-nav' ); 
		} else {$green_header = array(); 
		} 
	?>

	<body <?php body_class( $green_header); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>	

			<header id="masthead" class="site-header" role="banner">
					
					<div class="site-branding">
						<div class="logo">    
							<?php if (! is_front_page() && ! is_page('about')) { ?>
 							<a href="<?php echo get_home_url()?>"> <img src="<?php echo wp_get_attachment_url( 58 )?>" alt="" /></a>
						<?php } else { the_custom_logo();
							} ?>
						</div>


					<!-- .site-branding -->
				
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<div class="search-bar">
						<?php get_search_form(); ?>
					</div>
				</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">