<?php

if ( ! isset( $content_width ) )
    $content_width = 640;

require_once(TEMPLATEPATH . '/includes/theme-options.php');

define( 'ACF_LITE', false );
include_once('advanced-custom-fields/acf.php');

add_theme_support( 'automatic-feed-links' );

// Thumbnails
add_theme_support('post-thumbnails');

get_option('thumbnail_crop');

add_image_size('latestblog', 320, 180, true);
add_image_size('cover', 500, 500, true);
add_image_size('homephotobig', 600, 500, true);
add_image_size('homephotomed', 378, 249, true);
add_image_size('square', 235, 235, true);
add_image_size('homevideo', 240, 100, true);
add_image_size('masonrypost', 310, 9999, false);
add_image_size('eventflyer', 310, 438, true);
add_image_size('blogpost', 320, 200, true);
add_image_size('col2post', 310, 170, true);
add_image_size('col2', 480, 9999, true);
add_image_size('original', 9999, 9999, true);



function ShowPostsNav() {
   global $wp_query;
   return ($wp_query->max_num_pages > 1);
}




function mason_script() {
    wp_enqueue_script( 'jquery-masonry' );
}
add_action( 'wp_enqueue_scripts', 'mason_script' );





add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

if ( ( is_home() && $query->is_main_query() ) || is_feed() )
        $query->set( 'post_type', array( 'post' ) );

    return $query;
}




function my_cpt_post_types( $post_types ) {
    $post_types[] = 'videos';
    return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );




// Music custom post type

add_action( 'init', 'music' );

function music() {

    register_post_type( 'music',

        array(

            'labels' => array(

                'name' => 'Music',

                'singular_name' => 'Music',

                'add_new' => 'Add New',

                'add_new_item' => 'Add New Music',

                'edit' => 'Edit',

                'edit_item' => 'Edit Music',

                'new_item' => 'New Music',

                'view' => 'View',

                'view_item' => 'View Music',

                'search_items' => 'Search Music',

                'not_found' => 'No Music found',

                'not_found_in_trash' => 'No Music found in Trash',

                'parent' => 'Parent Music'

            ),



            'public' => true,

            'menu_position' => 15,

            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

             

            'has_archive' => true

        )

    );

}






// Video custom post type

add_action( 'init', 'videos' );

function videos() {

    register_post_type( 'videos',

        array(

            'labels' => array(

                'name' => 'Videos',

                'singular_name' => 'Video',

                'add_new' => 'Add New Video',

                'add_new_item' => 'Add New Video',

                'edit' => 'Edit',

                'edit_item' => 'Edit Video',

                'new_item' => 'New Video',

                'view' => 'View',

                'view_item' => 'View Video',

                'search_items' => 'Search Video',

                'not_found' => 'No Video found',

                'not_found_in_trash' => 'No Video found in Trash',

                'parent' => 'Parent Video'

            ),



            'public' => true,

            'menu_position' => 15,

            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
 
             'rewrite' => array('slug'=>'video'),
            'has_archive' => true

        )

    );

}




// events custom post type

add_action( 'init', 'events' );

function events() {

    register_post_type( 'events',

        array(

            'labels' => array(

                'name' => 'Events',

                'singular_name' => 'Event',

                'add_new' => 'Add New Event',

                'add_new_item' => 'Add New Event',

                'edit' => 'Edit',

                'edit_item' => 'Edit Events',

                'new_item' => 'New Events',

                'view' => 'View',

                'view_item' => 'View Events',

                'search_items' => 'Search Events',

                'not_found' => 'No Events found',

                'not_found_in_trash' => 'No Events found in Trash',

                'parent' => 'Parent Events'

            ),



            'public' => true,

            'menu_position' => 15,
             'has_archive'=>true, 
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
'has_archive' => 'events',
            'rewrite' => array('slug'=>'event'),
      



        )

    );

}





// photos custom post type

add_action( 'init', 'photos' );

