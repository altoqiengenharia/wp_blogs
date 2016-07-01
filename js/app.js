$(document).foundation();





$(".single .wp-caption").click(function(evt){
 				event.preventDefault();
        $(this).find('img').toggleClass('active');
				zoom.to({ element: this });
 });
