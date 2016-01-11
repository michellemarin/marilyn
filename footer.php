<footer class="footer" itemscope itemtype="http://schema.org/WPFooter">

  <?php if ( get_option( 'ace_footer_icons' ) == true ) { ?>
  <footer class="footer-icons">
    <ul class="footer-icons-list">
      <?php if ( get_option( 'ace_twitter' ) ) { ?><li><a href="<?php echo get_option( 'ace_twitter' ); ?>" class="footer-twitter radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>Twitter</a></li><?php } ?>
      <?php if ( get_option( 'ace_facebook' ) ) { ?><li><a href="<?php echo get_option( 'ace_facebook' ); ?>" class="footer-facebook radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>Facebook</a></li><?php } ?>
      <?php if ( get_option( 'ace_pinterest' ) ) { ?><li><a href="<?php echo get_option( 'ace_pinterest' ); ?>" class="footer-pinterest radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>Pinterest</a></li><?php } ?>
      <?php if ( get_option( 'ace_instagram' ) ) { ?><li><a href="<?php echo get_option( 'ace_instagram' ); ?>" class="footer-instagram radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>Instagram</a></li><?php } ?>
      <?php if ( get_option( 'ace_google_plus' ) ) { ?><li><a href="<?php echo get_option( 'ace_google_plus' ); ?>" class="footer-google radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>Google Plus</a></li><?php } ?>
      <?php if ( get_option( 'ace_flickr' ) ) { ?><li><a href="<?php echo get_option( 'ace_flickr' ); ?>" class="footer-flickr radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>Flickr</a></li><?php } ?>
      <?php if ( get_option( 'ace_linkedin' ) ) { ?><li><a href="<?php echo get_option( 'ace_linkedin' ); ?>" class="footer-linkedin radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>Linkedin</a></li><?php } ?>
      <?php if ( get_option( 'ace_youtube' ) ) { ?><li><a href="<?php echo get_option( 'ace_youtube' ); ?>" class="footer-youtube radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>YouTube</a></li><?php } ?>
      <?php if ( get_option( 'ace_vimeo' ) ) { ?><li><a href="<?php echo get_option( 'ace_vimeo' ); ?>" class="footer-vimeo radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>Vimeo</a></li><?php } ?>
      <?php if ( get_option( 'ace_bloglovin' ) ) { ?><li><a href="<?php echo get_option( 'ace_bloglovin' ); ?>" class="footer-bloglovin radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>Bloglovin</a></li><?php } ?>
      <?php if ( get_option( 'ace_tumblr' ) ) { ?><li><a href="<?php echo get_option( 'ace_tumblr' ); ?>" class="footer-tumblr radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>Tumblr</a></li><?php } ?>
      <?php if ( get_option( 'ace_rss' ) ) { ?><li><a href="<?php echo get_option( 'ace_rss' ); ?>" class="footer-rss radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>RSS Feed</a></li><?php } ?>
      <?php if ( get_option( 'ace_email' ) ) { ?><li><a href="mailto:<?php echo get_option( 'ace_email' ); ?>" class="footer-email radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>>Email</a></li><?php } ?>
    </ul>
  </footer>
  <?php } ?>

  <p class="footer-copy" role="contentinfo">
    <?php if ( get_option( 'ace_footer_credit' ) == true ) { echo stripslashes( get_option( 'ace_footer_credit' ) ); } else { ?>&copy; <?php _e( 'Copyright','ace' ); ?> <a href="<?php echo esc_url( home_url() ); ?>" itemtype="copyrightHolder"><?php bloginfo( 'name' ); ?></a> <span itemtype="copyrightYear" content="<?php echo date( 'Y' ); ?>"><?php echo date( 'Y' ); ?></span>. <?php _e( 'Powered by','ace' ); ?> <a href="<?php echo esc_url( 'http://www.wordpress.org' ); ?>">WordPress</a>. <?php _e( 'Theme by','ace' ); ?> <a href="<?php echo esc_url( 'http://www.bluchic.com' ); ?>">BluChic</a><?php } ?>
  </p>

</footer><!-- .footer -->

</section><!-- .container -->
</section><!-- .wrap -->

<?php if( is_active_sidebar( 'footer-widget-instagram' ) ) : ?>
<footer class="footer-instagram" role="complementary">
  <?php dynamic_sidebar( 'footer-widget-instagram' ); ?>
</footer><!-- .footer-instagram -->
<?php endif; ?>

<?php echo ace_footer_scripts(); ?>

<?php wp_footer(); ?>

</body>
</html>