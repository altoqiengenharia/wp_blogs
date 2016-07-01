<?php
   get_header();
?>





<section class="section_block section_block__inscricao-hero background-image">
       <div class="row">
             <div class="large-8 large-centered columns">
               <i class="material-icons">library_books</i>
               <h1>Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit </h1>
               <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
                 <a class="button btn-primary large" href="#" role="button">Lorem ipsum dolor </a>
            </div>
      </div>
 </section>







 <section class="section_block section_block__inscricao-video">
   <div class="row">
     <div class="large-8 large-centered columns">
               <h2>Lorem ipsum dolor sit amet </h2>
               <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
               <p>  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
               <div class="flex-video widescreen">
               <iframe width="420" height="315" src="https://www.youtube.com/embed/IKaUJEidIUY" frameborder="0" allowfullscreen></iframe>
              </div>
         </div>
   </div>
 </section>



<section class="section_block section_block__inscricao-video1">
  <div class="row">
    <div class="large-8 large-centered columns">
              <h2>Lorem ipsum dolor sit amet </h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
        </div>
  </div>

  <div class="block-container-video1">
    <a href="#" class="block-container-video1__link" data-reveal-id="modal-presentation-iframewidth200height113srchttpswwwyoutubecomembedhhYlC1y8trkfeatureoembedframeborder0allowfullscreeniframe" style="background-image: url(http://www.altoqi.com.br/hotsite/wp-content/uploads/2016/03/qicloud_block-container-video.jpg) ; "> </a>
  </div>
</section>




<section class="section_block section_block__inscricao-panels">
        <div class="row" data-equalizer data-equalize-on="medium" id="test-eq">


          <?php
          // A Consulta
          query_posts( array(   'posts_per_page' => 3, 'orderby' => 'title', 'order' => 'DESC' ) );
          // O Loop
          while ( have_posts() ) : the_post();   ?>



              <div class="large-4 medium-6 columns">
                    <div class="inscricao-panels-card" data-equalizer-watch>
                      <div class="header">
                        <a href="<?php the_permalink(); ?>">  <?php  if ( has_post_thumbnail() ) { 	the_post_thumbnail(); }  ?> </a>
                      </div> <!--- // header -->
                      <div class="body">
                        <h5>  <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a> </h5>
                         <?php the_excerpt(); ?>
                       </div> <!--- // body -->
                    </div>
              </div>


               <?php  endwhile;
               // Redefinindo Consulta
               wp_reset_query();   ?>


        </div>
</section>





<section class="section_block section_block__inscricao-info">
  <div class="row">
         <div class="large-6 columns">
            <img src="http://placehold.it/600x300" class="img-responsive">
        </div>
        <div class="large-6 columns">
          <h3>Lorem ipsum dolor sit amet</h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <a class="button btn-primary btn-large" href="#" role="button">Lorem ipsum »</a>
        </div>
  </div>
</section>





<section class="section_block section_dark section_block__inscricao-formulario formulario">
      <div class="row">
        <div class="medium-8 medium-centered columns">
                  <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit </h2>
                  <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <?php echo do_shortcode( '[contact-form-7 id="1084" title="Formulário de contato"]' ); ?>

          </div>
      </div>

</section>






<section class="section_block section_block__join">
  <div class="row">
         <div class="small-12 columns">
           <p> <span>Lorem ipsum dolor sit amet</span>  <a class="light button" href="#cadastre-se" role="button">Cadastre-se</a></p>
        </div>
  </div>
</section>


<?php  while ( have_posts() ) : the_post();   ?>
<?php endwhile; ?>
<?php get_footer(); ?>
