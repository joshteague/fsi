<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?><p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->
<br>
<?php if ($comments) : ?>
	<h2 id="comments"><b>&nbsp;<?php comments_number('No comments', '1 comment', '% comments' );?></b></h2>
<div id="comments">
	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>

		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
		
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>
		
<b><?php comment_author_link()?></b> said&hellip;
			<?php comment_text() ?>
<h2><?php comment_date('F jS, Y') ?><?php edit_comment_link(' Edit','',''); ?></h2>

		</li>

	<?php /* Changes every other comment to a different class */	
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>
 </div>
 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post-> comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
		
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
		
	<?php endif; ?>
<?php endif; ?>



<?php if ('open' == $post-> comment_status) : ?>

<div id="form">

<h2 id="respond"><b>Post a comment</b></h2>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<b>Name</b> <i><small>(required):</small></i><BR><input name="author" id="author" value="" size="32" tabindex="1" _base_href="http://www.joshteague.com/" type="text"></p><br>


<b>Email Address</b> <i><small>(required):</small></i><br><input name="email" id="email" value="" size="32" tabindex="2" _base_href="http://www.joshteague.com/" type="text"><br>
<label for="email"></label></p>

<!-- Website:<br><input name="url" id="url" value="" size="35" tabindex="3" _base_href="http://www.joshteague.com/" type="text"></label></p><br> -->

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<b>Your Comment</b> <i><small>(would be nice):</small></i><br><textarea name="comment" id="comment" cols="59%" rows="4" tabindex="4"></textarea></p>
<p><b><input name="submit" type="submit" id="submit" tabindex="5" value="Post this Comment" /></b>
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<?php do_action('comment_form', $post->ID); ?>
</p>
</form>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>

