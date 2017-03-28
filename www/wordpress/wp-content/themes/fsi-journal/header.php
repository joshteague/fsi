<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package fsi-journal
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="http://www.thefairskinneditalians.com/wordpress/wp-content/themes/fsi-journal/fonts.css">
<link rel="stylesheet" type="text/css" href="http://www.thefairskinneditalians.com/wordpress/wp-content/themes/fsi-journal/custom.css">

<script>
window['_fs_debug'] = false;
window['_fs_host'] = 'staging.fullstory.com';
window['_fs_org'] = 'josh';
(function(m,n,e,t,l,o,g,y){
  g=m[e]=function(a,b){g.q?g.q.push([a,b]):g._api(a,b);};g.q=[];
  o=n.createElement(t);o.async=1;o.src='https://'+_fs_host+'/s/fs.js';
  y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
  g.identify=function(i,v){g(l,{uid:i});if(v)g(l,v)};g.setUserVars=function(v){FS(l,v)};
  g.setSessionVars=function(v){FS('session',v)};g.setPageVars=function(v){FS('page',v)};
})(window,document,'FS','script','user');
</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'fsi-journal' ); ?></a>

<div class="container-fluid main">
<div class="row">
<div class="col-md-3 col-sm-4 col-sm-offset-0 col-md-offset-1 sidebar">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description">Capturing family moments since 2005. We are <a href="//twitter.com/joshteague">@joshteague</a>, <a href="//twitter.com/laurenteague">@laurenteague</a>, <a href="//twitter.com/noraquotes">@noraquotes</a>, <a href="//twitter.com/quinnyquotes">@quinnyquotes</a>, Baby Ellie… & <a href="//twitter.com/remyteague">@remyteague</a>.</h2>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a href="//twitter.com/fsi2005">Get blog updates via Twitter &rarr;</a>
			<br>
			<a href="//twitter.com/fsi2005/lists/quotable-moments">Quotable Moments</a>
			<a href="//www.thefairskinneditalians.com/archive/">Archive</a>
			<br>
			<a href="//www.thefairskinneditalians.com/wordpress/wp-admin/post-new.php" class="new-post-btn" target="_blank">New post...</a>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
</div>
<div class="col-md-7 col-sm-8 col-md-offset-4 col-sm-offset-4 posts">
	<div id="content" class="site-content">