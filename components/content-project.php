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
		get_template_part( 'components/project/entryheader', get_post_format() );
		if ( 'post' === get_post_type() ) :
			get_template_part( 'components/project/entrymeta', get_post_format() );
		endif;
		?>
	</header><!-- .entry-header -->
	<div class="entry-summary">
		<?php
		get_template_part( 'components/project/entrysummary', get_post_format() );
		?>
	</div><!-- .entry-summary -->
	<div class="entry-media">
		<?php
		get_template_part( 'components/project/entrymedia', get_post_format() );
		?>
	</div>
	<div class="entry-meta">
		<?php
		get_template_part( 'components/project/entrymeta', get_post_format() );
		?>
	</div>
	<div class="entry-content">
		<?php
		get_template_part( 'components/project/entrycontent', get_post_format() );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		get_template_part( 'components/project/entryfooter', get_post_format() );
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
