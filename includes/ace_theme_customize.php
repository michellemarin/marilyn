<?php
// ==================================================================
// START register theme customize
// ==================================================================
function ace_customize_register( $wp_customize ){


// ====================================================================================================================================
// Register theme customize section
// ====================================================================================================================================
$wp_customize->add_section( 'ace_theme_setup', array(
	'title'       => __( 'Theme Setup', 'ace' ),
	'priority'    => 1001,
  'description' => '',
) );
// ==================================================================
// Favicon
// ==================================================================
$wp_customize->add_setting( 'ace_favicon', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ace_favicon', array(
  'label'     => __( 'Favicon', 'ace' ),
  'section'   => 'ace_theme_setup',
  'settings'  => 'ace_favicon',
	'priority'  => 1,
) ) );
// ==================================================================
// Full width blog page
// ==================================================================
$wp_customize->add_setting( 'ace_full_blog', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_full_blog', array(
  'settings'  => 'ace_full_blog',
  'label'     => __( 'Full width blog page', 'ace' ),
  'section'   => 'ace_theme_setup',
  'type'      => 'checkbox',
	'priority'  => 2,
) );
// ==================================================================
// Slider newsletter
// ==================================================================
$wp_customize->add_setting( 'ace_enable_slider_newsletter_home', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_enable_slider_newsletter_home', array(
  'label'     => __( 'Show slider and/or newsletter on homepage only', 'ace' ),
  'section'   => 'ace_theme_setup',
  'settings'  => 'ace_enable_slider_newsletter_home',
	'type'      => 'text',
	'priority'  => 3,
) ); 
// ==================================================================
// Footer credit
// ==================================================================
$wp_customize->add_setting( 'ace_footer_credit', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ace_footer_credit', array(
  'label'     => __( 'Footer credit', 'ace' ),
  'section'   => 'ace_theme_setup',
  'settings'  => 'ace_footer_credit',
	'type'      => 'textarea',
	'priority'  => 5,
) ) );


