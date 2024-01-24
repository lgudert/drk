(function($) {
    'use strict';
    var PUS = {};
    /*==========================================
                        :: slicknav
                  ==========================================*/
    PUS.slicknav = function() {

        $("#menu-primary-menu").slicknav({
            allowParentLinks: true,
            prependTo: "#mobile-menu-wrap",
            label: "Menu"
        });
		
		function mobileToggleHandler(o) {
        var t = $(".mobile-menu-trigger"),
            e = $(".mobile-menu-close");
        $("body").toggleClass("header-menu-active overlay-enabled"),
        $("body").hasClass("header-menu-active") ? e.focus() && $("#mobile-menu-wrap a").attr({"tabindex":"0"}) : t.focus() && $("#mobile-menu-wrap a").attr("tabindex","-1"), mobilePopupAccessibility()
        }
		
        $(".mobile-menu-trigger").on("click", function(e) {
            $(".mobile-menu-container").addClass("menu-open");
            mobileToggleHandler(e);
            e.stopPropagation();
        });

        $(".mobile-menu-close").on("click", function(e) {
            $(".mobile-menu-container").removeClass("menu-open");
            mobileToggleHandler(e);
            e.stopPropagation();
        });


        

        function hideMobilePopup(o) {
        var t = $(".mobile-menu-trigger"),
            e = $(".mobile-menu-close");
            $(o.target).closest(t).length || $(o.target).closest(e).length || $("body").hasClass("header-menu-active") && ($("body").removeClass("header-menu-active"), $("body").removeClass("overlay-enabled"), t.focus(), o.stopPropagation())
        }

        function mobilePopupAccessibility() {
        var links, i, len, searchItem = document.querySelector('.mobile-menu-container'),
        fieldToggle = document.querySelector('.mobile-menu-close');
        let focusableElements = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
        let firstFocusableElement = fieldToggle;
        let focusableContent = searchItem.querySelectorAll(focusableElements);
        let lastFocusableElement = focusableContent[focusableContent.length - 1];
        if (!searchItem) {
            return !1
        }
        links = searchItem.getElementsByTagName('button');
        console.log(links[0]);
        for (i = 0, len = links.length; i < len; i++) {
            links[i].addEventListener('focus', toggletriggerFocus, !0);
            links[i].addEventListener('blur', toggletriggerFocus, !0);
        }

        function toggletriggerFocus() {
            // console.log("why are you calling?")
            var self = this;
            while (-1 === self.className.indexOf('mobile-menu-container')) {
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
                e.preventDefault()
                lastFocusableElement.focus();
            }
        } else {
            if (document.activeElement === lastFocusableElement) {
                e.preventDefault()
                firstFocusableElement.focus();
            }
        }
    })
}

$(document).on("click", hideMobilePopup);
};
	
$(document).ready(function() {		
	PUS.slicknav();
});

// Search Popup
$(document).on('click', '.header-search-toggle', function(e) {
    $("body").addClass('header-search-active');
    $("body").addClass("overlay-enabled");
});

$(document).on('click', '.header-search-close', function(e) {
    $("body").removeClass('header-search-active');
    $("body").removeClass("overlay-enabled");
    return this;
});

// Search Popup Close
$(document).on('keyup', function(e) {
    if (e.keyCode == 27) {
		var $mob_menu = '';
        $mob_menu.removeClass("header-menu-active");
        $mob_menu.removeClass("overlay-enabled");
        $(".header-search-popup").removeClass('header-search-active');
    }
});



$(".mobi_drop").on("click", function(e) {
    e.preventDefault();
    $(this).parent().toggleClass("current");
    $(this).next().slideToggle();
});

$(".menu-toggle").click(function() {
    $(".mobile-menu").css({
        "visibility": "visible",
        "display": "block"
    });
});
$(".close-style").click(function() {
    $(".mobile-menu").css({
        "display": "none"
    });
});

//Search TRAP
    var searchTrap = function (elem) {
        let tabbable = elem.find('select, input, textarea, button, a,button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])').filter(':visible');
        let firstTabbable = tabbable.first();
        let lastTabbable = tabbable.last();
        //set focus on first input/
        $(".mobile-menu-close").focus();
        //redirect last tab to first input/
        lastTabbable.on('keydown', function (e) {
            if ((e.which === 9 && !e.shiftKey)) {
                e.preventDefault();
                firstTabbable.focus();
            }
        });
        //redirect first shift+tab to last input/
        firstTabbable.on('keydown', function (e) {
            if ((e.which === 9 && e.shiftKey)) {
                e.preventDefault();
                lastTabbable.focus();
            }
        });
    };
$(document).on('click','.header-search-toggle', function(e){
      $( "body" ).addClass( 'header-search-active' );
      $( "body" ).addClass( "overlay-enabled" );
      searchTrap($('.header-search-popup'));
    });


$("[data-delay]").each(function() {
    var anim_del = $(this).data('delay');
    $(this).css('animation-delay', anim_del);
});
$("[data-duration]").each(function() {
    var anim_dur = $(this).data('duration');
    $(this).css('animation-duration', anim_dur);
});

/* --------------------------------------
        Smooth Scroll
-------------------------------------- */


