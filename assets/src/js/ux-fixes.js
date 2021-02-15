/**
* File skip-link-focus-fix.js.
*
* Helps with accessibility for keyboard only users.
*
* Learn more: https://git.io/vWdr2
*/
export function skiplink() {
  var isIe = /(trident|msie)/i.test( navigator.userAgent );

  if ( isIe && document.getElementById && window.addEventListener ) {
    window.addEventListener( 'hashchange', function() {
      var id = location.hash.substring( 1 ),
      element;

      if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
        return;
      }

      element = document.getElementById( id );

      if ( element ) {
        if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
          element.tabIndex = -1;
        }

        element.focus();
      }
    }, false );
  }
}

export function noTabbing() {
  $('.noindex').attr('tabindex', '-1');
}

export function swiperBulletsTabbing() {
  $('.swiper-pagination-bullet').each(function (index) {
    var bullet = $(this);
    bullet.attr('id', (index + 1));
  });

  $('.swiper-pagination').each(function (){
    $('.swiper-pagination-bullet').attr('tabindex', 0);
    $('.swiper-pagination-bullet').on('keydown', function (event){
      if(event.keyCode == '13'){
        var carousel = document.querySelector('.swiper-container').swiper;
        var slideID = $(this).attr('id')
        carousel.slideTo(slideID-1);
      }
    })
  });
}

export function swiperArrowsTabbing() {
  var arrows = $('.swiper-button-next:not(.swiper-button-disabled), .swiper-button-prev:not(.swiper-button-disabled)');
  arrows.attr('tabindex', 0);

  $('.swiper-button-next:not(.swiper-button-disabled), .swiper-button-prev:not(.swiper-button-disabled)').on('keydown', function (event) {
    if (event.keyCode == '13') {
      var carousel = document.querySelector('.swiper-container').swiper;
      var slideID = $(this).attr('id')
      if ($(this).hasClass('swiper-button-next')) {
        carousel.slideNext();
      } else if ($(this).hasClass('swiper-button-prev')) {
        carousel.slidePrev();
      }
    }
  });
}
