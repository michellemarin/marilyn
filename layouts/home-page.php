<?php
/*
Template Name: Home
*/
get_header(); ?>

  <?php if ( get_post_meta( $post->ID, 'ace_wide', true ) ) { echo '<section class="section-wide">'; } else { echo '<section class="section">'; } ?>
  <main role="main">

    <?php echo ace_breadcrumb(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article <?php post_class( 'article' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <header class="post-header">
        <h1 class="post-title entry-title" itemprop="name"><?php the_title(); ?></h1>
      </header>
 
      <div class="post-content">

        <?php the_content(); ?>

        <?php echo ace_get_link_pages() ?>

        <?php comments_template( '/comments.php',true ); ?>

      </div><!-- .post-content -->

    </article><!-- .article -->

    <?php endwhile; endif; ?>

  </main>
  </section><!-- .section -->

  <?php if ( get_post_meta( $post->ID, 'ace_wide', true ) ) {} else { echo get_sidebar(); } ?>

  <?php if ( is_active_sidebar( 'featured-widget' ) ) : ?>
  <section class="home-widgets" role="complementary">
    <?php dynamic_sidebar( 'featured-widget' ); ?>
  </section><!-- .aside -->
  <?php endif; ?>

<?php get_footer(); ?>