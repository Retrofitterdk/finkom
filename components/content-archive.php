<?php
/**
* Template part for displaying page content in page.php
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Fin:kom
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		get_template_part( 'components/media/entrymedia', 'page' );
		get_template_part( 'components/heading/entryheader', 'page' );
		get_template_part( 'components/summary/entrysummary', get_post_format() );
		?>
</article><!-- #post-<?php the_ID(); ?> -->
