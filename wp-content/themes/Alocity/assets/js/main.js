$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
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

// //menu drop
// $(document).ready(function () {
//   $('.navbar .dropdown').hover(function () {
//     $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
//   }, function () {
//     $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
//   });
// });




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


// $(window).scroll(function (event) {
//   var scroll = $(window).scrollTop();
//   var position = $('#main-access__nav').scrollTop()

//   if (scroll >= 1000) {
//     $('.main-access__nav').addClass('fixed--two');
//   }
// });