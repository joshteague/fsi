<?php
/**
 * @package fsi-journal
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?><span class="post-date"><a href="<?php the_permalink(); ?>"><?php the_date('M j'); ?></a></span>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'fsi-journal' ), 
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'fsi-journal' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<?php fsi_journal_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
