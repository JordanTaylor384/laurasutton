import Swiper, { Autoplay, Navigation, Pagination } from 'swiper';
import SwiperCore, { EffectFade } from 'swiper';
Swiper.use([Autoplay]);
Swiper.use([Navigation, Pagination]);
SwiperCore.use([EffectFade]);
// import Swiper styles
import 'swiper/swiper-bundle.css';

import * as ux from '../js/ux-fixes.js';


export function testimonials() {
  if ($('.module__testimonials').length > 0) {
    $('.module__testimonials .swiper').each(function (index) {
      var swiper = new Swiper($(this)[0], {
        // width: 270,
        slidesPerView: 1,
        spaceBetween: 30,
        autoHeight: true,
        // effect: 'fade',
        speed: 1000,
        allowTouchMove: true,
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true,
        },
      });
    });
  }

  // swiper.on('slideChange', function () {
  //   ux.swiperArrowsTabbing();
  //   console.log('slide changed');
  // });
}
