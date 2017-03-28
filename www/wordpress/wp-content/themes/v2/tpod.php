<?php  /* Template Name: POD – Single */  ?>

<?php 
require('./wp-blog-header.php');
include('header-tpod.php');
?>

<div id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="story">

<div class="storycontent">
		<?php the_content(); ?>

<h1 class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<h3> <?php the_time('M d')?></h3>

<div class="foot">
<div class="float_wrapper">
<div class="left">
<?php previous_post_link('Previously: %link', '%title', TRUE); ?> | <a href="http://www.thefairskinneditalians.com/picture-of-the-day-archive/">Full Archive</a> </div>
<div class="right">
<?php next_post_link('Next: %link<br>', '%title', TRUE); ?>	 

<?php endwhile; else: ?>
<?php endif; ?>

<!--Title of next POD in the queue.-->
Coming up:
<?php $my_query = new WP_Query('category_name=pod&post_status=future&order=ASC');?>
 
<?php
if ($my_query->have_posts()) :
$my_query->the_post();
$do_not_duplicate = $post->ID;
?>

<a href="<?php echo get_post_meta($post->ID, "thumbnail", $single = true); ?>" title="<?php the_title();?>"/><?php the_title(); ?></a>

<?php else: ?>
<?php _e('Not yet selected'); ?>
<?php endif; ?>
<!--END title of next POD in the queue.-->

<!--This mini-loop resets what the active post is. The function above sets it to be the upcoming post, and screws with the comments – this fixes that problem. Do not remove.-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; else: ?><?php endif; ?>

</div>
</div>
</div><!-- foot -->

</div></div>

<?php comments_template(); // Get wp-comments.php template ?>

</div>

<?php get_footer(); ?>
