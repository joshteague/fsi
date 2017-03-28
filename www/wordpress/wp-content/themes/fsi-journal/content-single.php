<?php
/**
 * @package fsi-journal
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?><span class="post-date"><a href="<?php the_permalink(); ?>"><?php the_date('M j'); ?></a></span>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
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
