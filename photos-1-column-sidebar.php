<?php
/*
Template Name: Photos 1 Column
?>

<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div id="content">

<div class="pagetitle">
  <h1><?php the_title();?></h1>
</div>

<?php the_content();?>

<?php
$wp_query = new WP_Query(  array (
    'paged' => $paged,
    'post_type' => 'photos',     
    )
);
?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="col1">
    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('original'); ?></a>
    <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h1>
    <h2><span onclick="window.location.href='<?php the_permalink() ?>'" class="post-time"><?php the_time('M d, Y') ?></span></h2>
    </div>

    <?php endwhile; ?>

    <?php endif; ?>
    <div class="clear"></div>


<?php if ($wp_query->max_num_pages > 1) : ?>
  <div class="pagination">
   <?php next_posts_link(__('<span class="morebutton right">Older Photos &rarr;</span>')); ?>
   <?php previous_posts_link(__('<span class="morebutton left">&larr; Newer Photos</span>')); ?>
   </div>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>