<?php
/**
* Template part for displaying entry-content on pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Fin:kom
*/
the_content();

wp_link_pages( array(
  'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'finkom' ),
  'after'  => '</div>',
) );
