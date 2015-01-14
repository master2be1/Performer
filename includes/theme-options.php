<?php
function example_customizer_menu() {
    add_theme_page( 'Customize', 'Customize', 'edit_theme_options', 'customize.php' );
}
add_action( 'admin_menu', 'example_customizer_menu' );

function performer_customize_register( $wp_customize ) {
	$colors = array();
	$colors[] = array(
		'slug'=>'headerbackgroundcolor', 
		'default' => '#44484f',
		'label' => __('Header background colour', 'performer')
	);
	$colors[] = array(
		'slug'=>'backgroundcolor', 
		'default' => '#FFFFFF',
		'label' => __('Background Color', 'performer'),
		'priority' => '1'
	);
	$colors[] = array(
		'slug'=>'text_color', 
		'default' => '#58544e',
		'label' => __('Body Text Color', 'performer')
	);
	$colors[] = array(
		'slug'=>'accentcolor', 
		'default' => '',
		'label' => __('Accent Color', 'performer')
	);
	$colors[] = array(
		'slug'=>'header_text_color', 
		'default' => '#6c6c6c',
		'label' => __('Header Text Color', 'performer'),
		'priority' => '4'
	);

	$colors[] = array(
		'slug'=>'footer_title_color', 
		'default' => '',
		'label' => __('Footer widget title color', 'performer')
	);	
	$colors[] = array(
		'slug'=>'footer_widget_text_color', 
		'default' => '',
		'label' => __('Footer widget text color', 'performer')
	);	
	$colors[] = array(
		'slug'=>'footer_background_color', 
		'default' => '#44484f',
		'label' => __('Footer Background Color', 'performer')
	);	

	$colors[] = array(
		'slug'=>'header_nav_link_color', 
		'default' => '#FFFFFF',
		'label' => __('Header Nav Link Color', 'performer')
	);	
	$colors[] = array(
		'slug'=>'header_nav_dropdown_link_color', 
		'default' => '#FFFFFF',
		'label' => __('Header Nav Dropdown Link Color', 'performer')
	);	
	$colors[] = array(
		'slug'=>'header_nav_dropdown_background_color', 
		'default' => '#44484f',
		'label' => __('Header Nav Dropdown Background Color', 'performer')
	);	
	$colors[] = array(
		'slug'=>'homedescbg', 
		'default' => '',
		'label' => __('Homepage Description BG', 'performer')
	);	
	$colors[] = array(
		'slug'=>'homeeventsbg', 
		'default' => '',
		'label' => __('Homepage Events BG', 'performer')
	);	
	$colors[] = array(
		'slug'=>'homemusicbg', 
		'default' => '',
		'label' => __('Homepage Music BG', 'performer')
	);	
    
    $colors[] = array(
		'slug'=>'homeblogbg', 
		'default' => '',
		'label' => __('Homepage Blog BG', 'performer')
	);
	$colors[] = array(
		'slug'=>'homephotosbg', 
		'default' => '',
		'label' => __('Homepage Photos BG', 'performer')
	);
	$colors[] = array(
		'slug'=>'homevideosbg', 
		'default' => '',
		'label' => __('Homepage Videos BG', 'performer')
	);
	$colors[] = array(
		'slug'=>'homemembersbg', 
		'default' => '',
		'label' => __('Homepage Members BG', 'performer')
	);
	$colors[] = array(
		'slug'=>'homesponsorsbg', 
		'default' => '',
		'label' => __('Homepage Sponsors BG', 'performer')
	);
		$colors[] = array(
		'slug'=>'logocolour', 
		'default' => '',
		'label' => __('Logo Text Colour', 'performer')
	);

foreach( $colors as $color ) {
	// SETTINGS
	$wp_customize->add_setting(
		$color['slug'], array(
			'default' => $color['default'],
			'type' => 'option', 
			'capability' => 'edit_theme_options'
		)
	);

	$wp_customize->add_setting( 'favicon' );
	$wp_customize->add_setting( 'background' );
	$wp_customize->add_setting( 'headerlogo' );
	$wp_customize->add_setting( 'googleanal' );
	$wp_customize->add_setting( 'customcss' );
	$wp_customize->add_setting( 'homedescription' );
	$wp_customize->add_setting( 'imageheight' );
	$wp_customize->add_setting( 'backgroundstyle' );

	$wp_customize->add_setting( 'homeeventlink' );
	$wp_customize->add_setting( 'homeeventtitle' );
	$wp_customize->add_setting( 'eventsbackground' );
	$wp_customize->add_setting('eventsbackgroundrepeat', array());
	$wp_customize->add_setting('eventsbackgroundattachment', array());
	$wp_customize->add_setting('eventsbackgroundsize', array());

	$wp_customize->add_setting( 'homemusiclink' );
	$wp_customize->add_setting( 'homemusictitle' );
	$wp_customize->add_setting( 'musicbackground' );
	$wp_customize->add_setting('musicbackgroundrepeat', array());
	$wp_customize->add_setting('musicbackgroundattachment', array());
	$wp_customize->add_setting('musicbackgroundsize', array());

	$wp_customize->add_setting( 'homebloglink' );
	$wp_customize->add_setting( 'homeblogtitle' );
	$wp_customize->add_setting( 'blogbackground' );
	$wp_customize->add_setting('blogbackgroundrepeat', array());
	$wp_customize->add_setting('blogbackgroundattachment', array());
	$wp_customize->add_setting('blogbackgroundsize', array());

	$wp_customize->add_setting( 'homephotoslink' );
	$wp_customize->add_setting( 'homephotostitle' );	
	$wp_customize->add_setting( 'photosbackground' );
	$wp_customize->add_setting('photosbackgroundrepeat', array());
	$wp_customize->add_setting('photosbackgroundattachment', array());
	$wp_customize->add_setting('photosbackgroundsize', array());

	$wp_customize->add_setting( 'homevideoslink' );
	$wp_customize->add_setting( 'homevideostitle' );
	$wp_customize->add_setting( 'videosbackground' );
	$wp_customize->add_setting('videosbackgroundrepeat', array());
	$wp_customize->add_setting('videosbackgroundattachment', array());
	$wp_customize->add_setting('videosbackgroundsize', array());
	$wp_customize->add_setting( 'homevideospagination' );

	$wp_customize->add_setting( 'homememberslink' );
	$wp_customize->add_setting( 'homememberstitle' );
	$wp_customize->add_setting( 'membersbackground' );
	$wp_customize->add_setting('membersbackgroundrepeat', array());
	$wp_customize->add_setting('membersbackgroundattachment', array());
	$wp_customize->add_setting('membersbackgroundsize', array());

	$wp_customize->add_setting('hide_home_members', array());
	$wp_customize->add_setting('hide_home_photos', array());
	$wp_customize->add_setting('hide_home_videos', array());
	$wp_customize->add_setting('hide_home_blog', array());
	$wp_customize->add_setting('hide_home_music', array());
	$wp_customize->add_setting('hide_home_events', array());
	$wp_customize->add_setting('hide_latest_video', array());
	$wp_customize->add_setting('backgroundrepeat', array());
	$wp_customize->add_setting('backgroundattachment', array());
	$wp_customize->add_setting('backgroundsize', array());
	$wp_customize->add_setting('backgroundposition', array());
	$wp_customize->add_setting('backgroundshowonhomepage', array());
	$wp_customize->add_setting('backgroundshowvideo', array());


	$wp_customize->add_setting( 'sponsorstitle' );
	$wp_customize->add_setting( 'sponsor1image' );
	$wp_customize->add_setting( 'sponsor2image' );
	$wp_customize->add_setting( 'sponsor3image' );
	$wp_customize->add_setting( 'sponsor4image' );
	$wp_customize->add_setting( 'sponsor5image' );
	$wp_customize->add_setting( 'sponsor6image' );
	$wp_customize->add_setting( 'sponsor7image' );
	$wp_customize->add_setting( 'sponsor8image' );
	$wp_customize->add_setting( 'sponsor9image' );
	$wp_customize->add_setting( 'sponsor10image' );
	$wp_customize->add_setting( 'sponsor1link' );
	$wp_customize->add_setting( 'sponsor2link' );
	$wp_customize->add_setting( 'sponsor3link' );
	$wp_customize->add_setting( 'sponsor4link' );
	$wp_customize->add_setting( 'sponsor5link' );
	$wp_customize->add_setting( 'sponsor6link' );
	$wp_customize->add_setting( 'sponsor7link' );
	$wp_customize->add_setting( 'sponsor8link' );	
	$wp_customize->add_setting( 'sponsor9link' );	
	$wp_customize->add_setting( 'sponsor10link' );	
	$wp_customize->add_setting( 'footertext' );	
	$wp_customize->add_setting( 'hidecredit' );
	$wp_customize->add_setting( 'photoposition' );
	$wp_customize->add_setting( 'soundcloudembed' );
	$wp_customize->add_setting( 'soundcloudtitle' );




	// CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			$color['slug'], 
			array('label' => $color['label'], 
			'section' => 'style',
			'settings' => $color['slug'])
		)
	);
}


