<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<b>This post is password protected. Enter the password to view comments.</b>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>

<h3>Comments</h3>

<ol class="commentlist">
<?php wp_list_comments('callback=comment_template'); ?>
</ol>

<?php $total_pages = get_comment_pages_count(); if ( $total_pages > 1 ) : ?>
<div class="page-comments"><?php paginate_comments_links(); ?></div><br/><br/>

<?php endif; ?>

<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

<h3 id="respond"><?php comment_form_title( 'Leave a Comment', 'Leave a Comment to %s' ); ?></h3>

<div class="cancel-comment-reply"><small><?php cancel_comment_reply_link(); ?></small></div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">(Log out)</a>

<?php else : ?>

<p><label>Name <?php if ($req) echo "(required)"; ?></label><input type="text" name="author" size="22" tabindex="1" />
</p>

<p><label>Email <?php if ($req) echo "(required)"; ?></label><input type="text" name="email" id="email" size="22" tabindex="2" />
</p>

<p><label>Website</label><input type="text" name="url" id="url" size="22" tabindex="3" />
</p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p class="textarea"><label id="textarea-label">Comment</label><textarea name="comment" id="commentbox" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
