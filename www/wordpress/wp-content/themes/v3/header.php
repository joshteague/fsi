<?php
// If a header.php file exists in the WP root directory we
// use that, otherwise use this default wp-header.php file.
if ( file_exists(ABSPATH . '/header.php') ) :
	include_once(ABSPATH . '/header.php');
else :
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<link href='http://fonts.googleapis.com/css?family=Satisfy|Quattrocento+Sans|Droid+Sans+Mono' rel='stylesheet' type='text/css'>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta name="verify-v1" content="+d+fDReE6r3xs7hALu/ddb6DsaAZ3xhjvbv3RSOj/ng=" />
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
<meta name="viewport" content="width = 1000" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>

<script src="/js-global/FancyZoom.js" type="text/javascript"></script>
<script src="/js-global/FancyZoomHTML.js" type="text/javascript"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="http://www.thefairskinneditalians.com/js/jtwt.js"></script>
<link rel="stylesheet" href="http://www.thefairskinneditalians.com/css/jtwt.css" />


<script type="text/javascript">
$(document).ready(function() {

	$('#noratweets').jtwt({image_size : 0, count : 1, username: 'noraquotes', convert_links : 1, loader_text : 'loading new tweets...'});
$('#noratweets').prepend('<a href="http://www.twitter.com/noraquotes" class="name">Nora:</a> ');

	$('#quinntweets').jtwt({image_size : 0, count : 1, username: 'quinnyquotes', convert_links : 1, loader_text : 'loading new tweets...'});
$('#quinntweets').prepend('<a href="http://www.twitter.com/quinnyquotes" class="name">Quinn:</a> ');

	$('#laurentweets').jtwt({image_size : 0, count : 1, username: 'laurenteague', convert_links : 1, loader_text : 'loading new tweets...'});
$('#laurentweets').prepend('<a href="http://www.twitter.com/laurenteague" class="name">Lauren:</a> ');

	$('#joshtweets').jtwt({image_size : 0, count : 1, tweetdate : 0, username: 'joshteague', convert_links : 1, loader_text : 'loading new tweets...'});
$('#joshtweets').prepend('<a href="http://www.twitter.com/joshteague" class="name">Josh:</a> ');

	$('#remytweets').jtwt({image_size : 0, count : 1, tweetdate : 0, username: 'remyteague', convert_links : 1, loader_text : 'loading new tweets...'});
$('#remytweets').prepend('<a href="http://www.twitter.com/remyteague" class="name">Remy:</a> ');
 

	$('.tabs a').mouseover(function(){
		switch_tabs($(this));
	});
 
	switch_tabs($('.defaulttab'));
});
</script>


</head>

<body onload="setupZoom()">

<div id="wrap">
<div id="birdies"></div>

<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1><div class="login"><a href="wp-admin/post-new.php">Login</a></div>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>


<?php endif; ?>