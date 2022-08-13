$(function () {
  $(".slider").slick({
    arrows: true,
    adaptiveHeight: true,
    prevArrow: '<img src="wp-content/themes/minami-clinic/images/common/arrow-left.svg" class="slide-arrow prev-arrow" alt="arrow">',
    nextArrow: '<img src="wp-content/themes/minami-clinic/images/common/arrow-right.svg" class="slide-arrow next-arrow" alt="arrow">',
    autoplay: true,
    autoplaySpeed: 3000,
    centerMode: false,
    centerPadding: "0",
    dots: true,
    dotsClass: "slide-dots",
    fade: true,
    slidesToShow: 1,
    speed: 800,
  });
});

$(function () {
  $(".slider_staff").slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    dots: false,
    slidesToShow: 3,
    cssEase: "linear",
    speed: 7000,
    centerMode: true,
    centerPadding: "12%",
    pauseOnFocus: false, 
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 500, 
        settings: {
        slidesToShow: 1,
        swipe: false,
        
        },
      },
    ],
  });
});

$(".drawer_button").click(function () {
	$(this).toggleClass('is_active');
  $("body").toggleClass('no-scroll');
	$(".drawer_menu").toggleClass('is_active');
  
});

$(function() {
  const pagetop = $('#page_top');
  pagetop.hide();
  $(window).scroll(function() {
    if($(this).scrollTop() > 200) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function() {
    $('body,html').animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });
});



 
