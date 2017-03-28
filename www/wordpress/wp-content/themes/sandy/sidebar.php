<!-- Begin #sidebar -->
<div id="sidebar">
<?php query_posts('cat=17&showposts='.get_option(14)); ?>
<?php if ( have_posts() ) : the_post(); ?>
<div class="tpodcommentbubble">
<span class="bubblecount"><?php comments_popup_link(__('0'), __('1'), __('%'), '', ''); ?></span></div>
<div class="tpod">
<div class="title">Picture of The Day</div>
        <?php if ( get_post_meta($post->ID, 'thumbnail', true) ) { ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "thumbnail", $single = true); ?>&h=200&w=700&zc=1" alt="<?php the_title(); ?>"/></a> 
<?php } ?>
<?php endif; ?>
</div>

<div class="sidebarmeta">
<span class="sidebar">

<?php if (function_exists('get_recent_comments')) { ?>
<h2><?php _e('Recent Comments'); ?></h2>
     <ul>
     <?php get_recent_comments(); ?></ul>
<?php } ?>

<!--<h2>Josh on Twitter...</h2>
<ul id="twitter_update_list_1"></ul>
<script type="text/javascript" src="http://www.thefairskinneditalians.com/js/twitter.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/joshteague.json?callback=twitterCallback1&amp;count=3"></script>

<h2>Lauren on Twitter...</h2>
<ul id="twitter_update_list_2"></ul> 
<script type="text/javascript" src="http://www.thefairskinneditalians.com/js/twitter.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/laurenteague.json?callback=twitterCallback2&amp;count=3"></script>-->

 <h2>Family & Friends</h2>
   <ul><?php wp_list_bookmarks('title_li=&categorize=0'); ?></ul>

<h2>Topics</h2>
<div id="categories"><ul><?php wp_list_categories('exclude=17&title_li='); ?></ul></div>
<br>
<h2>Archives</h2>
<ul><select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
<option value=""><?php echo attribute_escape(__('2005 - Now')); ?></option>
<?php wp_get_archives('type=monthly&format=option&show_p ost_count=1'); ?> </select>
<!--<ul><?php wp_get_archives('type=monthly'); ?></ul>-->
</ul>

<h2>By author:</h2>
<ul><?php wp_list_authors('exclude_admin=0'); ?></ul>

<h2>Search FSI</h2>
<ul><form method="get" action="http://www.google.com/search">
<input name="q" size="12" maxlength="255" value="" type="text">
<input name="btnG" value="Search" type="submit"><input name="domains" value="thefairskinneditalians.com" type="hidden">
<input name="sitesearch" value="thefairskinneditalians.com" checked="checked" type="hidden"><br>
</form></ul><br>

<h2>Who are these people?</h2>
<p>Josh & Lauren got married in the summer of '05 in Marietta, GA. Now, they live just outside of Seattle in Kirkland, WA, where Josh is a designer for Google. Lauren stays at home with their daughter, Nora, who was born in March 2009. Remy, their dog, spends most of his time sleeping. And this is their site where it all happens.<br>

Ok, then <a href="http://www.thefairskinneditalians.com/2005/04/04/the-fair-skinned-italians/">what's up with the name of your website?</a></p><ul></ul>

<h2>Extras</h2>
<ul><a href="http://fusion.google.com/add?source=atgs&feedurl=http%3A//feeds.feedburner.com/thefairskinneditalians"><img src="http://buttons.googlesyndication.com/fusion/add.gif" border="0" alt="Add to Google"></a><br><br>
       
<a href="http://feeds.feedburner.com/thefairskinneditalians"><img src="http://www.thefairskinneditalians.com/img/rss-brown.png"> Follow this blog</a> <a href="http://www.youtube.com/watch?v=VSPZ2Uu_X3Y"><small><i>(Huh?)</i></small></a><br><br>

<a href="http://www.thefairskinneditalians.com/wp-admin/edit.php">Login</a></ul>
</div></div>
<!-- End #sidebar -->