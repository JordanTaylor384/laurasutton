import Swiper, { Autoplay, Navigation, Pagination } from 'swiper';
import SwiperCore, { EffectFade } from 'swiper';
Swiper.use([Autoplay]);
Swiper.use([Navigation, Pagination]);
SwiperCore.use([EffectFade]);
// import Swiper styles
import 'swiper/swiper-bundle.css';

import * as ux from '../js/ux-fixes.js';


export function init() {
  var carousel = new Swiper ('.module__testimonials .swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    autoHeight: true,
    autoplay: {
      delay: 8000,
    },
    effect: 'fade',
    speed: 1000,
    allowTouchMove: false,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + '<span>' + (index + 1) + '</span>' + '</span>';
      },
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  carousel.on('slideChange', function () {
    ux.swiperArrowsTabbing();
    console.log('slide changed');
  });
}
