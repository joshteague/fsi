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
<?php if ($comments) : ?>
	<div id="commentsContainer">
		<div class="comments">
			<ol class="commentlist">
			<?php foreach ($comments as $comment) : ?>
				<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
					<?php if ($comment->comment_approved == '0') : ?>
					<em>Your comment is awaiting moderation.</em>
					<?php endif; ?>	
					<b><?php comment_author_link()?></b> <p class="grey"><?php comment_date( 'M d' ); ?> <?php the_time( 'Y' ); ?></p>
					<?php comment_text() ?></li><br>

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
				<p class="nocomments">Replies are closed.</p>
				
			<?php endif; ?>
		<?php endif; ?>



		<?php if ('open' == $post-> comment_status) : ?>

		<div id="form">

		<h1 id="respond"><b><?php comment_form_title( 'Leave a Reply', 'Leave a Reply as %s' ); ?></b></h1>

		<div class="cancel-comment-reply">
			<small><?php cancel_comment_reply_link(); ?></small>
		</div>

		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to leave a reply.</p>
		<?php else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( $user_ID ) : ?>

		<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

		<?php else : ?>

		<label for="author">Your name</label><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="30" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />


		<label for="email">Email address</label><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="30" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />


		<label for="url">Website <small>(optional)</small></label><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="30" tabindex="3" />

		<?php endif; ?>

		<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

		<p><textarea name="comment" id="comment" cols="65%" rows="6" tabindex="4"></textarea></p>

		<p class="submit"><input name="submit" type="submit" id="submit" tabindex="5" value="Post Comment" />
		<?php comment_id_fields(); ?>
		</p>
		<?php do_action('comment_form', $post->ID); ?>

		</form>
		</div><!-- .commentformbox -->

			<?php endif; // Reply Form ?>

			</div>
		<?php endif; // if you delete this the sky will fall on your head ?>