function photos() {

    register_post_type( 'photos',

        array(

            'labels' => array(

                'name' => 'Photos',

                'singular_name' => 'Photo',

                'add_new' => 'Add New Photo',

                'add_new_item' => 'Add New Photo',

                'edit' => 'Edit',

                'edit_item' => 'Edit Photos',

                'new_item' => 'New Photos',

                'view' => 'View',

                'view_item' => 'View Photos',

                'search_items' => 'Search Photos',

                'not_found' => 'No Photos found',

                'not_found_in_trash' => 'No Photos found in Trash',

                'parent' => 'Parent Photos'

            ),



            'public' => true,

            'menu_position' => 15,

            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

             'rewrite' => array('slug'=>'photo'),

            'has_archive' => true

        )

    );

}






// members custom post type

add_action( 'init', 'members' );

function members() {

    register_post_type( 'members',

        array(

            'labels' => array(

                'name' => 'Members',

                'singular_name' => 'Member',

                'add_new' => 'Add New Member',

                'add_new_item' => 'Add New Member',

                'edit' => 'Edit',

                'edit_item' => 'Edit Members',

                'new_item' => 'New Members',

                'view' => 'View',

                'view_item' => 'View Members',

                'search_items' => 'Search Members',

                'not_found' => 'No Members found',

                'not_found_in_trash' => 'No Members found in Trash',

                'parent' => 'Parent Members'

            ),



            'public' => true,

            'menu_position' => 15,

            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

             

            'has_archive' => true

        )

    );

}







// Instagram custom post type

add_action( 'init', 'instagram' );

function instagram() {

    register_post_type( 'instagram',

        array(

            'labels' => array(

                'name' => 'Instagram',

                'singular_name' => 'Instagram',

                'add_new' => 'Add New Photo',

                'add_new_item' => 'Add New Photo',

                'edit' => 'Edit',

                'edit_item' => 'Edit Instagram',

                'new_item' => 'New Instagram',

                'view' => 'View',

                'view_item' => 'View Instagram',

                'search_items' => 'Search Instagram',

                'not_found' => 'No Instagram found',

                'not_found_in_trash' => 'No Instagram found in Trash',

                'parent' => 'Parent Instagram'

            ),



            'public' => true,

            'menu_position' => 15,

            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),

             'rewrite' => array('slug'=>'instagramphoto'),

            'has_archive' => true

        )

    );

}








//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_topics_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Video Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Video Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Video Categories' ),
    'all_items' => __( 'All Video Categories' ),
    'parent_item' => __( 'Parent Categories' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ),
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Video Categories' ),
  );

// Now register the taxonomy

  register_taxonomy('video_category',array('videos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true
  ));

}









//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'music_type_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function music_type_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Music Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Music Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Music Types' ),
    'all_items' => __( 'All Music Types' ),
    'parent_item' => __( 'Parent Types' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ),
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Music Types' ),
  );

// Now register the taxonomy

  register_taxonomy('music_type',array('music'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true
  ));

}










//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'location_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function location_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Location', 'taxonomy general name' ),
    'singular_name' => _x( 'Location', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Locations' ),
    'all_items' => __( 'All Locations' ),
    'parent_item' => __( 'Parent Locations' ),
    'parent_item_colon' => __( 'Parent Location:' ),
    'edit_item' => __( 'Edit Location' ),
    'update_item' => __( 'Update Location' ),
    'add_new_item' => __( 'Add New Location' ),
    'new_item_name' => __( 'New Location Name' ),
    'menu_name' => __( 'Locations' ),
  );

// Now register the taxonomy

  register_taxonomy('location',array('events'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true
  ));

}












// Navigation Menus

if(function_exists('register_nav_menus')) {

add_action( 'init', 'register_my_menus' );

function register_my_menus() {

register_nav_menus(array(

'header-nav' => __( 'Header Navigation' ),
'footer-nav' => __( 'Footer Navigation' )

));

}

}


function time_ago( $type = 'comment' ) {
  $d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';
 
  return human_time_diff($d('U'), current_time('timestamp')) . " " . __('ago');
 
}


