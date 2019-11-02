<?php

// Includeing CS Frameworks
require_once get_template_directory() . "/inc/cs-framework/cs-framework.php" ;


function philosophy_theme_setup() {

    // Loading theme textdomain
    load_theme_textdomain( 'neuron', get_template_directory() . '/languages' );

    // Generate automated feed links on head
    add_theme_support( 'automatic-feed-links' );

    // Adding support for automatic title tag
    add_theme_support( "title-tag" );

    // Enabling post thumbnails supports
    add_theme_support( "post-thumbnails" );

    // Adding support for custom logo
    add_theme_support( "custom-logo" );

    // HTML5 support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
    
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );

    // Registering mainmenu
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'neuron' ),
    ) );
    // register_nav_menu( "topmenu", __( "Top Menu", "philosophy" ) );
}
add_action( "after_setup_theme", "philosophy_theme_setup" );


// neuron_assets
function neuron_assets(){
    wp_enqueue_style( "animate-css", get_theme_file_uri( "/assets/css/animate.min.css" ), null, "1.0" );
    wp_enqueue_style( "fontawesome-css", get_theme_file_uri( "/assets/css/font-awesome.min.css" ), null, "1.0" );
    wp_enqueue_style( "owlcarousel-css", get_theme_file_uri( "/assets/css/owl.carousel.min.css" ), null, "1.0" );
    wp_enqueue_style( "bootsnav-css", get_theme_file_uri( "/assets/css/bootsnav.css" ), null, "1.0" );
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null, "1.0" );
    wp_enqueue_style( "neuron-css", get_stylesheet_uri() );

    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "bootsnav-js", get_theme_file_uri( "/assets/js/bootsnav.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "owlcarousel-js", get_theme_file_uri( "/assets/js/owl.carousel.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "wow-js", get_theme_file_uri( "/assets/js/wow.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "ajaxchimp-js", get_theme_file_uri( "/assets/js/ajaxchimp.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "ajaxchimpconfig-js", get_theme_file_uri( "/assets/js/ajaxchimp-config.js" ), array( "jquery" ), "1.0", true );
    if ( is_singular() ) {
        wp_enqueue_script( "comment-reply" );
    }
    wp_enqueue_script( "main-js", get_theme_file_uri( "/assets/js/script.js" ), array( "jquery" ), "1.0", true );
}
add_action( "wp_enqueue_scripts", "neuron_assets" );

// Custom posts
function neuron_custom_post() {
    register_post_type( 'slide',
    array(
        'labels' => array(
            'name' => __( 'Slides' ),
            'singular_name' => __( 'Slide' )
        ),
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
        'public' => true
        )
    );

    register_post_type( 'feature',
    array(
        'labels' => array(
            'name' => __( 'Features' ),
            'singular_name' => __( 'Feature' )
        ),
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
        'public' => true
        )
    );

    register_post_type( 'service',
    array(
        'labels' => array(
            'name' => __( 'Services' ),
            'singular_name' => __( 'Service' )
        ),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
        'public' => true
        )
    );

    register_post_type( 'work',
    array(
        'labels' => array(
            'name' => __( 'Works' ),
            'singular_name' => __( 'Work' )
        ),
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
        'public' => true
        )
    );
}
add_action( 'init', 'neuron_custom_post' );


function neuton_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer one', 'neuron' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add footer one widgets here.', 'neuron' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    
	register_sidebar( array(
		'name'          => esc_html__( 'Footer two', 'neuron' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add footer one widgets here.', 'neuron' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    
	register_sidebar( array(
		'name'          => esc_html__( 'Footer three', 'neuron' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add footer three widgets here.', 'neuron' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    
	register_sidebar( array(
		'name'          => esc_html__( 'Footer four', 'neuron' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add footer four widgets here.', 'neuron' ),
		'before_widget' => '<div id="%1$s" class="widget  %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'neuton_widgets_init' );


function thumbpost_list_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 3,
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'post')
        );      
         
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $list .= '
        <li>
            '.get_the_post_thumbnail($idd, 'thumbnail').'
            <p><a href="'.get_the_permalink().'">'.get_the_title().'</a></p>
            <span>'.get_the_date('d F Y', $idd).'</span>
        </li>
        ';        
    endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('thumb_posts', 'thumbpost_list_shortcode');  
