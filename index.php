<?php get_header(); ?>



<div id="content">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="blogpost">
		<div class="left blogpostimg">
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('blogpost'); ?></a>
	</div>

    <div class="blogpostinfo left">
		<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h1>


		<div class="blogmeta">
		<span onclick="window.location.href='<?php the_permalink() ?>'" class="post-time"><?php the_time('M d, Y') ?></span> ⋅
		<span onclick="window.location.href='<?php the_permalink() ?>'" class="post-categories"><?php the_category(', '); ?></span> ⋅
		<span onclick="window.location.href='<?php the_permalink() ?>'" class="post-comment"><?php comments_number( '0 Comments', '1 Comments', '% Comments' ); ?></span>
		</div>

		<p><?php echo excerpt(150); ?></p>
		

	</div>
	<div class="clear"></div>
	</div>
	<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
   <?php next_posts_link(__('<span class="morebutton right">Older Posts &rarr;</span>')); ?>
   <?php previous_posts_link(__('<span class="morebutton left">&larr; Newer posts</span>')); ?>
<?php endif; ?>

	<?php endif; ?>
	<div class="clear"></div>

</div>


<?php get_sidebar(); ?>


<?php get_footer(); ?>

