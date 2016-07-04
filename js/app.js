$(document).foundation();





$(".single .wp-caption").click(function(evt){
 				event.preventDefault();
        $(this).find('img').toggleClass('active');
				zoom.to({ element: this });
 });




//galeria no post
 $(document).ready(function(){

   var owl = $('.gallery');
   owl.addClass(" owl-carousel  owl-theme ");

   owl.owlCarousel({
     items:1,
      autoHeight:true,
      itemElement:"figure",

   });

 });



 //Todos os iframes em responsivos
  $(document).ready(function(){
      $(".single__post-body iframe").wrap( "<div class='flex-video widescreen'></div>" );
  });
