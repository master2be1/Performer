</div>
</div>
<a href="#" id="backToTop" style="display: inline;"></a>
<div class="footer">
<div class="wrap">

<div class="footerwidgets">

<div class="footer-col-left">
<?php if(dynamic_sidebar( 'footer-column-left' )) { ?><?php } ?>
</div>

<div class="footer-col-center">
<?php if(dynamic_sidebar( 'footer-column-center' )) { ?><?php } ?>
</div>

<div class="footer-col-right">
<?php if(dynamic_sidebar( 'footer-column-right' )) { ?><?php } ?>
</div>
 <div class="clear"></div>
</div>
   
    <div class="footerinfo"> 

<?php if(get_theme_mod( 'footertext' )) { ?>  
<?php echo get_theme_mod( 'footertext'); ?>
<?php } else { ?>
&copy; <?php the_time('Y') ?> <?php bloginfo('name'); ?>
<?php } ?>

    <div class="right"><div class="footer-nav"><?php wp_nav_menu(array( 'items_wrap' => '<ul>%3$s</ul>', 'theme_location' => 'footer-nav', 'fallback_cb' => 'wp_page_menu')); ?></div></div>
    </div>

    </div>
</div>

<?php $hidecredit = get_theme_mod('hidecredit'); ?>
<?php if($hidecredit == 'hide') { ?>

<?php } else { ?>

<div class="atxcred">
  <div class="wrap">
    <a href="http://artexor.com" title="Performer Wordpress Theme">Performer Theme By Artexor</a>
  </div>
</div>

<?php } ?>

<?php wp_footer(); ?>


<script type="text/javascript">
    var navigation = responsiveNav("#nav");
</script>

</body>
</html>