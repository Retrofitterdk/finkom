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
	get_template_part( 'components/media/entrymedia', get_post_format() );
	if ( 'post' === get_post_type() ) :
		get_template_part( 'components/meta/entrymeta', get_post_format() );
	endif;
	get_template_part( 'components/content/entrycontent', get_post_format() );
	if ( 'post' === get_post_type() ) :
		get_template_part( 'components/meta/entryfooter', get_post_format() );
	endif;
	?>
</article><!-- #post-<?php the_ID(); ?> -->
