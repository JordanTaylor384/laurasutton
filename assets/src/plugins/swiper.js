import Swiper, { Autoplay, Navigation, Pagination } from 'swiper';
import SwiperCore, { EffectFade } from 'swiper';
Swiper.use([Autoplay]);
Swiper.use([Navigation, Pagination]);
SwiperCore.use([EffectFade]);
// import Swiper styles
import 'swiper/swiper-bundle.css';

export function init() {
  var testimonials = new Swiper ('.carousel.module .swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    autoHeight: true,
    // autoplay: {
    //   delay: 8000,
    // },
    // effect: 'fade',
    speed: 1000,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + '</span>';
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}