$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'custom_logo',
        array(
            'label' => 'Custom Logo',
            'section' => 'general',
            'settings' => 'headerlogo',
            'priority' => '1'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'favicon_logo',
        array(
            'label' => 'Favicon',
            'section' => 'general',
            'settings' => 'favicon',
            'priority' => '5'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'background_image',
        array(
            'label' => 'Background Image',
            'section' => 'headerbackground',
            'settings' => 'background',
            'priority' => '1'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'events_background_image',
        array(
            'label' => 'Background Image',
            'section' => 'homeevents',
            'settings' => 'eventsbackground',
            'priority' => '6'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'music_background_image',
        array(
            'label' => 'Background Image',
            'section' => 'homemusic',
            'settings' => 'musicbackground',
            'priority' => '6'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'blog_background_image',
        array(
            'label' => 'Background Image',
            'section' => 'homeblog',
            'settings' => 'blogbackground',
            'priority' => '6'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'photos_background_image',
        array(
            'label' => 'Background Image',
            'section' => 'homephotos',
            'settings' => 'photosbackground',
            'priority' => '6'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'videos_background_image',
        array(
            'label' => 'Background Image',
            'section' => 'homevideos',
            'settings' => 'videosbackground',
            'priority' => '6'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'members_background_image',
        array(
            'label' => 'Background Image',
            'section' => 'homemembers',
            'settings' => 'membersbackground',
            'priority' => '6'
        )
    )
);


$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'sponsor_1',
        array(
            'label' => 'Sponsor 1 Image',
            'section' => 'homesponsors',
            'settings' => 'sponsor1image',
            'priority' => '1'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'sponsor_2',
        array(
            'label' => 'Sponsor 2 Image',
            'section' => 'homesponsors',
            'settings' => 'sponsor2image',
            'priority' => '3'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'sponsor_3',
        array(
            'label' => 'Sponsor 3 Image',
            'section' => 'homesponsors',
            'settings' => 'sponsor3image',
            'priority' => '5'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'sponsor_4',
        array(
            'label' => 'Sponsor 4 Image',
            'section' => 'homesponsors',
            'settings' => 'sponsor4image',
            'priority' => '7'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'sponsor_5',
        array(
            'label' => 'Sponsor 5 Image',
            'section' => 'homesponsors',
            'settings' => 'sponsor5image',
            'priority' => '9'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'sponsor_6',
        array(
            'label' => 'Sponsor 6 Image',
            'section' => 'homesponsors',
            'settings' => 'sponsor6image',
            'priority' => '11'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'sponsor_7',
        array(
            'label' => 'Sponsor 7 Image',
            'section' => 'homesponsors',
            'settings' => 'sponsor7image',
            'priority' => '13'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'sponsor_8',
        array(
            'label' => 'Sponsor 8 Image',
            'section' => 'homesponsors',
            'settings' => 'sponsor8image',
            'priority' => '15'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'sponsor_9',
        array(
            'label' => 'Sponsor 9 Image',
            'section' => 'homesponsors',
            'settings' => 'sponsor9image',
            'priority' => '17'
        )
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control ($wp_customize,'sponsor_10',
        array(
            'label' => 'Sponsor 10 Image',
            'section' => 'homesponsors',
            'settings' => 'sponsor10image',
            'priority' => '19'
        )
    )
);

class performer_Customize_Text_Control extends WP_Customize_Control {
	public $type = 'text';
	public function render_content() {
?>
	<label>
		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<input type="text" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></input>
	</label>
<?php
	}
}

class performer_Customize_Textarea_Control extends WP_Customize_Control {
	public $type = 'textarea';
	public function render_content() {
?>
	<label>
		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	</label>
<?php
	}
}

$textinput = 'performer_Customize_Text_Control';
$textarea = 'performer_Customize_Textarea_Control';

$wp_customize->add_control(new $textarea($wp_customize, 'googleanal', array(
	'label' => 'Google Analytics',
	'section' => 'general',
	'settings' => 'googleanal',
	'priority' => '4'
)));

$wp_customize->add_control(new $textarea($wp_customize, 'customcss', array(
	'label' => 'Custom CSS',
	'section' => 'general',
	'settings' => 'customcss',
	'priority' => '4'
)));

$wp_customize->add_control('hide_home_events', array(
	'label'      => __('Hide Homepage Events Section', 'Ari'),
	'section'    => 'homeevents',
	'settings'   => 'hide_home_events',
	'type'       => 'radio',
	'priority' => '3',
	'choices'    => array(
		'Show'   => 'Show',
		'Hide'   => 'Hide'

	),
));


$wp_customize->add_control('hide_home_music', array(
	'label'      => __('Hide Homepage Music Section', 'Ari'),
	'section'    => 'homemusic',
	'settings'   => 'hide_home_music',
	'type'       => 'radio',
	'priority' => '3',
	'choices'    => array(
		'Show'   => 'Show',
		'Hide'   => 'Hide'

	),
));

$wp_customize->add_control('hide_home_blog', array(
	'label'      => __('Hide Homepage Blog Section', 'Ari'),
	'section'    => 'homeblog',
	'settings'   => 'hide_home_blog',
	'type'       => 'radio',
	'priority' => '3',
	'choices'    => array(
		'Show'   => 'Show',
		'Hide'   => 'Hide'

	),
));

$wp_customize->add_control('hide_home_photos', array(
	'label'      => __('Hide Homepage Photos Section', 'Ari'),
	'section'    => 'homephotos',
	'settings'   => 'hide_home_photos',
	'type'       => 'radio',
	'priority' => '3',
	'choices'    => array(
		'Show'   => 'Show',
		'Hide'   => 'Hide'

	),
));

$wp_customize->add_control('hide_home_videos', array(
	'label'      => __('Hide Homepage Videos Section', 'Ari'),
	'section'    => 'homevideos',
	'settings'   => 'hide_home_videos',
	'type'       => 'radio',
	'priority' => '3',
	'choices'    => array(
		'Show'   => 'Show',
		'Hide'   => 'Hide'

	),
));

$wp_customize->add_control('hide_home_members', array(
	'label'      => __('Hide Homepage Members Section', 'Ari'),
	'section'    => 'homemembers',
	'settings'   => 'hide_home_members',
	'type'       => 'radio',
	'priority' => '3',
	'choices'    => array(
		'Show'   => 'Show',
		'Hide'   => 'Hide'

	),
));


$wp_customize->add_control('hide_latest_video', array(
	'label'      => __('Hide Header Latest Video', 'Ari'),
	'section'    => 'headerbackground',
	'settings'   => 'hide_latest_video',
	'type'       => 'radio',
	'priority' => '7',
	'choices'    => array(
		'Show'   => 'Show',
		'Hide'   => 'Hide'

	),
));

$wp_customize->add_control('backgroundshowonhomepage', array(
	'label'      => __('Show Background on All Pages', 'Ari'),
	'section'    => 'headerbackground',
	'settings'   => 'backgroundshowonhomepage',
	'type'       => 'radio',
	'priority' => '3',
	'choices'    => array(
		'homepage'   => 'Show on Homepage Only',
		'all'   => 'Show on All Pages'

	),
));

$wp_customize->add_control('backgroundshowvideo', array(
	'label'      => __('Show Header Latest Video on All Pages', 'Ari'),
	'section'    => 'headerbackground',
	'settings'   => 'backgroundshowvideo',
	'type'       => 'radio',
	'priority' => '8',
	'choices'    => array(
		'homepage'   => 'Show on Homepage Only',
		'all'   => 'Show on All Pages'

	),
));

$wp_customize->add_control('backgroundrepeat', array(
	'label'      => __('Background Image Repeat', 'Ari'),
	'section'    => 'headerbackground',
	'settings'   => 'backgroundrepeat',
	'type'       => 'radio',
	'priority' => '3',
	'choices'    => array(
		'repeat'   => 'Repeat All',
		'repeat-x'   => 'Repeat Horizontally (repeat-x)',
		'repeat-y'   => 'Repeat Vertically (repeat-y)',
		'no-repeat'   => 'No Repeat'

	),
));


$wp_customize->add_control('backgroundattachment', array(
	'label'      => __('Background Image Attachment', 'Ari'),
	'section'    => 'headerbackground',
	'settings'   => 'backgroundattachment',
	'type'       => 'radio',
	'priority' => '4',
	'choices'    => array(
		'fixed'   => 'Fixed',
		'scroll'   => 'Scroll',
		'inherit'   => 'Inherit'

	),
));

$wp_customize->add_control('backgroundsize', array(
	'label'      => __('Background Size', 'Ari'),
	'section'    => 'headerbackground',
	'settings'   => 'backgroundsize',
	'type'       => 'radio',
	'priority' => '4',
	'choices'    => array(
		'cover'   => 'Cover',
		'contain'   => 'Contain',
		'none' => 'None'

	),
));

$wp_customize->add_control('backgroundposition', array(
	'label'      => __('Background Position', 'Ari'),
	'section'    => 'headerbackground',
	'settings'   => 'backgroundposition',
	'type'       => 'radio',
	'priority' => '5',
	'choices'    => array(
		'left top'   => 'Left Top',
		'left center'   => 'Left Center',
		'left bottom'   => 'Left Bottom',
		'right top'   => 'Right Top',
		'right center'   => 'Right Center',
		'right bottom'   => 'Right Bottom',
		'center top'   => 'Center Top',
		'center center'   => 'Center Center',
		'center bottom'   => 'Center Bottom',
	),
));


$wp_customize->add_control('eventsbackgroundrepeat', array(
	'label'      => __('Background Image Repeat', 'Ari'),
	'section'    => 'homeevents',
	'settings'   => 'eventsbackgroundrepeat',
	'type'       => 'radio',
	'priority' => '9',
	'choices'    => array(
		'repeat'   => 'Repeat All',
		'repeat-x'   => 'Repeat Horizontally (repeat-x)',
		'repeat-y'   => 'Repeat Vertically (repeat-y)',
		'no-repeat'   => 'No Repeat'

	),
));


$wp_customize->add_control('eventsbackgroundattachment', array(
	'label'      => __('Background Image Attachment', 'Ari'),
	'section'    => 'homeevents',
	'settings'   => 'eventsbackgroundattachment',
	'type'       => 'radio',
	'priority' => '10',
	'choices'    => array(
		'fixed'   => 'Fixed',
		'scroll'   => 'Scroll',
		'inherit'   => 'Inherit'

	),
));

$wp_customize->add_control('eventsbackgroundsize', array(
	'label'      => __('Background Size', 'Ari'),
	'section'    => 'homeevents',
	'settings'   => 'eventsbackgroundsize',
	'type'       => 'radio',
	'priority' => '4',
	'choices'    => array(
		'cover'   => 'Cover',
		'contain'   => 'Contain',
		'none' => 'None'

	),
));

$wp_customize->add_control('musicbackgroundrepeat', array(
	'label'      => __('Background Image Repeat', 'Ari'),
	'section'    => 'homemusic',
	'settings'   => 'musicbackgroundrepeat',
	'type'       => 'radio',
	'priority' => '9',
	'choices'    => array(
		'repeat'   => 'Repeat All',
		'repeat-x'   => 'Repeat Horizontally (repeat-x)',
		'repeat-y'   => 'Repeat Vertically (repeat-y)',
		'no-repeat'   => 'No Repeat'

	),
));


$wp_customize->add_control('musicbackgroundattachment', array(
	'label'      => __('Background Image Attachment', 'Ari'),
	'section'    => 'homemusic',
	'settings'   => 'musicbackgroundattachment',
	'type'       => 'radio',
	'priority' => '10',
	'choices'    => array(
		'fixed'   => 'Fixed',
		'scroll'   => 'Scroll',
		'inherit'   => 'Inherit'

	),
));

$wp_customize->add_control('musicbackgroundsize', array(
	'label'      => __('Background Size', 'Ari'),
	'section'    => 'homemusic',
	'settings'   => 'musicbackgroundsize',
	'type'       => 'radio',
	'priority' => '4',
	'choices'    => array(
		'cover'   => 'Cover',
		'contain'   => 'Contain',
		'none' => 'None'

	),
));

$wp_customize->add_control('blogbackgroundrepeat', array(
	'label'      => __('Background Image Repeat', 'Ari'),
	'section'    => 'homeblog',
	'settings'   => 'blogbackgroundrepeat',
	'type'       => 'radio',
	'priority' => '9',
	'choices'    => array(
		'repeat'   => 'Repeat All',
		'repeat-x'   => 'Repeat Horizontally (repeat-x)',
		'repeat-y'   => 'Repeat Vertically (repeat-y)',
		'no-repeat'   => 'No Repeat'

	),
));


$wp_customize->add_control('blogbackgroundattachment', array(
	'label'      => __('Background Image Attachment', 'Ari'),
	'section'    => 'homeblog',
	'settings'   => 'blogbackgroundattachment',
	'type'       => 'radio',
	'priority' => '10',
	'choices'    => array(
		'fixed'   => 'Fixed',
		'scroll'   => 'Scroll',
		'inherit'   => 'Inherit'

	),
));

$wp_customize->add_control('blogbackgroundsize', array(
	'label'      => __('Background Size', 'Ari'),
	'section'    => 'homeblog',
	'settings'   => 'blogbackgroundsize',
	'type'       => 'radio',
	'priority' => '4',
	'choices'    => array(
		'cover'   => 'Cover',
		'contain'   => 'Contain',
		'none' => 'None'

	),
));

$wp_customize->add_control('photosbackgroundrepeat', array(
	'label'      => __('Background Image Repeat', 'Ari'),
	'section'    => 'homephotos',
	'settings'   => 'photosbackgroundrepeat',
	'type'       => 'radio',
	'priority' => '9',
	'choices'    => array(
		'repeat'   => 'Repeat All',
		'repeat-x'   => 'Repeat Horizontally (repeat-x)',
		'repeat-y'   => 'Repeat Vertically (repeat-y)',
		'no-repeat'   => 'No Repeat'

	),
));

$wp_customize->add_control('photoposition', array(
	'label'      => __('Large Photo Position', 'Ari'),
	'section'    => 'homephotos',
	'settings'   => 'photoposition',
	'type'       => 'radio',
	'priority' => '10',
	'choices'    => array(
		'left'   => 'Left',
		'right'   => 'Right',

	),
));


$wp_customize->add_control('photosbackgroundattachment', array(
	'label'      => __('Background Image Attachment', 'Ari'),
	'section'    => 'homephotos',
	'settings'   => 'photosbackgroundattachment',
	'type'       => 'radio',
	'priority' => '10',
	'choices'    => array(
		'fixed'   => 'Fixed',
		'scroll'   => 'Scroll',
		'inherit'   => 'Inherit'

	),
));

$wp_customize->add_control('photosbackgroundsize', array(
	'label'      => __('Background Size', 'Ari'),
	'section'    => 'homephotos',
	'settings'   => 'photosbackgroundsize',
	'type'       => 'radio',
	'priority' => '4',
	'choices'    => array(
		'cover'   => 'Cover',
		'contain'   => 'Contain',
		'none' => 'None'

	),
));

$wp_customize->add_control('videosbackgroundrepeat', array(
	'label'      => __('Background Image Repeat', 'Ari'),
	'section'    => 'homevideos',
	'settings'   => 'videosbackgroundrepeat',
	'type'       => 'radio',
	'priority' => '9',
	'choices'    => array(
		'repeat'   => 'Repeat All',
		'repeat-x'   => 'Repeat Horizontally (repeat-x)',
		'repeat-y'   => 'Repeat Vertically (repeat-y)',
		'no-repeat'   => 'No Repeat'

	),
));


$wp_customize->add_control('videosbackgroundattachment', array(
	'label'      => __('Background Image Attachment', 'Ari'),
	'section'    => 'homevideos',
	'settings'   => 'videosbackgroundattachment',
	'type'       => 'radio',
	'priority' => '10',
	'choices'    => array(
		'fixed'   => 'Fixed',
		'scroll'   => 'Scroll',
		'inherit'   => 'Inherit'

	),
));

$wp_customize->add_control('videosbackgroundsize', array(
	'label'      => __('Background Size', 'Ari'),
	'section'    => 'homevideos',
	'settings'   => 'videosbackgroundsize',
	'type'       => 'radio',
	'priority' => '4',
	'choices'    => array(
		'cover'   => 'Cover',
		'contain'   => 'Contain',
		'none' => 'None'

	),
));

$wp_customize->add_control('membersbackgroundrepeat', array(
	'label'      => __('Background Image Repeat', 'Ari'),
	'section'    => 'homemembers',
	'settings'   => 'membersbackgroundrepeat',
	'type'       => 'radio',
	'priority' => '9',
	'choices'    => array(
		'repeat'   => 'Repeat All',
		'repeat-x'   => 'Repeat Horizontally (repeat-x)',
		'repeat-y'   => 'Repeat Vertically (repeat-y)',
		'no-repeat'   => 'No Repeat'

	),
));


$wp_customize->add_control('membersbackgroundattachment', array(
	'label'      => __('Background Image Attachment', 'Ari'),
	'section'    => 'homemembers',
	'settings'   => 'membersbackgroundattachment',
	'type'       => 'radio',
	'priority' => '10',
	'choices'    => array(
		'fixed'   => 'Fixed',
		'scroll'   => 'Scroll',
		'inherit'   => 'Inherit'

	),
));

$wp_customize->add_control('membersbackgroundsize', array(
	'label'      => __('Background Size', 'Ari'),
	'section'    => 'homemembers',
	'settings'   => 'membersbackgroundsize',
	'type'       => 'radio',
	'priority' => '4',
	'choices'    => array(
		'cover'   => 'Cover',
		'contain'   => 'Contain',
		'none' => 'None'

	),
));

$wp_customize->add_control('hidecredit', array(
	'label'      => __('Hide Footer Credit', 'Ari'),
	'section'    => 'footersettings',
	'settings'   => 'hidecredit',
	'type'       => 'radio',
	'priority' => '3',
	'choices'    => array(
		'hide'   => 'Hide',
		'show'   => 'Show'

	),
));

$wp_customize->add_control('backgroundstyle', array(
	'label'      => __('Navigation Position', 'Ari'),
	'section'    => 'navigation',
	'settings'   => 'backgroundstyle',
	'type'       => 'radio',
	'priority' => '10',
	'choices'    => array(
		'none'   => 'Transparent',
		''   => 'Solid',
	),
));

$wp_customize->add_control(new $textarea($wp_customize, 'soundcloudembed', array(
	'label' => 'Soundcloud Embed Code',
	'section' => 'homesoundcloud',
	'priority' => '1',
	'settings' => 'soundcloudembed'
)));

$wp_customize->add_control(new $textarea($wp_customize, 'footertext', array(
	'label' => 'Footer Text',
	'section' => 'footersettings',
	'priority' => '1',
	'settings' => 'footertext'
)));


$wp_customize->add_control(new $textarea($wp_customize, 'homedescription', array(
	'label' => 'Description',
	'section' => 'homepage',
	'priority' => '1',
	'settings' => 'homedescription'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'sponsor1link', array(
	'label' => 'Sponsor 1 Link',
	'section' => 'homesponsors',
	'priority' => '2',
	'settings' => 'sponsor1link'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'sponsor2link', array(
	'label' => 'Sponsor 2 Link',
	'section' => 'homesponsors',
	'priority' => '4',
	'settings' => 'sponsor2link'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'sponsor3link', array(
	'label' => 'Sponsor 3 Link',
	'section' => 'homesponsors',
	'priority' => '6',
	'settings' => 'sponsor3link'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'sponsor4link', array(
	'label' => 'Sponsor 4 Link',
	'section' => 'homesponsors',
	'priority' => '8',
	'settings' => 'sponsor4link'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'sponsor5link', array(
	'label' => 'Sponsor 5 Link',
	'section' => 'homesponsors',
	'priority' => '10',
	'settings' => 'sponsor5link'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'sponsor6link', array(
	'label' => 'Sponsor 6 Link',
	'section' => 'homesponsors',
	'priority' => '12',
	'settings' => 'sponsor6link'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'sponsor7link', array(
	'label' => 'Sponsor 7 Link',
	'section' => 'homesponsors',
	'priority' => '14',
	'settings' => 'sponsor7link'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'sponsor8link', array(
	'label' => 'Sponsor 8 Link',
	'section' => 'homesponsors',
	'priority' => '16',
	'settings' => 'sponsor8link'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'sponsor9link', array(
	'label' => 'Sponsor 9 Link',
	'section' => 'homesponsors',
	'priority' => '18',
	'settings' => 'sponsor9link'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'sponsor10link', array(
	'label' => 'Sponsor 10 Link',
	'section' => 'homesponsors',
	'priority' => '20',
	'settings' => 'sponsor10link'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'soundcloudtitle', array(
	'label' => 'Soundcloud Section Title',
	'section' => 'homesoundcloud',
	'priority' => '1',
	'settings' => 'soundcloudtitle'
)));




/********* HOMEPAGE Archives************/






$wp_customize->add_control(new $textinput($wp_customize, 'homeeventlink', array(
	'label' => 'Link to Archive Page',
	'priority' => '2',
	'section' => 'homeevents',
	'settings' => 'homeeventlink'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'homeeventtitle', array(
	'label' => 'Section Title',
	'priority' => '1',
	'section' => 'homeevents',
	'settings' => 'homeeventtitle'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'homemusiclink', array(
	'label' => 'Link to Archive Page',
	'priority' => '2',
	'section' => 'homemusic',
	'settings' => 'homemusiclink'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'homemusictitle', array(
	'label' => 'Section Title',
	'priority' => '1',
	'section' => 'homemusic',
	'settings' => 'homemusictitle'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'homebloglink', array(
	'label' => 'Link to Archive Page',
	'priority' => '2',
	'section' => 'homeblog',
	'settings' => 'homebloglink'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'homeblogtitle', array(
	'label' => 'Section Title',
	'priority' => '1',
	'section' => 'homeblog',
	'settings' => 'homeblogtitle'
)));


$wp_customize->add_control(new $textinput($wp_customize, 'homephotoslink', array(
	'label' => 'Link to Archive Page',
	'priority' => '2',
	'section' => 'homephotos',
	'settings' => 'homephotoslink'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'homephotostitle', array(
	'label' => 'Section Title',
	'priority' => '1',
	'section' => 'homephotos',
	'settings' => 'homephotostitle'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'homevideoslink', array(
	'label' => 'Link to Archive Page',
	'priority' => '2',
	'section' => 'homevideos',
	'settings' => 'homevideoslink'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'homevideostitle', array(
	'label' => 'Section Title',
	'priority' => '1',
	'section' => 'homevideos',
	'settings' => 'homevideostitle'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'homevideospagination', array(
	'label' => 'Videos to show on Homepage',
	'priority' => '22',
	'section' => 'homevideos',
	'settings' => 'homevideospagination'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'homememberslink', array(
	'label' => 'Link to Archive Page',
	'priority' => '2',
	'section' => 'homemembers',
	'settings' => 'homememberslink'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'homememberstitle', array(
	'label' => 'Section Title',
	'priority' => '1',
	'section' => 'homemembers',
	'settings' => 'homememberstitle'
)));



$wp_customize->add_control(new $textinput($wp_customize, 'imageheight', array(
	'label' => 'Background Image Height in px (e.g. 620px)',
	'priority' => '11',
	'section' => 'headerbackground',
	'settings' => 'imageheight'
)));


$wp_customize->add_control(new $textinput($wp_customize, 'sponsorstitle', array(
	'label' => 'Section Title',
	'priority' => '0',
	'section' => 'homesponsors',
	'settings' => 'sponsorstitle'
)));

$wp_customize->add_control(new $textinput($wp_customize, 'sponsorstitle', array(
	'label' => 'Section Title',
	'priority' => '0',
	'section' => 'homesponsors',
	'settings' => 'sponsorstitle'
)));

$wp_customize->add_section('general' , array(
    'title' => __('General Settings','performer'),
    'priority' => '101'
));

$wp_customize->add_section('style' , array(
    'title' => __('Style Settings','performer'), 
    'priority' => '102'
));

$wp_customize->add_section('homepage' , array(
    'title' => __('Homepage Settings','performer'),
    'priority' => '103'
));

$wp_customize->add_section('navigation' , array(
    'title' => __('Navigation Settings','performer'),
    'priority' => '104'
));

$wp_customize->add_section('headerbackground' , array(
    'title' => __('Header Background Image','performer'),
    'priority' => '104'
));

$wp_customize->add_section('homeevents' , array(
    'title' => __('Homepage Events Settings','performer'),
    'priority' => '105'
));

$wp_customize->add_section('homemusic' , array(
    'title' => __('Homepage Music Settings','performer'),
    'priority' => '106'
));

$wp_customize->add_section('homeblog' , array(
    'title' => __('Homepage Blog Settings','performer'),
    'priority' => '107'
));

$wp_customize->add_section('homephotos' , array(
    'title' => __('Homepage Photos Settings','performer'),
    'priority' => '108'
));

$wp_customize->add_section('homevideos' , array(
    'title' => __('Homepage Videos Settings','performer'),
    'priority' => '109'
));

$wp_customize->add_section('homemembers' , array(
    'title' => __('Homepage Members Settings','performer'),
    'priority' => '110'
));

$wp_customize->add_section('homesponsors' , array(
    'title' => __('Homepage Sponsors/Clients/Partners','performer'),
    'priority' => '111'
));

$wp_customize->add_section('homesoundcloud' , array(
    'title' => __('Homepage Soundcloud Embed','performer'),
    'priority' => '111'
));

$wp_customize->add_section('footersettings' , array(
    'title' => __('Footer Settings','performer'),
    'priority' => '103'
));


} 
add_action( 'customize_register', 'performer_customize_register' );

?>