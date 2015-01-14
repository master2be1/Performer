<?php
/*
Template Name: Videos
*/
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
  <h1>Videos</h1>
</div>


        <div id="videoposts">

    <?php
    $temp = $wp_query;
    $wp_query= null;
    $wp_query = new WP_Query();
    $wp_query->query('post_type=videos'.'&paged='.$paged);
    ?>


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="col2">
    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('col2post'); ?></a>
    <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h1>
    <h2><span onclick="window.location.href='<?php the_permalink() ?>'" class="post-time"><?php the_time('M d, Y') ?></span>
    ⋅ <?php echo get_the_term_list($post->ID,  'video_category', '', ', ', ''); ?>
    </h2>
    </div>

    <?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
   <?php next_posts_link(__('<span class="morebutton right">Older Videos &rarr;</span>')); ?>
   <?php previous_posts_link(__('<span class="morebutton left">&larr; Newer Videos</span>')); ?>
<?php endif; ?>

    <?php endif; ?>
    <div class="clear"></div>
</div>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>