<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Fin:kom
*/

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	get_template_part( 'components/heading/entryheader', get_post_format() );
	get_template_part( 'components/summary/entrysummary', get_post_format() );
	get_template_part( 'components/media/entrymedia', get_post_format() );
	if ( is_single() ) :
		get_template_part( 'components/content/entrycontent', get_post_format() );
		get_template_part( 'components/meta/entryfooter', get_post_type() );
	endif;
	?>
</article><!-- #post-<?php the_ID(); ?> -->
