<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ecologix
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="eco-upper-footer eco-wrapper">
			<?php if ( is_active_sidebar( 'footer-logo-1' ) ) dynamic_sidebar('footer-logo-1'); ?>
			<div class="eco-widgets-wrapper">
				<?php 
					if ( is_active_sidebar( 'footer-1' ) ) dynamic_sidebar('footer-1');
					if ( is_active_sidebar( 'footer-2' ) ) dynamic_sidebar('footer-2');
					if ( is_active_sidebar( 'footer-3' ) ) dynamic_sidebar('footer-3');
					if ( is_active_sidebar( 'footer-4' ) ) dynamic_sidebar('footer-4');
				?>
			</div>
		</div>
		<div class="site-info">
			<div class="eco-wrapper">
				<span>(515) 250-6677 • 1517 North Ankeny Boulevard, Suite E, Ankeny IA 50021. All Rights Reserved</span>
				<div class="eco-social-footer">
					<a href="#"><img src="/ecologix/wp-content/uploads/2019/08/fb-icon.png" alt="Facebook Logo"></a>
					<a href="#"><img src="/ecologix/wp-content/uploads/2019/08/linkedin-icon.png" alt="LinkedIn Logo"></a>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
