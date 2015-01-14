<?php get_header();

?>




<div id="contentfull">
<div class="blogpage">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="pagetitle">
		<div class="pagetitle"><h1><?php the_title();?></h1></div>

<span class="right">
<?php if(get_post_meta($post->ID, 'official_website', true)): ?>
	<a class="button" href="<?php echo get_post_meta($post->ID, 'official_website', true); ?>">OFFICIAL WEBSITE</a>
<?php endif;?>

<?php if(get_post_meta($post->ID, 'twitter_link', true)): ?>
	<a class="button" href="<?php echo get_post_meta($post->ID, 'twitter_link', true); ?>">TWITTER</a>
<?php endif;?>

<?php if(get_post_meta($post->ID, 'facebook_link', true)): ?>
	<a class="button" href="<?php echo get_post_meta($post->ID, 'facebook_link', true); ?>">FACEBOOK</a>
<?php endif;?>

<?php if(get_post_meta($post->ID, 'youtube_link', true)): ?>
	<a class="button" href="<?php echo get_post_meta($post->ID, 'youtube_link', true); ?>">YOUTUBE</a>
<?php endif;?>

<?php if(get_post_meta($post->ID, 'custom_button_link', true)): ?>
	<a class="button" href="<?php echo get_post_meta($post->ID, 'custom_button_link', true); ?>"><?php echo get_post_meta($post->ID, 'custom_button_text', true); ?></a>
<?php endif;?>
</span>

	</div>

		<div class="alignleft">


<div class="alignleft"><?php the_post_thumbnail('square'); ?></div>

<?php the_content(); ?>



<?php endwhile; ?>
<?php endif; ?>







<div class="clear"></div>
</div>
</div><div class="clear"></div>
</div>



<?php get_footer(); ?>
