<?php
/**
* Custom template tags for this theme
*
* Eventually, some of the functionality here could be replaced by core features.
*
* @package Fin:kom
*/

if ( ! function_exists( 'finkom_split-title' ) ) :
	function finkom_split_title($title) {
		$split_title = explode(":", $title );
		echo '<span class="first">' . $split_title[0]. '</span><span class="divider">:</span><span class="last">' . $split_title[1] . '</span>';
	}
endif;

if ( ! function_exists( 'finkom_posted_on' ) ) :
	/**
	* Prints HTML with meta information for the current post-date/time.
	*/
	function finkom_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( DATE_W3C ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		/* translators: %s: post date. */
		esc_html_x( 'Posted on %s', 'post date', 'finkom' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'finkom_posted_by' ) ) :
	/**
	* Prints HTML with meta information for the current author.
	*/
	function finkom_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'finkom' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'finkom_entry_terms' ) ) :
	/**
	* Prints HTML with meta information for the categories, tags and comments.
	*/
	function finkom_entry_terms() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'finkom' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'finkom' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'finkom' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'finkom' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'finkom' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
					)
				);
				echo '</span>';
			}

			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'finkom' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		}
	endif;

	if ( ! function_exists( 'finkom_post_thumbnail' ) ) :
		/**
		* Displays an optional post thumbnail.
		*
		* Wraps the post thumbnail in an anchor element on index views, or a div
		* element when on single views.
		*/
		function finkom_post_thumbnail() {
			if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
				return;
			}

			if ( is_singular() ) :
				?>

				<div class="entry-media post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div><!-- .entry-media .post-thumbnail -->

			<?php else : ?>

				<div class="entry-media post-thumbnail">
					<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
						<?php
						the_post_thumbnail( 'post-thumbnail', array(
							'alt' => the_title_attribute( array(
								'echo' => false,
							) ),
						) );
						?>
					</a>
				</div><!-- .entry-media .post-thumbnail -->

				<?php
			endif; // End is_singular().
		}
	endif;

	if ( ! function_exists( 'finkom_header_style' ) ) :
		/**
		* Styles the header image and text displayed on the blog.
		*
		* @see finkom_custom_header_setup().
		*/
		function finkom_header_style() {
			$header_text_color = get_header_textcolor();

			/*
			* If no custom options for text are set, let's bail.
			* get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
			*/
			if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
				return;
			}

			// If we get this far, we have custom styles. Let's do this.
			?>
			<style type="text/css">
			<?php
			// Has the text been hidden?
			if ( ! display_header_text() ) :
				?>
				.site-title,
				.site-description {
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
				}
				<?php
				// If the user has set a custom color for the text use that.
				else :
					?>
					.site-title a,
					.site-description {
						color: #<?php echo esc_attr( $header_text_color ); ?>;
					}
					<?php endif; ?>
					</style>
					<?php
				}
			endif;
