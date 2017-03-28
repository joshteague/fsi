<?php 
/* Don't remove this line. */


require('./wp-blog-header.php');
include('header.php');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="story">
<h1 class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<h2>Posted by <?php the_author(); ?> in <?php the_category(', '); ?> on <?php the_date()?> | <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)'), '', ''); ?>

<?php if (is_single())
{
     echo '<a href="http://www.thefairskinneditalians.com/">&laquo; Back to main</a>';
};?> <?php edit_post_link(__('Edit')); ?></h2>

<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
<h2 class="farright"><?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)'), '', ''); ?></h2>
</div></div>
<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' — ', __('&laquo; Newer'), __('Older &raquo;')); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
