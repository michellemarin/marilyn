<?php get_header(); ?>

  <section class="section">
  <main role="main" itemprop="mainContentOfPage">

    <?php echo ace_breadcrumb(); ?>

    <article class="article" itemscope itemtype="http://schema.org/Article">

      <header class="post-header">
        <h1 class="post-title" itemprop="headline"><?php _e( 'Error 404 - Not Found','ace' ); ?></h1>
      </header>

      <article class="post-content" itemprop="text">

        <p><?php if ( get_option( 'ace_404_page' ) == true ) { echo stripslashes( get_option( 'ace_404_page' ) ); } else { echo _e( '404 Not Found','ace' ); } ?></p>

        <?php get_search_form();?>

        <section class="split-columns">
        <article class="left">
          <h3><?php _e( 'Archives by month:','ace' ); ?></h3>
          <ul>
            <?php wp_get_archives( 'type=monthly' ); ?>
          </ul>
        </article>
        <article class="right">
          <h3><?php _e( 'Archives by category:','ace' ); ?></h3>
          <ul>
            <?php wp_list_categories( 'sort_column=name' ); ?>
          </ul>
        </article>
        </section>

      </article><!-- .post-content -->

    </article><!-- .article -->

  </main>
  </section><!-- .section -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>