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

var liczba = 0;


$('#logo').click(function(){
	if( liczba !== 0){
	liczba = 0;
	 console.log("reset" + liczba);
	}
	});

$('.navbar').on('activate.bs.scrollspy', function (event) {
  
  if( liczba == 0){
  liczba += 1;
  $("#sekcja1, #sekcja2, #sekcja3, #sekcja4, #sekcja5").css({"padding-top":"300px"});
  } else {
	  $("#sekcja1, #sekcja2, #sekcja3, #sekcja4, #sekcja5").css({"padding-top":"15vh"});
  }
  //console.log(event);
  
  
  
  
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

	}


function animSekcja2(){
	console.log("sekcja 2");

	}


function animSekcja3(){
	console.log("sekcja 3");

	}

function animSekcja4(){
	console.log("sekcja 4");

	}


$("#sekcja1 img").hide();



var wstep = document.getElementById("wstep").offsetHeight;
var dzial1 = document.getElementById("sekcja1").offsetHeight;
var dzial2 = document.getElementById("sekcja2").offsetHeight;
var dzial3 = document.getElementById("sekcja3").offsetHeight;
var dzial4 = document.getElementById("sekcja4").offsetHeight;

var eleBody = document.getElementById("tbody");
window.addEventListener('scroll',monitor,true);

var punkt1 = 0 ;

function monitor(e){
	
	if( eleBody.scrollTop < 650 ){
		
		if( punkt1 != 0){
			punkt1 = 0;
			$("#sekcja1 img").hide(1000);
			console.log("ukryj");
			}

		}
		
	if( (eleBody.scrollTop > 600) && (eleBody.scrollTop < 1700) ){
		
		if( punkt1 == 0){
			punkt1 = 1;
			$("#sekcja1 img").show(1000);
			console.log("pokaz");
			}
		
		}
	//console.log("aaa");
	//console.log(eleBody.scrollTop);
	//console.log( " :wstep - " + wstep + " :1 - " + dzial1 + " :2 - " + dzial2 + " :3 - " + dzial3 + " :4 -" + dzial4 );
	
	
	}

/*
wstep - 650 
1 - 1100 
2 - 1100 
3 - 1100 
4 -1100
*/




	
})(jQuery);