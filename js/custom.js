// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
  $("a.page-scroll").bind("click", function(event) {
    var $anchor = $(this);
    $("html, body").stop().animate({
      scrollTop: $($anchor.attr("href")).offset().top
    }, 1500, "easeInOutExpo");
    event.preventDefault();
  });
});

//Show scrol-to-top button when scrolled down
$(window).scroll(function(){
  if ($(window).scrollTop() > 1000) {
    $(".scrollToTop").fadeIn(800);
  } else {
    $(".scrollToTop").fadeOut(800);
  }
});

//Click for scroll
$(".scrollToTop").click(function(){
  $("body, html").animate({scrollTop : 0}, 800);
  return false;
});


//Sticky navbar on scroll
( function( window ) {

'use strict';



function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}


var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );

var cbpAnimatedHeader = (function() {

	var docElem = document.documentElement,
		header = document.querySelector( '.nav_main' ),
		didScroll = false,
		changeHeaderOn = 300;

	function init() {
		window.addEventListener( 'scroll', function( event ) {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 250 );
			}
		}, false );
	}

	function scrollPage() {
		var sy = scrollY();
		if ( sy >= changeHeaderOn ) {
			classie.add( header, 'navbar-shrink' );
		}
		else {
			classie.remove( header, 'navbar-shrink' );
		}
		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	init();

})();

//SET INFO BOXES TO EQUAL HEIGHT
$(document).ready(function(){

  var doc_width = $(document).width();
  var max_ib = 0;

  $(".home #services .info_box .content_holder").each(function() {
    if($(this).height() > max_ib) {
      max_ib = $(this).height();
    }
  });

  $(window).resize(function() {

    if (doc_width >= 576) {

      $(".home #services .info_box .content_holder").each(function() {
        $(this).height(max_ib);
      });

    }

  }).resize();

});

//PROJECT SLIDER
$(".project_slider").slick({
  dots: true,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  autoplay: true,
  centerMode: true,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});
