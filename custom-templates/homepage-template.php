<?php
/**
 * Template Name: Homepage
 *
 *
 * @package Ecologix
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article class="page type-page status-publish hentry">
				<div class="entry-content">
					<?php echo do_shortcode( '[main-hero]' ); ?>
				</div>
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
