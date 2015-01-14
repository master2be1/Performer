<?php get_header(); ?>

<div id="content"> 

		<div class="pagetitle">


<?php if ( have_posts() ) : ?>
<h1><?php echo $wp_query->found_posts; ?> Search results for "<?php echo wp_specialchars($s); ?>"</h1>
	<?php else : ?>
<h1>No search results found, try searching again</h1>
	<?php endif; ?>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php get_template_part('post'); ?>

<?php endwhile; ?>

	<div class="clear"></div>

<?php if ($wp_query->max_num_pages > 1) : ?>
   <?php next_posts_link(__('<span class="morebutton right">Older Posts &rarr;</span>')); ?>
   <?php previous_posts_link(__('<span class="morebutton left">&larr; Newer posts</span>')); ?>
<?php endif; ?>

<?php endif; ?>



		<div class="clear"></div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>