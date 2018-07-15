(function( $ ) {

  $('body').scrollspy({target: ".navbar", offset: 0});   

  $("#hamburger").click(function(){
		$(".navbar").toggleClass("wysuw");
		$("#hamburger").toggleClass("glyphicon-remove-circle");
		})


	  
  $("#myNavbar a").on('click', function(event) {
		
		event.preventDefault();
		var hash = this.hash;
		
		$('html, body').animate({
		  	scrollTop: $(hash).offset().top
			}, 800, function(){
		  		window.location.hash = hash;
		  		$(".navbar").removeClass("wysuw");
				$("#hamburger").removeClass("glyphicon-remove-circle");
		});
  });
  $(".powrot a").on('click',function(event){
		event.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
		  	scrollTop: $(hash).offset().top
			}, 800, function(){
		  		window.location.hash = hash;
				$(".navbar").removeClass("wysuw");
				
		});
	});  
	/*
	obsługa zwijania menu
	*/
 
	$("#navMenu").click(function(){
	 $("#myNavbar").slideToggle("slow");
	 });



$('.navbar').on('activate.bs.scrollspy', function (event) {
  

  
/*$("#areo").hide(1000); 
$("#sekcja2 img.obrazek2").hide(1000); 
$("#sekcja3 img.obrazek2").hide(1000); 
$("#sekcja4 img").hide(1000);  */
  
  var ele = event.target.firstChild.id;

  switch(ele){
	  
	  case 's0':
	  animSekcja0();
	  break;
	  
	  case 's1':
	  animSekcja1();
	  break;
	  
	  case 's2':
	  animSekcja2();
	  break;
	  
	  case "s3":
	  animSekcja3();
	  break;
	  
	  case "s4":
	  animSekcja4();
	  break;	  
	  	  
	  }
})

	
function animSekcja1(){
	console.log("sekcja 1");
	/*$("#areo").show(1000);
	$("#sekcja2 img.obrazek2").hide(1000);
	$("#sekcja3 img.obrazek2").hide(1000);
	$("#sekcja4 img").hide(1000);*/

	}


function animSekcja2(){
	console.log("sekcja 2");
	/*$("#sekcja2 img.obrazek2").show(1000);
	$("#areo").hide(1000);
	$("#sekcja3 img.obrazek2").hide(1000);
	$("#sekcja4 img").hide(1000);*/

	}


function animSekcja3(){
	console.log("sekcja 3");
	/*$("#sekcja3 img.obrazek2").show(1000);
	$("#areo").hide(1000);
	$("#sekcja2 img.obrazek2").hide(1000);
	$("#sekcja4 img").hide(1000);*/

	}

function animSekcja4(){
	console.log("sekcja 4");
	/*$("#sekcja4 img").show(1000);
	$("#areo").hide(1000);
	$("#sekcja2 img.obrazek2").hide(1000);
	$("#sekcja3 img.obrazek2").hide(1000);*/

	}










	
})(jQuery);