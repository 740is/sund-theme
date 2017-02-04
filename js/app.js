// Slick Slider random tweak
$.fn.randomize = function (selector) {
    var $elems = selector ? $(this).find(selector) : $(this).children(),
        $parents = $elems.parent();

    $parents.each(function () {
        $(this).children(selector).sort(function (childA, childB) {
            // * Prevent last slide from being reordered
            if($(childB).index() !== $(this).children(selector).length) {
                return Math.round(Math.random()) - 0.5;
            }
        }.bind(this)).detach().appendTo(this);
    });

    return this;
};

//$('.hero-image').randomize().slick();
$('.ads-banners-overflow-hidden').randomize().slick();
$('.ads-cube-one-overflow-hidden').randomize().slick();
$('.ads-cube-two-overflow-hidden').randomize().slick();


// Remove WPML $nbsp under flags
(function($){
  $("#lang_sel_list ul li a").each(function() {
    var $this = $(this);
    $this.html($this.html().replace(/&nbsp;/g, ''));
  });
})(jQuery);

var inputFocus = document.getElementById('s');

document.getElementById('magnifier-tool').addEventListener('click', function() {
  console.log('Magnifier tool clicked');
  $('#nav-search-form').addClass('display-search-form').removeClass('close-search-form');
  inputFocus.focus();
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


// Slick Slider hero image adjustments
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

// Slick Slider ad banners adjustments
$(document).ready(function(){
  $('.ads-banners-overflow-hidden').slick({
    ltr: true,
    autoplay: false,
    dots: false,
    infinite: true,
    autoplaySpeed: 7000
  });
});

// Slick Slider ad cubes 1 adjustments
$(document).ready(function(){
  $('.ads-cube-one-overflow-hidden').slick();
});

// Slick Slider ad cubes 2 adjustments
$(document).ready(function(){
  $('.ads-cube-two-overflow-hidden').slick();
});

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

// BEGIN: ACF Google Map JavaScript

(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {

  // var
  var $markers = $el.find('.marker');


  // vars
  var args = {
    zoom		: 16,
    center		: new google.maps.LatLng(0, 0),
    mapTypeId	: google.maps.MapTypeId.ROADMAP
  };


  // create map
  var map = new google.maps.Map( $el[0], args);


  // add a markers reference
  map.markers = [];


  // add markers
  $markers.each(function(){

      add_marker( $(this), map );

  });


  // center map
  center_map( map );


  // return
  return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

  // var
  var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

  // create marker
  var marker = new google.maps.Marker({
    position	: latlng,
    map			: map
  });

  // add to array
  map.markers.push( marker );

  // if marker contains HTML, add it to an infoWindow
  if( $marker.html() )
  {
    // create info window
    var infowindow = new google.maps.InfoWindow({
      content		: $marker.html()
    });

    // show info window when marker is clicked
    google.maps.event.addListener(marker, 'click', function() {

      infowindow.open( map, marker );

    });
  }

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

  // vars
  var bounds = new google.maps.LatLngBounds();

  // loop through all markers and create bounds
  $.each( map.markers, function( i, marker ){

    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

    bounds.extend( latlng );

  });

  // only 1 marker?
  if( map.markers.length == 1 )
  {
    // set center of map
      map.setCenter( bounds.getCenter() );
      map.setZoom( 16 );
  }
  else
  {
    // fit to bounds
    map.fitBounds( bounds );
  }

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

  $('.acf-map').each(function(){

    // create map
    map = new_map( $(this) );

  });

});

})(jQuery);


// END: ACF Google Map JavaScript
