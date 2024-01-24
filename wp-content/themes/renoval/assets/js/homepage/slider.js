jQuery(function($) {	

	// Main Slider
      var owlMainSlider = $('.home-slider');
      owlMainSlider.owlCarousel({
       
          items: 1,
          autoplay: true,
          autoplayTimeout: 5000,
          margin: 0,
          loop: true,
          dots: true,
          nav: true,
          navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
          singleItem: true,
          transitionStyle: "fade",
          touchDrag: true,
          mouseDrag: true,
          responsive: {
              0: {
                  nav: false
              },
              768: {
                  nav: true
              },
              992: {
                  nav: true
              }
          }
      });
     
      function owlHomeThumb() {
          $('.owl-item').removeClass('prev next');
          var currentSlide = $('.home-slider .owl-item.active');
          currentSlide.next('.owl-item').addClass('next');
          currentSlide.prev('.owl-item').addClass('prev');
          var nextSlideImg = $('.home-slider .owl-item.next').find('.item img').attr('data-img-url');
          var prevSlideImg = $('.home-slider .owl-item.prev').find('.item img').attr('data-img-url');
          $('.home-slider .owl-nav .owl-prev').css({
              backgroundImage: 'url(' + prevSlideImg + ')'
          });
          $('.home-slider .owl-nav .owl-next').css({
              backgroundImage: 'url(' + nextSlideImg + ')'
          });
      }
      owlMainSlider.on('translated.owl.carousel', function() {
          owlHomeThumb();
      });

});