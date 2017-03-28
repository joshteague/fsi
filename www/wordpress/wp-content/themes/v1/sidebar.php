<!-- Begin #sidebar -->
<div id="sidebar">
 <!-- Begin #profile-container -->
<span class="sidebar">

<!-- <h2 class="comments"><?php _e('Recent Comments'); ?></h2>
     <ul>
     <li>
<script style="text/javascript" src="http://www.joshteague.com/showrecentcomments2.js"></script><script style="text/javascript">var numcomments = 5;var showcommentdate = true;var showposttitle = true;var numchars = 100;var standardstyling = true;</script><script src="http://paughflap.blogspot.com/feeds/comments/default?alt=json-in-script&callback=showrecentcomments"></script></li></ul> -->

<?php if (function_exists('get_recent_comments')) { ?>
<h2 class="comments"><?php _e('Recent Comments'); ?></h2>
     <ul>
     <li><?php get_recent_comments(); ?></li></ul>
<?php } ?>

<!-- <h2>On Twitter...</h2>
   <ul>latest tweet.</ul> -->

 <h2>Family & Friends</h2>
   <ul>     
         <li>Photos: <a href="http://picasaweb.google.com/joshteague">On Picasa</a> | <a href="javascript:void(0)" onclick="window.open('http://www.thefairskinneditalians.com/photos/slideshow.swf','Older','height=390, width=496,scrollbars=no')">Older</a> <img src="http://www.thefairskinneditalians.com/img/pop-out.gif"></li>
         <li><a href="http://www.ateagueoftheirown.com/">A Teague of Their Own</a></li>
         <li><a href="http://www.joshteague.com/">Josh Teague Studios</a></li>
         <li><a href="http://atlantaden.blogspot.com/">Atlanta Den</a></li>
         <li><a href="http://www.mandyrobinson.com/">Mandy Robinson Photography</a></li>
         <li><a href="http://www.tiffanyteague.com/">Tiffany</a></li>
         <li><a href="http://www.thepeterskids.com/">The Peters' Kids</a></li>
         <li><a href="http://thevestals.blogspot.com/">The Vestals</a> + <a href="http://babyvestal.blogspot.com/">Baby</a></li>
         <li><a href="http://www.thurmanfamily.wordpress.com/">Thurman Family Blog</a></li>
         <!-- <li><a href="http://www.michael-r-nelson.com/photo_blog_3/">Mike's Photo Blog</a></li>-->
         <li><a href="http://www.amypeach.blogspot.com/">Amy Nelson</a></li>
         <li><a href="http://www.marshillchurch.org/">Mars Hill Church, Seattle</a></li>
         <li><a href="http://www.buckheadchurch.org/">Buckhead Church, Atlanta</a></li></ul>

<!-- AdSense to go here and also under the comment form on each post -->

<h2>Topics</h2>
<div id="categories"><ul><?php wp_list_categories('title_li='); ?></ul></div>

<h2>Archives</h2>
<!--<select name="archive-menu" onChange="document.location.href=this.options[this.selectedIndex].value;">
<option value="">By month</option>
<?php wp_get_archives('type=monthly&format=option'); ?>
</select>-->
<ul><?php wp_get_archives('type=monthly'); ?></ul>

<li>By author:</li>
<ul><?php wp_list_authors('exclude_admin=0'); ?></ul>

<h2>Still can't find it?</h2>
<!-- SiteSearch Google -->
<form method="get" action="http://www.google.com/search">
<input name="q" size="12" maxlength="255" value="" type="text">
<input name="btnG" value="Search" type="submit"><input name="domains" value="thefairskinneditalians.com" type="hidden">
<input name="sitesearch" value="thefairskinneditalians.com" checked="checked" type="hidden"><br>
</form>
<ul><li></li></ul>
<!-- SiteSearch Google -->

<h2>Who are these people?</h2>
   <ul><p>Josh & Lauren got married in the summer of '05 in Marietta, GA. Now, they live in Kirkland, WA just outside of Seattle. Josh is a designer for Google, and Lauren's prepping life for their first baby, due in March 2009. Remy, their dog, is finding things to chew on and howling with the sirens. This is their site where it all happens.</p><br>

<p>Ok, then <a href="http://www.thefairskinneditalians.com/2005/04/04/the-fair-skinned-italians/">what's up with the name of your website?</a></ul>

<h2>Extras</h2>
<li><a href="http://fusion.google.com/add?source=atgs&feedurl=http%3A//feeds.feedburner.com/thefairskinneditalians"><img src="http://buttons.googlesyndication.com/fusion/add.gif" border="0" alt="Add to Google"></a></li>
       
       <li><a href="http://feeds.feedburner.com/thefairskinneditalians"><img src="http://www.thefairskinneditalians.com/img/rss-brown.png"> Follow this blog</a> <a href="http://www.youtube.com/watch?v=VSPZ2Uu_X3Y"><small><i>(Huh?)</i></small></a></li>

       <li><a href="http://www.thefairskinneditalians.com/wp-admin/edit.php">Login</a></li>
</span></div></div>
<!-- End #sidebar -->

