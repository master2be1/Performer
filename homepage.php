<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
</div>

<?php if(get_theme_mod( 'homedescription' )) { ?>  
	<div class="description">
		<div class="wrap">
			<p><?php echo get_theme_mod( 'homedescription')?></p>
		</div>
	</div>
<?php } else { ?><?php } ?>






<?php 
    $eventshasposts = get_posts( array('post_type' => 'events', 'posts_per_page' => -1) );
    if($eventshasposts) {
?>


<?php $hide_home_events = get_theme_mod('hide_home_events'); ?>
<?php if($hide_home_events == 'Hide') { ?>

<?php } else { ?>


<div class="section bg1">
<div class="wrap">


<h1>
<?php if(get_theme_mod( 'homeeventtitle' )) { ?>  
<?php echo get_theme_mod( 'homeeventtitle'); ?>
<?php } else { ?>
	LATEST EVENTS
<?php } ?>
</h1>

<?php
$currentdate = date("Y-m-d",mktime(0,0,0,date("m"),date("d"),date("Y")));

$wp_query = new WP_Query(  array ('showposts' => 3,
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

<div class="home-event">
<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php if(get_post_meta($post->ID, 'date_plain_text', true)) { ?> 
<p><?php echo get_post_meta($post->ID, 'date_plain_text', true); ?></p>
<?php } else { ?>
<p><?php echo get_post_meta($post->ID, 'event_date', true); ?></p>
<?php } ?>

<?php if(get_post_meta($post->ID, 'purchase_ticket', true)): ?>
<a class="event-btn" href="<?php echo get_post_meta($post->ID, 'purchase_ticket', true); ?>"  target="_blank">TICKETS</a>
<?php endif;?>

<?php if(get_post_meta($post->ID, 'more_information_link', true)): ?>
<a class="event-btn" href="<?php echo get_post_meta($post->ID, 'more_information_link', true); ?>"  target="_blank">MORE INFO</a>
<?php endif;?>


</div>

<?php endwhile; ?>


<div class="clear"></div>
<div class="homeviewmore"><a href="
<?php if(get_theme_mod( 'homeeventlink' )) { ?>  
<?php echo get_theme_mod( 'homeeventlink'); ?>
<?php } else { ?>
<?php bloginfo('url')?>/events/
<?php } ?>
">SHOW ALL UPCOMING EVENTS</a></div>
</div>

</div>

<?php } ?>
<?php } ?>












<?php 
    $posthasposts = get_posts( array('post_type' => 'music', 'posts_per_page' => -1) );
    if($posthasposts) {
?>

<?php $hide_home_music = get_theme_mod('hide_home_music'); ?>
<?php if($hide_home_music == 'Hide') { ?>

<?php } else { ?>

<div class="section bg2">
	<div class="wrap">

<h1>
<?php if(get_theme_mod( 'homemusictitle' )) { ?>  
<?php echo get_theme_mod( 'homemusictitle'); ?>
<?php } else { ?>
	MUSIC
<?php } ?>
</h1>

<div class="latestposts">
	<div class="homeposts">
<?php
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = 1; }

	query_posts('posts_per_page=3&post_type=music&paged=' . $paged);
	while (have_posts()) : the_post();
?>
<div class="homecover">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover'); ?></a>
</div>

<?php endwhile; ?>
<div class="clear"></div>
<div class="homeviewmore"><a href="
<?php if(get_theme_mod( 'homemusiclink' )) { ?>  
<?php echo get_theme_mod( 'homemusiclink'); ?>
<?php } else { ?>
<?php bloginfo('url')?>/music/
<?php } ?>
">VIEW ALL MUSIC</a></div>
</div>
</div>

</div>
</div>

<?php } ?>
<?php } ?>







<?php 
    $bloghasposts = get_posts( array('post_type' => 'post', 'posts_per_page' => -1) );
    if($bloghasposts) {
?>

<?php $hide_home_blog = get_theme_mod('hide_home_blog'); ?>
<?php if($hide_home_blog == 'Hide') { ?>

<?php } else { ?>


<div class="section bg3">
	<div class="wrap">
<h1>
<?php if(get_theme_mod( 'homeblogtitle' )) { ?>  
<?php echo get_theme_mod( 'homeblogtitle'); ?>
<?php } else { ?>
	LATEST BLOG POSTS
<?php } ?>
</h1>



<div class="latestposts">
	<div class="homeposts">
<?php
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = 1; }

	query_posts('posts_per_page=3&post_type=post&paged=' . $paged);
	while (have_posts()) : the_post();
?>
<div class="homepost">
		<div class="homeimg"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('latestpost'); ?></a></div>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="homemeta">
			<span onclick="window.location.href='<?php the_permalink() ?>'" class="post-time"><?php the_time('F j, Y') ?></span></div>
	</div>

<?php endwhile; ?>
<div class="clear"></div>

<div class="homeviewmore"><a href="
<?php if(get_theme_mod( 'homebloglink' )) { ?>  
<?php echo get_theme_mod( 'homebloglink'); ?>
<?php } else { ?>
<?php bloginfo('url')?>/blog/
<?php } ?>
">LATEST BLOG POSTS</a></div>

</div>
</div>

</div>
</div>

<?php } ?>
<?php } ?>












