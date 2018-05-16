<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fin:kom
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-media">
		<?php
		get_template_part( 'components/page/entrymedia', 'page' );
		?>
	</div>
	<div class="entry-content">
		<?php
		get_template_part( 'components/page/entrycontent', 'page' );
		?>
	</div><!-- .entry-content -->
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			get_template_part( 'components/page/entryfooter', 'page' );
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
