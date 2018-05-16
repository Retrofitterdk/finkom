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
	<header class="entry-header">
		<?php
		get_template_part( 'components/post/entryheader', get_post_format() );
		if ( 'post' === get_post_type() ) :
			get_template_part( 'components/post/entrymeta', get_post_format() );
		endif;
		?>
	</header><!-- .entry-header -->
	<div class="entry-media">
		<?php
		get_template_part( 'components/post/entrymedia', get_post_format() );
		?>
	</div>
	<div class="entry-content">
		<?php
		get_template_part( 'components/post/entrycontent', get_post_format() );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		get_template_part( 'components/post/entryfooter', get_post_format() );
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
