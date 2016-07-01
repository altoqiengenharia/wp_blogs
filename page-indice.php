<?php
   get_header();
?>

<?php  while ( have_posts() ) : the_post();   ?>



<section class="section_block section_block__indice__hero background-image">
        <div class="row">
           <div class="small-12 columns">
                 <h1><strong>Índice </strong> de publicações </h1>
               <h5>Eberick V10</h5>
            </div>
      </div>
 </section>

<section class="section_block__indice">
   <div class="row">
    <div class="small-12 columns">


   Esta seção contém as notícias publicadas no blog e a relação completa dos recursos que já foram incluídos no AltoQi Eberick Next, classificados por Release e Categoria. Clique sobre os links abaixo para saber mais detalhes sobre cada recurso do programa.




<?php
//registra releases

foreach( get_terms( 'release', array( 'hide_empty' => false, 'parent' => 0 ) ) as $parent_term ) {
 echo $parent_term->slug;
}?>












<ul class="section_block__indice__accordion accordion" data-accordion >
  <!-- <li class="section_block__indice__accordion__item accordion-item is-active" data-accordion-item>
     <a href="#" class="section_block__indice__accordion__item__title accordion-title"> Release 01 </a>
     <div class="section_block__indice__accordion__item__content accordion-content" data-tab-content>
           <ul class="section_block__indice__accordion__item__content__list-posts">
             <li><a href="http://eberickv10next.altoqi.com.br/novos-recursos/cadastro-de-cargas-tipicas-em-lajes/">Cadastro de cargas típicas para lajes</a></li>
             <li><a href="http://eberickv10next.altoqi.com.br/novos-recursos/resumo-custos-estrutura/">Relatório de custos da estrutura – Parte 01</a></li>
             <li><a href="http://eberickv10next.altoqi.com.br/melhorias-em-recursos/croqui-acima-e-croqui-abaixo-planilhas-de-dimensionamento/">Comandos "Pavimento acima" e "Pavimento abaixo" nas planilhas de dimensionamento</a></li>
             <li><em><a href="http://eberickv10next.altoqi.com.br/novos-recursos/cadastro-de-elementos-genericos-parte-01/">Cadastro de elementos genéricos (em desenvolvimento)</a></em></li>
           </ul>
     </div>
   </li> -->


   <!-- <li class="section_block__indice__accordion__item accordion-item" data-accordion-item>
      <a href="#" class="section_block__indice__accordion__item__title accordion-title"> Release 02 (em desenvolvimento)  </a>
      <div class="section_block__indice__accordion__item__content accordion-content" data-tab-content>
            <ul class="section_block__indice__accordion__item__content__list-posts">
              <li><a href="http://eberickv10next.altoqi.com.br/novos-recursos/otimizacao-da-secao-das-vigas-parte-1/">Otimização da seção das vigas - Parte 1</a></li>
              <li><a href="http://eberickv10next.altoqi.com.br/novos-recursos/relatorio-de-status-dos-elementos/">Status de dimensionamento do elementos</a></li>
              <li><a href="http://eberickv10next.altoqi.com.br/melhorias-em-recursos/reducao-de-ate-90-no-tempo-de-processamento-dos-pilares/">Redução de até 90% no tempo de processamento dos pilares</a></li>
            </ul>
      </div>
    </li> -->

   <li class="section_block__indice__accordion__item accordion-item" data-accordion-item>
      <a href="#" class="section_block__indice__accordion__item__title accordion-title"> Notícias </a>
      <div class="section_block__indice__accordion__item__content accordion-content" data-tab-content>
             <ol class="section_block__indice__accordion__item__content__list-posts">
               <?php
                   $lastnews_query = new WP_Query( array (
                   'category_name' => 'noticias',
                   'posts_per_page' => -1 ,
                   'order' => 'ASC'
                 )); // exclude category
                   while($lastnews_query->have_posts()) : $lastnews_query->the_post(); ?>
                      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                  <?php endwhile;  wp_reset_postdata(); ?>
              </ol>
       </div>
     </li>

   <!-- <li class="section_block__indice__accordion__item accordion-item" data-accordion-item>
      <a href="#" class="section_block__indice__accordion__item__title accordion-title">   Enquete </a>
      <div class="section_block__indice__accordion__item__content accordion-content" data-tab-content>
                <ul class="section_block__indice__accordion__item__content__list-posts">
                  <li><a href="http://eberickv10next.altoqi.com.br/noticias/vote-na-enquete/">Vote na enquete!</a></li>
                </ul>
        </div>
      </li> -->

</ul>








    </div> <!-- //small-12 columns -->
  </div> <!-- //row -->
</section>

<?php endwhile; ?>



<?php get_footer(); ?>
