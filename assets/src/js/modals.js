export function block() {
  $('.module__content-block__open').on('click', function() {
    var index = $(this).data('index');
    console.log(index);
    $('.module__content-block__modal').toggleClass('module__content-block__modal--active');
  });


  $('.module__content-block__modal__close').on('click', function() {
    $('.module__content-block__modal').toggleClass('module__content-block__modal--active');
  });
}
