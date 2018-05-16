<?php
/**
* Template part for displaying results in search pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Fin:kom
*/

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		get_template_part( 'components/post/entryheader', 'search' );
		if ( 'post' === get_post_type() ) :
			get_template_part( 'components/post/entrymeta', 'search' );
		endif;
		?>
	</header><!-- .entry-header -->
	<div class="entry-media">
		<?php
		get_template_part( 'components/post/entrymedia', 'search' );
		?>
	</div>
	<div class="entry-summary">
		<?php
		get_template_part( 'components/post/entrysummary', 'search' );
		?>
	</div><!-- .entry-summary -->
	<footer class="entry-footer">
		<?php
		get_template_part( 'components/post/entryfooter', 'search' );
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
