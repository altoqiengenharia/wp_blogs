<?php get_header(); ?>


<article class="single">

 <?php if ( has_post_format( 'video' )) { ?>
   <section class="section_block single__hero single__hero--video">
           <div class="row">
              <div class="small-12 columns">
                <?php if ( has_post_format( 'video' )) { ?>
                     <div class="single__post-video">
                        <div class="flex-video widescreen">
                                       <?php
                                      /* get iframe HTML */ $iframe = get_field('acf_post__video_youtube');

                                      /* use preg_match to find iframe src */
                                      preg_match('/src="(.+?)"/', $iframe, $matches);
                                      $src = $matches[1];

                                      // add extra params to iframe src
                                      $params = array(
                                          'controls'    => 1,
                                          'hd'        => 1,
                                          'autohide'    => 1
                                      );

                                      $new_src = add_query_arg($params, $src);
                                      $iframe = str_replace($src, $new_src, $iframe);

                                      // add extra attributes to iframe html
                                      $attributes = 'frameborder="0"';
                                      $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                                      // echo $iframe
                                      echo $iframe;
                                      ?>
                      </div> <!-- //flex-video widescreen -->

                      <h2 class="single__post-body__title"><?php the_title(); ?></h2>
                      <?php if (has_excerpt() ) { ?>  <span class="single__post-body__excerpt"><?php the_excerpt(); ?></span> <?php } ?>

                  </div> <!-- //post__card-video -->
                 <?php  } /*has_post_format( 'video' ) */?>


                     <?php if ( ! has_post_format( 'video' ) ) {  ?>
                           <img class="brand" src="<?php bloginfo('stylesheet_directory'); ?>/images/brand/brand-s-hero-light.png" alt="" />
                           <h1><strong>Eberick </strong> V10 Next </h1>
                           <h5>Blog de desenvolvimento colaborativo</h5>
                     <?php } ?>

                </div> <!-- //small-12 columns -->
         </div>
    </section>
 <?php  } /* end has_post_format( 'video' ) */ else { ?>
    <section class="section_block single__hero single__hero--post">
          <div class="row">
               <div class="small-12 columns">
                      <img class="brand" src="<?php bloginfo('stylesheet_directory'); ?>/images/brand/brand-s-hero-light.png" alt="" />
                      <h1><strong>Eberick </strong> V10 Next </h1>
                      <h5>Blog de desenvolvimento colaborativo</h5>
                 </div> <!-- //small-12 columns -->
          </div>
     </section>
  <?php  } // end !has_post_format( 'video' ) ?>





<div class="row">
<div class="small-12 columns grid-small">
      <?php
      if ( have_posts() ) {
       while ( have_posts() ) {
         the_post();  ?>


           <section class="single__post">
               <div class="single__post--inner">

                            <?php if ( ! has_post_format( 'video' )) { ?>
                                   <div class="single__post-body">
                                       <h2 class="single__post-body__title"><?php the_title(); ?></h2>
                                       <?php if (has_excerpt() ) { ?>  <span class="single__post-body__excerpt"><?php the_excerpt(); ?></span> <?php } ?>
                                       <span class="single__post-body__meta-author">Escrito em <?php the_time('d \d\e M \d\e Y');?>  por: <?php  the_author_posts_link() ?>  </span>
                                        <?php  the_content(); ?>
                                        <?php
                                        // Get Author Data
                                        $author             = get_the_author();
                                        $author_description = get_the_author_meta( 'description' );
                                        $author_url         = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
                                        $author_avatar      = get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'wpex_author_bio_avatar_size', 80 ) );

                                        // Only display if author has a description
                                        if ( $author_description ) : ?>
                                        <footer class="single__post__meta-author" >
                                            <div class="single__post__meta-author__info">
                                                <div class="single__post__meta-author__info-inner">
                                                    <?php if ( $author_avatar ) { ?>
                                                        <div class="single__post__meta-author__info-avatar ">
                                                            <a href="<?php echo $author_url; ?>" rel="author">
                                                                <?php echo $author_avatar; ?>
                                                            </a>
                                                        </div><!-- .author-avatar -->
                                                    <?php } ?>
                                                    <div class="single__post__meta-author__info-description">
                                                      <h4 class="single__post__meta-author__info-heading"><span><?php printf( __( 'Escrito por %s', 'text_domain' ), $author ); ?></span></h4>
                                                        <p><?php echo $author_description; ?></p>
                                                        <p><a href="<?php echo $author_url; ?>" title="<?php _e( 'Veja todos os posts', 'text_domain' ); ?>"><?php _e( 'Veja todos os posts', 'text_domain' ); ?> &rarr;</a></p>
                                                    </div><!-- .author-description -->
                                                </div><!-- .author-info-inner -->
                                            </div><!-- .author-info -->
                                            </footer> <!-- //single__post__meta-author -->
                                        <?php endif; ?>
                                    </div> <!-- //post__card-body -->
                            <?php  } /*has_post_format( 'video' ) */?>

                            <?php if ( is_single() && comments_open() ) { ?>
                            <div class="single__post-comments">
                                  <h3> Comentários</h3>
                                  <?php comments_template(); ?>
                            </div> <!-- //post__card-comments -->
                            <?php } ?>
                      </div>
                  </section>

          <?php  	} /* end while */   } /* end if */ ?>

  </div> <!-- //small-12 columns -->
</div> <!-- // row -->
</article>



<?php get_footer(); ?>
