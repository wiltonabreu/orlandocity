$(document).ready(function(){

	$("#logotipo").on("mouseover",function(){
		
		$("#banner h1").addClass("efeito");

	}).on("mouseout", function(){

		$("#banner h1").removeClass("efeito");

	});

	$("#input-search").on("focus", function(){

		$("li.search").addClass("ativo");

	}).on("blur", function(){

		$("li.search").removeClass("ativo");				

	});

	$(".thumbnails").owlCarousel({
 
      
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true,
	            loop: true
	        },
	        600:{
	            items:3,
	            nav:false,
	            loop: true
	        },
	        1000:{
	            items:4,
	            nav:true,
	            loop:true
	        }
	    }
 
  	});

	var owl = $(".thumbnails");
	owl.owlCarousel();

	$('#btn-news-next').click(function() {
	    owl.trigger('next.owl.carousel');
	});

	// Go to the previous item
	$('#btn-news-prev').click(function() {
	    // With optional speed parameter
	    // Parameters has to be in square bracket '[]'
	    owl.trigger('prev.owl.carousel', [300]);
	});

});