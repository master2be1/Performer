<?php get_header();

?>




<div id="contentfull">
<div class="blogpage">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="pagetitle">
	<h1 class="left"><?php the_title();?></h1>
	<ul class="right">
		<li class="button"><?php

$terms_as_text = get_the_term_list( $post->ID, 'music_type', '', ', ', '' ) ;
echo strip_tags($terms_as_text);

?></li>
	</ul>
	<div class="clear"></div>
</div>



<div class="leftinfo"><?php the_post_thumbnail('square'); ?>


<ul style="margin:0;padding:0;">
	<?php if(get_post_meta($post->ID, 'download_link', true)): ?>
	<li><a href="<?php echo get_post_meta($post->ID, 'download_link', true); ?>">DOWNLOAD</a></li>
<?php endif;?>

<?php if(get_post_meta($post->ID, 'itunes_link', true)): ?>
	<li><a href="<?php echo get_post_meta($post->ID, 'itunes_link', true); ?>">iTUNES</a></li>
<?php endif;?>

<?php if(get_post_meta($post->ID, 'amazon_link', true)): ?>
	<li><a href="<?php echo get_post_meta($post->ID, 'amazon_link', true); ?>">AMAZON</a></li>
<?php endif;?>


<?php if(get_post_meta($post->ID, 'custom_box_link', true)): ?>
	<li><a href="<?php echo get_post_meta($post->ID, 'custom_box_link', true); ?>"><?php echo get_post_meta($post->ID, 'custom_box_text', true); ?></a></li>
<?php endif;?>
</ul>

</div>

		<div class="rightinfo">


<?php the_content(); ?>

</div>


<?php endwhile; ?>
<?php endif; ?>








</div><div class="clear"></div>
</div>



<?php get_footer(); ?>
