<?php
// ==================================================================
// Widget - Sidebar
// ==================================================================
function right_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Right Widget','ace' ),
    'id'            => 'right-widget',
    'class'         => '',
    'description'   => 'Right side widget area',
    'before_widget' => '<article class="side-widget">',
    'after_widget'  => '</article>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'right_widgets_init' );

// ==================================================================
// Widget - Featured
// ==================================================================
function featured_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Featured Widget','ace' ),
    'id'            => 'featured-widget',
    'class'         => '',
    'description'   => 'Featured widget area',
    'before_widget' => '<article class="home-widget">',
    'after_widget'  => '</article>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'featured_widgets_init' );
// ==================================================================
// Widget - Instagram
// ==================================================================
function ace_footer_widgets_instagram_init() {
  register_sidebar( array(
    'name'          => __( 'Instagram Widget', 'ace' ),
    'id'            => 'footer-widget-instagram',
    'class'         => '',
    'description'   => 'Instagram widget area.',
    'before_widget' => '<article class="footer-instagram-widget">',
    'after_widget'  => '</article>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );
}
add_action( 'widgets_init', 'ace_footer_widgets_instagram_init' );