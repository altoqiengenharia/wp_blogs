<?php get_header(); ?>


<?php   $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>


<section class="section_block section_block__author-hero background-image">
        <div class="row">
           <div class="small-12 columns">
                <img class="brand" src="<?php bloginfo('stylesheet_directory'); ?>/images/brand/brand-s-hero-light.png" alt="" />
                <h1><strong> <?php echo $curauth->display_name; ?></strong>  </h1>
                <h5>Autor do Blog de desenvolvimento colaborativo</h5>
            </div>
      </div>
 </section>









<div class="container-fluid">


<article class="posts">
 <div  class="row" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-item" }'>

<?php
if ( have_posts() ) {
 while ( have_posts() ) {
   the_post();  ?>


   <div class="grid-item small-12  medium-6 large-4 columns">
     <section class="post__card">
       <div class="post__card--inner">
             <div class="post__card-header">
               <?php if ( has_post_thumbnail() ) {  ?>
                 <a href=" <?php the_permalink() ?>"><?php the_post_thumbnail(); ?> </a>
              <?php } ?>

             </div> <!-- //post__card-header -->
             <div class="post__card-body">
                 <h2 class="post__card__title"> <a  class="post__card__title__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  </h2>
                   <?php  if (has_excerpt() ) { the_excerpt();  } ?>
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
