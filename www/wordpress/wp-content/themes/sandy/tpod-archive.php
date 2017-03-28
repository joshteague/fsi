<?php  /* Template Name: POD – Archive */  ?>
<?php 
require('./wp-blog-header.php');
include('header-tpod.php');
?>
<div id="main">
<div class="story">
<div class="left"><h1><b>  Archive for Picture of the day</b></h1><BR></div>

<BR>
<?php if (have_posts()) : ?>

<?php $cat_name = 'Picture of the day'; $cat_name = str_replace(' ','-',$cat_name); ?>

     <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('category_name='.$cat_name ); query_posts("paged=$paged&showposts=21"); ?>
        <?php while (have_posts()) : the_post(); ?>

<?php if ( get_post_meta($post->ID, 'thumbnail', true) ) { ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?> | <?php comments_number('0', '1', '%' ); ?> comments"><img class="scaled" src="<?php bloginfo('template_directory'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "thumbnail", $single = true); ?>&h=200&w=700&zc=1" alt="<?php the_title(); ?>"/></a>
<?php } ?>

<?php endwhile;?><br>

<div class="left"><?php posts_nav_link(' — ', __('&laquo; Newer'), __('Older &raquo;')); ?></div><br>

<?php endif; ?>


</div>

<?php get_footer(); ?>