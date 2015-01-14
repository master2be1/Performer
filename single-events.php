<?php get_header();

?>




<div id="contentfull">
<div class="blogpage">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1><?php the_title();?></h1>


		<div class="blogmeta">
			<span onclick="window.location.href='<?php the_permalink() ?>'" class="post-time"><?php the_time('M d, Y') ?></span> ⋅
			<?php echo get_the_term_list($post->ID,  'location', '', ', ', ''); ?> ⋅
			<span class="post-author">By <?php the_author_posts_link(); ?></span>
		</div>


<?php 
if(get_post_meta($post->ID, 'more_information_link', true) OR get_post_meta($post->ID, 'purchase_ticket', true) 
) { ?>
<div style="margin:20px 0;">
		<?php if(get_post_meta($post->ID, 'more_information_link', true)): ?>
			<a class="button" href="<?php echo get_post_meta($post->ID, 'more_information_link', true); ?>">More Information</a>
		<?php endif;?>
		<?php if(get_post_meta($post->ID, 'purchase_ticket', true)): ?>
			<a class="button" href="<?php echo get_post_meta($post->ID, 'purchase_ticket', true); ?>">Purchase Ticket</a>
		<?php endif;?>
	</div>
<?php } ?>



		<?php the_content(); ?>

		<div class="col2-alt colt">
			<?php the_post_thumbnail('original'); ?>
		</div>

	<div class="col2-alt">	








	<?php if(get_post_meta($post->ID, 'date_plain_text', true)) { ?> 
		<h1>Event Date: <?php echo get_post_meta($post->ID, 'date_plain_text', true); ?></h1>
	<?php } else { ?>
    <h1>Event Date: <?php echo get_post_meta($post->ID, 'event_date', true); ?></h1>
    <?php } ?>

    <?php if(get_the_term_list($post->ID, 'location', true)): ?>
		<h1>Location: <?php echo get_the_term_list($post->ID,  'location', '', ', ', ''); ?></h1>
	<?php endif;?>



	<?php if(get_post_meta($post->ID, 'google_maps_embed', true)): ?>
		<div class="eventdiv"><?php echo get_post_meta($post->ID, 'google_maps_embed', true); ?></div>
	<?php endif;?>
	<?php if(get_post_meta($post->ID, 'embed', true)): ?>
		<div class="eventdiv"><?php echo get_post_meta($post->ID, 'embed', true); ?></div>
	<?php endif;?>

</div>
<p><?php the_tags(); ?></p>
<div class="clear"></div>
			<div id="comments">

				<?php comments_template(); ?>

			</div>





			<div class="clear"></div>



		<?php endwhile; ?>
		<?php endif; ?>







<div class="clear"></div>
</div>
</div>

<?php get_footer(); ?>
