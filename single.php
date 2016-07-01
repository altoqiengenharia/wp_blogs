<?php get_header(); ?>


<article class="single">

  <section class="section_block single__hero  <?php if ( has_post_format( 'video' )) { echo "single__hero--video"; } ?> ">
          <div class="row">
             <div class="small-12 columns">
               <?php if ( has_post_format( 'video' )) { ?>
                    <div class="single__post-video">
                       <div class="flex-video widescreen">
                                      <?php

                                     // get iframe HTML
                                     $iframe = get_field('acf_post__video_youtube');

                                     // use preg_match to find iframe src
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

               </div>
        </div>
   </section>





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
                               <span class="single__post-body__meta-author">Escrito por: <?php  the_author_posts_link() ?>  </span>
                                <?php   the_content(); ?>
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
