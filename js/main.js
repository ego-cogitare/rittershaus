$(document).ready(function() {
  var $burger = $('LABEL[for="menu-switcher"]')
    , $switcher = $('#menu-switcher')
    , $nav = $('.nav-holder')
    , $menu = $('.menu-holder')
    , $menuOpen = $('LABEL[for="menu-opener"]')
    , $menuSwitcher = $('#menu-opener')
    , $menuClose = $('.menu-holder > .close')
    , $slider = $('.home-slider .swiper-wrapper > LI');

  $switcher.on('click', function() {
    $(window).outerWidth() <= 1023 ?
      $nav.css({
        left: $(this).is(':checked') ? (parseInt($burger.offset().left) - 190) + 'px' : '100%',
        width: '275px'
      }) :
      $nav.css({
        left: $(this).is(':checked') ? $burger.offset().left : '100%',
        width: $(window).outerWidth() - $burger.offset().left
      });
  });

  $menuOpen.on('click', function() {
    if ($menuSwitcher.is(':checked')) {
      $menu.fadeOut(500, function() {
        $('BODY').removeClass('no-scroll');
      });
    }
    else
    {
      $menu.fadeTo(500, 1);
      $('BODY').addClass('no-scroll');
    }
  });

  $(window).bind('resize', function() {
    if ($switcher.is(':checked')) {
      $(window).outerWidth() <= 1023 ?
        $nav.css({
          left: (parseInt($burger.offset().left) - 190) + 'px',
          width: '275px'
        }) :
        $nav.css({
          left: $burger.offset().left,
          width: $(window).outerWidth() - $burger.offset().left
        });
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

  $('.accordion-wrapper').each(function() {
    if (!$(this).prev().hasClass('accordion-wrapper')) {
      $(this).css({ paddingTop: '70px', marginTop: '70px' });
    }
    if (!$(this).next().hasClass('accordion-wrapper')) {
      $(this).css({ paddingBottom: '70px' })
        .find('.accordion-content').css({ paddingBottom: '0' });
    }
  });

  if ($slider.length > 1) {
    new Swiper('.swiper-container', {
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
  }
});