function comment_template($comment, $args, $depth) {

$GLOBALS['comment'] = $comment; ?>



<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

    <div class="inside-comment">

    <?php echo get_avatar($comment,$size='80'); ?>

    <font class="author"><?php printf(__('%s'), comment_author_link()) ?></font>


<?php if ($comment->comment_approved == '0') : ?>

<em><?php _e('Your comment is awaiting moderation.') ?></em>

<br />

<?php endif; ?>

<div class="commentmeta"><?php echo time_ago(); ?> -

    <?php comment_reply_link(array_merge( $args, array('reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

<?php comment_text() ?>
</div>
</div>






















<?php }



//         EXCERPTS




function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }








/*
Author : Ayush Singh
Url : Webgarb.com
Get youtube video ID from URL.
*/
 
function youtubeID($url){
     $res = explode("v=",$url);
     if(isset($res[1])) {
        $res1 = explode('&',$res[1]);
        if(isset($res1[1])){
            $res[1] = $res1[0];
        }
        $res1 = explode('#',$res[1]);
        if(isset($res1[1])){
            $res[1] = $res1[0];
        }
     }
     return substr($res[1],0,12);
     return false;
 }

 function add_video_wmode_transparent($html, $url, $attr) {

if ( strpos( $html, "<embed src=" ) !== false )
   { return str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html); }
elseif ( strpos ( $html, 'feature=oembed' ) !== false )
   { return str_replace( 'feature=oembed', 'feature=oembed&wmode=opaque', $html ); }
else
   { return $html; }
}
add_filter( 'embed_oembed_html', 'add_video_wmode_transparent', 10, 3);











// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
    return '</br><a class="morebutton" style="margin-top:30px" href="'. get_permalink($post->ID) . '">READ MORE</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');




//Replace excerpt ellipsis with text linking to the post

function elpie_excerpt($text)

{

return str_replace('[...]', '...', $text);

}

add_filter('the_excerpt', 'elpie_excerpt');





// Sidebars

if ( function_exists('register_sidebar') )



register_sidebar(array('name'=>'Right Sidebar', 'id'=>'right-sidebar',

    'before_widget' => '<div class="sidebaritem">',

    'after_widget' => '<div class="clear"></div></div>',

    'before_title' => '<h2>',

    'after_title' => '</h2>'

));




register_sidebar(array('name'=>'Footer Column Left', 'id'=>'footer-column-left',

    'before_widget' => '<div class="footerwidget">',

    'after_widget' => '</div>',

    'before_title' => '<h2>',

    'after_title' => '</h2>'

)

);


register_sidebar(array('name'=>'Footer Column Center', 'id'=>'footer-column-center',

    'before_widget' => '<div class="footerwidget">',

    'after_widget' => '</div>',

    'before_title' => '<h2>',

    'after_title' => '</h2>'

)

);


register_sidebar(array('name'=>'Footer Column Right', 'id'=>'footer-column-right',

    'before_widget' => '<div class="footerwidget">',

    'after_widget' => '</div>',

    'before_title' => '<h2>',

    'after_title' => '</h2>'

)

);







if ( ! function_exists( 'ucc_add_cpts_to_pre_get_posts' ) ) {

    function ucc_add_cpts_to_pre_get_posts( $query ) {

        if ( $query->is_main_query() && ! is_post_type_archive() && ! is_archive() && ! is_search() && ! is_singular() && ! is_404() ) {

            $my_post_type = get_query_var( 'post_type' );

            if ( empty( $my_post_type ) ) {

                $query->set('post_type', 'music'.'video'.'events');

            }

        }

    }

}

add_action( 'pre_get_posts', 'ucc_add_cpts_to_pre_get_posts' );







function limit_posts_per_archive_page() {

    if ( is_search() )

        set_query_var('posts_per_archive_page', 10); // or use variable key: posts_per_page

}

add_filter('pre_get_posts', 'limit_posts_per_archive_page');













/**

 * Include the TGM_Plugin_Activation class.

 */

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';



add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

/**

 * Register the required plugins for this theme.

 *

 * In this example, we register two plugins - one included with the TGMPA library

 * and one from the .org repo.

 *

 * The variable passed to tgmpa_register_plugins() should be an array of plugin

 * arrays.

 *

 * This function is hooked into tgmpa_init, which is fired within the

 * TGM_Plugin_Activation class constructor.

 */

