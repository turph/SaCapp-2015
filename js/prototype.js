/*
$('.about, .splash-bttn', function(){
	$('html, body').animate({
	        scrollTop: $('#intro').offset().top - 90
	    }, 1000);
})

$('.work', function(){
	$('html, body').animate({
	        scrollTop: $('#work').offset().top
	    }, 1000);
})
*/

$(document).ready(function(){
   
   $("body").fadeIn(800);
/*    setTimeout(function(){ $(".splash-screen").fadeOut(); }, 2500); */
/*    $(".mobile-frame").css({"width" : $(window).width()}); */
   FastClick.attach(document.body);
   
   
   $('.upcoming-slider').slick({
	  infinite: false,
	  dots: false,
	  arrows: false,
	  swipeToSlide: true,
	  touchMove:true,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        variableWidth:true,
	        slidesToShow: 4,
	/*         infinite: true, */
	        centerPadding: '30px',
	        swipeToSlide: true,
	        touchMove:true,
	        swipe: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        variableWidth:true,
	        slidesToShow: 4,
	/*         infinite: true, */
	        centerPadding: '30px',
	        swipeToSlide: true,
	        touchMove:true,
	        swipe: true
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	      	initialSlide: 1,
		    centerMode: true,
	      	variableWidth:true,
	        slidesToShow: 1,
/* 	        infinite: true, */
	        centerPadding: '10px',
	        swipeToSlide: true,
	        touchMove:true,
	        swipe: true
	      }
	    }
	  ]
	});
});

/*
var coors = {
    x1: 0,
    x2: 0,
    x3: 0,
    y1: 0,
    y2: 0,
    y3: 0
}

var yThreshold = 40;

$(document).on('touchstart',function(e){

	coors.x1 = e.originalEvent.touches[0].clientX;
	coors.y1 = e.originalEvent.touches[0].clientY;
});



$(document).on('touchmove',function(e){
	coors.x2 = e.originalEvent.touches[0].clientX;
	coors.y2 = e.originalEvent.touches[0].clientY;

	if (Math.abs(coors.x1 - coors.x2) < 40 && Math.abs(coors.y1 - coors.y2) > 40) {
	
		if(coors.y2 > coors.y1){
			console.log('up');
			$('body').removeClass('x-hide-toolbar');
		}else if(coors.y2 < coors.y1 ){
			console.log('down');
			$('body').addClass('x-hide-toolbar');
		}
	}
});
*/



$(document).on("click", ".icon-search", function(){
	$(".header-container").slideToggle();
});

$(document).on("click",".shop-cats", function() {
	$(".shop-cats").fadeOut();
});

$(document).on("click", '.mode-collections', function() {
	$(".shop-cats").fadeToggle();
});

$(document).on("click",".browse-tab", function(){

	/* if ($(".mode-collections").html('Collections <img src="img/chevron_down.png" alt="chevron_down" width="12" height="12" style="display:inline-block;margin-bottom:-2px;"/>')) */
	if ($(this).hasClass("active-tab")){
			
	}
	else {
			$(".shop-tab").removeClass('active-tab');
			$(this).addClass('active-tab');
	/* 		$(window).scrollTop(0); */
			$(".steals-container, .steals-container2, .upcoming-container").css({"display": "none"});
			$(".collections-container").fadeIn();
			$(".pdp-container").fadeIn();
			$(".listing-container").fadeIn();
			$('body').removeClass('hide-toolbar');
	/* 		$(".shop-cats").css({"display":"none"}); */
			$(".back-nav").fadeIn();
		}
});

$(document).on("click", ".steal-tab", function(){
	$(".shop-tab").removeClass('active-tab');
	$(this).addClass('active-tab');
	$(window).scrollTop(0);
	$(".collections-container, .listing-container, .pdp-container, .upcoming-container").css({"display": "none"});
	$(".steals-container").fadeIn();
	$('body').removeClass('hide-toolbar');	
	$(".shop-mode, .back-nav").css({"display": "none"})
});

