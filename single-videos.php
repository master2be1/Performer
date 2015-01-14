<?php get_header();

?>




<div id="content">
<div class="blogpage">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<div class="pagetitle"><h1><?php the_title();?></h1></div>
		<div class="blogmeta">
			<span onclick="window.location.href='<?php the_permalink() ?>'" class="post-time"><?php the_time('M d, Y') ?></span> ⋅
			<span onclick="window.location.href='<?php the_permalink() ?>'" class="post-comment"><?php comments_number( '0 Comments', '1 Comments', '% Comments' ); ?></span> ⋅
			<?php echo get_the_term_list($post->ID,  'video_category', '', ', ', ''); ?> ⋅ 
			<span class="post-author">By <?php the_author_posts_link(); ?></span>
		</div>

    

    <?php if(get_post_meta($post->ID, 'youtube_link', true)) { ?> 
<?php $youtubeID = youtubeID(get_post_meta($post->ID, 'youtube_link', true)); ?>
<p><iframe width="100%" height="315" src="http://www.youtube.com/embed/<?php echo $youtubeID ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>
</p>
<?php } ?>

	<?php the_content(); ?>
<p><?php the_tags(); ?></p>

			<div id="comments">

				<?php comments_template(); ?>

			</div>





			<div class="clear"></div>



		<?php endwhile; ?>
		<?php endif; ?>







<div class="clear"></div>
</div>
</div>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