<?php 
    $photoshasposts = get_posts( array('post_type' => 'photos', 'posts_per_page' => -1) );
    if($photoshasposts) {
?>


<?php $hide_home_photos = get_theme_mod('hide_home_photos'); ?>
<?php if($hide_home_photos == 'Hide') { ?>

<?php } else { ?>


<div class="section bg4">
	<div class="wrap">

<h1>
<?php if(get_theme_mod( 'homephotostitle' )) { ?>  
<?php echo get_theme_mod( 'homephotostitle'); ?>
<?php } else { ?>
	PHOTOS
<?php } ?>
</h1>

<div class="home-photos">

<?php
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = 1; }

	query_posts('posts_per_page=1&post_type=photos&paged=' . $paged);
	while (have_posts()) : the_post();
?>
<div class="homephotobig">

<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail('homephotobig'); ?>
</a></div>



<?php endwhile; ?>




<div class="homephotoright">
<?php
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = 1; }

	query_posts('posts_per_page=2&offset=-1&post_type=photos&paged=' . $paged);
	while (have_posts()) : the_post();
?>
<div class="homephotomed">

<?php
 
$attachment_id = get_field('image');
$size = "homephotomed"; // or medium, full, custom
$full_img2 = wp_get_attachment_image_src( $attachment_id, $size );
$full_img2 = $full_img2[0];
 
?>

<a href="<?php the_permalink(); ?>">
<?php if(get_post_meta($post->ID, 'image', true)) { ?> 
<img width="600" height="500" src="<?php echo $full_img2 ?>" alt="<?php the_title();?>"/>
<?php } else { ?>
<?php the_post_thumbnail('homephotomed'); ?>
<?php } ?>
</a>

</div>
<?php endwhile; ?>
</div>


<div class="clear"></div>
<div class="homeviewmore"><a href="
<?php if(get_theme_mod( 'homephotoslink' )) { ?>  
<?php echo get_theme_mod( 'homephotoslink'); ?>
<?php } else { ?>
<?php bloginfo('url')?>/photos/
<?php } ?>
">VIEW MORE PHOTOS</a></div>

</div><div class="clear"></div>
</div>
</div>

<?php } ?>

<?php } ?>











<?php 
    $videoshasposts = get_posts( array('post_type' => 'videos', 'posts_per_page' => -1) );
    if($videoshasposts) {
?>


<?php $hide_home_videos = get_theme_mod('hide_home_videos'); ?>
<?php if($hide_home_videos == 'Hide') { ?>

<?php } else { ?>



<div class="section bg5">
	<div class="wrap">
<h1>
<?php if(get_theme_mod( 'homevideostitle' )) { ?>  
<?php echo get_theme_mod( 'homevideostitle'); ?>
<?php } else { ?>
	VIDEOS
<?php } ?>
</h1>



<?php if($videopagination = get_theme_mod( 'homevideospagination')) { ?>




<?php
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

$arr=$videopagination;
$args = array(
  'post_type' => 'videos',
  'showposts' => $arr,
  'paged'=>$paged,
  );
query_posts($args);
while (have_posts()) : the_post();
?>



<div class="homevideo">


<?php
 
$attachment_id = get_field('image');
$size = "homevideo"; // or medium, full, custom
$full_img3 = wp_get_attachment_image_src( $attachment_id, $size );
$full_img3 = $full_img3[0];
 
?>

<a href="<?php the_permalink(); ?>">
<?php if(get_post_meta($post->ID, 'image', true)) { ?> 
<img src="<?php echo $full_img3 ?>" alt="<?php the_title();?>"/>
<?php } else { ?>
<?php the_post_thumbnail('homevideo'); ?>
<?php } ?>
</a>
<div onclick="window.location.href='<?php the_permalink() ?>'" class="playoverlay"></div>
<h4><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h4>


</div>

<?php endwhile; ?>




<?php } else { ?>

<?php
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = 1; }

	query_posts('posts_per_page=8&post_type=videos&paged=' . $paged);
	while (have_posts()) : the_post();
?>

<div class="homevideo">


<?php
 
$attachment_id = get_field('image');
$size = "homevideo"; // or medium, full, custom
$full_img3 = wp_get_attachment_image_src( $attachment_id, $size );
$full_img3 = $full_img3[0];
 
?>

<a href="<?php the_permalink(); ?>">
<?php if(get_post_meta($post->ID, 'image', true)) { ?> 
<img src="<?php echo $full_img3 ?>" alt="<?php the_title();?>"/>
<?php } else { ?>
<?php the_post_thumbnail('homevideo'); ?>
<?php } ?>
</a>
<div onclick="window.location.href='<?php the_permalink() ?>'" class="playoverlay"></div>
<h4><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h4>


</div>

<?php endwhile; ?>

<?php } ?>






<div class="clear"></div>

<div class="homeviewmore"><a href="
<?php if(get_theme_mod( 'homevideoslink' )) { ?>  
<?php echo get_theme_mod( 'homevideoslink'); ?>
<?php } else { ?>
<?php bloginfo('url')?>/videos/
<?php } ?>
">VIEW MORE VIDEOS</a></div>


</div>
</div>

<?php } ?>
<?php } ?>














