
$(document).ready(function(){
	$('.sidenav').sidenav({
		'edge':'right',
	});
	$('.main-nav form .label-icon').click(function(){
		$(this).parent().find('#search').addClass('active');
	});
	// owl carousel
	$('.home .owl-carousel').owlCarousel({
		autoplay:false,
		autoplaySpeed:7000,
		slideSpeed:3000,
		margin:0,
		nav:true,
		rewind:true,
		navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
		dots:true,
		items:1,
		responsiveClass:true,
		responsive:{
			0:{
				mouseDrag:false,
				nav:false,
				autoplay:true,
				autoplaySpeed:3000,
				slideSpeed:1000,
				rewind:false,
			},
			524:{
				nav:false,
				center:false,
			},
			768:{
				mouseDrag:true,
				nav:true,
				dots:true,
				stagePadding:0,
				autoplay:false,
				autoplaySpeed:7000,
				slideSpeed:3000,
				rewind:true,
			},
		}
	});
	$('.index .category .hassubmenu').click(function(){
		$(this).find('.submenu').slideToggle();
	});
	$('.category .hassubmenu .submenulink').click(function(e){
		e.preventDefault();
	})

	// best seller
	$('.best .owl-carousel').owlCarousel({
		autoplay:false,
		autoplaySpeed:7000,
		slideSpeed:3000,
		margin:0,
		nav:true,
		rewind:true,
		navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
		dots:false,
		items:1,
		responsiveClass:true,
		responsive:{
			0:{
				stagePadding:15,
			},
			600:{
				stagePadding:0,

			},
		}
	});

});
