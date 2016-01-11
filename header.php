<!DOCTYPE html>
<!--[if IE 7]><html id="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php if ( get_option( 'ace_favicon' ) ) { echo esc_url( get_option( 'ace_favicon' ) ); } else { echo get_stylesheet_directory_uri(); echo "/images/favicon.gif"; } ?>" type="image/x-icon" />
<?php wp_head(); ?>
<?php echo ace_header_scripts() || ace_css() || ace_theme_css(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<nav class="nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
  <?php wp_nav_menu( 'theme_location=top_menu&container_class=menu&menu_class=menu&fallback_cb=false&show_home=1' ); ?>
</nav><!-- .nav -->
  
<section class="wrap">
<section class="container">

  <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
    <?php echo ace_heading(); ?>
  </header><!-- .header -->


<?php
if ( get_option( 'ace_enable_slider_newsletter_home' ) ) {
  if ( is_front_page() ) {
    echo get_template_part( 'layouts/slide-newsletter' );
  }
} else {
  echo get_template_part( 'layouts/slide-newsletter' );
}
?>