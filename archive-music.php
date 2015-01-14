<?php
/*
Template Name: Music
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
	<h1>Music</h1>
	<div class="right">
    <ul class="load-portfolio">
        <li class="active"><a href="#" class="all">All</a></li>
        <?php
        $args = array( 'taxonomy' => 'music_type' );
        $terms = get_terms('music_type', $args);
        $count = count($terms); $i=0;
        if ($count > 0) {
            $cape_list = '';
            foreach ($terms as $term) {
                $i++;
                $term_list .= '<li><a href="#" class="'. $term->name .'">' . $term->name . '</a></li>';
                if ($count != $i) $term_list .= ''; else $term_list .= '';
            }
            echo $term_list;
        }
         ?>
    </ul>
</div>
</div>

<div class="clear"></div>

<div id="music">


<ul class="music-item">
        <?php
        $pfportfolio = new WP_Query( 'post_type=music&posts_per_page=999' );
        while ( $pfportfolio->have_posts() ) : $pfportfolio->the_post();?>
        <?php
            echo '<li data-id="post-'.get_the_ID().'" data-type="'.$terms_as_text = strip_tags( get_the_term_list( $post->ID, 'music_type', '', ' ', '' ) ).'"><a href="'.get_permalink().'">';
            the_post_thumbnail('square');
            echo '</a><h2><a href="'.get_permalink().'">';
            the_title();
            echo '</a></h2>';
            echo '</li>';
        endwhile;
 
        wp_reset_postdata();
        ?>
    </ul>







	<div class="clear"></div>
</div>





    <div class="clear"></div>
</div>

<?php get_footer(); ?>