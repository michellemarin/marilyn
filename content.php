    <article <?php post_class( 'article hentry' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <section class="post-category"><?php the_category( '&nbsp;' ); ?></section>

      <?php if ( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h2 class="post-title entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>" rel="<?php esc_attr_e( 'bookmark','ace' ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </header>
      <?php } ?>

      <article class="post-content" itemprop="text">

        <?php the_content(); ?>

        <?php echo ace_get_link_pages() ?>

        <?php if ( function_exists( 'ace_post_author_bio' ) ) { echo ace_post_author_bio(); } ?>

        <footer class="post-meta">
          <span class="post-date"><time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>" itemprop="datePublished" class="updated"><?php the_time( get_option( 'date_format' ) ); ?></time></span>
          <?php if ( function_exists( 'ace_post_author' ) ) { echo ace_post_author(); } ?>
          // <span class="post-comment"><?php comments_popup_link( __( '0 comment','ace' ), __( '1 Comment','ace' ), __( '% Comments','ace' ) ); ?></span>
        </footer><!-- .post-meta -->

        <footer class="post-footer">
          <ul class="footer-navi">
            <?php previous_post_link( '<li class="previous" rel="prev">&laquo; %link</li>' ); ?>
            <?php next_post_link( '<li class="next" rel="next">%link &raquo;</li>' ); ?>
          </ul>
            <?php if ( get_option( 'ace_enable_related' ) ) { get_template_part( 'layouts/related' ); } ?>
        </footer><!-- .post-footer -->

        <?php comments_template( '/comments.php',true ); ?>

      </article><!-- .post-content -->

    </article><!-- .article -->