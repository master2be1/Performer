<?php get_header(); ?>

<div id="content">

		<div class="pagetitle">
	<h1><?php wp_title(); ?></h1>
</div>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php get_template_part('post'); ?>

<?php endwhile; ?>

	<div class="clear"></div>

<?php if ($wp_query->max_num_pages > 1) : ?>
   <?php next_posts_link(__('<span class="morebutton right">Newer posts &rarr;</span>')); ?>
   <?php previous_posts_link(__('<span class="morebutton left">&larr; Older posts</span>')); ?>
<?php endif; ?>

<?php endif; wp_reset_query(); ?>



		<div class="clear"></div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>