<?php
	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');
	
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {
	    wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );
	}	

	// PokéCommunity UI Design and App Code
	function webfont_links() {
	    echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,300,700" rel="stylesheet" type="text/css">' . "\n" . '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">' . "\n";
	    echo '<link href="https://fonts.googleapis.com/css?family=Raleway:700,400" rel="stylesheet" type="text/css">' . "\n";
	}
	add_action( 'wp_head', 'webfont_links' );

	function google_analytics() {
		echo "<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src='https://www.googletagmanager.com/gtag/js?id=UA-85201509-1'></script>
			<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());
				
				gtag('config', 'UA-85201509-1');
			</script>";
	}
	add_action('wp_head', 'google_analytics');
	
	
	function bootstrapjs_link() {
	    echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>' . "\n";
	}
	add_action( 'wp_footer', 'bootstrapjs_link' );
	
	function credits() {
	    echo '<div class="footer-text" id="copyright">
<ul class="footer-pcext">

<li><a class="enabled" href="https://www.facebook.com/thePokeCommunity" style="background-color: #3b5998; border-color: #1c3b7d;" title="Get in touch via Facebook."><i class="fa fa-facebook"></i></a></li>

<li><a class="enabled" href="https://twitter.com/PokeCommunity" style="background-color: #55ACEE; border-color: #3189cc;" title="Keeping the buzz fed on Twitter!"><i class="fa fa-twitter"></i></a></li>

<!-- <li><a class="enabled" href="https://thepokecommunity.tumblr.com/" style="background-color: #35465c; border-color: #18212e;"><i class="fa fa-tumblr" title="Reblog us on Tumblr!"></i></a></li> -->

<li><a class="enabled" href="https://plus.google.com/100263032273573080936/?prsrc=3" style="background-color: #dd4b39; border-color: #c3311f"><i class="fa fa-google-plus" title="Make us part of your circle on Google+!"></i></a></li>

<!-- <li><a class="enabled" href="https://thepokecommunity.deviantart.com" style="background-color: #05CC47; border-color: #17913f" title="Now uploading to DeviantArt."><i class="fa fa-deviantart"></i></a></li> -->

<li><a class="enabled" href="https://www.youtube.com/c/pokecommunity" style="background-color: white; border-color: #b31217; color: #e52d27" title="The PokéCommunity on YouTube. Now playing."><i class="fa fa-youtube-play"></i></a></li>

</ul>

<p style="whitespace: no-wrap">© 2002–2016 The PokéCommunity™, pokecommunity.com.</p>

<p>Pokémon characters and images belong to The Pokémon Company International and Nintendo. This website is in no way affiliated with or endorsed by Nintendo, Creatures, GAMEFREAK, or The Pokémon Company International. We just love Pokémon.</p>

<p>Your use of The PokéCommunity constitutes acceptance of our <a href="https://www.pokecommunity.com/misc.php?do=legal">Services Agreement</a> and <a href="https://www.pokecommunity.com/misc.php?do=privacy">Privacy Statement</a>.</p>



<p class="meta-softwareversion">PokéCommunity Daily 1.3</p>

<p><a href="https://www.pokecommunity.com/misc.php?do=colophon">Acknowledgements</a></p>
<p><a href="https://www.pokecommunity.com/misc.php?do=branding">Use of Community Assets</a></p>
</div>' . "\n";
	}
	
	add_action('twentyfourteen_credits', 'credits');
	
	// Add support for featured content.
	function twentyfourteen_child_setup () {
	  // This will remove support for featured content in the parent theme  
	  remove_theme_support( 'featured-content' );
	  
	  //This adds support for featured content in child theme 
	  //with a different max_posts value of 3 instead of default 6  
	  add_theme_support( 'featured-content', array(
	    'featured_content_filter' => 'twentyfourteen_get_featured_posts',
		'max_posts' => 3,
	  ) );
	  
	  remove_editor_styles();
	  
	  // This theme styles the visual editor to resemble the theme style.
	  add_editor_style( array( 'css/editor-style.css', twentyfourteen_font_url(), 'genericons/genericons.css' ) );
	}
	
	//Action hook for theme support 
	add_action( 'after_setup_theme', 'twentyfourteen_child_setup', 11);

function daily_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'daily' ),
		'id'            => 'footer-1',
		'description'   => __( 'First column appears in the footer section of the site. Collapsed when viewed on small screens.', 'daily' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'daily' ),
		'id'            => 'footer-2',
		'description'   => __( 'Second column appears in the footer section of the site. Collapsed when viewed on small screens.', 'daily' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'daily' ),
		'id'            => 'footer-3',
		'description'   => __( 'Third column appears in the footer section of the site. Collapsed when viewed on small screens.', 'daily' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 4', 'daily' ),
		'id'            => 'footer-4',
		'description'   => __( 'Fourth column appears in the footer section of the site. Collapsed when viewed on small screens.', 'daily' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Inline with Posts', 'daily' ),
		'id'            => 'post-inline-right',
		'description'   => __( 'Only post-specific widgets should be placed here. Hides when there are no widgets.', 'daily' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Post Sidebar', 'daily' ),
		'id'            => 'post-sidebar',
		'description'   => __( 'Will be displayed on the right of posts (coming to new posts at a certain date).', 'daily' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'daily_widgets_init' );

// Custom template tags for this theme.
require get_stylesheet_directory() . '/inc/template-tags.php';

// do not publicise posts by default
add_filter( 'publicize_checkbox_default', '__return_false' );

add_filter( 'auth_cookie_expiration', 'remember_timeout_1_month' );

function remember_timeout_1_month( $expirein ) {
    return 2592000; // 1 year in seconds
}

function featured_image_caption() {
  global $post;

  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

  if ($thumbnail_image && isset($thumbnail_image[0])) {
    echo '<figcaption class="feature-image-caption">'.$thumbnail_image[0]->post_excerpt.'</figcaption>';
  }
}

//Allow Contributors to Add Media
if ( current_user_can('contributor') && !current_user_can('upload_files') )
add_action('admin_init', 'allow_contributor_uploads');
  
function allow_contributor_uploads() {
     $contributor = get_role('contributor');
     $contributor->add_cap('upload_files');
}

function clean_admin_bar() {
	global $wp_admin_bar;

	//Remove the WordPress logo...
	$wp_admin_bar->remove_menu('wp-logo');
	$wp_admin_bar->remove_menu('wpseo-menu');
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('schema-test-item');
	$wp_admin_bar->remove_menu('w3tc');
}
add_action( 'wp_before_admin_bar_render', 'clean_admin_bar' );

function daily_enqueue_longform_template_styles() {
    if ( is_page_template( 'longform.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/longform.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'daily_enqueue_longform_template_styles', 9000 );

function caption_source_shortcode( $atts, $content = null ) {
	return '<span class="image-source">' . $content . '</span>';
}
add_shortcode( 'capsource', 'caption_source_shortcode' );

add_action( 'rest_api_init', 'create_api_posts_meta_field' );
 
function create_api_posts_meta_field() {
 
 // register_rest_field ( 'name-of-post-type', 'name-of-field-to-return', array-of-callbacks-and-schema() )
 register_rest_field( 'post', 'post-meta-fields', array(
 'get_callback' => 'get_post_meta_for_api',
 'schema' => null,
 )
 );
}
 
function get_post_meta_for_api( $object ) {
 //get the id of the post object array
 $post_id = $object['id'];
 
 //return the post meta
 return get_post_meta( $post_id );
}