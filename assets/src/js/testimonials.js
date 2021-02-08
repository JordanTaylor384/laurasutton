export function more() {
  $('.testimonials__more').on('click', function() {
    var last = $('.testimonials__wrap.shown');
    var next = last.next();
    next.addClass('shown');

    next.fadeIn( function() {
      if ($(".testimonials__wrap.shown").length == $(".testimonials__wrap").length) {
        $('.testimonials__more').hide();
        console.log('all loaded');
      }
    });
    
  })
}
