<?php
/*
Template Name: Members
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

<div id="contentfull">

<div class="pagetitle">
  <h1>Members</h1>
</div>

<?php
$wp_query = new WP_Query(  array (
  'showposts' => 999,
    'paged' => $paged,
    'post_type' => 'members',     
    )
);
?>

<div id="photos">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="col4">
    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('square'); ?></a>
    <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h1>
    </div>

    <?php endwhile; ?>

    <?php endif; ?>
    <div class="clear"></div>
</div>
</div>

<?php get_footer(); ?>