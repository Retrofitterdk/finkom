<?php
/**
* Template part for displaying entry-content on posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Fin:kom
*/
the_content( sprintf(
  wp_kses(
    /* translators: %s: Name of current post. Only visible to screen readers */
    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'finkom' ),
    array(
      'span' => array(
        'class' => array(),
      ),
    )
  ),
  get_the_title()
  ) );

  wp_link_pages( array(
    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'finkom' ),
    'after'  => '</div>',
  ) );