// ====================================================================================================================================
// Register theme customize section
// ====================================================================================================================================
$wp_customize->add_section( 'ace_theme_color', array(
	'title'       => __( 'Theme Colours', 'ace' ),
	'priority'    => 1002,
  'description' => '',
) );
// ==================================================================
// Overall
// ==================================================================
// ================================================================== Border
$wp_customize->add_setting( 'ace_border_color', array(
	'default'           =>  '#fee8e4',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_border_color', array(
	'label'     => __( 'Border color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_border_color',
	'priority'  => 1,
) ) );
// ================================================================== Text
$wp_customize->add_setting( 'ace_text_color', array(
	'default'           =>  '#333333',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_text_color', array(
	'label'     => __( 'Text color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_text_color',
	'priority'  => 2,
) ) );
// ==================================================================
// Menu
// ==================================================================
// ================================================================== Menu
$wp_customize->add_setting( 'ace_nav_bar', array(
	'default'           =>  '#000000',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_nav_bar', array(
	'label'     => __( 'Menu bar color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_nav_bar',
	'priority'  => 3,
) ) );
// ================================================================== Menu
$wp_customize->add_setting( 'ace_nav_link', array(
	'default'           =>  '#ffffff',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_nav_link', array(
	'label'     => __( 'Menu link color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_nav_link',
	'priority'  => 4,
) ) );
// ================================================================== Menu
$wp_customize->add_setting( 'ace_nav_link_hover', array(
	'default'           =>  '#fff0ed',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_nav_link_hover', array(
	'label'     => __( 'Menu link hover color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_nav_link_hover',
	'priority'  => 5,
) ) );
// ==================================================================
// Slider
// ==================================================================
// ================================================================== Slider
$wp_customize->add_setting( 'ace_arrow_bg', array(
	'default'           =>  '#000000',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_arrow_bg', array(
	'label'     => __( 'Slider arrow background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_arrow_bg',
	'priority'  => 6,
) ) );
// ================================================================== Slider
$wp_customize->add_setting( 'ace_caption_text', array(
	'default'           =>  '#000000',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_caption_text', array(
	'label'     => __( 'Slider caption text color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_caption_text',
	'priority'  => 7,
) ) );
// ================================================================== Slider
$wp_customize->add_setting( 'ace_caption_bg', array(
	'default'           =>  '#ffffff',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'       =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_caption_bg', array(
	'label'   => __( 'Slider caption background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_caption_bg',
	'priority'  => 8,
) ) );
// ==================================================================
// Newsletter
// ==================================================================
// ================================================================== Newsletter
$wp_customize->add_setting( 'ace_newsletter_bg', array(
	'default'           =>  '#fff0ed',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_newsletter_bg', array(
	'label'     => __( 'Newsletter background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_newsletter_bg',
	'priority'  => 9,
) ) );
// ================================================================== Newsletter
$wp_customize->add_setting( 'ace_newsletter_text', array(
	'default'           =>  '#333333',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_newsletter_text', array(
	'label'     => __( 'Newsletter text color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_newsletter_text',
	'priority'  => 10,
) ) );
// ==================================================================
// Page/Post Title
// ==================================================================
// ================================================================== Page/Post Title
$wp_customize->add_setting( 'ace_page_post_title', array(
	'default'           =>  '#333333',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_page_post_title', array(
	'label'     => __( 'Page title color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_page_post_title',
	'priority'  => 11,
) ) );
// ================================================================== Page/Post Title
$wp_customize->add_setting( 'ace_page_post_title_link', array(
	'default'           =>  '#333333',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_page_post_title_link', array(
	'label'     => __( 'Post title link color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_page_post_title_link',
	'priority'  => 12,
) ) );
// ================================================================== Page/Post Title
$wp_customize->add_setting( 'ace_page_post_title_link_hover', array(
	'default'           =>  '#aaaaaa',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_page_post_title_link_hover', array(
	'label'     => __( 'Post title link hover color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_page_post_title_link_hover',
	'priority'  => 13,
) ) );
// ==================================================================
// Category
// ==================================================================
// ================================================================== Category
$wp_customize->add_setting( 'ace_category_bg', array(
	'default'           =>  '#333333',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_category_bg', array(
	'label'     => __( 'Category background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_category_bg',
	'priority'  => 14,
) ) );
// ================================================================== Category
$wp_customize->add_setting( 'ace_category_text', array(
	'default'           =>  '#ffffff',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_category_text', array(
	'label'     => __( 'Category text color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_category_text',
	'priority'  => 15,
) ) );
// ================================================================== Category
$wp_customize->add_setting( 'ace_category_bg_hover', array(
	'default'           =>  '#fff0ed',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_category_bg_hover', array(
	'label'     => __( 'Category background hover color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_category_bg_hover',
	'priority'  => 16,
) ) );
// ================================================================== Category
$wp_customize->add_setting( 'ace_category_text_hover', array(
	'default'           =>  '#333333',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_category_text_hover', array(
	'label'     => __( 'Category text hover color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_category_text_hover',
	'priority'  => 17,
) ) );
// ==================================================================
// Sidebar
// ==================================================================
// ================================================================== Sidebar
$wp_customize->add_setting( 'ace_sidebar_widget_text', array(
	'default'           =>  '#333333',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_sidebar_widget_text', array(
	'label'     => __( 'Sidebar widget title and border color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_sidebar_widget_text',
	'priority'  => 18,
) ) );
// ==================================================================
// Featured
// ==================================================================
// ================================================================== Featured
$wp_customize->add_setting( 'ace_featured_widget_border', array(
	'default'           =>  '#000000',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_featured_widget_border', array(
	'label'     => __( 'Featured widget border color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_featured_widget_border',
	'priority'  => 19,
) ) );
// ================================================================== Featured
$wp_customize->add_setting( 'ace_featured_widget_title', array(
	'default'          =>  '#000000',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_featured_widget_title', array(
	'label'     => __( 'Featured widget title color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_featured_widget_title',
	'priority'  => 20,
) ) );
// ==================================================================
// Link
// ==================================================================
// ================================================================== Link
$wp_customize->add_setting( 'ace_link', array(
	'default'           =>  '#333333',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_link', array(
	'label'     => __( 'Link color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_link',
	'priority'  => 21,
) ) );
// ================================================================== Link
$wp_customize->add_setting( 'ace_link_hover', array(
	'default'           =>  '#aaaaaa',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_link_hover', array(
	'label'     => __( 'Link hover color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_link_hover',
	'priority'  => 22,
) ) );
// ==================================================================
// Heading
// ==================================================================
// ================================================================== Heading
$wp_customize->add_setting( 'ace_h1', array(
	'default'           =>  '#333333',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_h1', array(
	'label'     => __( 'H1 color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_h1',
	'priority'  => 23,
) ) );
// ================================================================== Heading
$wp_customize->add_setting( 'ace_h2', array(
	'default'           =>  '#333333',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_h2', array(
	'label'     => __( 'H2 color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_h2',
	'priority'  => 24,
) ) );
// ================================================================== Heading
$wp_customize->add_setting( 'ace_h3', array(
	'default'           =>  '#333333',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_h3', array(
	'label'     => __( 'H3 color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_h3',
	'priority'  => 25,
) ) );
// ================================================================== Heading
$wp_customize->add_setting( 'ace_h4', array(
	'default'           =>  '#555555',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_h4', array(
	'label'     => __( 'H4 color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_h4',
	'priority'  => 26,
) ) );
// ================================================================== Heading
$wp_customize->add_setting( 'ace_h5', array(
	'default'           =>  '#555555',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_h5', array(
	'label'     => __( 'H5 color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_h5',
	'priority'  => 27,
) ) );
// ================================================================== Heading
$wp_customize->add_setting( 'ace_h6', array(
	'default'           =>  '#555555',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_h6', array(
	'label'     => __( 'H6 color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_h6',
	'priority'  => 28,
) ) );
// ==================================================================
// Button
// ==================================================================
// ================================================================== Button
$wp_customize->add_setting( 'ace_button_bg', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_button_bg', array(
	'label'     => __( 'Button background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_button_bg',
	'priority'  => 29,
) ) );
// ================================================================== Button
$wp_customize->add_setting( 'ace_button_border', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_button_border', array(
	'label'     => __( 'Button border color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_button_border',
	'priority'  => 30,
) ) );
// ================================================================== Button
$wp_customize->add_setting( 'ace_button_text', array(
	'default'           =>  '#ffffff',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_button_text', array(
	'label'     => __( 'Button text color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_button_text',
	'priority'  => 31,
) ) );
// ================================================================== Button
$wp_customize->add_setting( 'ace_button_bg_hover', array(
	'default'           =>  '#aaaaaa',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_button_bg_hover', array(
	'label'     => __( 'Button hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_button_bg_hover',
	'priority'  => 32,
) ) );
// ================================================================== Button
$wp_customize->add_setting( 'ace_button_border_hover', array(
	'default'           =>  '#aaaaaa',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_button_border_hover', array(
	'label'     => __( 'Button hover border color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_button_border_hover',
	'priority'  => 33,
) ) );
// ================================================================== Button
$wp_customize->add_setting( 'ace_button_text_hover', array(
	'default'           =>  '#ffffff',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_button_text_hover', array(
	'label'     => __( 'Button hover text color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_button_text_hover',
	'priority'  => 34,
) ) );
// ==================================================================
// Accordion
// ==================================================================
// ================================================================== Accordion
$wp_customize->add_setting( 'ace_accordion_bg', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_accordion_bg', array(
	'label'     => __( 'Accordion background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_accordion_bg',
	'priority'  => 35,
) ) );
// ================================================================== Accordion
$wp_customize->add_setting( 'ace_accordion_text', array(
	'default'           =>  '#ffffff',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_accordion_text', array(
	'label'     => __( 'Accordion text color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_accordion_text',
	'priority'  => 36,
) ) );
// ================================================================== Accordion
$wp_customize->add_setting( 'ace_accordion_bg_hover', array(
	'default'           =>  '#aaaaaa',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_accordion_bg_hover', array(
	'label'     => __( 'Accordion hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_accordion_bg_hover',
	'priority'  => 37,
) ) );
// ================================================================== Accordion
$wp_customize->add_setting( 'ace_accordion_text_hover', array(
	'default'           =>  '#ffffff',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_accordion_text_hover', array(
	'label'     => __( 'Accordion hover text color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_accordion_text_hover',
	'priority'  => 38,
) ) );
// ==================================================================
// Socail Media
// ==================================================================
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_twitter_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_twitter_bg', array(
	'label'     => __( 'Twitter background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_twitter_bg',
	'priority'  => 39,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_twitter_bg_hover', array(
	'default'           =>  '#269dd5',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_twitter_bg_hover', array(
	'label'     => __( 'Twitter hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_twitter_bg_hover',
	'priority'  => 40,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_fb_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_fb_bg', array(
	'label'     => __( 'Facebook background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_fb_bg',
	'priority'  => 41,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_fb_bg_hover', array(
	'default'           =>  '#0c42b2',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_fb_bg_hover', array(
	'label'     => __( 'Facebook hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_fb_bg_hover',
	'priority'  => 42,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_email_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_email_bg', array(
	'label'     => __( 'Email background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_email_bg',
	'priority'  => 43,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_email_bg_hover', array(
	'default'           =>  '#aaaaaa',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_email_bg_hover', array(
	'label'     => __( 'Email hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_email_bg_hover',
	'priority'  => 44,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_rss_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_rss_bg', array(
	'label'     => __( 'RSS Feed background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_rss_bg',
	'priority'  => 45,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_rss_bg_hover', array(
	'default'           =>  '#f49000',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_rss_bg_hover', array(
	'label'     => __( 'RSS Feed hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_rss_bg_hover',
	'priority'  => 46,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_google_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_google_bg', array(
	'label'     => __( 'Google Plus background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_google_bg',
	'priority'  => 47,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_google_bg_hover', array(
	'default'           =>  '#fd3000',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_google_bg_hover', array(
	'label'     => __( 'Google Plus hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_google_bg_hover',
	'priority'  => 48,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_flickr_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_flickr_bg', array(
	'label'     => __( 'Flickr background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_flickr_bg',
	'priority'  => 49,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_flickr_bg_hover', array(
	'default'           =>  '#fc0077',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_flickr_bg_hover', array(
	'label'     => __( 'Flickr hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_flickr_bg_hover',
	'priority'  => 50,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_linkedin_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_linkedin_bg', array(
	'label'     => __( 'LinkedIn background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_linkedin_bg',
	'priority'  => 51,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_linkedin_bg_hover', array(
	'default'           =>  '#0d5a7b',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_linkedin_bg_hover', array(
	'label'     => __( 'LinkedIn hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_linkedin_bg_hover',
	'priority'  => 52,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_youtube_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_youtube_bg', array(
	'label'     => __( 'YouTube background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_youtube_bg',
	'priority'  => 53,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_youtube_bg_hover', array(
	'default'           =>  '#ff0000',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_youtube_bg_hover', array(
	'label'     => __( 'YouTube hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_youtube_bg_hover',
	'priority'  => 54,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_vimeo_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_vimeo_bg', array(
	'label'     => __( 'Vimeo background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_vimeo_bg',
	'priority'  => 55,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_vimeo_bg_hover', array(
	'default'           =>  '#00c1f8',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_vimeo_bg_hover', array(
	'label'     => __( 'Vimeo hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_vimeo_bg_hover',
	'priority'  => 56,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_instagram_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_instagram_bg', array(
	'label'     => __( 'Instagram background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_instagram_bg',
	'priority'    => 57,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_instagram_bg_hover', array(
	'default'           =>  '#194f7a',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_instagram_bg_hover', array(
	'label'     => __( 'Instagram hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_instagram_bg_hover',
	'priority'  => 58,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_bloglovin_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_bloglovin_bg', array(
	'label'     => __( 'BLogLovin background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_bloglovin_bg',
	'priority'  => 59,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_bloglovin_bg_hover', array(
	'default'           =>  '#00c4fd',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_bloglovin_bg_hover', array(
	'label'     => __( 'BLogLovin hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_bloglovin_bg_hover',
	'priority'  => 60,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_pinterest_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_pinterest_bg', array(
	'label'     => __( 'Pinterest background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_pinterest_bg',
	'priority'  => 61,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_pinterest_bg_hover', array(
	'default'           =>  '#c70505',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_pinterest_bg_hover', array(
	'label'     => __( 'Pinterest hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_pinterest_bg_hover',
	'priority'  => 62,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_tumblr_bg', array(
	'default'           =>  '#cccccc',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_tumblr_bg', array(
	'label'     => __( 'Tumblr background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_tumblr_bg',
	'priority'  => 63,
) ) );
// ================================================================== Social Media
$wp_customize->add_setting( 'ace_widget_tumblr_bg_hover', array(
	'default'           =>  '#304d6b',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_widget_tumblr_bg_hover', array(
	'label'     => __( 'Tumblr hover background color', 'ace' ),
	'section'   => 'ace_theme_color',
	'settings'  => 'ace_widget_tumblr_bg_hover',
	'priority'  => 64,
) ) );


// ====================================================================================================================================
// Register theme customize section
// ====================================================================================================================================
$wp_customize->add_section( 'ace_theme_extra', array(
	'title'       => __( 'Theme Extra', 'ace' ),
	'priority'    => 1003,
  'description' => '',
) );
// ==================================================================
// Header script(s)
// ==================================================================
$wp_customize->add_setting( 'ace_header_scripts', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ace_header_scripts', array(
  'label'     => __( 'Header script(s)', 'ace' ),
  'section'   => 'ace_theme_extra',
  'settings'  => 'ace_header_scripts',
	'type'      => 'textarea',
	'priority'  => 1,
) ) );
// ==================================================================
// Footer script(s)
// ==================================================================
$wp_customize->add_setting( 'ace_footer_scripts', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ace_footer_scripts', array(
  'label'     => __( 'Footer script(s)', 'ace' ),
  'section'   => 'ace_theme_extra',
  'settings'  => 'ace_footer_scripts',
	'type'      => 'textarea',
	'priority'  => 2,
) ) );

// ==================================================================
// Custom CSS
// ==================================================================
$wp_customize->add_setting( 'ace_css', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ace_css', array(
  'label'     => __( 'Custom CSS', 'ace' ),
  'section'   => 'ace_theme_extra',
  'settings'  => 'ace_css',
	'priority'  => 3,
	'type'      => 'textarea',
) ) );


// ====================================================================================================================================
// Register theme customize section
// ====================================================================================================================================
$wp_customize->add_section( 'ace_theme_slider', array(
	'title'       => __( 'Theme Slider', 'ace' ),
	'priority'    => 1004,
  'description' => '',
) );
// ==================================================================
// Enable slider
// ==================================================================
$wp_customize->add_setting( 'ace_feature_enable', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_feature_enable', array(
  'settings'  => 'ace_feature_enable',
  'label'     => __( 'Enable slider', 'ace' ),
  'section'   => 'ace_theme_slider',
  'type'      => 'checkbox',
	'priority'  => 1,
) );
// ==================================================================
// Show Title
// ==================================================================
$wp_customize->add_setting( 'ace_feature_title_enable', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_feature_title_enable', array(
  'settings'  => 'ace_feature_title_enable',
  'label'     => __( 'Show Title', 'ace' ),
  'section'   => 'ace_theme_slider',
  'type'      => 'checkbox',
	'priority'  => 2,
) );
// ==================================================================
// Pause
// ==================================================================
$wp_customize->add_setting( 'ace_featured_slide_pause', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_featured_slide_pause', array(
  'settings'  => 'ace_featured_slide_pause',
  'label'     => __( 'Pause', 'ace' ),
  'section'   => 'ace_theme_slider',
  'type'      => 'select',
  'choices'   => array(
    '1000' => '1000',
    '2000' => '2000',
    '3000' => '3000',
    '4000' => '4000',
    '5000' => '5000',
  ),
	'priority'  => 3,
) );
// ==================================================================
// Speed
// ==================================================================
$wp_customize->add_setting( 'ace_featured_slide_speed', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_featured_slide_speed', array(
  'settings'  => 'ace_featured_slide_speed',
  'label'     => __( 'Speed', 'ace' ),
  'section'   => 'ace_theme_slider',
  'type'      => 'select',
  'choices'   => array(
    '100' => '100',
    '200' => '200',
    '300' => '300',
    '400' => '400',
    '500' => '500',
    '1000' => '1000',
  ),
	'priority'  => 4,
) );
// ==================================================================
// Auto slider
// ==================================================================
$wp_customize->add_setting( 'ace_featured_slide_sliding', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_featured_slide_sliding', array(
  'settings'  => 'ace_featured_slide_sliding',
  'label'     => __( 'Auto slider', 'ace' ),
  'section'   => 'ace_theme_slider',
  'type'      => 'checkbox',
	'priority'  => 5,
) );
// ==================================================================
// Pager navigation
// ==================================================================
$wp_customize->add_setting( 'ace_featured_slide_pager_nav', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_featured_slide_pager_nav', array(
  'settings'  => 'ace_featured_slide_pager_nav',
  'label'     => __( 'Pager navigation', 'ace' ),
  'section'   => 'ace_theme_slider',
  'type'      => 'checkbox',
	'priority'  => 6,
) );
// ==================================================================
// Slider navigation
// ==================================================================
$wp_customize->add_setting( 'ace_featured_slide_nav', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_featured_slide_nav', array(
  'settings'  => 'ace_featured_slide_nav',
  'label'     => __( 'Slider navigation', 'ace' ),
  'section'   => 'ace_theme_slider',
  'type'      => 'checkbox',
	'priority'  => 7,
) );


// ====================================================================================================================================
// Register theme customize section
// ====================================================================================================================================
$wp_customize->add_section( 'ace_theme_newsletter', array(
	'title'       => __( 'Theme newsletter area', 'ace' ),
	'priority'    => 1005,
  'description' => '',
) );
// ==================================================================
// Enable newsletter form
// ==================================================================
$wp_customize->add_setting( 'ace_enable_newsletter', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_enable_newsletter', array(
  'settings'  => 'ace_enable_newsletter',
  'label'     => __( 'Enable newsletter form', 'ace' ),
  'section'   => 'ace_theme_newsletter',
  'type'      => 'checkbox',
	'priority'  => 1,
) );
// ==================================================================
// Newsletter
// ==================================================================
$wp_customize->add_setting( 'ace_newsletter', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ace_newsletter', array(
  'label'     => __( 'Newsletter', 'ace' ),
  'section'   => 'ace_theme_newsletter',
  'settings'  => 'ace_newsletter',
	'type'      => 'textarea',
	'priority'  => 2,
) ) );


// ====================================================================================================================================
// Register theme customize section
// ====================================================================================================================================
$wp_customize->add_section( 'ace_theme_entry', array(
	'title'       => __( 'Theme Entry', 'ace' ),
	'priority'    => 1006,
  'description' => '',
) );
// ==================================================================
// Enable Breadcrumb navigation
// ==================================================================
$wp_customize->add_setting( 'ace_enable_breadcrumb', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_enable_breadcrumb', array(
  'settings'  => 'ace_enable_breadcrumb',
  'label'     => __( 'Enable Breadcrumb navigation', 'ace' ),
  'section'   => 'ace_theme_entry',
  'type'      => 'checkbox',
	'priority'  => 1,
) );
// ==================================================================
// Blog author
// ==================================================================
$wp_customize->add_setting( 'ace_blog_author', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_blog_author', array(
  'settings'  => 'ace_blog_author',
  'label'     => __( 'Blog author', 'ace' ),
  'section'   => 'ace_theme_entry',
  'type'      => 'checkbox',
	'priority'  => 2,
) );
// ==================================================================
// Blog author biography
// ==================================================================
$wp_customize->add_setting( 'ace_blog_author_bio', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_blog_author_bio', array(
  'settings'  => 'ace_blog_author_bio',
  'label'     => __( 'Blog author biography', 'ace' ),
  'section'   => 'ace_theme_entry',
  'type'      => 'checkbox',
	'priority'  => 3,
) );
// ==================================================================
// Use excerpt summary
// ==================================================================
$wp_customize->add_setting( 'ace_enable_excerpt', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_enable_excerpt', array(
  'settings'  => 'ace_enable_excerpt',
  'label'     => __( 'Use excerpt summary', 'ace' ),
  'section'   => 'ace_theme_entry',
  'type'      => 'checkbox',
	'priority'  => 4,
) );
// ==================================================================
// Enable related post
// ==================================================================
$wp_customize->add_setting( 'ace_enable_related', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_enable_related', array(
  'settings'  => 'ace_enable_related',
  'label'     => __( 'Enable related post', 'ace' ),
  'section'   => 'ace_theme_entry',
  'type'      => 'checkbox',
	'priority'  => 5,
) );
// ==================================================================
// Enable feature thumbnail
// ==================================================================
$wp_customize->add_setting( 'ace_enable_post_thumbnail', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_enable_post_thumbnail', array(
  'settings'  => 'ace_enable_post_thumbnail',
  'label'     => __( 'Enable feature thumbnail', 'ace' ),
  'section'   => 'ace_theme_entry',
  'type'      => 'checkbox',
	'priority'  => 6,
) );
// ==================================================================
// Width
// ==================================================================
$wp_customize->add_setting( 'ace_thumb_width', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_thumb_width', array(
  'label'     => __( 'Width', 'ace' ),
  'section'   => 'ace_theme_entry',
  'settings'  => 'ace_thumb_width',
	'priority'  => 7,
) );
// ==================================================================
// Height
// ==================================================================
$wp_customize->add_setting( 'ace_thumb_height', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_thumb_height', array(
  'label'     => __( 'Height', 'ace' ),
  'section'   => 'ace_theme_entry',
  'settings'  => 'ace_thumb_height',
	'priority'  => 8,
) );


