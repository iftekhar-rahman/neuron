<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]            = array(
    'id'                => 'neuron_work_meta',
    'title'             => 'Work Options',
    'post_type'         => 'work',
    'context'           => 'normal',
    'priority'          => 'default',
    'sections'          => array(
  
      array(
        'name'          => 'work_meta_section_1',
        'fields'        => array(
  
          array(
            'id'      => 'sub_title',
            'type'    => 'text',
            'title'   => 'Sub Title',
            'desc'    => 'Type your subtitle/category.',
          ),
          array(
            'id'      => 'big_review',
            'type'    => 'image',
            'title'   => 'Big preview image',
            'desc'    => 'Upload portfolio big preview image',
          ),
          array(
            'id'      => 'link_text',
            'type'    => 'text',
            'title'   => 'Link text',
            'default' => 'Visit Website',
            'desc'    => 'Type the link text.',
          ),
          array(
            'id'      => 'link',
            'type'    => 'text',
            'title'   => 'Link',
            'desc'    => 'The link is here.',
          ),
          array(
            'id'        => 'informations',
            'type'      => 'group',
            'title'     => 'Work informations',
            'button_title'     => 'Add New',
            'fields'    => array(
              array(
                'id'    => 'title',
                'type'  => 'text',
                'title' => 'Information title',
              ),
              array(
                'id'    => 'value',
                'type'  => 'text',
                'title' => 'Information value',
              )
            ),
          ),
  
        ),
      ),
  
    ),
  );


CSFramework_Metabox::instance( $options );
