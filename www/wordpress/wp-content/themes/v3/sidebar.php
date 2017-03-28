<!-- Begin #sidebar -->
<div id="sidebar">
<span class="sidebar">

<script type="text/javascript">
function switch_tabs(obj)
{
	$('.tab-content').hide();
	$('.tabs a').removeClass("selected");
	var id = obj.attr("rel");
 
	$('#'+id).show();
	obj.addClass("selected");
}
	</script>

<?php
if ($user_ID) { 
echo '<a href="http://wp.thefairskinneditalians.com/wp-admin/post-new.php" class="newpost">COMPOSE</a> 
<a href="http://wp.thefairskinneditalians.com/wp-admin/edit.php" class="small">All posts</a>
<a href="http://wp.thefairskinneditalians.com/wp-admin/theme-editor.php" class="small">Theme Editor</a>
<a href="https://www.google.com/analytics/web/#dashboard/default/a1531304w11881864p12441554/" class="small">Google Analytics</a>
<div class="separator"></div>';
}
?>


<h2>The family. As heard on Twitter.</h2>
<div id="wrapper">
    <ul class="tabs">
        <li style="background:url('https://si0.twimg.com/profile_images/2888194191/3ba0e31ff42e065171438a07558fb5fe.png') no-repeat; background-size:38px 38px;"><a href="#" class="defaulttab" rel="tabs1"></a></li>
        <li style="background:url('https://si0.twimg.com/profile_images/2888233766/da39fb7c9b860ce4150c894b4eb9a788.png') no-repeat; background-size:38px 38px;"><a href="#" rel="tabs2"></a></li>
        <li style="background:url('https://si0.twimg.com/profile_images/2888301848/3e4ea0cd09951473a5ab05650a6a19f5_bigger.png') no-repeat; background-size:38px 38px;"><a href="#" rel="tabs3"></a></li>
        <li style="background:url('http://wp.thefairskinneditalians.com/img/faces/josh.png') no-repeat";><a href="#" rel="tabs4"></a></li>
        <li style="background:url('http://wp.thefairskinneditalians.com/img/faces/remy.png') no-repeat";><a href="#" rel="tabs5"></a></li>
    </ul>
 
    <div class="tab-content" id="tabs1"><div id="noratweets"></div></div>
    <div class="tab-content" id="tabs2"><div id="quinntweets"></div></div>
    <div class="tab-content" id="tabs3"><div id="laurentweets"></div></div>
    <div class="tab-content" id="tabs4"><div id="joshtweets"></div></div>
    <div class="tab-content" id="tabs5"><div id="remytweets"></div></div>

</div>

<br class="clearBoth" />
<div class="separator"></div>

<a href="http://www.twitter.com/fsi2005" class="followontwitter">Follow @FSI2005 on Twitter!</a>

<div class="separator"></div>
<?php if (function_exists('get_recent_comments')) { ?>
<h2><?php _e('Recent Replies'); ?></h2>
     <ul>
     <?php get_recent_comments(); ?></ul>
<?php } ?>

<div class="separator"></div>

<h2>Things we talk about</h2>
<div id="categories"><ul><?php wp_list_categories('title_li='); ?></ul></div>
<br>

<div class="separator"></div>

 <h2>Family & Friends</h2>
   <ul><?php wp_list_bookmarks('title_li=&categorize=0'); ?></ul>

<div class="separator"></div>

<h2>Archives</h2>
<ul><select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
<option value=""><?php echo attribute_escape(__('2005 - Now')); ?></option>
<?php wp_get_archives('type=monthly&format=option&show_p ost_count=1'); ?> </select>
<!--<ul><?php wp_get_archives('type=monthly'); ?></ul>-->
</ul>

<div class="separator"></div>

<h2>Search FSI</h2>
<ul><form method="get" action="http://www.google.com/search">
<input name="q" size="15" maxlength="255" value="" type="text">
<input name="btnG" value="Search" type="submit"><input name="domains" value="thefairskinneditalians.com" type="hidden">
<input name="sitesearch" value="thefairskinneditalians.com" checked="checked" type="hidden"><br>
</form></ul>

<div class="separator"></div>

<h2>Who are these people?</h2>
<p>Josh & Lauren got married in the summer of '05 and live in Marietta, Ga. Josh is a product designer at <a href="http://www.monetology.com/">Monetology</a>. Lauren stays home with their daughters. Nora was born in March of 2009. Little sister Quinn came along two years later. Remy is their lovable and slightly neurotic dog. And this is their site where it all happens.<br>

Ok, then <a href="http://wp.thefairskinneditalians.com/2005/04/04/the-fair-skinned-italians/">what's up with the name of your website?</a></p><ul></ul>

<div class="separator"></div>

<h2>Extras</h2>
<ul><a href="http://twitter.com/#!/fsi2005">Follow FSI on Twitter</a><br>
<a href="http://feeds.feedburner.com/thefairskinneditalians">Follow FSI via RSS</a><br>
<a href="http://wp.thefairskinneditalians.com/wp-admin/edit.php">Login</a></ul>

<div class="separator"></div>
<p>&copy; 2005 - <?php echo date(Y) ?> <?php bloginfo('name'); ?> Thanks for reading!</p><br>

</div>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-1531304-2");
pageTracker._trackPageview();
} catch(err) {}</script>

<!-- End #sidebar -->

</body>
</html>