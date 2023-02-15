// imports
import $ from 'jquery';
window.$ = window.jQuery = $;

import * as ux from './js/ux-fixes.js';
import * as swiper from './plugins/swiper.js';
import * as autosize from './plugins/autosize.js';
import * as overlay from './js/overlay.js';
import * as modals from './js/modals.js';
import * as scrollmagic from './plugins/ScrollMagic.js';
import * as testimonials from './js/testimonials.js';
import * as selectric from './plugins/selectric.js';
import * as accordions from './js/accordions.js';

// custom js
$(function () {

  $(window).on('resize', function() {
    // swiper.init();
    // ux.swiperBulletsTabbing();
    // ux.swiperArrowsTabbing();
  });

  // ux.skiplink();
  // ux.removeTabIndexes();
  // scrollmagic.stickyNav();
  // swiper.init();
  autosize.init();
  swiper.testimonials();
  overlay.init();
  selectric.init();
  accordions.init();
  modals.block();
  // testimonials.more();
  // ux.swiperBulletsTabbing();
  // ux.swiperArrowsTabbing();
});

// styles
import 'normalize.css';
import './scss/admin.scss';
import './scss/screen.scss';
