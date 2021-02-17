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

export function removeTabIndexes() {
  // remove tabindex from elements with .noindex class
  $('.noindex').attr('tabindex', '-1');
}

export function swiperBulletsTabbing() {
  // add indexes to dots, from below functions
  $('.swiper-pagination-bullet').each(function (index) {
    var bullet = $(this);
    bullet.attr('id', (index + 1));
    var total = $('.swiper-pagination-bullet').length;
    bullet.attr('aria-label', 'Video ' + (index + 1) + ' of ' + total);
  });

  $('.swiper-pagination').each(function () {
    // set tabindex to follow page order
    $('.swiper-pagination-bullet').attr('tabindex', 0);
    // on enter press of dots, slide to slideID
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
  // remove tabindex from disabled buttons
  $('.swiper-button-next:not(.swiper-button-disabled), .swiper-button-prev:not(.swiper-button-disabled)').attr('tabindex', 0);
  // added labels to not disabled buttons
  $('.swiper-button-next:not(.swiper-button-disabled)').attr('aria-label', 'Next video');
  $('.swiper-button-prev:not(.swiper-button-disabled)').attr('aria-label', 'Previous video');
  // remove labels to disabled buttons
  $('.swiper-button-disabled').attr('aria-label', '');
  // on enter press of arrows, slide to next/prev
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