// ====================================================================================================================================
// Register theme customize section
// ====================================================================================================================================
$wp_customize->add_section( 'ace_theme_social_media', array(
	'title'       => __( 'Theme social media', 'ace' ),
	'priority'    => 1007,
  'description' => '',
) );
// ==================================================================
// Enable social media icons
// ==================================================================
$wp_customize->add_setting( 'ace_footer_icons', array(
  'capability' => 'edit_theme_options',
  'type'       => 'option',
) );
$wp_customize->add_control( 'ace_footer_icons', array(
  'settings' => 'ace_footer_icons',
  'label'    => __( 'Show social media icons on footer', 'ace' ),
  'section'  => 'ace_theme_social_media',
  'type'     => 'checkbox',
	'priority'  => 1,
) );
// ================================================================== Twitter
$wp_customize->add_setting( 'ace_twitter', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_twitter', array(
  'label'     => __( 'Twitter profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_twitter',
	'priority'  => 2,
) );
// ================================================================== Twitter background
$wp_customize->add_setting( 'ace_twitter_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_twitter_bg', array(
	'label'     => __( 'Twitter icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_twitter_bg',
	'priority'  => 3,
) ) );
// ================================================================== Twitter hover background
$wp_customize->add_setting( 'ace_twitter_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_twitter_bg_hover', array(
	'label'     => __( 'Twitter icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_twitter_bg_hover',
	'priority'    => 4,
) ) );
// ================================================================== Facebook
$wp_customize->add_setting( 'ace_facebook', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_facebook', array(
  'label'     => __( 'Facebook profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_facebook',
	'priority'  => 5,
) );
// ================================================================== Facebook background
$wp_customize->add_setting( 'ace_facebook_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_facebook_bg', array(
	'label'     => __( 'Facebook icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_facebook_bg',
	'priority'  => 6,
) ) );
// ================================================================== Facebook hover background
$wp_customize->add_setting( 'ace_facebook_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_facebook_bg_hover', array(
	'label'     => __( 'Facebook icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_facebook_bg_hover',
	'priority'  => 7,
) ) );
// ================================================================== Pinterest
$wp_customize->add_setting( 'ace_pinterest', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_pinterest', array(
  'label'     => __( 'Pinterest profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_pinterest',
	'priority'  => 8,
) );
// ================================================================== Pinterest background
$wp_customize->add_setting( 'ace_pinterest_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_pinterest_bg', array(
	'label'     => __( 'Pinterest icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_pinterest_bg',
	'priority'  => 9,
) ) );
// ================================================================== Pinterest hover background
$wp_customize->add_setting( 'ace_pinterest_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_pinterest_bg_hover', array(
	'label'     => __( 'Pinterest icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_pinterest_bg_hover',
	'priority'  => 10,
) ) );
// ================================================================== Instagram
$wp_customize->add_setting( 'ace_instagram', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_instagram', array(
  'label'     => __( 'Instagram profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_instagram',
	'priority'  => 11,
) );
// ================================================================== Instagram background
$wp_customize->add_setting( 'ace_instagram_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_instagram_bg', array(
	'label'     => __( 'Instagram icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_instagram_bg',
	'priority'  => 12,
) ) );
// ================================================================== Instagram hover background
$wp_customize->add_setting( 'ace_instagram_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_instagram_bg_hover', array(
	'label'     => __( 'Instagram icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_instagram_bg_hover',
	'priority'  => 13,
) ) );
// ================================================================== Google Plus
$wp_customize->add_setting( 'ace_google_plus', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_google_plus', array(
  'label'     => __( 'Google Plus profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_google_plus',
	'priority'  => 14,
) );
// ================================================================== Google Plus background
$wp_customize->add_setting( 'ace_google_plus_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_google_plus_bg', array(
	'label'     => __( 'Google Plus icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_google_plus_bg',
	'priority'  => 15,
) ) );
// ================================================================== Google Plus hover background
$wp_customize->add_setting( 'ace_google_plus_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_google_plus_bg_hover', array(
	'label'     => __( 'Google Plus icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_google_plus_bg_hover',
	'priority'  => 16,
) ) );
// ================================================================== Flickr
$wp_customize->add_setting( 'ace_flickr', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_flickr', array(
  'label'     => __( 'Flickr profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_flickr',
	'priority'  => 17,
) );
// ================================================================== Flickr background
$wp_customize->add_setting( 'ace_flickr_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_flickr_bg', array(
	'label'     => __( 'Flickr icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_flickr_bg',
	'priority'  => 18,
) ) );
// ================================================================== Flickr hover background
$wp_customize->add_setting( 'ace_flickr_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_flickr_bg_hover', array(
	'label'     => __( 'Flickr icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_flickr_bg_hover',
	'priority'  => 19,
) ) );
// ================================================================== Linkedin
$wp_customize->add_setting( 'ace_linkedin', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_linkedin', array(
  'label'     => __( 'Linkedin profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_linkedin',
	'priority'  => 20,
) );
// ================================================================== Linkedin background
$wp_customize->add_setting( 'ace_linkedin_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_linkedin_bg', array(
	'label'     => __( 'Linkedin icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_linkedin_bg',
	'priority'  => 21,
) ) );
// ================================================================== Linkedin hover background
$wp_customize->add_setting( 'ace_linkedin_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_linkedin_bg_hover', array(
	'label'     => __( 'Linkedin icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_linkedin_bg_hover',
	'priority'  => 22,
) ) );
// ================================================================== YouTube
$wp_customize->add_setting( 'ace_youtube', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_youtube', array(
  'label'     => __( 'YouTube profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_youtube',
	'priority'  => 23,
) );
// ================================================================== YouTube background
$wp_customize->add_setting( 'ace_youtube_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_youtube_bg', array(
	'label'     => __( 'YouTube icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_youtube_bg',
	'priority'  => 24,
) ) );
// ================================================================== YouTube hover background
$wp_customize->add_setting( 'ace_youtube_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_youtube_bg_hover', array(
	'label'     => __( 'YouTube icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_youtube_bg_hover',
	'priority'  => 25,
) ) );
// ================================================================== Vimeo
$wp_customize->add_setting( 'ace_vimeo', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_vimeo', array(
  'label'     => __( 'Vimeo profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_vimeo',
	'priority'  => 26,
) );
// ================================================================== Vimeo background
$wp_customize->add_setting( 'ace_vimeo_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_vimeo_bg', array(
	'label'     => __( 'Vimeo icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_vimeo_bg',
	'priority'  => 27,
) ) );
// ================================================================== Vimeo hover background
$wp_customize->add_setting( 'ace_vimeo_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_vimeo_bg_hover', array(
	'label'     => __( 'Vimeo icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_vimeo_bg_hover',
	'priority'  => 28,
) ) );
// ================================================================== BlogLovin
$wp_customize->add_setting( 'ace_bloglovin', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_bloglovin', array(
  'label'     => __( 'BlogLovin profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_bloglovin',
	'priority'  => 29,
) );
// ================================================================== BlogLovin background
$wp_customize->add_setting( 'ace_bloglovin_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_bloglovin_bg', array(
	'label'     => __( 'BlogLovin icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_bloglovin_bg',
	'priority'  => 30,
) ) );
// ================================================================== BlogLovin hover background
$wp_customize->add_setting( 'ace_bloglovin_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_bloglovin_bg_hover', array(
	'label'     => __( 'BlogLovin icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_bloglovin_bg_hover',
	'priority'  => 31,
) ) );
// ================================================================== Tumblr
$wp_customize->add_setting( 'ace_tumblr', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_tumblr', array(
  'label'     => __( 'Tumblr profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_tumblr',
	'priority'  => 32,
) );
// ================================================================== Tumblr background
$wp_customize->add_setting( 'ace_tumblr_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_tumblr_bg', array(
	'label'     => __( 'Tumblr icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_tumblr_bg',
	'priority'  => 33,
) ) );
// ================================================================== Tumblr hover background
$wp_customize->add_setting( 'ace_tumblr_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_tumblr_bg_hover', array(
	'label'     => __( 'Tumblr icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_tumblr_bg_hover',
	'priority'  => 34,
) ) );
// ================================================================== RSS
$wp_customize->add_setting( 'ace_rss', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_rss', array(
  'label'     => __( 'RSS profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_rss',
	'priority'  => 35,
) );
// ================================================================== RSS background
$wp_customize->add_setting( 'ace_rss_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_rss_bg', array(
	'label'     => __( 'RSS icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_rss_bg',
	'priority'  => 36,
) ) );
// ================================================================== RSS hover background
$wp_customize->add_setting( 'ace_rss_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_rss_bg_hover', array(
	'label'     => __( 'RSS icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_rss_bg_hover',
	'priority'  => 37,
) ) );
// ================================================================== Email
$wp_customize->add_setting( 'ace_email', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( 'ace_email', array(
  'label'   => __( 'Email profile URL', 'ace' ),
  'section'   => 'ace_theme_social_media',
  'settings'  => 'ace_email',
	'priority'  => 38,
) );
// ================================================================== Email background
$wp_customize->add_setting( 'ace_email_bg', array(
	'default'           =>  '#dedede',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_email_bg', array(
	'label'     => __( 'Email icon background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_email_bg',
	'priority'  => 39,
) ) );
// ================================================================== Email hover background
$wp_customize->add_setting( 'ace_email_bg_hover', array(
	'default'           =>  '#222222',
	'sanitize_callback' =>  'sanitize_hex_color',
	'type'              =>  'option',
	'capability'        =>  'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ace_email_bg_hover', array(
	'label'     => __( 'Email icon hover background color', 'ace' ),
	'section'   => 'ace_theme_social_media',
	'settings'  => 'ace_email_bg_hover',
	'priority'  => 40,
) ) );


// ====================================================================================================================================
// Register theme customize section
// ====================================================================================================================================
$wp_customize->add_section( 'ace_theme_404', array(
	'title'       => __( 'Theme 404', 'ace' ),
	'priority'    => 1008,
  'description' => '',
) );
// ==================================================================
// 404 Error
// ==================================================================
$wp_customize->add_setting( 'ace_404_page', array(
  'default'     => '',
  'capability'  => 'edit_theme_options',
  'type'        => 'option',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ace_404_page', array(
  'label'     => __( '404 Page Content', 'ace' ),
  'section'   => 'ace_theme_404',
  'settings'  => 'ace_404_page',
	'type'      => 'textarea',
	'priority'  => 1,
) ) );


// ==================================================================
// END register theme customize
// ==================================================================
}
add_action( 'customize_register', 'ace_customize_register' );