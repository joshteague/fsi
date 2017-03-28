<?php 
/* Don't remove this line. */


require('./wp-blog-header.php');
include('header.php');
?>

<div id="family"></div>

<div id="main">

<?php
   if (is_home()) {
      query_posts("cat=-17");
   }
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="story">
<h1 class="storytitle" id="post-<?php the_ID(); ?>"><span class="biggerlinks"> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></span></h1>
<h2> | <?php the_author(); ?> on <?php the_time('M d')?>

<?php if (is_single())
{
     echo '';
};?> <?php edit_post_link(__('Edit')); ?></h2>

<div class="storycontent">
		<?php the_content(__('(more...)')); ?>

<div class="foot">
<div class="float_wrapper">
<div class="left">
<?php comments_popup_link(__('0 Comments'), __('1 Comment'), __('% Comments'), '', ''); ?>							</div>
<div class="right">
Topics: <?php the_category(', '); ?>	
</div>
</div>
</div><!-- foot -->

</div></div>
<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' — ', __('&laquo; Newer'), __('Older &raquo;')); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
