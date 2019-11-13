<?php if ( ! defined( 'ABSPATH' ) ) { die; }

$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'theme',
  'menu_slug'       => 'neuron-theme-options',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Neuron Theme <small>by RRF Online</small>',
);

$options        = array();


$options[]      = array(
  'name'        => 'homepage',
  'title'       => 'Homepage Settings',
  'icon'        => 'fa fa-home',
  'fields'      => array(
    // promo area
    array(
      'id'              => 'enable_homage_promo',
      'type'            => 'switcher',
      'title'           => 'Enable promo area?',
      'default'         => true,
      'desc'            => 'If you want to enable promo area select yes.',
    ),
    array(
      'id'              => 'promo_title',
      'type'            => 'text',
      'title'           => 'Promo area title',
      'default'         => 'Welcome to the Neuron Finance',
      'desc'            => 'Type promo area title',
      'dependency'      => array( 'enable_homage_promo', '==', 'true' ),
    ),
    array(
      'id'              => 'promo_content',
      'type'            => 'textarea',
      'title'           => 'Promo area content',
      'default'         => 'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
      'desc'            => 'Type promo area content',
      'dependency'      => array( 'enable_homage_promo', '==', 'true' ),
    ),
    // homepage content
    array(
      'id'              => 'enable_homage_content',
      'type'            => 'switcher',
      'title'           => 'Enable homepage content area?',
      'default'         => true,
      'desc'            => 'If you want to enable homepage content select yes.',
    ),
    array(
      'id'              => 'home_content_title',
      'type'            => 'text',
      'title'           => 'Homepage content title',
      'default'         => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
      'desc'            => 'Type homepage content title',
      'dependency'      => array( 'enable_homage_content', '==', 'true' ),
    ),
    array(
      'id'              => 'home_content_text',
      'type'            => 'textarea',
      'title'           => 'Homepage content text',
      'desc'            => 'Homepage content text area',
      'dependency'      => array( 'enable_homage_content', '==', 'true' ),
    ),
    array(
      'id'              => 'home_content_image',
      'type'            => 'image',
      'title'           => 'Homepage content image',
      'desc'            => 'Homepage content image here',
      'dependency'      => array( 'enable_homage_content', '==', 'true' ),
    ),
  ),
);

$options[]      = array(
  'name'        => 'servicepage',
  'title'       => 'Services Page Settings',
  'icon'        => 'fa fa-cog',
  'fields'      => array(
    array(
      'id'              => 'service_title',
      'type'            => 'text',
      'title'           => 'Services area title',
      'default'         => 'We Provide Huge Range of Services',
      'desc'            => 'Type services area title',
    ),
    array(
      'id'              => 'service_content',
      'type'            => 'textarea',
      'title'           => 'Promo services content',
      'default'         => 'Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.',
      'desc'            => 'Type services area content',
    ),
  ),
);

$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

CSFramework::instance( $settings, $options );