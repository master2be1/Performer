<?php
/*
Template Name: Events 2 Column Masonry Sidebar
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
<h1 class="left"><?php the_title();?></h1>


  <li class="right"><a href="http://themes.artexor.com/performer/previous-events/">PREVIOUS EVENTS</a></li>
 

    <div class="clear"></div>
</div>

<?php the_content();?>


<div id="postmasonry">

<?php
$currentdate = date("Y-m-d",mktime(0,0,0,date("m"),date("d"),date("Y")));

$wp_query = new WP_Query(  array (
                'paged' => $paged,
                'post_type' => 'events',
                'meta_query'=> array(
                    array(
                      'key' => 'event_date',
                      'compare' => '>=',
                      'value' => $currentdate,
                      'type' => 'DATE',
					  
                    )),
                'meta_key' => 'event_date',
                'orderby' => 'meta_value',
                'order' => 'ASC'
    )
);

?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="col2 masonry">
  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('masonrypost'); ?></a>
  <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>


<div class="eventmeta">
<?php if(get_post_meta($post->ID, 'date_plain_text', true)) { ?> 
<?php echo get_post_meta($post->ID, 'date_plain_text', true); ?>
<?php } else { ?>
<?php echo get_post_meta($post->ID, 'event_date', true); ?>
<?php } ?>
 ⋅ <?php echo get_the_term_list($post->ID,  'location', '', ', ', ''); ?>
</div>
</div>

<?php endwhile; ?>

    <div class="clear"></div>
</div>


<?php if ($wp_query->max_num_pages > 1) : ?>
  <div class="pagination">
   <?php next_posts_link(__('<span class="morebutton right">Older Events &rarr;</span>')); ?>
   <?php previous_posts_link(__('<span class="morebutton left">&larr; Newer Events</span>')); ?>
   </div>
<?php endif; ?>


</div>



<?php get_sidebar(); ?>
<?php get_footer(); ?>