jQuery(function($) {	
	// Main Slider
	var owlMainSlider = $('.home-slider');
	owlMainSlider.owlCarousel({
		items: 1,
		autoplay: true,
        autoplayTimeout: 9000,
        loop: true,
		dots: true,
		nav: false,
		smartSpeed: 800,
		
	});
	
	var owlTestimonial = $(".testimonial-carousel");
	owlTestimonial.owlCarousel({
		items: 1,
		center: true,
		loop: true,
		dots: false,
		nav: true,
		navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
		autoplay: false,
		autoplayTimeout: 3000,
		smartSpeed: 1000,
		thumbs: true,

		// // When only using images in your slide (like the demo) use this option to dynamicly create thumbnails without using the attribute data-thumb.
		// thumbImage:false,

		// // Enable this if you have pre-rendered thumbnails in your html instead of letting this plugin generate them. This is recommended as it will prevent FOUC
		thumbsPrerendered: true,

		// // Class that will be used on the thumbnail container
		thumbContainerClass: 'owl-thumbs',

		// // Class that will be used on the thumbnail item's
		thumbItemClass: 'owl-thumb-item'       
	});
	
	function mationtext(){	
		$('.mation-text').owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			dots:false,
			items:1,
			autoplay:true,
			autoplayTimeout:5000
		});
	}
	mationtext();
	

	var owlTestimonial = $(".button-tabs");
	owlTestimonial.owlCarousel({
		items : 1,
		center: true,
		loop: true,
		dots:false,
		nav:false,            
		navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
		// autoplay:true,
		// autoplayTimeout: 3000,
		smartSpeed: 1000,
		responsive: {
			0: {
				items: 3
			},
			768: {
				items: 3
			},
			992: {
				items: 3
			}
		}
	}); 

	// Tab controller

	var owl = $(".testimonial-carousel");
	owl.owlCarousel();
	var i = 0;
	// ! The buttons must have and ID=tab+number
	var tab = "#tab";

	for (i; i <= 14; i++) {
		(function(j) {
			$(tab + j).click(function() {
				owl.trigger("to.owl.carousel", [j - 1, 500, true]);
				$(".category-tab").removeClass("activated");
				$(this).addClass("activated");
			});
		})(i);
	}

	var bt_tab = $(".button-tabs")
	bt_tab.on('changed.owl.carousel', function(event) {
		bt_tab.find(".owl-item").removeClass("activated");
		bt_tab.find(".owl-item.center").addClass("activated");
	})


	// Set the first tab as active
	$("#tab0").addClass("activated");

	// Tabs change when the user slides

	$(".testimonial-carousel").owlCarousel({
		onDragged: callback
	});

	function callback(event) {
		var item = event.item.index;
		var correctItem = item + 1;
		console.log(item);
		$(".category-tab").removeClass("activated");
		$("#tab" + correctItem).addClass("activated");
	}
	
	/** Header Author popup **/
	
	function authorToggleHandler(o) {
    var t = $(".about-toggle"),
        e = $(".author-close");
    $("body").toggleClass("author-popup-active"), $("body").toggleClass("overlay-enabled"), $("body").hasClass("author-popup-active") ? e.focus() : t.focus(), authorPopupAccessibility()
}

function hideAuthorPopup(o) {
    var t = $(".about-toggle"),
        e = $(".author-popup");
    $(o.target).closest(t).length || $(o.target).closest(e).length || $("body").hasClass("author-popup-active") && ($("body").removeClass("author-popup-active"), $("body").removeClass("overlay-enabled"), t.focus(), o.stopPropagation())
}

function authorPopupAccessibility() {
    var links, i, len, searchItem = document.querySelector('.author-popup'),
        fieldToggle = document.querySelector('.author-close');
    let focusableElements = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
    let firstFocusableElement = fieldToggle;
    let focusableContent = searchItem.querySelectorAll(focusableElements);
    let lastFocusableElement = focusableContent[focusableContent.length - 1];
    if (!searchItem) {
        return !1
    }
    links = searchItem.getElementsByTagName('button');
    for (i = 0, len = links.length; i < len; i++) {
        links[i].addEventListener('focus', toggleFocus, !0);
        links[i].addEventListener('blur', toggleFocus, !0)
    }

    function toggleFocus() {
        var self = this;
        while (-1 === self.className.indexOf('author-anim')) {
            if ('input' === self.tagName.toLowerCase()) {
                if (-1 !== self.className.indexOf('focus')) {
                    self.className = self.className.replace('focus', '')
                } else {
                    self.className += ' focus'
                }
            }
            self = self.parentElement
        }
    }
    document.addEventListener('keydown', function(e) {
        let isTabPressed = e.key === 'Tab' || e.keyCode === 9;
        if (!isTabPressed) {
            return
        }
        if (e.shiftKey) {
            if (document.activeElement === firstFocusableElement) {
                lastFocusableElement.focus();
                e.preventDefault()
            }
        } else {
            if (document.activeElement === lastFocusableElement) {
                firstFocusableElement.focus();
                e.preventDefault()
            }
        }
    })
}
$(document).on("click", ".about-toggle", authorToggleHandler), $(document).on("click", ".author-close", authorToggleHandler), $(document).on("click", hideAuthorPopup);
});



