$(document).ready(function() {
  var $burger = $('LABEL[for="menu-switcher"]')
    , $switcher = $('#menu-switcher')
    , $nav = $('.nav-holder')
    , $slider = $('.home-slider .swiper-wrapper > LI');

  $switcher.on('click', function() {
    $(window).outerWidth() <= 1023 ?
      $nav.css({ left: $(this).is(':checked') ? (parseInt($burger.offset().left) - 150) + 'px' : '100%' }) :
      $nav.css({ left: $(this).is(':checked') ? $burger.offset().left : '100%' });
  });

  $(window).bind('resize', function() {
    if ($switcher.is(':checked')) {
      $(window).outerWidth() <= 1023 ?
        $nav.css({ left: (parseInt($burger.offset().left) - 150) + 'px' }) :
        $nav.css({ left: $burger.offset().left });
    }
  });

  $(window).bind('scroll', function(e) {
    if ($slider.length > 0) {
      $(window).scrollTop() > $slider.height()
      ? $('.breadcumbs').css('transform', 'translateY(-100%)')
      : $('.breadcumbs').css('transform', 'translateY(0)');
    }
    else
    {
      $(window).scrollTop() + $('HEADER').height() + 32 > $('FOOTER').position().top
      ? $('.breadcumbs').css('transform', 'translateY(-100%)')
      : $('.breadcumbs').css('transform', 'translateY(0)');
    }
  });

  $('.accordion-title:not(.default-open)').on('click', function() {
    $(this).next().slideToggle().closest('.accordion-wrapper').toggleClass('opened');
  });

  $('.accordion-wrapper:first').css({ paddingTop: '50px', marginTop: '40px' });
  $('.accordion-wrapper:last').css({ paddingBottom: '50px' });

  if ($slider.length > 1) {
    new Swiper('.swiper-container', {
      direction: 'horizontal',
      slidesPerView: 1,
      pagination: '.swiper-pagination',
      paginationClickable: true,
      // autoplay: 4000,
      loop: true,
      spaceBetween: 0,
      mousewheelControl: false,
      speed: 1000
    });
  }
});

