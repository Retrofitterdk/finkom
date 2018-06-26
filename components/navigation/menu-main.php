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
  'theme_location'  => 'main',
  'menu_id'         => 'primary-menu',
  'container_class' => 'nav-menu',
  'container_id'    => 'primary-menu-container',
) );
}
