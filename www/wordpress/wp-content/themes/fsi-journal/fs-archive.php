<?php /* Template Name: FS-Archive*/ ?>

<?php get_header(); ?>

<div id='archive'>
<h1>Who are The Fair Skinned Italians, anyway?</h1>

<p>Josh & Lauren married in the summer of '05 and live in Marietta, Ga. While Josh is a product designer by day, Lauren stays home with their three daughters. Nora was born in March of 2009. Little sister Quinn came along two years later. And Ellie was born just before Christmas 2013. Remy is their lovable and slightly neurotic dog. And this is their site where it all happens.</p>

<div class='row'>
<div class="col-md-6 col-sm-6"><h1>By topic...</h1>
<ul>
<?php wp_list_categories('title_li='); ?> 
</ul>
</div>
<div class='col-md-6 col-sm-6'><h1>By date...</h1>
<ul>
<?php wp_get_archives(); ?> 
</ul>
</div>
</div>
</div>