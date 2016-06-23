<?php
   get_header();
?>

<?php  while ( have_posts() ) : the_post();   ?>



<section class="section_block section_block__download-hero">
       <div class="row">
           <div class="small-12 columns">
               <h1> Eberick V10 Next Release 1s</h1>
               <h5>(Atualização 2016-04)</h5>
               <p> Para executar a instalação é necessário manter o Eberick fechado. <br> <strong>Importante.</strong> Esta é uma atualização apenas para </p>
               <a class="button btn-primary btn-large" href="#" role="button">Faça o download</a>
            </div>
      </div>
 </section>








<section class="section_block section_block__download-info">
  <div class="row">
         <div class="medium-7 columns">
            <img src="http://placehold.it/700x300" class="img-responsive">
        </div>
        <div class="medium-5 columns">
          <h3>Faça o Download</h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <a class="button btn-primary btn-large" href="#" role="button">Faça o download »</a>
        </div>
  </div>
</section>


<section class="section_block section_block__download-join">
  <div class="row">
         <div class="small-12 columns">
           <p> <span>Lorem ipsum dolor sit amet</span>  <a class="button btn-primary" href="#cadastre-se" role="button">Cadastre-se</a></p>
        </div>
  </div>
</section>

<?php endwhile; ?>



<?php get_footer(); ?>
