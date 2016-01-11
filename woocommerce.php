<?php get_header(); ?>

  <section class="section">
  <main role="main">

    <?php echo woocommerce_breadcrumb(); ?>

      <?php woocommerce_content(); ?>

  </main>
  </section><!-- .section -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>