function my_theme_register_required_plugins() {



    /**

     * Array of plugin arrays. Required keys are name, slug and required.

     * If the source is NOT from the .org repo, then source is also required.

     */

    $plugins = array(



        // This is an example of how to include a plugin pre-packaged with a theme

        array(

            'name'                  => 'Symple Shortcodes', // The plugin name

            'slug'                  => 'symple-shortcodes', // The plugin slug (typically the folder name)

            'source'                => get_stylesheet_directory() . '/includes/symple-shortcodes.zip', // The plugin source

            'required'              => false, // If false, the plugin is only 'recommended' instead of required

            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

            'force_activation'      => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

            'external_url'          => '', // If set, overrides default API URL and points to an external URL

        ),






        // This is an example of how to include a plugin pre-packaged with a theme

        array(

            'name'                  => 'Custom Post Template', // The plugin name

            'slug'                  => 'custom-post-template', // The plugin slug (typically the folder name)

            'source'                => get_stylesheet_directory() . '/includes/custom-post-template.zip', // The plugin source

            'required'              => true, // If false, the plugin is only 'recommended' instead of required

            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

            'force_activation'      => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

            'force_deactivation'    => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

            'external_url'          => '', // If set, overrides default API URL and points to an external URL

        ),



        array(

            'name'                  => 'Zilla Social', // The plugin name

            'slug'                  => 'zilla-social', // The plugin slug (typically the folder name)

            'source'                => get_stylesheet_directory() . '/includes/zilla-social-1.2.1.zip', // The plugin source

            'required'              => false, // If false, the plugin is only 'recommended' instead of required

            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

            'force_activation'      => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

            'external_url'          => '', // If set, overrides default API URL and points to an external URL

        ),


        array(

            'name'                  => 'Video Thumbnails', // The plugin name

            'slug'                  => 'video-thumbnails', // The plugin slug (typically the folder name)

            'source'                => 'http://downloads.wordpress.org/plugin/video-thumbnails.latest-stable.zip', // The plugin source

            'required'              => false, // If false, the plugin is only 'recommended' instead of required

            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

            'force_activation'      => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

            'external_url'          => '', // If set, overrides default API URL and points to an external URL

        ),


        array(

            'name'                  => 'Mailchimp Widget', // The plugin name

            'slug'                  => 'mailchimp-widget', // The plugin slug (typically the folder name)

            'source'                => get_stylesheet_directory() . '/includes/mailchimp-widget.zip', // The plugin source

            'required'              => false, // If false, the plugin is only 'recommended' instead of required

            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

            'external_url'          => '', // If set, overrides default API URL and points to an external URL

        ),




        array(

            'name'      => 'Contact Form 7',

            'slug'      => 'contact-form-7',

            'required'  => true,

            'source' => 'http://downloads.wordpress.org/plugin/contact-form-7.latest-stable.zip',

        ),



        // This is an example of how to include a plugin from the WordPress Plugin Repository

        array(

            'name'      => 'Wordpress SEO by Yoast',

            'slug'      => 'wordpress-seo',

            'required'  => false,

            'source' => 'http://downloads.wordpress.org/plugin/wordpress-seo.latest-stable.zip',

        ),


        // This is an example of how to include a plugin from the WordPress Plugin Repository

        array(

            'name'      => 'Instagrate to WordPress',

            'slug'      => 'instagrate-to-wordpress',

            'required'  => false,

            'source' => 'http://downloads.wordpress.org/plugin/instagrate-to-wordpress.latest-stable.zip',

        ),


        array(

            'name'      => 'Twitter Widget Pro',

            'slug'      => 'twitter-widget-pro',

            'required'  => false,

            'source' => 'http://downloads.wordpress.org/plugin/twitter-widget-pro.latest-stable.zip',

        ),


    );



    // Change this to your theme text domain, used for internationalising strings

    $theme_text_domain = 'primer';



    /**

     * Array of configuration settings. Amend each line as needed.

     * If you want the default strings to be available under your own theme domain,

     * leave the strings uncommented.

     * Some of the strings are added into a sprintf, so see the comments at the

     * end of each line for what each argument will be.

     */

    $config = array(

        'domain'            => $theme_text_domain,           // Text domain - likely want to be the same as your theme.

        'default_path'      => '',                           // Default absolute path to pre-packaged plugins

        'parent_menu_slug'  => 'themes.php',         // Default parent menu slug

        'parent_url_slug'   => 'themes.php',         // Default parent URL slug

        'menu'              => 'install-required-plugins',   // Menu slug

        'has_notices'       => true,                         // Show admin notices or not

        'is_automatic'      => false,            // Automatically activate plugins after installation or not

        'message'           => '',               // Message to output right before the plugins table

        'strings'           => array(

            'page_title'                                => __( 'Install Required Plugins', $theme_text_domain ),

            'menu_title'                                => __( 'Install Plugins', $theme_text_domain ),

            'installing'                                => __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name

            'oops'                                      => __( 'Something went wrong with the plugin API.', $theme_text_domain ),

            'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)

            'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)

            'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)

            'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)

            'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)

            'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)

            'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)

            'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)

            'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),

            'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),

            'return'                                    => __( 'Return to Required Plugins Installer', $theme_text_domain ),

            'plugin_activated'                          => __( 'Plugin activated successfully.', $theme_text_domain ),

            'complete'                                  => __( 'All plugins installed and activated successfully. %s', $theme_text_domain ) // %1$s = dashboard link

        )

    );



    tgmpa( $plugins, $config );



}







