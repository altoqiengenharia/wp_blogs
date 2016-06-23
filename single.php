<?php get_header(); ?>

<div class="container">



<article class="posts">
 <div  class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-item" }'>

<?php
if ( have_posts() ) {
 while ( have_posts() ) {
   the_post();  ?>

   <section class="post__card">
       <div class="post__card--inner">
             <div class="post__card-header">
                 <?php if ( has_post_thumbnail() ) {	the_post_thumbnail();} ?>
             </div> <!-- //post__card-header -->
             <div class="post__card-body">
                 <h2><?php the_title(); ?></h2>
                 <span meta>Escrito por: <?php  the_author_posts_link() ?>  </span>
                  <?php   the_content(); ?>
              </div> <!-- //post__card-body -->
       </div>
   </section>

<?php  	} // end while
} // end if
?>





</div> <!-- // .grid -->
</article>


</div>  <!-- container -->

<?php get_footer(); ?>
