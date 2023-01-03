export function init() {
  // toggle main header nav
  $('.site-header__nav-toggle').on('click', function() {
    $('.overlay').toggleClass('overlay--open');
  });
  // close main header nav
  $('.overlay__close').on('click', function() {
    $('.overlay').toggleClass('overlay--open');
  });

  // // toggle parent on overlay nav item
  // $('.overlay__nav .menu li.menu-item-has-children').on('click', function() {
  //   $(this).find('.sub-menu-container').slideToggle();
  //   $(this).toggleClass('open');
  // });

  // check if current page is a child of a parent.
  // if so open the nav on load
  $('.overlay__nav .menu li.current_page_parent').find('.sub-menu-container').slideToggle();
  $('.overlay__nav .menu li.current_page_parent').toggleClass('open');

}
