<?php
// ==================================================================
// Post type - Slider
// ==================================================================
function post_type_slider() {
register_post_type( 'sliders', 
  array(
  'label'               => __( 'Slider','ace' ),
  'singular'            => __( 'Slider','ace' ),
  'description'         => __( 'Slider content','ace' ),
  'public'              => true,
  'capability_type'     => 'page',
  'exclude_from_search' => true,
  'hierarchical'        => true,
  'query_var'           => true,
  'menu_position'       => 5,
  'menu_icon'           => 'dashicons-slides',
  'supports'            => array(
    'title',
    'thumbnail',
    'page-attributes',
  ),
  'rewrite'             => true,
  ));
}

add_action( 'init', 'post_type_slider' );
?>