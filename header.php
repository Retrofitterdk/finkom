<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Fin:kom
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'finkom' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				$site_title = get_bloginfo( 'name' );
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php finkom_split_title($site_title); ?></a></h1>
					<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php finkom_split_title($site_title); ?></a></p>
						<?php
					endif;
					$finkom_description = get_bloginfo( 'description', 'display' );
					if ( $finkom_description || is_customize_preview() ) :
						?>
						<p class="site-description screen-reader-text"><?php echo $finkom_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<a href="#site-navigation" role="button" id="primary-menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-label="<?php esc_html_e( 'Open primary menu', 'finkom' ); ?>" aria-expanded="false"><?php esc_html_e( 'Open primary Menu', 'finkom' ); ?></a>
				<nav id="site-navigation" class="main-navigation" aria-expanded="false">
					<a href="#" role="button" id="primary-menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-label="<?php esc_html_e( 'Close primary menu', 'finkom' ); ?>" aria-expanded="false"><?php esc_html_e( 'Close primary Menu', 'finkom' ); ?></a>
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'menu_id'         => 'primary-menu',
						'container_class' => 'nav-menu',
						'container_id'    => 'primary-menu-container',
					) );
					?>
				</nav><!-- #site-navigation -->
				<a href="#" class="backdrop" tabindex="-1" aria-hidden="true" hidden></a>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
