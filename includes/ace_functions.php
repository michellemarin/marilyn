<?php
// ==================================================================
// Post author
// ==================================================================
function ace_post_author() {
  if ( get_option( 'ace_blog_author' ) ) {
    echo ' <span class="vcard author post-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">';
    echo _e('by','ace');
    echo ' <span class="fn" itemprop="name">';
    the_author();
    echo '</span></span>';

  }
}

// ==================================================================
// Post author biography
// ==================================================================
function ace_post_author_bio() {
  if ( get_option( 'ace_blog_author_bio' ) ) { ?>
      <section class="post-author-bio">
        <?php echo get_avatar( get_the_author_meta( 'email' ) , 64 ); ?>
        <?php echo get_the_author_meta( 'description' ); ?>
      </section>
  <?php }
}

// ==================================================================
// Windows 8 site tile
// ==================================================================
function ace_win8_tile() { ?>
  <meta name="application-name" content="<?php echo get_bloginfo('name'); ?>"/> 
  <meta name="msapplication-TileColor" content="<?php if ( get_option( 'ace_win8_tile' ) ) { echo get_option( 'ace_win8_tile' ); } else { echo '#1EBAED'; } ?>"/> 
  <meta name="msapplication-TileImage" content="<?php if ( get_option( 'ace_win8_tile_thumb' ) ) { echo get_option( 'ace_win8_tile_thumb' ); } else { echo get_template_directory_uri(); echo '/images/win8_tile.png'; } ?>"/>
<?php }

// ==================================================================
// Theme slider
// ==================================================================
function ace_theme_slider() {
  if ( get_option( 'ace_feature_enable' ) ) {
    echo get_template_part( 'layouts/slide' );
  }
}

// ==================================================================
// Theme slider
// ==================================================================
function ace_theme_newsletter() {
  if ( get_option( 'ace_enable_newsletter' ) ) {
    echo '<section class="newsletter-section">' . stripslashes( get_option( 'ace_newsletter' ) ) . '</section>';
  }
}

// ==================================================================
// Theme custom css
// ==================================================================
function ace_css() {
  if ( get_option( 'ace_css' ) ) { ?>
    <style type="text/css">
      <?php echo stripslashes( get_option( 'ace_css' ) ); ?>
    </style>
  <?php }
}

