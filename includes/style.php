<style type="text/css">


<?php if(get_theme_mod( 'background' )) { ?>  

.headimg {
	background-image: url(<?php echo get_theme_mod( 'background')?>) !important;
	background-attachment:<?php echo get_theme_mod( 'backgroundattachment')?> ;
	background-repeat:<?php echo get_theme_mod( 'backgroundrepeat')?> ;
	background-position:<?php echo get_theme_mod( 'backgroundposition')?> ;
	background-size:<?php echo get_theme_mod( 'backgroundsize')?>;
	height:<?php echo get_theme_mod( 'imageheight')?>;
}

<?php } ?>




/********* HOMEPAGE SECTIONS Background *************/

<?php if(get_theme_mod( 'eventsbackground' )) { ?>  

.bg1 {
	background-image: url(<?php echo get_theme_mod( 'eventsbackground')?>) !important;
	background-attachment:<?php echo get_theme_mod( 'eventsbackgroundattachment')?> !important;
	background-repeat:<?php echo get_theme_mod( 'eventsbackgroundrepeat')?>  !important;
	background-size:<?php echo get_theme_mod( 'eventsbackgroundsize')?> !important;
}

<?php } ?>



<?php if(get_theme_mod( 'musicbackground' )) { ?>  

.bg2 {
	background-image: url(<?php echo get_theme_mod( 'musicbackground')?>) !important;
	background-attachment:<?php echo get_theme_mod( 'musicbackgroundattachment')?> !important;
	background-repeat:<?php echo get_theme_mod( 'musicbackgroundrepeat')?>  !important;
	background-size:<?php echo get_theme_mod( 'musicbackgroundsize')?> !important;
}

<?php } ?>



<?php if(get_theme_mod( 'blogbackground' )) { ?>  

.bg3 {
	background-image: url(<?php echo get_theme_mod( 'blogbackground')?>) !important;
	background-attachment:<?php echo get_theme_mod( 'blogbackgroundattachment')?> !important;
	background-repeat:<?php echo get_theme_mod( 'blogbackgroundrepeat')?>  !important;
	background-size:<?php echo get_theme_mod( 'blogbackgroundsize')?> !important;
}

<?php } ?>



<?php if(get_theme_mod( 'photosbackground' )) { ?>  

.bg4 {
	background-image: url(<?php echo get_theme_mod( 'photosbackground')?>) !important;
	background-attachment:<?php echo get_theme_mod( 'photosbackgroundattachment')?> !important;
	background-repeat:<?php echo get_theme_mod( 'photosbackgroundrepeat')?>  !important;
	background-size:<?php echo get_theme_mod( 'photosbackgroundsize')?> !important;
}

<?php } ?>



<?php if(get_theme_mod( 'videosbackground' )) { ?>  

.bg5 {
	background-image: url(<?php echo get_theme_mod( 'videosbackground')?>) !important;
	background-attachment:<?php echo get_theme_mod( 'videosbackgroundattachment')?> !important;
	background-repeat:<?php echo get_theme_mod( 'videosbackgroundrepeat')?>  !important;
	background-size:<?php echo get_theme_mod( 'videosbackgroundsize')?> !important;
}

<?php } ?>





<?php if(get_theme_mod( 'membersbackground' )) { ?>  

.bg5 {
	background-image: url(<?php echo get_theme_mod( 'membersbackground')?>) !important;
	background-attachment:<?php echo get_theme_mod( 'membersbackgroundattachment')?> !important;
	background-repeat:<?php echo get_theme_mod( 'membersbackgroundrepeat')?>  !important;
	background-size:<?php echo get_theme_mod( 'membersbackgroundsize')?> !important;
}

<?php } ?>





<?php if(get_option( 'backgroundcolor' )) { ?>
		body {background: <?php echo get_option( 'backgroundcolor'); ?> !important; }
		.section, .description {background-color:<?php echo get_option( 'backgroundcolor'); ?>;}
<?php } ?>


<?php if(get_option( 'text_color' )) { ?>
	body, .description, .homeitem p  { color:  <?php echo get_option( 'text_color')?> !important; }
<?php } ?>







