<?php

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
    wp_enqueue_style( "neuron-css", get_stylesheet_uri(), null, VERSION );

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