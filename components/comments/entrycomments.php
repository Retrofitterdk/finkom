<?php
/**
* Template part for displaying entry-comments on posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Fin:kom
*/

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
  comments_template();
endif;
