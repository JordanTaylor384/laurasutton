export function init() {
  // toggle main header nav
  $('.site-header .nav-toggle').on('click', function() {
    $('.overlay').toggleClass('show');
  });
  // close main header nav
  $('.overlay__close').on('click', function() {
    $('.overlay').toggleClass('show');
  });


  // toggle sticky nav
  $('.sticky-nav .nav-toggle').on('click', function() {
    $('.overlay').toggleClass('show');
  });
  // // close sticky nav
  // $('.overlay__close').on('click', function() {
  //   $('.overlay').toggleClass('show');
  // });
}
