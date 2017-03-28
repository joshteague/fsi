<?php
/**
 * @package fsi-2013
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<p class="entry-date"><?php the_date(); ?></p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'fsi_2013' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'fsi_2013' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'fsi_2013' ), __( '1 Comment', 'fsi_2013' ), __( '% Comments', 'fsi_2013' ) ); ?></span>
				<?php endif; ?>

				<?php edit_post_link( __( 'Edit', 'fsi_2013' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>

		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'fsi_2013' ) );
				if ( $categories_list && fsi_2013_categorized_blog() ) :
			?>
			<span class="extras">
				<span class="cat-links">
					<?php printf( __( '%1$s', 'fsi_2013' ), $categories_list ); ?> / 
				</span>
				<?php endif; // End if categories ?>
			
			<span class="entry-meta">
				<?php fsi_2013_posted_on(); ?>
			</span></span><!-- .entry-meta -->

		<?php endif; // End if 'post' == get_post_type() ?>

	</footer><!-- .entry-meta -->
</article><!-- #post-## -->