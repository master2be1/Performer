<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0"/>
<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php echo get_theme_mod('googleanal'); ?>
<?php if(get_theme_mod( 'favicon' )) { ?>
<link rel="shortcut icon" href="<?php echo get_theme_mod( 'favicon'); ?>" />
<?php } ?>

<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'/>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/responsive/responsive-nav.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/responsive/styles.css"/>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/responsive/responsive-nav.js"></script>

<?php include('includes/style.php'); ?>

<script type="text/javascript">
    jQuery(document).ready(function($){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#backToTop').fadeIn('slow');
            } else {
                $('#backToTop').fadeOut('slow');
            }
        });
        $('#backToTop').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
    });
</script>

<script type="text/javascript">
// Code inside here fires when the DOM is ready
jQuery(window).load(function(){
    jQuery('#postmasonry').masonry({
        itemSelector : '.masonry',
        columnWidth : 5
    });
});
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.quicksand.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/blank.js" type="text/javascript"></script>

</head>
<body <?php body_class(); ?>>
 <div id="nav">

            <?php

        $defaults = array(
            'theme_location'  => '',
            'menu'            => '',
            'container'       => false,
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => false,
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul>%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        );

        wp_nav_menu( $defaults );

        ?>


</div>





<?php if(get_theme_mod( 'background' )) { ?>  










<div id="header">
 

    <div class="headbg">
        <div class="wrap">
            <div class="logo">

<?php if (get_theme_mod('headerlogo')) { ?>
<a href="<?php bloginfo('url');?>">
    <img alt="<?php bloginfo('name'); ?>" src="<?php echo get_theme_mod( 'headerlogo'); ?>"/></a>
<?php } else { ?> 
<a class="headlogo" href="<?php bloginfo('url');?>"><?php bloginfo('name'); ?></a>
<?php } ?>
            </div>
            <div class="nav">
                <?php wp_nav_menu(array( 'items_wrap' => '<ul>%3$s</ul>', 'theme_location' => 'header-nav', 'fallback_cb' => 'wp_page_menu')); ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <?php $backgroundshowonhomepage = get_theme_mod('backgroundshowonhomepage'); ?>
<?php if($backgroundshowonhomepage == 'all') { ?>

<div class="headimg">

<?php $hide_latest_video = get_theme_mod('hide_latest_video'); ?>
<?php if($hide_latest_video == 'Hide') { ?>
<?php } else { ?>



<?php $backgroundshowvideo = get_theme_mod('backgroundshowvideo'); ?>
<?php if($backgroundshowvideo == 'all') { ?>

<?php 
    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
    elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
    else { $paged = 1; }
    query_posts('posts_per_page=1&post_type=videos&paged=' . $paged);
    while (have_posts()) : the_post();
?>

<?php if(get_post_meta($post->ID, 'youtube_link', true)) { ?> 
<div class="featvideobox">
    <h1><?php the_title(); ?></h1>
    <div class="featvideo">
        <?php $youtubeID = youtubeID(get_post_meta($post->ID, 'youtube_link', true)); ?>
            <iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $youtubeID ?>?wmode=transparent" frameborder="0"></iframe>
    </div>
</div>
<?php } ?>


<?php endwhile; wp_reset_query(); ?>

<?php } else { ?>






<?php if(is_front_page() ) { ?>

<?php 
    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
    elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
    else { $paged = 1; }
    query_posts('posts_per_page=1&post_type=videos&paged=' . $paged);
    while (have_posts()) : the_post();
?>

<?php if(get_post_meta($post->ID, 'youtube_link', true)) { ?> 
<div class="featvideobox">

    <h1>
<?php if(get_post_meta($post->ID, 'header_title', true)) { ?> 
<?php echo get_post_meta( get_the_ID(), 'header_title', true ) ?>
<?php } else { ?>
    <?php the_title(); ?>
<?php } ?>
</h1>


    <div class="featvideo">
        <?php $youtubeID = youtubeID(get_post_meta($post->ID, 'youtube_link', true)); ?>
            <iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $youtubeID ?>?wmode=transparent" frameborder="0"></iframe>
    </div>
</div>
<?php } ?>


<?php endwhile; wp_reset_query(); ?>
<?php } ?>


<?php } ?>

<?php } ?>

</div>

<?php } else  if($backgroundshowonhomepage == 'homepage') { ?>

<?php if(is_front_page() ) { ?>
<div class="headimg">

<?php $hide_latest_video = get_theme_mod('hide_latest_video'); ?>
<?php if($hide_latest_video == 'Hide') { ?>
<?php } else { ?>



<?php $backgroundshowvideo = get_theme_mod('backgroundshowvideo'); ?>
<?php if($backgroundshowvideo == 'all') { ?>

<?php 
    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
    elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
    else { $paged = 1; }
    query_posts('posts_per_page=1&post_type=videos&paged=' . $paged);
    while (have_posts()) : the_post();
?>

<?php if(get_post_meta($post->ID, 'youtube_link', true)) { ?> 
<div class="featvideobox">
    <h1><?php the_title(); ?></h1>
    <div class="featvideo">
        <?php $youtubeID = youtubeID(get_post_meta($post->ID, 'youtube_link', true)); ?>
            <iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $youtubeID ?>?wmode=transparent" frameborder="0"></iframe>
    </div>
</div>
<?php } ?>


<?php endwhile; wp_reset_query(); ?>

<?php } else { ?>






<?php if(is_front_page() ) { ?>

<?php 
    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
    elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
    else { $paged = 1; }
    query_posts('posts_per_page=1&post_type=videos&paged=' . $paged);
    while (have_posts()) : the_post();
?>

<?php if(get_post_meta($post->ID, 'youtube_link', true)) { ?> 
<div class="featvideobox">

    <h1>
<?php if(get_post_meta($post->ID, 'header_title', true)) { ?> 
<?php echo get_post_meta( get_the_ID(), 'header_title', true ) ?>
<?php } else { ?>
    <?php the_title(); ?>
<?php } ?>
</h1>


    <div class="featvideo">
        <?php $youtubeID = youtubeID(get_post_meta($post->ID, 'youtube_link', true)); ?>
            <iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $youtubeID ?>?wmode=transparent" frameborder="0"></iframe>
    </div>
</div>
<?php } ?>


<?php endwhile; wp_reset_query(); ?>
<?php } ?>


<?php } ?>

<?php } ?>

</div>
<?php } ?>

<?php } else { ?> 
<div class="headimg">

<?php $hide_latest_video = get_theme_mod('hide_latest_video'); ?>
<?php if($hide_latest_video == 'Hide') { ?>
<?php } else { ?>



<?php $backgroundshowvideo = get_theme_mod('backgroundshowvideo'); ?>
<?php if($backgroundshowvideo == 'all') { ?>

<?php 
    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
    elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
    else { $paged = 1; }
    query_posts('posts_per_page=1&post_type=videos&paged=' . $paged);
    while (have_posts()) : the_post();
?>

<?php if(get_post_meta($post->ID, 'youtube_link', true)) { ?> 
<div class="featvideobox">
    <h1><?php the_title(); ?></h1>
    <div class="featvideo">
        <?php $youtubeID = youtubeID(get_post_meta($post->ID, 'youtube_link', true)); ?>
            <iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $youtubeID ?>?wmode=transparent" frameborder="0"></iframe>
    </div>
</div>
<?php } ?>


<?php endwhile; wp_reset_query(); ?>

<?php } else { ?>






<?php if(is_front_page() ) { ?>

<?php 
    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
    elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
    else { $paged = 1; }
    query_posts('posts_per_page=1&post_type=videos&paged=' . $paged);
    while (have_posts()) : the_post();
?>

<?php if(get_post_meta($post->ID, 'youtube_link', true)) { ?> 
<div class="featvideobox">

    <h1>
<?php if(get_post_meta($post->ID, 'header_title', true)) { ?> 
<?php echo get_post_meta( get_the_ID(), 'header_title', true ) ?>
<?php } else { ?>
    <?php the_title(); ?>
<?php } ?>
</h1>


    <div class="featvideo">
        <?php $youtubeID = youtubeID(get_post_meta($post->ID, 'youtube_link', true)); ?>
            <iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $youtubeID ?>?wmode=transparent" frameborder="0"></iframe>
    </div>
</div>
<?php } ?>


<?php endwhile; wp_reset_query(); ?>
<?php } ?>


<?php } ?>

<?php } ?>

</div>
<?php } ?>










<?php } else { ?>





<div id="header">
    <div class="headbg">
        <div class="wrap">
            <div class="logo">

<?php if (get_theme_mod('headerlogo')) { ?>
<a href="<?php bloginfo('url');?>">
    <img alt="<?php bloginfo('name'); ?>" src="<?php echo get_theme_mod( 'headerlogo'); ?>"></a>
<?php } else { ?> 
<a class="headlogo" href="<?php bloginfo('url');?>"><?php bloginfo('name'); ?></a>
<?php } ?>
            </div>
            <div class="nav">
                <?php wp_nav_menu(array( 'items_wrap' => '<ul>%3$s</ul>', 'theme_location' => 'header-nav', 'fallback_cb' => 'wp_page_menu')); ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>




<?php } ?>






</div>

<div id="container">
    <div class="wrap">