$(document).on("click", ".upcoming-tab", function(){
	$(".shop-tab").removeClass('active-tab');
	$(this).addClass('active-tab');
	$(window).scrollTop(0);
	$(".collections-container, .listing-container, .pdp-container, .steals-container").css({"display": "none"});
	$(".upcoming-container").fadeIn();
	$('body').removeClass('hide-toolbar');	
	$(".shop-mode, .back-nav").css({"display": "none"})
});

$(document).on("click", ".icon-settings, .icon-cart", function(){
	$(".content-tray").animate({
	    top: "25px"
    });

});

$(document).on("click", ".icon-settings, .icon-cart", function(){
	$(".content-tray").animate({
	    top: "0px"
    });

});

$(document).on("click", ".cart-tab", function(){
	$(".content-tray-title").html("Cart")
});

$(document).on("click", ".user-tab", function(){
	$(".modal-content").css({"display": "none"})
	$(".login-content").css({"display": "block"})
	$(".modal").fadeIn();
});

$(document).on("click", ".content-tray-close", function(){
	$(".content-tray").animate({
	    top: "120%"
    });
});

$(document).on("click", ".share", function(){
	var htmlString = $( this ).parent().find('h3').html();
	$(".share-content .modal-header .collection-string").html(htmlString);
	$(".modal-content").css({"display": "none"})
	$(".share-content").css({"display": "block"})
	$(".modal").fadeIn();
});

$(document).on("click", ".variant-selector", function(){
	console.log("blah blahabkljd")
	$(".modal-content").css({"display": "none"})
	$(".size-content").css({"display": "block"})
	$(".modal").fadeIn();
	
});


$(document).on("click", ".size-content .modal-bttn", function(){
	var htmlString = $( this ).html();
	$(".size-bttn").html(htmlString);
	$(".size-bttn").css({"border": "none",
							"background-color": "#f86c55",
							"color": "white"
							})
	$(".modal").fadeOut();
});

$(document).on("click", ".color-content .modal-bttn", function(){
	var htmlString = $( this ).html();
	$(".color-bttn").html(htmlString);
	$(".color-bttn").css({"border": "none",
							"background-color": "#f86c55",
							"color": "white"
							})
	$(".modal").fadeOut();
});

$(document).on("click", ".color-bttn", function(){
	$(".modal-content").css({"display": "none"})
	$(".color-content").css({"display": "block"})
	$(".modal").fadeIn();
});

$(document).on("click", ".size", function(){
	$(".modal-content").css({"display": "none"})
	$(".size-filter").css({"display": "block"})
	$(".modal").fadeIn();
});

$(document).on("click", ".brand", function(){
	$(".modal-content").css({"display": "none"})
	$(".brand-filter").css({"display": "block"})
	$(".modal").fadeIn();
});

$(document).on("click", ".gender", function(){
	$(".modal-content").css({"display": "none"})
	$(".gender-filter").css({"display": "block"})
	$(".modal").fadeIn();
});

$(document).on("click", ".modal-overlay, .modal-close", function(){
	$(".modal").fadeOut();
	return(false);
});

/*
$(document).on('click','a',function(e){
    $el = $(this).attr('href');
    if($el != '' && $el != '#'){
        $('body').load($el);
    }
});
*/

var pdpLink = $(".pdp-linker");
var plpLink = $(".plp-linker");

$(document).on("click", ".linker", function(){
	var loadLink = $(this).attr('title');
	$('body').removeClass('hide-toolbar');
	$(window).unload();
	$(".collections-container, .listing-container, .pdp-container, .upcoming-container, .back-nav ").css({"display": "none"})
	$(".loader").load(loadLink);
	$(window).scrollTop(0);
	$(".loader").fadeIn();
	return(false);
})


  
   var theForm = document.getElementById('theform');
			var theInput = document.getElementById('searchterm');
			
			theForm.onsubmit = function(e){
			    location = "search_results.php?id=" 
			                              + encodeURIComponent(theInput.value);
			    return false;
			};








