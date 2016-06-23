<?php get_header(); ?>

<div class="container-fluid">


<article class="posts">
 <div  class="row" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-item" }'>




<?php
if ( have_posts() ) {
 while ( have_posts() ) {
   the_post();  ?>


   <div class="grid-item col-xs-12  col-sm-6 col-md-4 col-lg-3">


   <section class="post__card">
       <div class="post__card--inner">
             <div class="post__card-header">
                 <?php if ( has_post_thumbnail() ) {	the_post_thumbnail();} ?>
             </div> <!-- //post__card-header -->
             <div class="post__card-body">
                 <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  </h2>
                 <span meta>Escrito por: <?php  the_author_posts_link() ?>  </span>
                  <?php  if (has_excerpt() ) { the_excerpt();  } ?>
                  <a href="<?php the_permalink(); ?>" type="button" class="btn btn-primary">Acesse</a>
             </div> <!-- //post__card-body -->
       </div>
   </section>
</div> <!-- //grid-item -->

<?php  	} // end while
} // end if
?>





</div> <!-- // .grid -->
</article>


</div>  <!-- container -->

<?php get_footer(); ?>
