$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})


var div_top = $('#main-access__nav').offset().top;
var div_tes = $('.last-section').offset().top;
var div_first = $('#main-access__first').offset().top;

$(window).scroll(function () {
  var window_top = $(window).scrollTop() - 0;
  if (window_top > div_top) {
    if (!$('#main-access__nav').is('.sticky')) {
      $('#main-access__nav').addClass('sticky');
      // $('#main-access__nav').addClass('container');
    }
  } else {
    $('#main-access__nav').removeClass('sticky');
    // $('#main-access__nav').removeClass('container');
  }
  if (window_top >= div_tes) {
    $('#main-access__nav').addClass('opacity');
  } else {
    $('#main-access__nav').removeClass('opacity');
  }

  if (window_top > div_first) {
    if (!$('#main-access__nav').is('.sticky')) {
      $('#main-access__nav').addClass('sticky');
      // $('#main-access__nav').addClass('container');
    }
  } else {
    $('#main-access__nav').removeClass('sticky');
    // $('#main-access__nav').removeClass('container');
  }
});

var div_top = $('#main-access__fisrt').offset().top;
var div_tes = $('.last-section').offset().top;





$('.nav-pills .nav-link').click(function () {
  $('.main-access__boxcheck').removeClass('active');
  $(this).find('.main-access__boxcheck').addClass('active');
})




// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 0)) {
    $('.navbar-fixed-js').addClass('fixed');
    $('.nav-link').addClass('fixed-color');
    $('.nav-top__header').addClass('nav-top__header--detele');
    $('.hamburger-inner').addClass('js-hamburger');
    $("#iso").addClass('img-size').attr('src', 'assets/img/Logo_CM.png').removeClass('scroll-up');

  } else {
    $('.navbar-fixed-js').removeClass('fixed');
    $('.nav-link').removeClass('fixed-color');
    $('.nav-top__header').removeClass('nav-top__header--detele');
    $('.hamburger-inner').removeClass('js-hamburger');
    $("#iso").removeClass('img-size').attr('src', 'assets/img/logo-color.png').removeClass('scroll-up');

  }
});


// menu hambuger


$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")
    $('.navbar-fixed-js').addClass('fixed');
    $('.hamburger-inner').addClass('js-hamburger');
    $("#iso").addClass('img-size').attr('src', 'assets/img/Logo_CM.png').removeClass('scroll-up');
    $('.nav-link').addClass('fixed-color');
  } else {
    $(this).removeClass("is-active")
    if ($(document).scrollTop() <= 70 && ($(window).width() >= 0)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
      $("#iso").removeClass('img-size').attr('src', 'assets/img/logo-color.png').removeClass('scroll-up');
      $('.nav-link').removeClass('fixed-color');

    }
  }
});

// Font
$(document).ready(function () {
  WebFontConfig = {
    google: {
      families: ['Poppins:300,400,500,600,700,800,900']
    }
  };
  (function () {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
});