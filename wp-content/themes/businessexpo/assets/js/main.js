(function(jQuery) { "use strict";
	
	//Serch
	jQuery('.header').on('click', '.search-toggle', function(e) {
	  var selector = jQuery(this).data('selector');

	  jQuery(selector).toggleClass('show').find('.search-input').focus();
	  jQuery(this).toggleClass('active');

	  e.preventDefault();          
	});
	
	
	//Menu On Hover
		
	jQuery('body').on('mouseenter mouseleave','.nav-item',function(e){
			if (jQuery(window).width() > 750) {
				var _d=jQuery(e.target).closest('.nav-item');_d.addClass('show');
				setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
				},1);
			}
	});	
	
	jQuery('.dropdown-submenu a').click(function() {

       jQuery('.dropdown-submenu').toggleClass('show');
		return false;
	});
		
	// Scroll to down anchor                
	jQuery(function() {
		jQuery('.scroll-down').click (function() {
		  jQuery('html, body').animate({scrollTop: jQuery('section.service').offset().top }, 'slow');
		  return false;
		});
	});
	
	/* ---------------------------------------------- /*
	* Scroll top
	/* ---------------------------------------------- */

	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 100) {
			jQuery('.page-scroll-up').fadeIn();
		} else {
			jQuery('.page-scroll-up').fadeOut();
		}
	});
	
	jQuery('.page-scroll-up').click(function () {
		jQuery("html, body").animate({
			scrollTop: 0
		}, 700);
		return false;
	});
	
	//Owl Carousel
	jQuery(document).ready(function() {
		
		 // Loader
			setTimeout(function() {
				jQuery('body').addClass('loaded');
			}, 3500);
				
		// Slider
		/* jQuery("#owl-main").owlCarousel({
	 
			navigation : false, // Show next and prev buttons	
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			smartSpeed: 800,			
			singleItem:true,
			loop:false, // loop is true up to 1199px screen.
			nav:true, // is true across all sizes
			margin:0, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 1,
			dots: true,
			navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]
		
		}); */

		jQuery("#owl-product").owlCarousel({
			
			navigation : true, // Show next and prev buttons	
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			smartSpeed: 800,			
			singleItem:true,
			rewind:true, // loop is true up to 1199px screen.
			nav:true, // is true across all sizes
			margin:15, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 3,
			dots: true,
			 responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:4
				}
			},
			navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]
		
		});		
		
		// Testimonial
		jQuery("#owl-testimonial").owlCarousel({
	 
			navigation : false, // Show next and prev buttons	
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: false,
			smartSpeed: 800,			
			singleItem:true,
			loop:false, // loop is true up to 1199px screen.
			nav:false, // is true across all sizes
			margin:15, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 2,
			dots: false,
			mouseDrag: false,
			responsive:{
				100:{ items:1 },
				480:{ items:1 },
				768:{ items:2 },
				1000:{ items:2 }
			},
			navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]
		
		});
		
	});
	
 })(jQuery);