<?php 
/* Don't remove this line. */


require('./wp-blog-header.php');
include('header-tpod.php');
?>

<div id="family"></div>

<div id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="story">

<div class="storycontent">
		<?php the_content(__('(more...)')); ?>

<h1 class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<h2> | <?php the_time('M d')?>


<div class="foot">
<div class="float_wrapper">
<div class="left">
<?php comments_popup_link(__('0 Comments'), __('1 Comment'), __('% Comments'), '', ''); ?>							</div>

</div>
</div><!-- foot -->

</div></div>
<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' — ', __('&laquo; Newer'), __('Older &raquo;')); ?>

</div>

<?php get_footer(); ?>
