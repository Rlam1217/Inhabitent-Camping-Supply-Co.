<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-content-container">
					
						<div class="contact">
							<h3>Contact Info</h3>
							<p>info@inhabitent.com</p>
							<p>778-456-7891</p>
							<p>
								<i class="fab fa-facebook-square"></i>
								<i class="fab fa-twitter-square"></i>
								<i class="fab fa-google-plus-square"></i>
							</p>
						</div>
					
					
						<div class="business-hours">
							<h3>Business Hours</h3>
							<p>Monday-Friday: 9am to 5pm</p>
							<p>Saturday: 10am to 2pm</p>
							<p>Sunday: Closed</p>
						</div>
					
					
						<div class="text-logo">
						<?php echo '<img src="' . wp_get_attachment_url( 56 ) . '" alt="" />'; ?> 
						
						</div>	
					
						<div class="site-info">
							<p>Copyright &copy; 2019 Inhabitent</p>
						</div>
						
					</div>
					<!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!-- #page -->

			<?php wp_footer(); ?>

	</body>
</html>
