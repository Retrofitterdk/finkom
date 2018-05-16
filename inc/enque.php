<?php
/**
 * Enqueue scripts and styles.
 */
function finkom_scripts() {
	wp_enqueue_style( 'finkom-style', get_template_directory_uri() . '/assets/css/theme.css' );

  wp_enqueue_style( 'finkom-fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', array(), '1.0.0' );

	wp_enqueue_script( 'finkom-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'finkom-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'finkom_scripts' );