<?php 
    $membershasposts = get_posts( array('post_type' => 'members', 'posts_per_page' => -1) );
    if($membershasposts) {
?>

<?php $hide_home_members = get_theme_mod('hide_home_members'); ?>
<?php if($hide_home_members == 'Hide') { ?>

<?php } else { ?>


<div class="section bg6">
	<div class="wrap">
<h1>
<?php if(get_theme_mod( 'homememberstitle' )) { ?>  
<?php echo get_theme_mod( 'homememberstitle'); ?>
<?php } else { ?>
	MEMBERS
<?php } ?>
</h1>


<?php
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = 1; }

	query_posts('posts_per_page=4&post_type=members&paged=' . $paged);
	while (have_posts()) : the_post();
?>
<div class="homemembers">


<?php
 
$attachment_id = get_field('image');
$size = "square"; // or medium, full, custom
$full_img3 = wp_get_attachment_image_src( $attachment_id, $size );
$full_img3 = $full_img3[0];
 
?>

<a href="<?php the_permalink(); ?>">
<?php if(get_post_meta($post->ID, 'image', true)) { ?> 
<img width="235" height="235" src="<?php echo $full_img3 ?>" alt="<?php the_title();?>"/>
<?php } else { ?>
<?php the_post_thumbnail('homephotomed'); ?>
<?php } ?>
</a>
<h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>


</div>

<?php endwhile; ?>
<div class="clear"></div>

<div class="homeviewmore"><a href="
<?php if(get_theme_mod( 'homememberslink' )) { ?>  
<?php echo get_theme_mod( 'homememberslink'); ?>
<?php } else { ?>
<?php bloginfo('url')?>/members/
<?php } ?>
">VIEW ALL MEMBERS</a></div>


</div>
</div>

<?php } ?>

<?php } ?>




<?php if(get_theme_mod( 'soundcloudembed' ) OR get_theme_mod( 'soundcloudtitle' )  ) { ?>

<div class="section bg6">
	<div class="wrap">

<?php if(get_theme_mod( 'soundcloudtitle' )) { ?>  
<h1><?php echo get_theme_mod( 'soundcloudtitle'); ?></h1>
<?php } ?>

<?php echo get_theme_mod( 'soundcloudembed'); ?>


</div></div>

<?php } ?>







<?php 

