<?php get_header(); ?>

  <section class="section">
  <main role="main" itemprop="mainContentOfPage">

    <?php if ( have_posts() ) : ?>
  
      <h2 class="pagetitle"><?php _e( 'Searching for','ace' ); ?> &quot;<?php the_search_query(); ?>&quot;</h2>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; ?>

      <?php echo ace_get_pagination_links(); ?>

    <?php else : get_template_part( 'content', 'none' ); endif; ?>

  </main>
  </section><!-- .section -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>