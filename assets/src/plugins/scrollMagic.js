export function stickyNav() {
  var controller = new ScrollMagic.Controller();
  var headerHeight = $('.site-header').outerHeight();

  new ScrollMagic.Scene({
    offset: headerHeight,
  })
  .setClassToggle('.sticky-nav', 'show')
  .addTo(controller);

  new ScrollMagic.Scene({
    offset: headerHeight,
  })
  .setClassToggle('.overlay', 'fixed')
  .addTo(controller);
}