if(get_theme_mod( 'sponsor1image' ) OR get_theme_mod( 'sponsor2image' ) OR get_theme_mod( 'sponsor3image' ) OR
   get_theme_mod( 'sponsor4image' ) OR get_theme_mod( 'sponsor5image' ) OR get_theme_mod( 'sponsor6image' ) OR
   get_theme_mod( 'sponsor7image' ) OR get_theme_mod( 'sponsor8image' ) OR get_theme_mod( 'sponsor9image' ) OR
   get_theme_mod( 'sponsor10image' ) ) { ?>

<div class="section bg7">
	<div class="wrap">

		<?php if(get_theme_mod( 'sponsorstitle' )) { ?>  
<h1><?php echo get_theme_mod( 'sponsorstitle'); ?></h1>
<?php } ?>


		<ul id="sponsors">

		<?php if(get_theme_mod( 'sponsor1image' )) { ?>  
		<?php if(get_theme_mod( 'sponsor1link' )) { ?>  
        <li><a href="<?php echo get_theme_mod( 'sponsor1link'); ?>"><img alt="" src="<?php echo get_theme_mod( 'sponsor1image'); ?>"/></a></li>
        <?php } else { ?>
		<li><img alt="" src="<?php echo get_theme_mod( 'sponsor1image'); ?>"/></li>
		<?php } ?>
		<?php } ?>


		<?php if(get_theme_mod( 'sponsor2image' )) { ?>  
		<?php if(get_theme_mod( 'sponsor2link' )) { ?>  
        <li><a href="<?php echo get_theme_mod( 'sponsor2link'); ?>"><img alt="" src="<?php echo get_theme_mod( 'sponsor2image'); ?>"/></a></li>
        <?php } else { ?>
		<li><img alt="" src="<?php echo get_theme_mod( 'sponsor2image'); ?>"/></li>
		<?php } ?>
		<?php } ?>


		<?php if(get_theme_mod( 'sponsor3image' )) { ?>  
		<?php if(get_theme_mod( 'sponsor3link' )) { ?>  
        <li><a href="<?php echo get_theme_mod( 'sponsor3link'); ?>"><img alt="" src="<?php echo get_theme_mod( 'sponsor3image'); ?>"/></a></li>
        <?php } else { ?>
		<li><img alt="" src="<?php echo get_theme_mod( 'sponsor3image'); ?>"/></li>
		<?php } ?>
		<?php } ?>


		<?php if(get_theme_mod( 'sponsor4image' )) { ?>  
		<?php if(get_theme_mod( 'sponsor4link' )) { ?>  
        <li><a href="<?php echo get_theme_mod( 'sponsor4link'); ?>"><img alt="" src="<?php echo get_theme_mod( 'sponsor4image'); ?>"/></a></li>
        <?php } else { ?>
		<li><img alt="" src="<?php echo get_theme_mod( 'sponsor4image'); ?>"/></li>
		<?php } ?>
		<?php } ?>



		<?php if(get_theme_mod( 'sponsor5image' )) { ?>  
		<?php if(get_theme_mod( 'sponsor5link' )) { ?>  
        <li><a href="<?php echo get_theme_mod( 'sponsor5link'); ?>"><img alt="" src="<?php echo get_theme_mod( 'sponsor5image'); ?>"/></a></li>
        <?php } else { ?>
		<li><img alt="" src="<?php echo get_theme_mod( 'sponsor5image'); ?>"/></li>
		<?php } ?>
		<?php } ?>



		<?php if(get_theme_mod( 'sponsor6image' )) { ?>  
		<?php if(get_theme_mod( 'sponsor6link' )) { ?>  
        <li><a href="<?php echo get_theme_mod( 'sponsor6link'); ?>"><img alt="" src="<?php echo get_theme_mod( 'sponsor6image'); ?>"/></a></li>
        <?php } else { ?>
		<li><img alt="" src="<?php echo get_theme_mod( 'sponsor6image'); ?>"/></li>
		<?php } ?>
		<?php } ?>



		<?php if(get_theme_mod( 'sponsor7image' )) { ?>  
		<?php if(get_theme_mod( 'sponsor7link' )) { ?>  
        <li><a href="<?php echo get_theme_mod( 'sponsor7link'); ?>"><img alt="" src="<?php echo get_theme_mod( 'sponsor7image'); ?>"/></a></li>
        <?php } else { ?>
		<li><img alt="" src="<?php echo get_theme_mod( 'sponsor7image'); ?>"/></li>
		<?php } ?>
		<?php } ?>




		<?php if(get_theme_mod( 'sponsor8image' )) { ?>  
		<?php if(get_theme_mod( 'sponsor8link' )) { ?>  
        <li><a href="<?php echo get_theme_mod( 'sponsor8link'); ?>"><img alt="" src="<?php echo get_theme_mod( 'sponsor8image'); ?>"/></a></li>
        <?php } else { ?>
		<li><img alt="" src="<?php echo get_theme_mod( 'sponsor8image'); ?>"/></li>
		<?php } ?>
		<?php } ?>




		<?php if(get_theme_mod( 'sponsor9image' )) { ?>  
		<?php if(get_theme_mod( 'sponsor9link' )) { ?>  
        <li><a href="<?php echo get_theme_mod( 'sponsor9link'); ?>"><img alt="" src="<?php echo get_theme_mod( 'sponsor9image'); ?>"/></a></li>
        <?php } else { ?>
		<li><img alt="" src="<?php echo get_theme_mod( 'sponsor9image'); ?>"/></li>
		<?php } ?>
		<?php } ?>




		<?php if(get_theme_mod( 'sponsor10image' )) { ?>  
		<?php if(get_theme_mod( 'sponsor10link' )) { ?>  
        <li><a href="<?php echo get_theme_mod( 'sponsor10link'); ?>"><img alt="" src="<?php echo get_theme_mod( 'sponsor10image'); ?>"/></a></li>
        <?php } else { ?>
		<li><img alt="" src="<?php echo get_theme_mod( 'sponsor10image'); ?>" /></li>
		<?php } ?>
		<?php } ?>


	</ul>
			<div class="clear"></div>
</div>
</div>

<?php } ?>






<?php get_footer(); ?>