//changing the logo

function my_custom_login_logo() {

    echo '<style type="text/css">

    h1 a { background-image:url('.get_bloginfo('template_directory').'/images/wordpress-ul-logo.png) !important; }

    </style>';

    }

    add_action('login_head', 'my_custom_login_logo');



    // changing the login page URL

    function put_my_url(){

    return (''); // putting my URL in place of the WordPress one

    }

    add_filter('login_headerurl', 'put_my_url');



// changing the login page URL hover text

    function put_my_title(){

    return ('Name of Your Website'); // changing the title from "Powered by WordPress" to whatever you wish

    }

    add_filter('login_headertitle', 'put_my_title');









/**

 * If more than one page exists, return TRUE.

 */

function show_posts_nav() {

    global $wp_query;

    return ($wp_query->max_num_pages > 1);

}



/**
 * Converts hex to rgb colours.
 */

function hex_to_rgb( $hex, $opacity = 1 ) {
     $hex = str_replace( '#', '', $hex );

     // if in 3 digit format
     if( strlen( $hex ) == 3) {
          $r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
          $g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
          $b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
     } else {
          $r = hexdec( substr( $hex, 0, 2 ) );
          $g = hexdec( substr( $hex, 2, 2 ) );
          $b = hexdec( substr( $hex, 4, 2 ) );
     }

     return "rgba($r, $g, $b, $opacity)";
}



















/**
 *  Install Add-ons
 *  
 *  The following code will include all 4 premium Add-Ons in your theme.
 *  Please do not attempt to include a file which does not exist. This will produce an error.
 *  
 *  The following code assumes you have a folder 'add-ons' inside your theme.
 *
 *  IMPORTANT
 *  Add-ons may be included in a premium theme/plugin as outlined in the terms and conditions.
 *  For more information, please read:
 *  - http://www.advancedcustomfields.com/terms-conditions/
 *  - http://www.advancedcustomfields.com/resources/getting-started/including-lite-mode-in-a-plugin-theme/
 */ 

// Add-ons 
// include_once('add-ons/acf-repeater/acf-repeater.php');
// include_once('add-ons/acf-gallery/acf-gallery.php');
// include_once('add-ons/acf-flexible-content/acf-flexible-content.php');
// include_once( 'add-ons/acf-options-page/acf-options-page.php' );


