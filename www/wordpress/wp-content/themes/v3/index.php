<?php 
/* Don't remove this line. */
require('./wordpress/wp-blog-header.php');
include('header.php');
?>

<div id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="date">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', '' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
				<p><span class="day"><?php the_time( 'M d' ); ?></span><?php the_time( 'Y' ); ?></p>
		</a>
	</div>
<div class="story">
<h1 id="post-<?php the_ID(); ?>"><span class="biggerlinks"> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></span></h1><div class="comments-link"><?php comments_popup_link(__('reply'), __('1'), __('%'), '', ''); ?></div>

<div class="storycontent">

<?php if ( is_home() && has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail(); ?>
   </a>
 <?php endif; ?>

		<?php the_content(__('')); ?>

</div>
<h3><?php comments_popup_link(__('Reply'), __('1 Reply'), __('% Replies'), '', ''); ?> • <?php the_category(' / '); ?> • Written by <?php the_author(); ?> <?php edit_post_link(__('• Edit')); ?></h3>

<div style="clear: both;"></div>

</div>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' — ', __('&laquo; Newer'), __('Older &raquo;')); ?>
</div>

<?php get_sidebar(); ?>

<!--<?php get_footer(); ?>-->