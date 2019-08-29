<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ecologix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ecologix' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<div class="eco-wrapper">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
				<div class='eco-header-info'>
					<div>
						<img src="/ecologix/wp-content/uploads/2019/08/phone-icon.png" alt="smartphone icon" /> <span>(515) 250-6677</span>
					</div>
					<div>
						<img src="/ecologix/wp-content/uploads/2019/08/binder-logo.png" alt="binder icon" /> 
						<a href="#">Free Energy Assesment</a>
					</div>
				</div>
			</div>
		</nav><!-- #site-navigation -->
		<div class="eco-wrapper">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_header_image_tag(); ?></a>
				<?php
				// the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$ecologix_description = get_bloginfo( 'description', 'display' );
				if ( $ecologix_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $ecologix_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<nav id="secondary-navigation" class="main-navigation secondary-navigation">
				<?php
					$menuId = get_cfc_field('second-menu-selector-group', 'second-menu-selector');
					if($menuId != 'none') {
						wp_nav_menu( array(
							'theme_location' => $menuId,
							'menu_id'        => 'secondary-menu',
						) );
					}
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
