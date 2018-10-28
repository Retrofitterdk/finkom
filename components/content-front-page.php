<?php
/**
* Template part for displaying page content in front-page.php
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Fin:kom
*/

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	get_template_part( 'components/media/entrymedia', 'page' );
	get_template_part( 'components/content/entrycontent', 'page' );
	?>
</div>
<!-- #post-<?php the_ID(); ?> -->
