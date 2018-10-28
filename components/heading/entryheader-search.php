<?php
/**
* Template part for displaying entry-header on search results
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Fin:kom
*/
?>
<header class="entry-header">
  <?php
  the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
  ?>
</header><!-- .entry-header -->