$(document).ready(function() {

// ScrollUp
$(window).on('scroll', function() {
    if ($(this).scrollTop() > 200) {
        $('.scrollup').fadeIn(500);
    } else {
        $('.scrollup').fadeOut(500);
    }
});

$('.scrollup').on('click', function() {
    $("html, body").animate({
        scrollTop: 0
    }, 600);
    return false;
});


/*
 *  make span's out of the text node and add it to the DOM
 *  fill the characters array with the span's for later  
 * 
 */
function addSpansToNode() {
    for (i = 0; i < numOfCharacters; i++) {
        var white = new RegExp(/^\s$/); // catch the whitespace
        var span = document.createElement('span');
        span.className = ('position-me');

        /*
         *  turn white spaces into &nbsp; because of
         *  display:inline-block
         */
        if (white.test(charsToAnimate.charAt(i))) {
            span.innerHTML = "&nbsp;";
        } else {
            span.innerHTML = charsToAnimate.charAt(i);
        }

        if (charsToAnimate.charAt(i) == "❤") {
            span.className = "position-me s-lovely";
        }

        animationWrapper.appendChild(span);

        // white space animation -> nope!!!
        if (!white.test(charsToAnimate.charAt(i))) {
            span.innerHTML = charsToAnimate.charAt(i) + '<span class="animate-me"><a href="https://twitter.com/CheQuery" target="_blank">' + charsToAnimate.charAt(i); + '</a></span>';
        }


    }

    characters = document.getElementsByClassName('animate-me');

    // hide the reference span
    document.getElementById("toAnimate").className = 's-hidden';
}

/*
 *  add an event listener to our character
 *  start the animation by adding the animate class
 */
function animate() {
    characters[j].addEventListener("webkitAnimationStart", listener, false);
    characters[j].addEventListener("MSAnimationStart", listener, false);
    characters[j].addEventListener("animationstart", listener, false);
    characters[j].addEventListener("oanimationstart", listener, false);

    characters[j].addEventListener("webkitAnimationEnd", listener, false);
    characters[j].addEventListener("MSAnimationEnd", listener, false);
    characters[j].addEventListener("animationend", listener, false);
    characters[j].addEventListener("oanimationend", listener, false);

    characters[j].className = "animate-me s-animating";
}

/*
 *  when the animation is finished get rid of the animate class
 *  increase the iterator so the animation is ready for the next
 *  character
 */
function listener(e) {
    switch (e.type) {
        case "webkitAnimationEnd":
        case "MSAnimationEnd":
        case "animationend":
        case "oanimationend":
            characters[j].className = "animate-me";

            j++;

            if (j >= characters.length) {
                j = 0;
                // break;  // uncomment if you want to animate only once
            }

            animate();
    }
}


if ($(".is-sticky-on").length > 0) {
    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= 250) {
            $('.is-sticky-on').addClass('is-sticky-menu');
        } else {
            $('.is-sticky-on').removeClass('is-sticky-menu');
        }
    });
}


$(".service-section .service-box,.funfact-section .funfact-box,.team-section .team-member ,.post-section .post-item,.sponsor-image,.contact-page .contact-item-2,.info-section .info-box").on({
    "focus mouseenter": function() {
        $(".service-section .service-box,.funfact-section .funfact-box,.team-section .team-member ,.post-section .post-item,.sponsor-image,.contact-page .contact-item-2,.info-section .info-box").removeClass("active");
        $(this).addClass("active");
    }
});

$(document).ready(function() {
    if ($("section").hasClass('breadcrumb-effect-active')) {
        var canvasDiv = document.getElementById('breadcrumb-section');
        var options = {
            background: '#ecf0f1',
            density: 'low',
            speed: 'medium',
            interactive: true,
            mixedSizes: false,
            boidColours: ["#777"]
        };
        var boidsCanvas = new BoidsCanvas(canvasDiv, options);

        $("#breadcrumb-section canvas").css({
            "position": "absolute",
            "z-index": "unset",
            "inset": "0"
        });
        $("#breadcrumb-section > div:last-of-type").css({
            "position": "static",
            "background": "none",
            "z-index": "unset"
        });
    }
	
	function footerContent() {
		let plus_icon = $("<span class='collaps'></span>").html("<i class='fa fa-plus-circle'></i>");
		let minus_icon = $("<span class='collapsd'></span>").html("<i class='fa fa-minus-circle'></i>");
		$(".footer_content_wrap").append(plus_icon, minus_icon);
		$(".footer_content_wrap > span").click(function(){
			if(!$(this).parents('.footer_content_wrap').hasClass('active')){
				$(this).parents('.footer_content_wrap').addClass('active');
				// $(this).parent().children('div,ul,form,img').slideDown();
				$(this).parent().find('.widget-title').next().slideDown();
				$(this).parent().find('.mejs-audio').slideDown();
				$(this).parent().children(".widget-contact").slideDown();
			} else {
				$(this).parents('.footer_content_wrap').removeClass('active');		
				// $(this).parent().children('div,ul,form,img').slideUp();
				$(this).parent().find('.widget-title').next().slideUp();
				$(this).parent().find('.mejs-audio').slideUp();
				$(this).parent().children(".widget-contact").slideUp();
			}
		});
		
		$(window).resize(function(){
		if($(this).width() > 767){
			$(".footer_content_wrap > span").parent().find('.widget-title').next().slideDown();
			$(".footer_content_wrap > span").parent().find('.mejs-audio').slideDown();
			$(".footer_content_wrap > span").parent().children(".widget-contact").slideDown();
			$(".footer_content_wrap > span").css("visibility","hidden");
			}else {
			$(".footer_content_wrap > span").parent().find('.widget-title').next().slideUp();
			$(".footer_content_wrap > span").parent().find('.mejs-audio').slideUp();
			$(".footer_content_wrap > span").parent().children(".widget-contact").slideUp();
			$(".footer_content_wrap > span").css("visibility","visible");
			$('.footer_content_wrap').removeClass('active');
			}
		});
	}
	footerContent();
});
});

})(window.jQuery);