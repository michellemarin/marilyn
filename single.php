<?php get_header(); ?>

  <?php if ( get_post_meta( $post->ID, 'ace_wide', true ) ) { echo '<section class="section-wide">'; } else { echo '<section class="section">'; } ?>
  <main role="main" itemprop="mainContentOfPage">

    <?php echo ace_breadcrumb(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; else: get_template_part( 'content', 'none' ); endif; ?>

  </main>
  </section><!-- .section -->

  <?php if (get_post_meta($post->ID, 'ace_wide', true)) {} else { echo get_sidebar(); } ?>

<?php get_footer(); ?>