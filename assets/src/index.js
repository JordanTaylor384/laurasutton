// imports
import $ from 'jquery';
window.$ = window.jQuery = $;

import * as skiplink from './js/skip-link-focus-fix.js';
import * as swiper from './plugins/swiper.js';
import * as autosize from './plugins/autosize.js';
import * as welcome from './js/welcome.js';
import * as overlay from './js/overlay.js';
import * as scrollmagic from './plugins/ScrollMagic.js';
import * as testimonials from './js/testimonials.js';

// custom js
$(function () {

  // $('.cookie-notification').cookieBar({
  //   closeButton : '.close'
  // });

  $(window).on('load resize', function() {
    swiper.init();
  });

  skiplink.init();
  scrollmagic.stickyNav();
  swiper.init();
  autosize.init();
  welcome.init();
  overlay.init();
  testimonials.more();

});

// styles
import 'normalize.css';
import './scss/admin.scss';
import './scss/screen.scss';
