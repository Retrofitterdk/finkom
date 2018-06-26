<?php
/**
* Template part for displaying main-navigation in header
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Fin:kom
*/
if ( has_nav_menu( 'main' ) ) {
  wp_nav_menu( array(
    'theme_location'  => 'social',
    'menu_id'         => 'social-menu',
    'container_class' => 'nav-menu',
    'container_id'    => 'social-menu-container',
    'depth'           => 1,
    'link_before'     => '<span class="screen-reader-text">',
    'link_after'      => '</span>',
    'fallback_cb'     => '',
  ) );
}
