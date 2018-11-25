<?php
/**
* Template part for displaying entry-footer on posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Fin:kom
*/
if ( function_exists( 'finkom_team_member_terms' ) ) :
?>
<footer class="entry-footer">
<?php
finkom_team_member_terms();
  ?>
</footer><!-- .entry-footer -->
<?php
endif;
