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
		<div class="eco-upper-footer">
			<div class="eco-logo-wrapper">
				<img src="/ecologix/wp-content/uploads/2019/08/ecologix-logo-white.png" alt="Ecologix Logo for dark backgrounds">
			</div>
			<div class="eco-widgets-wrapper">
				<?php 
					if ( ! is_active_sidebar( 'footer-1' ) ) dynamic_sidebar('footer-1');
					if ( ! is_active_sidebar( 'footer-2' ) ) dynamic_sidebar('footer-2');
					if ( ! is_active_sidebar( 'footer-3' ) ) dynamic_sidebar('footer-3');
					if ( ! is_active_sidebar( 'footer-4' ) ) dynamic_sidebar('footer-4');
				?>
			</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ecologix' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ecologix' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ecologix' ), 'ecologix', '<a href="http://www.sergiocabral.io">Sergio Cabral</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
