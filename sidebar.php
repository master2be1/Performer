<div id="sidebar">
    <div class="inner">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'right-sidebar' ) ) : ?>
	
			
		<?php endif; // end primary widget area ?>



	</div>
</div>