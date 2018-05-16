<?php
/**
* Template part for displaying entry-footer on pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Fin:kom
*/
edit_post_link(
  sprintf(
    wp_kses(
      /* translators: %s: Name of current post. Only visible to screen readers */
      __( 'Edit <span class="screen-reader-text">%s</span>', 'finkom' ),
      array(
        'span' => array(
          'class' => array(),
        ),
      )
    ),
    get_the_title()
  ),
  '<span class="edit-link">',
  '</span>'
);
