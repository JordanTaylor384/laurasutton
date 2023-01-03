import 'selectric/public/jquery.selectric.min.js';
import 'selectric/public/selectric.css';
// import '../assets/src/plugins/selectric/selectric.css';

export function init() {
  // converts all select elements to div/ul for styling
  // see http://selectric.js.org/demo.html
  $('select').selectric();

  function updateButton() {
    var selectedIndex = $('.selectric-items .selected').data('index');
    // selectedIndex = selectedIndex - 1;
    console.log(selectedIndex);
    var linkToAdd = $('.selectric-nav').find('option.option[data-index="' + selectedIndex + '"]').data('link');
    console.log(linkToAdd);
    window.location=linkToAdd;
  }

  $('.selectric-nav.follow-link').on('change', function() {
    updateButton();
  });
}