<?php if(get_option( 'accentcolor' )) { ?>

	input:focus, textarea:focus, .button:hover, .event-btn:hover, .pagetitle li:hover, .morebutton:hover, 
.leftinfo li:hover, .pagetitle li.active, .footer input:hover, .footerbtn:hover  {
	background-color: <?php echo get_option( 'accentcolor')?> !important;
	border: 2px solid <?php echo get_option( 'accentcolor')?> !important;
}
 #nav-toggle {background-color: <?php echo get_option( 'accentcolor')?> !important; } 
a { color:  <?php echo get_option( 'accentcolor')?> !important; }

<?php } ?>









<?php if(get_option( 'homedescbg' )) { ?>
	.description {background-color: <?php echo get_option( 'homedescbg')?> !important; }
<?php } ?>

<?php if(get_option( 'homeeventsbg' )) { ?>
	.bg1 {background-color: <?php echo get_option( 'homeeventsbg')?> !important; }
<?php } ?>

<?php if(get_option( 'homemusicbg' )) { ?>
	.bg2 {background-color: <?php echo get_option( 'homemusicbg')?> !important; }
<?php } ?>

<?php if(get_option( 'homeblogbg' )) { ?>
	.bg3 {background-color: <?php echo get_option( 'homeblogbg')?> !important; }
<?php } ?>

<?php if(get_option( 'homephotosbg' )) { ?>
	.bg4 {background-color: <?php echo get_option( 'homephotosbg')?> !important; }
<?php } ?>

<?php if(get_option( 'homevideosbg' )) { ?>
	.bg5 {background-color: <?php echo get_option( 'homevideosbg')?> !important; }
<?php } ?>

<?php if(get_option( 'homemembersbg' )) { ?>
	.bg6 {background-color: <?php echo get_option( 'homemembersbg')?> !important; }
<?php } ?>

<?php if(get_option( 'homesponsorsbg' )) { ?>
	.bg7 {background-color: <?php echo get_option( 'homesponsorsbg')?> !important; }
<?php } ?>


<?php if(get_option( 'header_text_color' )) { ?>
#content h1, #content h2, #content h3, #content h4, #content h1 a, 
#content h2 a, #content h3 a, #content h4 a, #contentfull h1, #contentfull h2, 
#contentfull h3, #contentfull h4, #contentfull h1 a, 
#contentfull h2 a, #contentfull h3 a, #contentfull h4 a {
 color:  <?php echo get_option( 'header_text_color')?> !important; }
<?php } ?>


<?php if(get_option( 'footer_title_color' )) { ?>
	.footerwidget h2 { color:<?php echo get_option( 'footer_title_color')?>!important; }
<?php } ?>



<?php if(get_option( 'footer_widget_text_color' )) { ?>
	.textwidget { color:<?php echo get_option( 'footer_widget_text_color')?> !important; }
	.footerinfo a, .footer a, .footerwidget li a, .footer-nav ul li a, .footerwidget ul, .footerwidget ul li a, .footerinfo {color: <?php echo get_option( 'footer_widget_text_color')?> !important;}
	.footerwidgets {border-bottom: 1px solid <?php echo get_option( 'footer_widget_text_color')?> !important;}
<?php } ?>


.nav ul li a {color:<?php echo get_option( 'header_nav_link_color')?>!important; }
.nav ul ul li {background-color:<?php echo get_option( 'header_nav_dropdown_background_color')?>!important;}
.nav ul ul li {color:<?php echo get_option( 'header_nav_dropdown_link_color')?>!important;}




<?php if(get_option( 'footer_background_color' )) { ?>
	.footer { background-color:<?php echo get_option( 'footer_background_color')?> !important; }
<?php } ?>


<?php if(get_option( 'logocolour' )) { ?>
	.logo a {color: <?php echo get_option( 'logocolour')?> !important; }
<?php } ?>



<?php if(get_theme_mod( 'backgroundstyle' )) { ?>  
.headbg {
	background:<?php echo get_theme_mod( 'backgroundstyle')?> !important;
}
<?php } ?>

<?php if(get_option( 'headerbackgroundcolor' )) { ?>
	.headbg {background: <?php echo get_option( 'headerbackgroundcolor')?>; }
<?php } ?>


<?php echo get_theme_mod( 'customcss'); ?>




<?php $photoposition = get_theme_mod('photoposition'); ?>
<?php if($photoposition == 'right') { ?>

.homephotobig {
float: right !important; }

.homephotoright { float:left !important;  }


<?php } ?>



</style>