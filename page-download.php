<?php
   get_header();
?>

<?php  while ( have_posts() ) : the_post();   ?>



<section class="section_block section_block__download-hero background-image">
  <?php header_image(); ?>
       <div class="row">
           <div class="small-12 columns">
             <img class="brand" src="<?php bloginfo('stylesheet_directory'); ?>/images/brand/brand-s-hero-light.png" alt="" />
                <h1><strong>Eberick </strong> V10 Next </h1>
                <h5>Release 1.1 2016/06</h5>
               <a class="button btn-primary medium" href="#" role="button">
                 <i class="material-icons">file_download</i> Faça o download
                 <span class="toogle-buttom-download"><strong>Para executar a instalação</strong> </br> é necessário manter o Eberick fechado!</span>
               </a>
            </div>
      </div>
 </section>





<section class="section_block section_block__download-info">
  <div class="row">
         <div class="large-6 columns">
            <img src="http://placehold.it/600x300" class="img-responsive">
        </div>
        <div class="large-6 columns">
          <h3>Faça o Download</h3>
          <p> Caso você tenha optado por participar do Eberick V10 Next, você poderá fazer o download da instalação do programa, incluindo todos os novos recursos e melhorias.</p>
          <p>  A atualização para as revisões mais recentes ocorrem de forma automática, sendo que ao abrir o Eberick é emitido um aviso sobre uma nova atualização disponível. Você também pode fazer o download da nova atualização através do link abaixo </p>
          <a class="button btn-primary btn-large" href="#" role="button">Faça o download »</a>
        </div>
  </div>
</section>




<section class="section_block section_block__join">
  <div class="row">
         <div class="small-12 columns">
           <p> <span>Lorem ipsum dolor sit amet</span>  <a class="light button" href="<?php bloginfo( 'url' ); ?>/inscricao" role="button">Cadastre-se</a></p>
        </div>
  </div>
</section>




<?php endwhile; ?>



<?php get_footer(); ?>