// ==================================================================
// Theme options colors
// ==================================================================
function ace_theme_css() { ?>
  <style type="text/css">

    <?php if ( get_option( 'ace_h1' ) ) { ?>h1 {color: <?php echo get_option( 'ace_h1' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_h2' ) ) { ?>h2 {color: <?php echo get_option( 'ace_h2' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_h3' ) ) { ?>h3 {color: <?php echo get_option( 'ace_h3' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_h4' ) ) { ?>h4 {color: <?php echo get_option( 'ace_h4' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_h5' ) ) { ?>h5 {color: <?php echo get_option( 'ace_h5' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_h6' ) ) { ?>h6 {color: <?php echo get_option( 'ace_h6' ); ?>;}<?php } ?>

    <?php if ( get_option( 'ace_link' ) ) { ?>a {color: <?php echo get_option( 'ace_link' ); ?>;} <?php } ?>
    <?php if ( get_option( 'ace_link_hover' ) ) { ?>a:hover {color: <?php echo get_option( 'ace_link_hover' ); ?>;}<?php } ?>

    <?php if ( get_option( 'ace_nav_bar' ) ) { ?>.nav, .nav ul ul {background: <?php echo get_option( 'ace_nav_bar' ); ?>;} <?php } ?>
    <?php if ( get_option( 'ace_nav_bar' ) ) { ?>.nav ul ul, .nav ul ul li {border-color: <?php echo get_option( 'ace_nav_bar' ); ?>;} <?php } ?>
    <?php if ( get_option( 'ace_nav_link' ) ) { ?>.nav a {color: <?php echo get_option( 'ace_nav_link' ); ?>;} <?php } ?>
    <?php if ( get_option( 'ace_nav_link_hover' ) ) { ?>.nav a:hover, .nav .current-menu-item > a, .nav .current-menu-ancestor > a, .nav .current_page_item > a, .nav .current_page_ancestor > a {color: <?php echo get_option( 'ace_nav_link_hover' ); ?>;}<?php } ?>

    <?php if ( get_option( 'ace_link' ) ) { ?>
    .responsiveslides_tabs li.responsiveslides_here a,
    .sc-slide .rslides_tabs li.rslides_here a, 
    .nivo-controlNav a.active,
    .pagination a:hover,
		.pagination .current {
      background: <?php echo get_option( 'ace_link' ); ?>;
    }
    <?php } ?>

    <?php if ( get_option( 'ace_button_bg' ) ) { ?>
    .post-button,
    .input-button,
    input[type=submit] {
      background: <?php echo get_option( 'ace_button_bg' ); ?>;
      <?php if ( get_option( 'ace_button_border' ) ) { ?>border: 1px solid <?php echo get_option( 'ace_button_border' ); ?>;<?php } ?>
      <?php if ( get_option( 'ace_button_text' ) ) { ?>color: <?php echo get_option( 'ace_button_text' ); ?>;<?php } ?>
    }
    <?php } ?>

    <?php if ( get_option( 'ace_button_bg_hover' ) ) { ?>
    .post-button:hover,
    .input-button:hover,
    input[type=submit]:hover {
      background: <?php echo get_option( 'ace_button_bg_hover' ); ?>;
      <?php if ( get_option( 'ace_button_border_hover' ) ) { ?>border: 1px solid <?php echo get_option( 'ace_button_border_hover' ); ?>;<?php } ?>
      <?php if ( get_option( 'ace_button_text_hover' ) ) { ?>color: <?php echo get_option( 'ace_button_text_hover' ); ?>;<?php } ?>
    }
    <?php } ?>

    <?php if ( get_option( 'ace_button_bg' ) ) { ?>#cancel-comment-reply-link, a.comment-reply-link {background: <?php echo get_option( 'ace_button_bg' ); ?>; <?php if ( get_option( 'ace_button_text' ) ) { ?>color: <?php echo get_option( 'ace_button_text' ); ?>;<?php } ?>} <?php } ?>

    <?php if ( get_option( 'ace_text_color' ) ) { ?>body {color: <?php echo get_option( 'ace_text_color' ); ?>;}<?php } ?>

    <?php if ( get_option( 'ace_border_color' ) ) { ?>.header, .footer, .article .post-meta {border-color: <?php echo get_option( 'ace_border_color' ); ?>;}<?php } ?>

    <?php if ( get_option( 'ace_page_post_title' ) ) { ?>.article .post-title {color: <?php echo get_option( 'ace_page_post_title' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_page_post_title_link' ) ) { ?>.article .post-title a {color: <?php echo get_option( 'ace_page_post_title_link' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_page_post_title_link_hover' ) ) { ?>.article .post-title a:hover {color: <?php echo get_option( 'ace_page_post_title_link_hover' ); ?> !important;}<?php } ?>

    <?php if ( get_option( 'ace_category_bg' ) ) { ?>.article .post-category a {background: <?php echo get_option( 'ace_category_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_category_text' ) ) { ?>.article .post-category a {color: <?php echo get_option( 'ace_category_text' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_category_bg_hover' ) ) { ?>.article .post-category a:hover {background: <?php echo get_option( 'ace_category_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_category_text_hover' ) ) { ?>.article .post-category a:hover {color: <?php echo get_option( 'ace_category_text_hover' ); ?>;}<?php } ?>

    <?php if ( get_option( 'ace_sidebar_widget_text' ) ) { ?>.side-widget h3 {color: <?php echo get_option( 'ace_sidebar_widget_text' ); ?>; border-color: <?php echo get_option( 'ace_sidebar_widget_text' ); ?>;}<?php } ?>

    <?php if ( get_option( 'ace_featured_widget_title' ) ) { ?>.home-widgets .home-widget h3, .home-widgets .home-widget h3 a {color: <?php echo get_option( 'ace_featured_widget_title' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_featured_widget_border' ) ) { ?>.home-widgets .home-widget {border-color: <?php echo get_option( 'ace_featured_widget_border' ); ?>;}<?php } ?>

    <?php if ( get_option( 'ace_newsletter_bg' ) ) { ?>.newsletter-section {background: <?php echo get_option( 'ace_newsletter_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_newsletter_text' ) ) { ?>
    .slider-newsletter .newsletter-section,
    .slider-newsletter .newsletter-section a,
    .slider-newsletter .newsletter-section h1,
    .slider-newsletter .newsletter-section h2,
    .slider-newsletter .newsletter-section h3,
    .slider-newsletter .newsletter-section h4,
    .slider-newsletter .newsletter-section h5,
    .slider-newsletter .newsletter-section h6,
    .newsletter-half .newsletter-section,
    .newsletter-half .newsletter-section a,
    .newsletter-half .newsletter-section h1,
    .newsletter-half .newsletter-section h2,
    .newsletter-half .newsletter-section h3,
    .newsletter-half .newsletter-section h4,
    .newsletter-half .newsletter-section h5,
    .newsletter-half .newsletter-section h6 {
      color: <?php echo get_option( 'ace_newsletter_text' ); ?>;
    }
    <?php } ?>

    <?php if ( get_option( 'ace_link' ) ) { ?>.pagination a:hover, .pagination .current {background: <?php echo get_option( 'ace_link' ); ?>;} <?php } ?>

    <?php if ( get_option( 'ace_caption_bg' ) ) { ?>.responsiveslides-slide li .responsiveslides-caption {background: <?php echo get_option( 'ace_caption_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_caption_text' ) ) { ?>.responsiveslides-slide li .responsiveslides-caption h3, .responsiveslides-slide li .responsiveslides-caption h3 a {color: <?php echo get_option( 'ace_caption_text' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_arrow_bg' ) ) { ?>.responsiveslides .next, .responsiveslides .prev {background-color: <?php echo get_option( 'ace_arrow_bg' ); ?>;}<?php } ?>

    <?php if ( get_option( 'ace_accordion_bg' ) ) { ?>.accordion-title {background-color: <?php echo get_option( 'ace_accordion_bg' ); ?>; color: <?php echo get_option( 'ace_accordion_text' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_accordion_bg_hover' ) ) { ?>.accordion-open {background-color: <?php echo get_option( 'ace_accordion_bg_hover' ); ?>; color: <?php echo get_option( 'ace_accordion_text_hover' ); ?>;}<?php } ?>

    <?php if ( get_option( 'ace_widget_twitter_bg' ) ) { ?>.social-twitter {background-color: <?php if ( get_option( 'ace_widget_twitter_bg' ) ) { echo get_option( 'ace_widget_twitter_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_fb_bg' ) ) { ?>.social-facebook {background-color: <?php if ( get_option( 'ace_widget_fb_bg' ) ) { echo get_option( 'ace_widget_fb_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_email_bg' ) ) { ?>.social-email {background-color: <?php if ( get_option( 'ace_widget_email_bg' ) ) { echo get_option( 'ace_widget_email_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_rss_bg' ) ) { ?>.social-rss {background-color: <?php if ( get_option( 'ace_widget_rss_bg' ) ) { echo get_option( 'ace_widget_rss_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_google_bg' ) ) { ?>.social-google {background-color: <?php if ( get_option( 'ace_widget_google_bg' ) ) { echo get_option( 'ace_widget_google_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_flickr_bg' ) ) { ?>.social-flickr {background-color: <?php if ( get_option( 'ace_widget_flickr_bg' ) ) { echo get_option( 'ace_widget_flickr_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_linkedin_bg' ) ) { ?>.social-linkedin {background-color: <?php if ( get_option( 'ace_widget_linkedin_bg' ) ) { echo get_option( 'ace_widget_linkedin_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_youtube_bg' ) ) { ?>.social-youtube {background-color: <?php if ( get_option( 'ace_widget_youtube_bg' ) ) { echo get_option( 'ace_widget_youtube_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_vimeo_bg' ) ) { ?>.social-vimeo {background-color: <?php if ( get_option( 'ace_widget_vimeo_bg' ) ) { echo get_option( 'ace_widget_vimeo_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_instagram_bg' ) ) { ?>.social-instagram {background-color: <?php if ( get_option( 'ace_widget_instagram_bg' ) ) { echo get_option( 'ace_widget_instagram_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_bloglovin_bg' ) ) { ?>.social-bloglovin {background-color: <?php if ( get_option( 'ace_widget_bloglovin_bg' ) ) { echo get_option( 'ace_widget_bloglovin_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_pinterest_bg' ) ) { ?>.social-pinterest {background-color: <?php if ( get_option( 'ace_widget_pinterest_bg' ) ) { echo get_option( 'ace_widget_pinterest_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_tumblr_bg' ) ) { ?>.social-tumblr {background-color: <?php if ( get_option( 'ace_widget_tumblr_bg' ) ) { echo get_option( 'ace_widget_tumblr_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>

    <?php if ( get_option( 'ace_widget_twitter_bg_hover' ) ) { ?>.social-twitter:hover {background-color: <?php if ( get_option( 'ace_widget_twitter_bg_hover' ) ) { echo get_option( 'ace_widget_twitter_bg_hover' ); } else { echo '#269dd5'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_fb_bg_hover' ) ) { ?>.social-facebook:hover {background-color: <?php if ( get_option( 'ace_widget_fb_bg_hover' ) ) { echo get_option( 'ace_widget_fb_bg_hover' ); } else { echo '#0c42b2'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_email_bg_hover' ) ) { ?>.social-email:hover {background-color: <?php if ( get_option( 'ace_widget_email_bg_hover' ) ) { echo get_option( 'ace_widget_email_bg_hover' ); } else { echo '#aaaaaa'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_rss_bg_hover' ) ) { ?>.social-rss:hover {background-color: <?php if ( get_option( 'ace_widget_rss_bg_hover' ) ) { echo get_option( 'ace_widget_rss_bg_hover' ); } else { echo '#f49000'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_google_bg_hover' ) ) { ?>.social-google:hover {background-color: <?php if ( get_option( 'ace_widget_google_bg_hover' ) ) { echo get_option( 'ace_widget_google_bg_hover' ); } else { echo '#fd3000'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_flickr_bg_hover' ) ) { ?>.social-flickr:hover {background-color: <?php if ( get_option( 'ace_widget_flickr_bg_hover' ) ) { echo get_option( 'ace_widget_flickr_bg_hover' ); } else { echo '#fc0077'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_linkedin_bg_hover' ) ) { ?>.social-linkedin:hover {background-color: <?php if ( get_option( 'ace_widget_linkedin_bg_hover' ) ) { echo get_option( 'ace_widget_linkedin_bg_hover' ); } else { echo '#0d5a7b'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_youtube_bg_hover' ) ) { ?>.social-youtube:hover {background-color: <?php if ( get_option( 'ace_widget_youtube_bg_hover' ) ) { echo get_option( 'ace_widget_youtube_bg_hover' ); } else { echo '#ff0000'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_vimeo_bg_hover' ) ) { ?>.social-vimeo:hover {background-color: <?php if ( get_option( 'ace_widget_vimeo_bg_hover' ) ) { echo get_option( 'ace_widget_vimeo_bg_hover' ); } else { echo '#00c1f8'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_instagram_bg_hover' ) ) { ?>.social-instagram:hover {background-color: <?php if ( get_option( 'ace_widget_instagram_bg_hover' ) ) { echo get_option( 'ace_widget_instagram_bg_hover' ); } else { echo '#194f7a'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_bloglovin_bg_hover' ) ) { ?>.social-bloglovin:hover {background-color: <?php if ( get_option( 'ace_widget_bloglovin_bg_hover' ) ) { echo get_option( 'ace_widget_bloglovin_bg_hover' ); } else { echo '#00c4fd'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_pinterest_bg_hover' ) ) { ?>.social-pinterest:hover {background-color: <?php if ( get_option( 'ace_widget_pinterest_bg_hover' ) ) { echo get_option( 'ace_widget_pinterest_bg_hover' ); } else { echo '#c70505'; } ?>;}<?php } ?>
    <?php if ( get_option( 'ace_widget_tumblr_bg_hover' ) ) { ?>.social-tumblr:hover {background-color: <?php if ( get_option( 'ace_widget_tumblr_bg_hover' ) ) { echo get_option( 'ace_widget_tumblr_bg_hover' ); } else { echo '#304d6b'; } ?>;}<?php } ?>

    <?php if ( get_option( 'ace_icons_border' ) ) { ?>.footer-icons {border-color: <?php echo get_option( 'ace_icons_border' ); ?>;}<?php } ?>

    <?php if ( get_option( 'ace_rss_bg' ) ) { ?>ul.footer-icons-list li .footer-rss {background-color: <?php echo get_option( 'ace_rss_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_twitter_bg' ) ) { ?>ul.footer-icons-list li .footer-twitter {background-color: <?php echo get_option( 'ace_twitter_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_facebook_bg' ) ) { ?>ul.footer-icons-list li .footer-facebook {background-color: <?php echo get_option( 'ace_facebook_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_pinterest_bg' ) ) { ?>ul.footer-icons-list li .footer-pinterest {background-color: <?php echo get_option( 'ace_pinterest_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_email_bg' ) ) { ?>ul.footer-icons-list li .footer-email {background-color: <?php echo get_option( 'ace_email_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_flickr_bg' ) ) { ?>ul.footer-icons-list li .footer-flickr {background-color: <?php echo get_option( 'ace_flickr_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_linkedin_bg' ) ) { ?>ul.footer-icons-list li .footer-linkedin {background-color: <?php echo get_option( 'ace_linkedin_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_youtube_bg' ) ) { ?>ul.footer-icons-list li .footer-youtube {background-color: <?php echo get_option( 'ace_youtube_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_vimeo_bg' ) ) { ?>ul.footer-icons-list li .footer-vimeo {background-color: <?php echo get_option( 'ace_vimeo_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_google_plus_bg' ) ) { ?>ul.footer-icons-list li .footer-google {background-color: <?php echo get_option( 'ace_google_plus_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_instagram_bg' ) ) { ?>ul.footer-icons-list li .footer-instagram {background-color: <?php echo get_option( 'ace_instagram_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_bloglovin_bg' ) ) { ?>ul.footer-icons-list li .footer-bloglovin {background-color: <?php echo get_option( 'ace_bloglovin_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_tumblr_bg' ) ) { ?>ul.footer-icons-list li .footer-tumblr {background-color: <?php echo get_option( 'ace_tumblr_bg' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_email_bg' ) ) { ?>ul.footer-icons-list li .footer-email {background-color: <?php echo get_option( 'ace_email_bg' ); ?>;}<?php } ?>

    <?php if ( get_option( 'ace_rss_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-rss:hover {background-color: <?php echo get_option( 'ace_rss_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_twitter_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-twitter:hover {background-color: <?php echo get_option( 'ace_twitter_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_facebook_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-facebook:hover {background-color: <?php echo get_option( 'ace_facebook_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_pinterest_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-pinterest:hover {background-color: <?php echo get_option( 'ace_pinterest_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_email_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-email:hover {background-color: <?php echo get_option( 'ace_email_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_flickr_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-flickr:hover {background-color: <?php echo get_option( 'ace_flickr_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_linkedin_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-linkedin:hover {background-color: <?php echo get_option( 'ace_linkedin_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_youtube_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-youtube:hover {background-color: <?php echo get_option( 'ace_youtube_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_vimeo_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-vimeo:hover {background-color: <?php echo get_option( 'ace_vimeo_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_google_plus_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-google:hover {background-color: <?php echo get_option( 'ace_google_plus_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_instagram_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-instagram:hover {background-color: <?php echo get_option( 'ace_instagram_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_bloglovin_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-bloglovin:hover {background-color: <?php echo get_option( 'ace_bloglovin_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_tumblr_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-tumblr:hover {background-color: <?php echo get_option( 'ace_tumblr_bg_hover' ); ?>;}<?php } ?>
    <?php if ( get_option( 'ace_email_bg_hover' ) ) { ?>ul.footer-icons-list li .footer-email:hover {background-color: <?php echo get_option( 'ace_email_bg_hover' ); ?>;}<?php } ?>

  </style>
<?php }

// ==================================================================
// Breadcrumb
// ==================================================================
function ace_breadcrumb() {
  if ( get_option( 'ace_enable_breadcrumb' ) ) { echo get_breadcrumb(); }
}

// ==================================================================
// Heading
// ==================================================================
function ace_heading() {
  if ( get_header_image() == true ) { ?>
    <a href="<?php echo esc_url( home_url() ); ?>">
      <img src="<?php header_image(); ?>" class="header-title" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" />
    </a>
  <?php } elseif ( is_home() || is_front_page() ) { ?>
      <h1><a href="<?php echo esc_url( home_url() ); ?>" class="header-title"><?php bloginfo( 'name' ); ?></a></h1>
      <p class="header-desc"><?php bloginfo( 'description' ); ?></p>
  <?php } else { ?>
      <h5><a href="<?php echo esc_url( home_url() ); ?>" class="header-title"><?php bloginfo( 'name' ); ?></a></h5>
      <p class="header-desc"><?php bloginfo( 'description' ); ?></p>
  <?php }
}

// ==================================================================
// Header scripts
// ==================================================================
function ace_header_scripts() {
  if ( get_option( 'ace_header_scripts' ) ) { echo stripslashes( get_option( 'ace_header_scripts' ) ); }
}

// ==================================================================
// Footer scripts
// ==================================================================
function ace_footer_scripts() {
  if ( get_option( 'ace_footer_scripts' ) ) { echo stripslashes( get_option( 'ace_footer_scripts' ) ); }
}