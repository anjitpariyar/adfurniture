$(document).ready(function(){
	if($(window).width()>=778){
		$(function(){
			$(".product-image .owl-carousel img").imagezoomsl({
			});
		});
	}
	$('.product-image .owl-carousel').owlCarousel({
		autoplay:false,
		autoplaySpeed:7000,
		slideSpeed:3000,
		margin:0,
		nav:true,
		navText: false,
		dots:true,
		items:1,
		rewind:false,
		responsiveClass:true,
		responsive:{
			0:{
				mouseDrag:false,
				nav:false,
				autoplaySpeed:3000,
				slideSpeed:1000,
				
			},
			524:{
				nav:false,
				center:false,
			},
			768:{
				mouseDrag:true,
			},
		}
	});

	$('.product-image .owl-carousel .owl-dot').hover(function() {
		$(this).click();
	});

	$(".products-wrapper .form input").focus(function(){
		var elem = $(this);
   		
   		elem.data('oldVal', elem.val());

   		elem.bind("propertychange change click keyup input paste", function(event){
      	if (elem.data('oldVal') != elem.val()) {
       		elem.data('oldVal', elem.val());

       	// Do action
       	if(elem.val() < 1){
       		elem.val('1');
       	}


       }
   });


   	});

	$('[data-fancybox="gallery"]').fancybox({
		// Options will go here
	});


});

// vanella js
// if(window.innerWidth<778){
// 	var images= document.querySelectorAll('img.img');
// 	function toggleFullScreen(index) {
// 		if (!document.fullscreenElement) {
// 			images[index].requestFullscreen();
// 		} else {
// 			if (document.exitFullscreen) {
// 				document.exitFullscreen(); 
// 			}
// 		}
// 	}
// 	images.forEach(hello= (image, index)=>{
// 		image.addEventListener("dblclick", ()=> {
// 			toggleFullScreen(index);
// 		});
// 	});
	
// }

