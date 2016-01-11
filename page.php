<?php get_header(); ?>

  <?php if ( get_post_meta( $post->ID, 'ace_wide', true ) ) { echo '<section class="section-wide">'; } else { echo '<section class="section">'; } ?>
  <main role="main" itemprop="mainContentOfPage">

    <?php echo ace_breadcrumb(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article <?php post_class( "article" ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <?php if ( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h1 class="post-title entry-title" itemprop="headline"><?php the_title(); ?></h1>
      </header>
      <?php } ?>
 
      <article class="post-content" itemprop="text">

        <?php the_content(); ?>

        <?php echo ace_get_link_pages() ?>

        <?php comments_template( '/comments.php',true ); ?>

      </article><!-- .post-content -->

    </article><!-- .article -->

    <?php endwhile; endif; ?>

  </main>
  </section><!-- .section -->

  <?php if ( get_post_meta( $post->ID, 'ace_wide', true ) ) {} else { echo get_sidebar(); } ?>

<?php get_footer(); ?>