export function init() {
  $('.module__accordions__item').on('click', function() {
    var index = $(this).data('index');
    console.log(index);
    $(this).toggleClass('module__accordions__item--active');
    $(this).find('.module__accordions__item__body').slideToggle();
  });
}
