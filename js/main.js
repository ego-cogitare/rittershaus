var slider = new Swiper('.swiper-container', {
  direction: 'horizontal',
  slidesPerView: 1,
  pagination: '.swiper-pagination',
  paginationClickable: true,
  autoplay: 4000,
  loop: true,
  spaceBetween: 0,
  mousewheelControl: false,
  speed: 1000
});

$(document).ready(function() {
  var $burger = $('LABEL[for="menu-switcher"]')
    , $switcher = $('#menu-switcher')
    , $nav = $('.nav-holder');

  $switcher.on('click', function() {
      $nav.css({ left: $(this).is(':checked')
        ? $burger.offset().left : '100%' });
  });
  $(window).bind('resize', function() {
    if ($switcher.is(':checked')) {
      $nav.css({ left: $burger.offset().left });
    }
  });
  
  $('.accordion-title').on('click', function() {
    $(this).next().slideToggle().closest('.accordion-item').toggleClass('opened');
  });
});
