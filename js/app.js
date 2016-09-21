document.getElementById('magnifier-tool').addEventListener('click', function() {
  $('#nav-search-form').addClass('display-search-form').removeClass('close-search-form');
});

document.getElementById('nav-close-icon').addEventListener('click', function() {
  $('#nav-search-form').addClass('close-search-form').removeClass('display-search-form');
});

document.getElementById('menu-button').addEventListener('click', function() {
  $('#mobile-menu').slideToggle(500);
});
