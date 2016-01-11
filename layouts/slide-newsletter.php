<?php if ( get_option( 'ace_feature_enable' ) || get_option( 'ace_enable_newsletter' ) ) { echo '<section class="slider-newsletter">'; } ?>

  <?php if ( get_option( 'ace_feature_enable' ) && get_option( 'ace_enable_newsletter' ) ) { echo '<section class="responsiveslides-newsletter newsletter-half">'; } elseif ( get_option( 'ace_feature_enable' ) ) { echo '<section class="responsiveslides-newsletter">'; } elseif ( get_option( 'ace_enable_newsletter' ) ) {} ?>
    <?php echo ace_theme_newsletter(); ?>
  <?php if ( get_option( 'ace_feature_enable' ) && get_option( 'ace_enable_newsletter' ) ) { echo '</section>'; } elseif ( get_option( 'ace_feature_enable' ) ) { echo '</section>'; } elseif ( get_option( 'ace_enable_newsletter' ) ) {} ?>

  <?php if ( get_option( 'ace_feature_enable' ) && get_option( 'ace_enable_newsletter' ) ) { echo '<section class="responsiveslides-newsletter responsiveslides-half">'; } elseif ( get_option( 'ace_feature_enable' ) ) { echo '<section class="responsiveslides-newsletter">'; } elseif ( get_option( 'ace_enable_newsletter' ) ) {} ?>
    <?php echo ace_theme_slider(); ?>
  <?php if ( get_option( 'ace_feature_enable' ) && get_option( 'ace_enable_newsletter' ) ) { echo '</section>'; } elseif ( get_option( 'ace_feature_enable' ) ) { echo '</section>'; } elseif ( get_option( 'ace_enable_newsletter' ) ) {} ?>

<?php if ( get_option( 'ace_feature_enable' ) || get_option( 'ace_enable_newsletter' ) ) { echo '</section>'; } ?>