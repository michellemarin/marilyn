    <article <?php post_class( 'article hentry' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <section class="post-category"><?php the_category( '&nbsp;' ); ?></section>

      <?php if ( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h2 class="post-title entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>" rel="<?php esc_attr_e( 'bookmark','ace' ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </header>
      <?php } ?>

      <article class="post-content" itemprop="text">

        <?php if ( get_option( "ace_enable_post_thumbnail" ) ) { ?>

          <?php if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'post_thumb', array( 'class'=>'alignleft' ) ); ?></a>
          <?php } ?>

        <?php } ?>

        <?php if ( get_option( "ace_enable_excerpt" ) ) { echo the_excerpt(); } else { echo the_content(); } ?>

      </article><!-- .post-content -->

      <footer class="post-meta">
        <span class="post-date"><time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>" itemprop="datePublished" class="updated"><?php the_time( get_option( 'date_format' ) ); ?></time></span>
        <?php if ( function_exists( 'ace_post_author' ) ) { echo ace_post_author(); } ?>
        // <span class="post-comment"><?php comments_popup_link( __( '0 comment','ace' ), __( '1 Comment','ace' ), __( '% Comments','ace' ) ); ?></span>
      </footer><!-- .post-meta -->

    </article><!-- .article -->