<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package fsi-journal
 */

if ( ! function_exists( 'fsi_journal_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function fsi_journal_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'fsi-journal' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'fsi-journal' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'fsi-journal' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'fsi_journal_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function fsi_journal_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'fsi-journal' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav">&larr;</span>&nbsp;%title', 'Previous post link', 'fsi-journal' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title&nbsp;<span class="meta-nav">&rarr;</span>', 'Next post link',     'fsi-journal' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'fsi_journal_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function fsi_journal_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%1$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%2$s">%2$s</time><time class="updated" datetime="%2$s">%2$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x(  '%s', 'post date', 'fsi-journal' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';

}
endif;

if ( ! function_exists( 'fsi_journal_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function fsi_journal_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'fsi-journal' ) );
		if ( $categories_list && fsi_journal_categorized_blog() ) {
			printf( '<span class="cat-links">' . __( 'Posted in %1$s', 'fsi-journal' ) . '</span>', $categories_list );
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'fsi-journal' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . __( 'Tagged %1$s', 'fsi-journal' ) . '</span>', $tags_list );
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo ' • <span class="comments-link">';
		comments_popup_link( __( 'Leave a comment', 'fsi-journal' ), __( '1 Comment', 'fsi-journal' ), __( '% Comments', 'fsi-journal' ) );
		echo '</span>';
	}

	edit_post_link( __( 'Edit', 'fsi-journal' ), ' • <span class="edit-link">', '</span>' );
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function fsi_journal_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'fsi_journal_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'fsi_journal_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so fsi_journal_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so fsi_journal_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in fsi_journal_categorized_blog.
 */
function fsi_journal_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'fsi_journal_categories' );
}
add_action( 'edit_category', 'fsi_journal_category_transient_flusher' );
add_action( 'save_post',     'fsi_journal_category_transient_flusher' );