/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_events',
        'title' => 'Events',
        'fields' => array (
            array (
                'key' => 'field_51eeac4439488',
                'label' => 'Event Date',
                'name' => 'event_date',
                'type' => 'date_picker',
                'instructions' => 'REQUIRED! Starting date of the event/',
                'required' => 1,
                'date_format' => 'yy-mm-dd',
                'display_format' => 'dd/mm/yy',
                'first_day' => 1,
            ),
            array (
                'key' => 'field_51eeacaa39489',
                'label' => 'Date Plain Text',
                'name' => 'date_plain_text',
                'type' => 'text',
                'instructions' => 'Enter the format you would like the date displayed on the front end of the website, (e.g. Thursday, 24th July 2013)',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51eead3e3948a',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'instructions' => 'Flyer/Image for the event',
                'save_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array (
                'key' => 'field_51eead743948c',
                'label' => 'Video/Embed',
                'name' => 'embed',
                'type' => 'text',
                'instructions' => 'HTML embed code (youtube, vimeo etc.), make width 100%',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51eead9d3948d',
                'label' => 'More Information Link',
                'name' => 'more_information_link',
                'type' => 'text',
                'instructions' => 'If a link to find more information i.e. facebook event link.',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51eeaf343948e',
                'label' => 'Purchase Ticket',
                'name' => 'purchase_ticket',
                'type' => 'text',
                'instructions' => 'Direct link to purchase a ticket',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51eeaf832e027',
                'label' => 'Google Maps Embed',
                'name' => 'google_maps_embed',
                'type' => 'text',
                'instructions' => 'Use (http://www.embedgooglemap.com/) to create a Google Maps embed code and paste into this box.',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'events',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'custom_fields',
                1 => 'discussion',
                2 => 'comments',
                3 => 'categories',
                4 => 'tags',
                5 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_members',
        'title' => 'Members',
        'fields' => array (
            array (
                'key' => 'field_51eed87101895',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'save_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array (
                'key' => 'field_51eed87e01896',
                'label' => 'Twitter Link',
                'name' => 'twitter_link',
                'type' => 'text',
                'instructions' => 'Direct link to members twitter',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51eed89001897',
                'label' => 'Facebook Link',
                'name' => 'facebook_link',
                'type' => 'text',
                'instructions' => 'Direct link to members Facebook',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51eed89c01898',
                'label' => 'Youtube Link',
                'name' => 'youtube_link',
                'type' => 'text',
                'instructions' => 'Direct link to members Youtube',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51eed8a501899',
                'label' => 'Official Website',
                'name' => 'official_website',
                'type' => 'text',
                'instructions' => 'Direct Link to members official website',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51eed8ba0189a',
                'label' => 'Custom Button Text',
                'name' => 'custom_button_text',
                'type' => 'text',
                'instructions' => 'Enter Text for   Custom Button',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51eed8d00189b',
                'label' => 'Custom Button Link',
                'name' => 'custom_button_link',
                'type' => 'text',
                'instructions' => 'Enter the Link for the Custom Button',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'members',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'custom_fields',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_music',
        'title' => 'Music',
        'fields' => array (
            array (
                'key' => 'field_51ed20bb3ef92',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'instructions' => 'Upload the cover for the piece of music, minimum dimensions 320x320.',
                'save_format' => 'url',
                'preview_size' => 'cover',
                'library' => 'all',
            ),
            array (
                'key' => 'field_51ed21dd3ef93',
                'label' => 'iTunes Link',
                'name' => 'itunes_link',
                'type' => 'text',
                'instructions' => 'Direct link to Music available on iTunes',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51f28fe7f4f51',
                'label' => 'Amazon Link',
                'name' => 'amazon_link',
                'type' => 'text',
                'instructions' => 'Direct Link to music available on Amazon',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51f28ff3f4f52',
                'label' => 'Download Link',
                'name' => 'download_link',
                'type' => 'text',
                'instructions' => 'Direct link to download',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51f28ffcf4f53',
                'label' => 'Custom Box Text',
                'name' => 'custom_box_text',
                'type' => 'text',
                'instructions' => 'Create a custom link box, choose the text to appear on the button here.',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51f2900df4f54',
                'label' => 'Custom Box Link',
                'name' => 'custom_box_link',
                'type' => 'text',
                'instructions' => 'Direct link for your custom box',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'music',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'custom_fields',
                1 => 'discussion',
                2 => 'comments',
                3 => 'categories',
                4 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_videos',
        'title' => 'Videos',
        'fields' => array (
            array (
                'key' => 'field_51efe9d92c4d4',
                'label' => 'Youtube Link',
                'name' => 'youtube_link',
                'type' => 'text',
                'instructions' => 'Post direct YouTube link to video (e.g. http://www.youtube.com/watch?v=§12tfgh) for other sources post embed code in content box above. Posting the link here will allow for the video to be opened on the homepage via Lightbox.',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'videos',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'custom_fields',
            ),
        ),
        'menu_order' => 0,
    ));
}
