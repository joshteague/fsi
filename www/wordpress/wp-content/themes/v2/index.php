<?php 
/* Don't remove this line. */
require('./wp-blog-header.php');
include('header.php');
?>

<div id="main">

<?php
if (is_home()) {
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts("cat=-17&paged=$paged");

} 
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="story">
<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<div class="storycommentbubble">
<span class="bubblecount"><a href="<?php comments_link(); ?>"><?php comments_number('No comments', '1 comment', '% comments' );?></a></span></div><br>
<h3><?php the_time('M d Y')?> – <span style="text-transform: lowercase"><em>by</em></span> <?php the_author(); ?> <span style="text-transform: lowercase"><em>in</em></span> <?php the_category(' / '); ?> <?php edit_post_link(__('– Edit')); ?></h3>

<?php if (is_single())
{
     echo '';
};?>


<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
<div class="foot">
<?php comments_popup_link(__('Comment on this'), __('1 Comment'), __('% Comments'), '', ''); ?></div>

</div></div>
<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' — ', __('&laquo; Newer'), __('Older &raquo;')); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
