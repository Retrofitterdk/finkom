<?php
/**
* Template part for displaying entry-footer on posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Fin:kom
*/
?>
<footer class="entry-footer">
  <?php
  if ( function_exists( 'finkom_team_member_meta' ) ) :
    finkom_team_member_meta();
  endif;
  if ( function_exists( 'finkom_team_member_terms' ) ) :
    finkom_team_member_terms();
  endif;
  ?>
</footer><!-- .entry-footer -->
<?php
