<?php
/**
* Functions which enhance the theme by hooking into WordPress
*
* @package Fin:kom
*/

/**
* Adds custom classes to the array of body classes.
*
* @param array $classes Classes for the body element.
* @return array
*/
function finkom_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add a class if there is a custom header.
	if ( has_header_image() ) {
		$classes[] = 'has-header-image';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar'; }
		else {
			$classes[] = 'has-sidebar';
		}


		return $classes;
	}
	add_filter( 'body_class', 'finkom_body_classes' );

	/**
	* Add a pingback url auto-discovery header for single posts, pages, or attachments.
	*/
	function finkom_pingback_header() {
		if ( is_singular() && pings_open() ) {
			echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
		}
	}
	add_action( 'wp_head', 'finkom_pingback_header' );

	/**
	 * Checks to see if we're on the front page or not.
	 */
	function finkom_is_frontpage() {
		return ( is_front_page() && ! is_home() );
	}
