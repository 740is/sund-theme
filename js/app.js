// Remove WPML nbsp under flags
(function($){
  $("#lang_sel_list ul li a").each(function() {
    var $this = $(this);
    $this.html($this.html().replace(/&nbsp;/g, ''));
  });
})(jQuery);

document.getElementById('magnifier-tool').addEventListener('click', function() {
  $('#nav-search-form').addClass('display-search-form').removeClass('close-search-form');
});

document.getElementById('nav-close-icon').addEventListener('click', function() {
  $('#nav-search-form').addClass('close-search-form').removeClass('display-search-form');
});

// Event for menu opening, stripes will turn into X
document.getElementById('menu-button').addEventListener('click', function() {
  $('#mobile-menu').slideToggle(700);
  if( $('#menu-button').children().attr('id') === 'menu-closed' ) {
    $('#upper-stripe').toggleClass('upper-stripe-close');
    $('#lower-stripe').toggleClass('lower-stripe-close');//, function() {
      $('#upper-stripe').toggleClass('rotate-right', 300);
      $('#lower-stripe').toggleClass('rotate-left', 300, function() {
        $('#middle-stripe').toggleClass('middle-stripe-invisible');
      });
    //});
    $('#menu-button').children().attr('id', 'menu-open');
  } else {

    $('#upper-stripe').toggleClass('rotate-right', 300);
    $('#lower-stripe').toggleClass('rotate-left', 300, function() {
      $('#middle-stripe').toggleClass('middle-stripe-invisible', function() {
        $('#upper-stripe').toggleClass('upper-stripe-close');
        $('#lower-stripe').toggleClass('lower-stripe-close');
      });
    });
    $('#menu-button').children().attr('id', 'menu-closed');
  }
});

// Slick Slider adjustments
$(document).ready(function(){
  $('.hero-image').slick({
    autoplay: true,
    dots: false,
    infinite: true,
    speed: 3000,
    fade: true,
    cssEase: 'ease'
  });
});
