
jQuery(function ($) {
				
		// DOM ready, take it away



		   $(document).ready(function() {

		      var owl = $("#noticias");

			  owl.owlCarousel({
			     
			      itemsCustom : [
			        [0, 1],
			        [450, 1],
			        [600, 1],
			        [700, 1],
			        [1000, 1],
			        [1200, 1],
	
			      ],
			      navigation : false,
			      loop:true,
				  autoPlay:true,
				  autoplayTimeout:5000
			 
			  });
		 
		    });

		   $(".abajo").click(function(e) {
            var strAncla=$("#enlaceshome");
            $('body,html').stop(true,true).animate({
                scrollTop: $(strAncla).offset().top
            },1000);
    });


		  $(document).ready(function() {

		      var owl = $("#fotossecc");

			  owl.owlCarousel({
			     
			      itemsCustom : [
			        [0, 1],
			        [450, 1],
			        [600, 1],
			        [700, 1],
			        [1000, 1],
			        [1200, 1],
	
			      ],
			      navigation : false,
			      loop:true,
				  autoPlay:true,
				  autoplayTimeout:5000
			 
			  });
		 
		    });

		   $(".abajo").click(function(e) {
            var strAncla=$("#enlaceshome");
            $('body,html').stop(true,true).animate({
                scrollTop: $(strAncla).offset().top
            },1000);
    });


			// Barra Top
/*				$(window).scroll(function()
		    		{
				     if ($(this).scrollTop() > 170){
				           $('#menutopmbScroll').css({"position":"fixed", "display":"block"});
			        	}
			        else {
			             $('#menutopmbScroll').css({"position":"fixed", "display":"none"});          
			        }

		    	});
*/
		    	
			// // Boton TOP
			// 	jQuery(document).ready(function($){
			// 		var offset = 300,
			// 			offset_opacity = 1200,
			// 			scroll_top_duration = 700,
			// 			$back_to_top = $('.cd-top');

			// 		$(window).scroll(function(){
			// 			( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
			// 			if( $(this).scrollTop() > offset_opacity ) { 
			// 				$back_to_top.addClass('cd-fade-out');
			// 			}
			// 		});

			// 		$back_to_top.on('click', function(event){
			// 			event.preventDefault();
			// 			$('body,html').animate({
			// 				scrollTop: 0 ,
			// 			 	}, scroll_top_duration
			// 			);
			// 		});

			// 	});

				


		
});//doc close
